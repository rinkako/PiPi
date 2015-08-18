using System;
using System.Collections.Generic;
using System.Text;
using System.IO;

namespace Pipi
{
    public class Core
    {
        // 初始化参数
        public void Init(double lower, double upper)
        {
            Table.threshold = lower;
            Table.cynthia = upper;
        }
        // 读入名单
        public void ReadPerson(string fname)
        {
            myStream.Clear();
            StreamReader sr = new StreamReader(fname, Encoding.UTF8);
            string line;
            while ((line = sr.ReadLine()) != null)
            {
                string[] attr = line.Split(',');
                Person p = new Person();
                p.name = attr[0];
                switch(attr[1])
                {
                    case "A":  p.groupType = GroupType.A; break;
                    case "B":  p.groupType = GroupType.B; break;
                    case "C":  p.groupType = GroupType.C; break;
                    case "N":  p.groupType = GroupType.N; break;
                }
                for (int i = 2; i < 43; i++)
                {
                    if (attr[i] == "1")
                    {
                        p.validTimePeriod.Add((TimePeriod)i - 2);
                    }
                }
                myStream.pstream.Add(p);
            }
        }

        // 检查可行性
        public bool isValuable(List<Cell> iproc)
        {
            foreach (Cell c in iproc)
            {
                if (c.cid < TimePeriod.SAT1 &&
                    c.currentList.Count != Table.timeUpperbound[(int)c.cid % 7])
                {
                    return false;
                }
                if (c.cid >= TimePeriod.SAT1 &&
                    c.currentList.Count != Table.weekendPersonbound[(int)(c.cid - TimePeriod.SAT1) % 3])
                {
                    return false;
                }
            }
            return true;
        }

        // 划分组别
        public void Partition()
        {
            List<Person> noc = new List<Person>();
            List<Person> aoc = new List<Person>();
            List<Person> coc = new List<Person>();
            int curA = 0, curB = 0;
            foreach (Person p in myStream.pstream)
            {
                switch (p.groupType)
                {
                    case GroupType.N:
                        noc.Add(p);
                        foreach (TimePeriod tp in p.validTimePeriod)
                        {
                            if (tp == TimePeriod.MON1 || tp == TimePeriod.WED1 || tp == TimePeriod.FRI1)
                            {
                                p.Aweight++;
                            }
                            else if (tp == TimePeriod.THU1 || tp == TimePeriod.TUE1)
                            {
                                p.Bweight++;
                            }
                        }
                        break;
                    case GroupType.A:
                        aoc.Add(p);
                        curA++;
                        break;
                    case GroupType.B:
                        aoc.Add(p);
                        curB++;
                        break;
                    case GroupType.C:
                        coc.Add(p);
                        break;
                    default:
                        break;
                }
            }
            // 分割AB组
            int counterA = curA, counterB = curB;
            noc.Sort((x, y) => 
            {
                if (x.validTimePeriod.Count < y.validTimePeriod.Count) return -1;
                else if (x.validTimePeriod.Count == y.validTimePeriod.Count) {
                    if (x.Aweight == 0 && y.Aweight == 0 && (x.Bweight > y.Bweight)) return -1;
                    else if (x.Bweight == 0 && y.Bweight == 0 && (x.Aweight > y.Aweight)) return -1;
                    else return 0;
                }
                else if (x.validTimePeriod.Count > y.validTimePeriod.Count) return 1;
                return 0;
            });
            foreach (Person pp in noc)
            {
                if (pp.Aweight <= pp.Bweight)
                {
                    if (counterA < 21)
                    {
                        counterA++;
                        pp.groupType = GroupType.A;
                    }
                    else
                    {
                        pp.groupType = GroupType.B;
                    }
                }
                else
                {
                    if (counterB < 21)
                    {
                        counterB++;
                        pp.groupType = GroupType.B;
                    }
                    else
                    {
                        pp.groupType = GroupType.A;
                    }
                }
            }
            // 建立新的名单
            myStream.Clear();

            foreach (Person p in aoc) myStream.pstream.Add(p);
            foreach (Person p in noc) myStream.pstream.Add(p);
            foreach (Person p in coc) myStream.pstream.Add(p);

            // 更新基础工时
            foreach (Person p in myStream.pstream)
            {
                if (p.groupType == GroupType.A)
                {
                    p.currentTime = 8.5f;
                }
                else if (p.groupType == GroupType.B)
                {
                    p.currentTime = 6.5f;
                }
                else
                {
                    p.currentTime = 0.0f;
                }
            }
            // 填入空余时间表
            this.InitTable();
        }

