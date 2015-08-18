using System;
using System.Collections.Generic;
using System.Text;

namespace Pipi
{
    // 组别
    public enum GroupType 
    {
        A, B, C, N
    };
    
    // 时间段
    public enum TimePeriod 
    { 
        MON1, MON2, MON3, MON4, MON5, MON6, MON7,
        TUE1, TUE2, TUE3, TUE4, TUE5, TUE6, TUE7,
        WED1, WED2, WED3, WED4, WED5, WED6, WED7,
        THU1, THU2, THU3, THU4, THU5, THU6, THU7,
        FRI1, FRI2, FRI3, FRI4, FRI5, FRI6, FRI7,
        SAT1, SAT2, SAT3, SUN1, SUN2, SUN3
    }

    public class Person {
        // 名字
        public string name;
        // 组别
        public GroupType groupType;
        // 已排时间
        public double currentTime;
        // 可排时间段
        public List<TimePeriod> validTimePeriod = new List<TimePeriod>();
        // 排序权重
        public int Aweight = 0;
        public int Bweight = 0;
        // 是否排完了
        public bool isOK()
        {
            return currentTime > Table.threshold;
        }
        // 与阈值的差值
        public double delta()
        {
            return Table.threshold - currentTime;
        }
    }

    public class PersonStream
    {
        // 候选人总列表
        public List<Person> pstream = new List<Person>();
        // 清空
        public void Clear() { pstream.Clear(); }
    }

    public class Cell
    {
        // 候选人
        public List<Person> candidate = new List<Person>();
        // 已经排入的人
        public List<Person> currentList = new List<Person>();
        // 格子的位置
        public TimePeriod cid;
        // 可填人数
        public int upperbound;
        // 构造函数
        public Cell(TimePeriod cid)
        {
            this.cid = cid;
        }
        // 是否排完了
        public bool isOk()
        {
            return currentList.Count == upperbound;
        }
    }

    public class Table
    {
        // 构造函数
        public Table(PersonStream ps) {
            reallytimeUpperbound = new double[7] { 2.0f, 1.0f, 2.0f, 2.0f, 1.5f, 2.0f, 4.0f };          
            timeUpperbound = new int[7] { 4, 3, 3, 3, 3, 2, 4 };
            weekendPersonbound = new int[3] { 2, 2, 4 };
            weekendUpperbound = new double[3] { 5.0f, 5.5f, 4.0f };
            // 对每天
            for (int i = 0; i < 5; i++)
            {
                iTable.Add(new List<Cell>());
                // 对每个时段
                for (int j = 0; j < 7; j++)
                {
                    Cell p1 = new Cell((TimePeriod)(i * 7 + j));
                    p1.upperbound = timeUpperbound[j];
                    // 找可填入的人
                    for (int k = 0; k < ps.pstream.Count; k++)
                    {
                        for (int m = 0; m < ps.pstream[k].validTimePeriod.Count; m++)
                        {
                            if (ps.pstream[k].validTimePeriod[m] == p1.cid)
                            {
                                p1.candidate.Add(ps.pstream[k]);
                                break;
                            }
                        }
                    }
                    iTable[i].Add(p1);
                }
            }
        }
        // 格子数组
        public List<List<Cell>> iTable = new List<List<Cell>>();
        // 时间段人数上限
        public static double[] reallytimeUpperbound;
        public static int[] timeUpperbound;
        public static int[] weekendPersonbound;
        public static double[] weekendUpperbound;
        // 阈值
        public static double threshold = 11.5f;
        public static double cynthia = 16.0f;
    }


}
