using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace Pipi
{
    public partial class Form1 : Form
    {
        public Core icore = null;
        private string ffname;
        public Form1()
        {
            InitializeComponent();
            icore = Core.Invoke();
            button2.Enabled = false;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            FileDialog fwindow = new OpenFileDialog();
            fwindow.Filter = "txt文件|*.txt";
            if (fwindow.ShowDialog() == DialogResult.OK)
            {
                icore.ReadPerson(ffname = fwindow.FileName);
                button2.Enabled = true;
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            icore.ReadPerson(ffname);
            icore.Init(Convert.ToDouble(label1.Text), Convert.ToDouble(label2.Text));
            icore.Partition();
            string istr;
            bool sflag;
            textBox1.Text = icore.Dash(out istr, out sflag);
            textBox2.Text = istr;
            label5.Text = sflag ? "OK!" : "NO";
            if (sflag)
            {
                label5.Text = "OK!";
                label5.ForeColor = Color.Red;
            }
            else
            {
                label5.Text = "No!";
                label5.ForeColor = Color.Black;
            }
        }

        private void trackBar1_Scroll(object sender, EventArgs e)
        {
            label1.Text = Convert.ToString((double)trackBar1.Value / 2.0f + 5.0f);
        }

        private void trackBar2_Scroll(object sender, EventArgs e)
        {
            label2.Text = Convert.ToString((double)trackBar2.Value / 2.0f + 10.0f);
        }

        private void button3_Click(object sender, EventArgs e)
        {
            trackBar1.Value = 13;
            trackBar2.Value = 12;
            label1.Text = "11.5";
            label2.Text = "16";
        }

        private void button4_Click(object sender, EventArgs e)
        {
            Form2 f2 = new Form2();
            f2.Show();
        }
    }
}