        // 填入空余时间表
        public void InitTable()
        {
            myTable = new Table(myStream);
        }

        // 核心算法：寻找排班的解
        public string Dash(out string pt, out bool vl)
        {
            // 获得一份排班时间表的拷贝
            List<Cell> proc = new List<Cell>();
            for (int i = 0; i < myTable.iTable.Count; i++)
            {
                for (int j = 0; j < myTable.iTable[i].Count; j++)
                {
                    proc.Add(myTable.iTable[i][j]);
                }
            }
            // 将格子从可用人数从小到大排序
            proc.Sort((x, y) =>
            {
                if (x.candidate.Count - x.upperbound < y.candidate.Count - y.upperbound)
                {
                    return -1;
                }
                else if ((x.candidate.Count - x.upperbound == y.candidate.Count - y.upperbound) &&
                    x.candidate.Count < y.candidate.Count)
                {
                    return -1;
                }
                else if (x.candidate.Count - x.upperbound > y.candidate.Count - y.upperbound)
                {
                    return 1;
                }
                else
                {
                    return 0;
                }
            });
            // 迭代搜索解
            foreach (Cell c in proc)
            {
                // 对每个格子的候选人做排序
                c.candidate.Sort((x, y) =>
                {
                    // 0：如果此人已满直接逆向调整
                    if (x.isOK() == true) {
                        return 1;
                    }
                    // 1：优先排可用时间少的人
                    if (x.validTimePeriod.Count < y.validTimePeriod.Count)
                    {
                        return -1;
                    }
                    else if (x.validTimePeriod.Count == y.validTimePeriod.Count)
                    {
                        // 2：优先排已有时间少的人 
                        if (x.currentTime < y.currentTime)
                        {
                            return -1;
                        }
                        else if (x.currentTime == y.currentTime)
                        {
                            // 3：优先排B组
                            if (x.groupType == GroupType.B && y.groupType != GroupType.B)
                            {
                                return -1;
                            }
                            // 4：优先排A组
                            else if (x.groupType == GroupType.A && y.groupType != GroupType.A)
                            {
                                return -1;
                            }
                            // 5：最后再考虑C组，但不改变顺序
                            else
                            {
                                return 0;
                            }
                        }
                        // 逆向调整
                        else
                        {
                            return 1;
                        }
                    }
                    // 逆向调整
                    else
                    {
                        return 1;
                    }
                });
                // 标记并更新
                if ((int)c.cid % 7 == 0 && c.cid < TimePeriod.SAT1)
                {
                    // A不行
                    if (((int)c.cid / 7) % 2 == 0)
                    {
                        int encounter = 0;
                        for (int i = 0; i < c.candidate.Count; i++)
                        {
                            if (c.candidate[i].isOK() != true && c.candidate[i].groupType != GroupType.A)
                            {
                                c.candidate[i].currentTime += Table.reallytimeUpperbound[(int)c.cid % 7];
                                c.currentList.Add(c.candidate[i]);
                                encounter++;
                            }
                            if (encounter >= c.upperbound)
                            {
                                break;
                            }
                        }
                    }
                    // B不行
                    else
                    {
                        int encounter = 0;
                        for (int i = 0; i < c.candidate.Count; i++)
                        {
                            if (c.candidate[i].isOK() != true && c.candidate[i].groupType != GroupType.B)
                            {
                                c.candidate[i].currentTime += Table.reallytimeUpperbound[(int)c.cid % 7];
                                c.currentList.Add(c.candidate[i]);
                                encounter++;
                            }
                            if (encounter >= c.upperbound)
                            {
                                break;
                            }
                        }
                    }
                }
                else
                {
                    int encounter = 0;
                    for (int i = 0; i < c.candidate.Count; i++)
                    {
                        if (c.candidate[i].isOK() != true)
                        {
                            c.candidate[i].currentTime += Table.reallytimeUpperbound[(int)c.cid % 7];
                            c.currentList.Add(c.candidate[i]);
                            encounter++;
                        }
                        if (encounter >= c.upperbound)
                        {
                            break;
                        }
                    }
                }
            }
            // 接下来排周六日
            List<Cell> weekend = new List<Cell>();
            for (int i = 0; i < 6; i++)
            {
                Cell nc = new Cell((TimePeriod)35 + i);
                nc.upperbound = Table.weekendPersonbound[i % 3];
                weekend.Add(nc);
            }
            for (TimePeriod t = TimePeriod.SAT1; t <= TimePeriod.SUN3; t++)
            {
                for (int i = 0; i < myStream.pstream.Count; i++)
                {
                    for (int j = 0; j < myStream.pstream[i].validTimePeriod.Count; j++)
                    {
                        if (myStream.pstream[i].validTimePeriod[j] == t)
                        {
                            weekend[(int)t - (int)TimePeriod.SAT1].candidate.Add(myStream.pstream[i]);
                        }
                    }
                }
            }
            // 迭代搜索
            foreach (Cell c in weekend)
            {
                c.candidate.Sort((x, y) =>
                {
                        if (x.currentTime < y.currentTime) return -1;
                        else if (x.currentTime == y.currentTime) return 0;
                        else return 1;
                });
                // 标记并更新
                int encounter = 0;
                for (int i = 0; i < c.candidate.Count; i++)
                {
                    if (c.candidate[i].currentTime + Table.weekendUpperbound[((int)c.cid % 7) % 3] < Table.cynthia && c.candidate[i].groupType == GroupType.C)
                    {
                        c.candidate[i].currentTime += Table.weekendUpperbound[((int)c.cid % 7) % 3];
                        c.currentList.Add(c.candidate[i]);
                        encounter++;
                    }
                    if (encounter >= c.upperbound)
                    {
                        break;
                    }
                }
                for (int i = 0; i < c.candidate.Count && encounter < c.upperbound; i++)
                {
                    if (c.candidate[i].currentTime + Table.weekendUpperbound[((int)c.cid % 7) % 3] < Table.cynthia && c.candidate[i].groupType != GroupType.C)
                    {
                        c.candidate[i].currentTime += Table.weekendUpperbound[((int)c.cid % 7) % 3];
                        c.currentList.Add(c.candidate[i]);
                        encounter++;
                    }
                }
            }
            foreach (Cell c in weekend)
            {
                proc.Add(c);
            }
            // 时间少的排到前面
            foreach (Person p in myStream.pstream)
            {
                myStream.pstream.Sort((x, y) =>
                {
                    if (x.currentTime < y.currentTime) return -1;
                    else if (x.currentTime > y.currentTime) return 1;
                    else return 0;
                });
            }
            // 处理输出信息
            string str = "";
            string cel = "";
            foreach(Person p in myStream.pstream)
            {
                str += p.name + "\t" + p.groupType.ToString() + "\t" + p.currentTime.ToString() + Environment.NewLine;
            }

            proc.Sort((x, y) =>
            {
                if (x.cid < y.cid) return -1;
                else if (x.cid > y.cid) return 1;
                else return 0;
            });

            foreach(Cell c in proc)
            {
                cel += c.cid.ToString() + "\t";
                foreach (Person p in c.currentList)
                {
                    cel += p.name + p.groupType.ToString() + "\t";
                }
                cel += Environment.NewLine;
                if ((int)(c.cid + 1) % 7 == 0)
                {
                    cel += Environment.NewLine;
                }
            }
            pt = str;
            vl = this.isValuable(proc);
            return cel;
        }

        // 构造函数
        private Core() 
        {
            myStream = new PersonStream();
        }

        // 工厂方法
        public static Core Invoke()
        {
            return instance == null ? instance = new Core() : instance;
        }

        // 唯一单例
        public static Core instance = null;

        // 时间表
        Table myTable;

        // 名单
        PersonStream myStream;
    }
}
