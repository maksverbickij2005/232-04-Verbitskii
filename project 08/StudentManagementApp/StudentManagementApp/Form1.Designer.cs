using System.Drawing;
using System.Windows.Forms;
using System.Windows.Forms.DataVisualization.Charting;

namespace StudentManagementApp
{
    partial class Form1
    {
        private System.ComponentModel.IContainer components = null;

        private System.Windows.Forms.Panel navigationPanel;
        private System.Windows.Forms.Panel contentPanel;
        private System.Windows.Forms.Button navStudentsButton;
        private System.Windows.Forms.Button navStatisticsButton;
        private System.Windows.Forms.Button navImportExportButton;
        private System.Windows.Forms.Panel headerPanel;
        private System.Windows.Forms.Label titleLabel;
        private System.Windows.Forms.PictureBox logoPictureBox;
        private System.Windows.Forms.Panel studentsPanel;
        private System.Windows.Forms.Panel statisticsPanel;
        private System.Windows.Forms.Panel importExportPanel;
        private System.Windows.Forms.DataGridView studentsDataGridView;
        private System.Windows.Forms.Button addStudentButton;
        private System.Windows.Forms.Button editStudentButton;
        private System.Windows.Forms.Button deleteStudentButton;
        private System.Windows.Forms.Button saveChangesButton;
        private System.Windows.Forms.Button loadDataButton;
        private System.Windows.Forms.ComboBox sortComboBox;
        private System.Windows.Forms.Label sortLabel;
        private System.Windows.Forms.TextBox searchTextBox;
        private System.Windows.Forms.Label searchLabel;
        private System.Windows.Forms.ComboBox filterCourseComboBox;
        private System.Windows.Forms.ComboBox filterGroupComboBox;
        private System.Windows.Forms.Label filterLabel;
        private System.Windows.Forms.DataVisualization.Charting.Chart studentsChart;
        private System.Windows.Forms.Button exportStatsButton;
        private System.Windows.Forms.Button importCsvButton;
        private System.Windows.Forms.Button exportCsvButton;
        private System.Windows.Forms.Label importExportLabel;
        private System.Windows.Forms.Label studentsLabel;
        private System.Windows.Forms.Label statisticsLabel;
        private System.Windows.Forms.Panel navButtonsPanel;
        private System.Windows.Forms.ComboBox statsTypeCombo;
        private System.Windows.Forms.Button exportJsonButton;
        private System.Windows.Forms.Button importJsonButton;
        private System.Windows.Forms.Button exportXmlButton;
        private System.Windows.Forms.Button importXmlButton;
        private System.Windows.Forms.Button exportExcelButton;
        private System.Windows.Forms.Button importExcelButton;

        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        private void InitializeComponent()
        {
            System.Windows.Forms.DataVisualization.Charting.ChartArea chartArea1 = new System.Windows.Forms.DataVisualization.Charting.ChartArea();
            System.Windows.Forms.DataVisualization.Charting.Legend legend1 = new System.Windows.Forms.DataVisualization.Charting.Legend();
            System.Windows.Forms.DataVisualization.Charting.Series series1 = new System.Windows.Forms.DataVisualization.Charting.Series();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle1 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle2 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle3 = new System.Windows.Forms.DataGridViewCellStyle();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.navigationPanel = new System.Windows.Forms.Panel();
            this.navButtonsPanel = new System.Windows.Forms.Panel();
            this.navImportExportButton = new System.Windows.Forms.Button();
            this.navStatisticsButton = new System.Windows.Forms.Button();
            this.navStudentsButton = new System.Windows.Forms.Button();
            this.contentPanel = new System.Windows.Forms.Panel();
            this.importExportPanel = new System.Windows.Forms.Panel();
            this.exportCsvButton = new System.Windows.Forms.Button();
            this.importCsvButton = new System.Windows.Forms.Button();
            this.importExportLabel = new System.Windows.Forms.Label();
            this.statisticsPanel = new System.Windows.Forms.Panel();
            this.exportStatsButton = new System.Windows.Forms.Button();
            this.studentsChart = new System.Windows.Forms.DataVisualization.Charting.Chart();
            this.statisticsLabel = new System.Windows.Forms.Label();
            this.statsTypeCombo = new System.Windows.Forms.ComboBox();
            this.studentsPanel = new System.Windows.Forms.Panel();
            this.studentsLabel = new System.Windows.Forms.Label();
            this.filterLabel = new System.Windows.Forms.Label();
            this.filterGroupComboBox = new System.Windows.Forms.ComboBox();
            this.filterCourseComboBox = new System.Windows.Forms.ComboBox();
            this.searchLabel = new System.Windows.Forms.Label();
            this.searchTextBox = new System.Windows.Forms.TextBox();
            this.sortLabel = new System.Windows.Forms.Label();
            this.sortComboBox = new System.Windows.Forms.ComboBox();
            this.loadDataButton = new System.Windows.Forms.Button();
            this.saveChangesButton = new System.Windows.Forms.Button();
            this.deleteStudentButton = new System.Windows.Forms.Button();
            this.editStudentButton = new System.Windows.Forms.Button();
            this.addStudentButton = new System.Windows.Forms.Button();
            this.studentsDataGridView = new System.Windows.Forms.DataGridView();
            this.headerPanel = new System.Windows.Forms.Panel();
            this.logoPictureBox = new System.Windows.Forms.PictureBox();
            this.titleLabel = new System.Windows.Forms.Label();
            this.navigationPanel.SuspendLayout();
            this.navButtonsPanel.SuspendLayout();
            this.contentPanel.SuspendLayout();
            this.importExportPanel.SuspendLayout();
            this.statisticsPanel.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.studentsChart)).BeginInit();
            this.studentsPanel.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.studentsDataGridView)).BeginInit();
            this.headerPanel.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.logoPictureBox)).BeginInit();
            this.SuspendLayout();
            // 
            // navigationPanel
            // 
            this.navigationPanel.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(25)))), ((int)(((byte)(25)))), ((int)(((byte)(25)))));
            this.navigationPanel.Controls.Add(this.navButtonsPanel);
            this.navigationPanel.Dock = System.Windows.Forms.DockStyle.Left;
            this.navigationPanel.Location = new System.Drawing.Point(0, 60);
            this.navigationPanel.Name = "navigationPanel";
            this.navigationPanel.Size = new System.Drawing.Size(220, 590);
            this.navigationPanel.TabIndex = 0;
            // 
            // navButtonsPanel
            // 
            this.navButtonsPanel.Controls.Add(this.navImportExportButton);
            this.navButtonsPanel.Controls.Add(this.navStatisticsButton);
            this.navButtonsPanel.Controls.Add(this.navStudentsButton);
            this.navButtonsPanel.Dock = System.Windows.Forms.DockStyle.Fill;
            this.navButtonsPanel.Location = new System.Drawing.Point(0, 0);
            this.navButtonsPanel.Name = "navButtonsPanel";
            this.navButtonsPanel.Size = new System.Drawing.Size(220, 590);
            this.navButtonsPanel.TabIndex = 3;
            // 
            // navImportExportButton
            // 
            this.navImportExportButton.Dock = System.Windows.Forms.DockStyle.Top;
            this.navImportExportButton.FlatAppearance.BorderSize = 0;
            this.navImportExportButton.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.navImportExportButton.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.navImportExportButton.ForeColor = System.Drawing.Color.White;
            this.navImportExportButton.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.navImportExportButton.Location = new System.Drawing.Point(0, 120);
            this.navImportExportButton.Name = "navImportExportButton";
            this.navImportExportButton.Padding = new System.Windows.Forms.Padding(15, 0, 0, 0);
            this.navImportExportButton.Size = new System.Drawing.Size(220, 60);
            this.navImportExportButton.TabIndex = 2;
            this.navImportExportButton.Text = "  Импорт/Экспорт";
            this.navImportExportButton.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.navImportExportButton.TextImageRelation = System.Windows.Forms.TextImageRelation.ImageBeforeText;
            this.navImportExportButton.UseVisualStyleBackColor = true;
            this.navImportExportButton.Click += new System.EventHandler(this.navImportExportButton_Click);
            // 
            // navStatisticsButton
            // 
            this.navStatisticsButton.Dock = System.Windows.Forms.DockStyle.Top;
            this.navStatisticsButton.FlatAppearance.BorderSize = 0;
            this.navStatisticsButton.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.navStatisticsButton.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.navStatisticsButton.ForeColor = System.Drawing.Color.White;
            this.navStatisticsButton.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.navStatisticsButton.Location = new System.Drawing.Point(0, 60);
            this.navStatisticsButton.Name = "navStatisticsButton";
            this.navStatisticsButton.Padding = new System.Windows.Forms.Padding(15, 0, 0, 0);
            this.navStatisticsButton.Size = new System.Drawing.Size(220, 60);
            this.navStatisticsButton.TabIndex = 1;
            this.navStatisticsButton.Text = "  Статистика";
            this.navStatisticsButton.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.navStatisticsButton.TextImageRelation = System.Windows.Forms.TextImageRelation.ImageBeforeText;
            this.navStatisticsButton.UseVisualStyleBackColor = true;
            this.navStatisticsButton.Click += new System.EventHandler(this.navStatisticsButton_Click);
            // 
            // navStudentsButton
            // 
            this.navStudentsButton.Dock = System.Windows.Forms.DockStyle.Top;
            this.navStudentsButton.FlatAppearance.BorderSize = 0;
            this.navStudentsButton.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.navStudentsButton.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.navStudentsButton.ForeColor = System.Drawing.Color.White;
            this.navStudentsButton.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.navStudentsButton.Location = new System.Drawing.Point(0, 0);
            this.navStudentsButton.Name = "navStudentsButton";
            this.navStudentsButton.Padding = new System.Windows.Forms.Padding(15, 0, 0, 0);
            this.navStudentsButton.Size = new System.Drawing.Size(220, 60);
            this.navStudentsButton.TabIndex = 0;
            this.navStudentsButton.Text = "  Студенты";
            this.navStudentsButton.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.navStudentsButton.TextImageRelation = System.Windows.Forms.TextImageRelation.ImageBeforeText;
            this.navStudentsButton.UseVisualStyleBackColor = true;
            this.navStudentsButton.Click += new System.EventHandler(this.navStudentsButton_Click);
            // 
            // contentPanel
            // 
            this.contentPanel.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(45)))), ((int)(((byte)(45)))), ((int)(((byte)(48)))));
            this.contentPanel.Controls.Add(this.importExportPanel);
            this.contentPanel.Controls.Add(this.statisticsPanel);
            this.contentPanel.Controls.Add(this.studentsPanel);
            this.contentPanel.Dock = System.Windows.Forms.DockStyle.Fill;
            this.contentPanel.Location = new System.Drawing.Point(220, 60);
            this.contentPanel.Name = "contentPanel";
            this.contentPanel.Size = new System.Drawing.Size(894, 590);
            this.contentPanel.TabIndex = 1;
            // 
            // importExportPanel
            // 
            this.importExportPanel.Controls.Add(this.exportCsvButton);
            this.importExportPanel.Controls.Add(this.importCsvButton);
            this.importExportPanel.Controls.Add(this.importExportLabel);
            this.importExportPanel.Dock = System.Windows.Forms.DockStyle.Fill;
            this.importExportPanel.Location = new System.Drawing.Point(0, 0);
            this.importExportPanel.Name = "importExportPanel";
            this.importExportPanel.Padding = new System.Windows.Forms.Padding(20);
            this.importExportPanel.Size = new System.Drawing.Size(894, 590);
            this.importExportPanel.TabIndex = 2;
            this.importExportPanel.Visible = false;
            // 
            // exportCsvButton
            // 
            this.exportCsvButton.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.exportCsvButton.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(122)))), ((int)(((byte)(204)))));
            this.exportCsvButton.FlatAppearance.BorderSize = 0;
            this.exportCsvButton.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.exportCsvButton.Font = new System.Drawing.Font("Segoe UI Semibold", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.exportCsvButton.ForeColor = System.Drawing.Color.White;
            this.exportCsvButton.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.exportCsvButton.Location = new System.Drawing.Point(446, 250);
            this.exportCsvButton.Name = "exportCsvButton";
            this.exportCsvButton.Padding = new System.Windows.Forms.Padding(10, 0, 0, 0);
            this.exportCsvButton.Size = new System.Drawing.Size(250, 60);
            this.exportCsvButton.TabIndex = 2;
            this.exportCsvButton.Text = "  Экспорт в CSV";
            this.exportCsvButton.UseVisualStyleBackColor = false;
            this.exportCsvButton.Click += new System.EventHandler(this.exportCsvButton_Click);
            // 
            // importCsvButton
            // 
            this.importCsvButton.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.importCsvButton.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(122)))), ((int)(((byte)(204)))));
            this.importCsvButton.FlatAppearance.BorderSize = 0;
            this.importCsvButton.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.importCsvButton.Font = new System.Drawing.Font("Segoe UI Semibold", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.importCsvButton.ForeColor = System.Drawing.Color.White;
            this.importCsvButton.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.importCsvButton.Location = new System.Drawing.Point(146, 250);
            this.importCsvButton.Name = "importCsvButton";
            this.importCsvButton.Padding = new System.Windows.Forms.Padding(10, 0, 0, 0);
            this.importCsvButton.Size = new System.Drawing.Size(250, 60);
            this.importCsvButton.TabIndex = 1;
            this.importCsvButton.Text = "  Импорт из CSV";
            this.importCsvButton.UseVisualStyleBackColor = false;
            this.importCsvButton.Click += new System.EventHandler(this.importCsvButton_Click);
            // 
            // importExportLabel
            // 
            this.importExportLabel.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.importExportLabel.Font = new System.Drawing.Font("Segoe UI Light", 24F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.importExportLabel.ForeColor = System.Drawing.Color.White;
            this.importExportLabel.Location = new System.Drawing.Point(31, 150);
            this.importExportLabel.Name = "importExportLabel";
            this.importExportLabel.Size = new System.Drawing.Size(780, 45);
            this.importExportLabel.TabIndex = 0;
            this.importExportLabel.Text = "Импорт и экспорт данных";
            this.importExportLabel.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // statisticsPanel
            // 
            this.statisticsPanel.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(36)))), ((int)(((byte)(41)))), ((int)(((byte)(46)))));
            this.statisticsPanel.Controls.Add(this.statsTypeCombo);
            this.statisticsPanel.Controls.Add(this.exportStatsButton);
            this.statisticsPanel.Controls.Add(this.studentsChart);
            this.statisticsPanel.Controls.Add(this.statisticsLabel);
            this.statisticsPanel.Dock = System.Windows.Forms.DockStyle.Fill;
            this.statisticsPanel.Location = new System.Drawing.Point(0, 0);
            this.statisticsPanel.Name = "statisticsPanel";
            this.statisticsPanel.Padding = new System.Windows.Forms.Padding(20);
            this.statisticsPanel.Size = new System.Drawing.Size(894, 590);
            this.statisticsPanel.TabIndex = 1;
            this.statisticsPanel.Visible = false;
            // 
            // exportStatsButton
            // 
            this.exportStatsButton.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Right)));
            this.exportStatsButton.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(122)))), ((int)(((byte)(204)))));
            this.exportStatsButton.FlatAppearance.BorderSize = 0;
            this.exportStatsButton.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.exportStatsButton.Font = new System.Drawing.Font("Segoe UI Semibold", 10F, System.Drawing.FontStyle.Bold);
            this.exportStatsButton.ForeColor = System.Drawing.Color.White;
            this.exportStatsButton.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.exportStatsButton.Location = new System.Drawing.Point(642, 80);
            this.exportStatsButton.Name = "exportStatsButton";
            this.exportStatsButton.Padding = new System.Windows.Forms.Padding(10, 0, 0, 0);
            this.exportStatsButton.Size = new System.Drawing.Size(180, 40);
            this.exportStatsButton.TabIndex = 2;
            this.exportStatsButton.Text = "  Экспорт статистики";
            this.exportStatsButton.UseVisualStyleBackColor = false;
            this.exportStatsButton.Click += new System.EventHandler(this.exportStatsButton_Click);
            // 
            // studentsChart
            // 
            this.studentsChart.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom)
            | System.Windows.Forms.AnchorStyles.Left)
            | System.Windows.Forms.AnchorStyles.Right)));
            this.studentsChart.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(36)))), ((int)(((byte)(41)))), ((int)(((byte)(46)))));
            chartArea1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(36)))), ((int)(((byte)(41)))), ((int)(((byte)(46)))));
            chartArea1.Name = "ChartArea1";
            this.studentsChart.ChartAreas.Add(chartArea1);
            legend1.Name = "Legend1";
            this.studentsChart.Legends.Add(legend1);
            this.studentsChart.Location = new System.Drawing.Point(20, 130);
            this.studentsChart.MinimumSize = new System.Drawing.Size(100, 100);
            this.studentsChart.Name = "studentsChart";
            series1.ChartArea = "ChartArea1";
            series1.ChartType = System.Windows.Forms.DataVisualization.Charting.SeriesChartType.Column;
            series1.Legend = "Legend1";
            series1.Name = "Студенты";
            this.studentsChart.Series.Add(series1);
            this.studentsChart.Size = new System.Drawing.Size(854, 440);
            this.studentsChart.TabIndex = 1;
            this.studentsChart.Text = "chart1";
            // 
            // statisticsLabel
            // 
            this.statisticsLabel.Anchor = ((System.Windows.Forms.AnchorStyles)(((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Left)
            | System.Windows.Forms.AnchorStyles.Right)));
            this.statisticsLabel.Font = new System.Drawing.Font("Segoe UI Light", 24F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.statisticsLabel.ForeColor = System.Drawing.Color.White;
            this.statisticsLabel.Location = new System.Drawing.Point(20, 20);
            this.statisticsLabel.Name = "statisticsLabel";
            this.statisticsLabel.Size = new System.Drawing.Size(854, 45);
            this.statisticsLabel.TabIndex = 0;
            this.statisticsLabel.Text = "Статистика студентов";
            this.statisticsLabel.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // statsTypeCombo
            // 
            this.statsTypeCombo.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.statsTypeCombo.FormattingEnabled = true;
            this.statsTypeCombo.Items.AddRange(new object[] {
            "По количеству студентов на курсе",
            "По распределению по группам",
            "По возрасту студентов",
            "По году поступления"});
            this.statsTypeCombo.Location = new System.Drawing.Point(20, 80);
            this.statsTypeCombo.Name = "statsTypeCombo";
            this.statsTypeCombo.Size = new System.Drawing.Size(250, 21);
            this.statsTypeCombo.TabIndex = 3;
            // 
            // studentsPanel
            // 
            this.studentsPanel.Controls.Add(this.studentsLabel);
            this.studentsPanel.Controls.Add(this.filterLabel);
            this.studentsPanel.Controls.Add(this.filterGroupComboBox);
            this.studentsPanel.Controls.Add(this.filterCourseComboBox);
            this.studentsPanel.Controls.Add(this.searchLabel);
            this.studentsPanel.Controls.Add(this.searchTextBox);
            this.studentsPanel.Controls.Add(this.sortLabel);
            this.studentsPanel.Controls.Add(this.sortComboBox);
            this.studentsPanel.Controls.Add(this.loadDataButton);
            this.studentsPanel.Controls.Add(this.saveChangesButton);
            this.studentsPanel.Controls.Add(this.deleteStudentButton);
            this.studentsPanel.Controls.Add(this.editStudentButton);
            this.studentsPanel.Controls.Add(this.addStudentButton);
            this.studentsPanel.Controls.Add(this.studentsDataGridView);
            this.studentsPanel.Dock = System.Windows.Forms.DockStyle.Fill;
            this.studentsPanel.Location = new System.Drawing.Point(0, 0);
            this.studentsPanel.Name = "studentsPanel";
            this.studentsPanel.Padding = new System.Windows.Forms.Padding(20);
            this.studentsPanel.Size = new System.Drawing.Size(894, 590);
            this.studentsPanel.TabIndex = 0;
            // 
            // studentsLabel
            // 
            this.studentsLabel.Anchor = ((System.Windows.Forms.AnchorStyles)(((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Left)
            | System.Windows.Forms.AnchorStyles.Right)));
            this.studentsLabel.Font = new System.Drawing.Font("Segoe UI Light", 24F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.studentsLabel.ForeColor = System.Drawing.Color.White;
            this.studentsLabel.Location = new System.Drawing.Point(0, 10);
            this.studentsLabel.Name = "studentsLabel";
            this.studentsLabel.Size = new System.Drawing.Size(842, 45);
            this.studentsLabel.TabIndex = 13;
            this.studentsLabel.Text = "Управление студентами";
            this.studentsLabel.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // filterLabel
            // 
            this.filterLabel.AutoSize = true;
            this.filterLabel.Font = new System.Drawing.Font("Segoe UI", 10F);
            this.filterLabel.ForeColor = System.Drawing.Color.White;
            this.filterLabel.Location = new System.Drawing.Point(420, 70);
            this.filterLabel.Name = "filterLabel";
            this.filterLabel.Size = new System.Drawing.Size(58, 19);
            this.filterLabel.TabIndex = 12;
            this.filterLabel.Text = "Фильтр:";
            // 
            // filterGroupComboBox
            // 
            this.filterGroupComboBox.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.filterGroupComboBox.FormattingEnabled = true;
            this.filterGroupComboBox.Location = new System.Drawing.Point(570, 70);
            this.filterGroupComboBox.Name = "filterGroupComboBox";
            this.filterGroupComboBox.Size = new System.Drawing.Size(120, 21);
            this.filterGroupComboBox.TabIndex = 11;
            this.filterGroupComboBox.SelectedIndexChanged += new System.EventHandler(this.filterGroupComboBox_SelectedIndexChanged);
            // 
            // filterCourseComboBox
            // 
            this.filterCourseComboBox.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.filterCourseComboBox.FormattingEnabled = true;
            this.filterCourseComboBox.Items.AddRange(new object[] {
            "Все курсы",
            "1",
            "2",
            "3",
            "4",
            "5"});
            this.filterCourseComboBox.Location = new System.Drawing.Point(480, 70);
            this.filterCourseComboBox.Name = "filterCourseComboBox";
            this.filterCourseComboBox.Size = new System.Drawing.Size(80, 21);
            this.filterCourseComboBox.TabIndex = 10;
            this.filterCourseComboBox.SelectedIndexChanged += new System.EventHandler(this.filterCourseComboBox_SelectedIndexChanged);
            // 
            // searchLabel
            // 
            this.searchLabel.AutoSize = true;
            this.searchLabel.Font = new System.Drawing.Font("Segoe UI", 10F);
            this.searchLabel.ForeColor = System.Drawing.Color.White;
            this.searchLabel.Location = new System.Drawing.Point(70, 70);
            this.searchLabel.Name = "searchLabel";
            this.searchLabel.Size = new System.Drawing.Size(51, 19);
            this.searchLabel.TabIndex = 9;
            this.searchLabel.Text = "Поиск:";
            // 
            // searchTextBox
            // 
            this.searchTextBox.Location = new System.Drawing.Point(120, 70);
            this.searchTextBox.Name = "searchTextBox";
            this.searchTextBox.Size = new System.Drawing.Size(200, 20);
            this.searchTextBox.TabIndex = 8;
            this.searchTextBox.TextChanged += new System.EventHandler(this.searchTextBox_TextChanged);
            // 
            // sortLabel
            // 
            this.sortLabel.AutoSize = true;
            this.sortLabel.Font = new System.Drawing.Font("Segoe UI", 10F);
            this.sortLabel.ForeColor = System.Drawing.Color.White;
            this.sortLabel.Location = new System.Drawing.Point(70, 100);
            this.sortLabel.Name = "sortLabel";
            this.sortLabel.Size = new System.Drawing.Size(88, 19);
            this.sortLabel.TabIndex = 7;
            this.sortLabel.Text = "Сортировка:";
            // 
            // sortComboBox
            // 
            this.sortComboBox.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.sortComboBox.FormattingEnabled = true;
            this.sortComboBox.Items.AddRange(new object[] {
            "По фамилии (А-Я)",
            "По фамилии (Я-А)",
            "По группе (А-Я)",
            "По группе (Я-А)",
            "По курсу (1-5)",
            "По курсу (5-1)",
            "По дате рождения (старшие)",
            "По дате рождения (младшие)"});
            this.sortComboBox.Location = new System.Drawing.Point(170, 100);
            this.sortComboBox.Name = "sortComboBox";
            this.sortComboBox.Size = new System.Drawing.Size(200, 21);
            this.sortComboBox.TabIndex = 6;
            this.sortComboBox.SelectedIndexChanged += new System.EventHandler(this.sortComboBox_SelectedIndexChanged);
            // 
            // loadDataButton
            // 
            this.loadDataButton.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Right)));
            this.loadDataButton.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(122)))), ((int)(((byte)(204)))));
            this.loadDataButton.FlatAppearance.BorderSize = 0;
            this.loadDataButton.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.loadDataButton.Font = new System.Drawing.Font("Segoe UI Semibold", 10F, System.Drawing.FontStyle.Bold);
            this.loadDataButton.ForeColor = System.Drawing.Color.White;
            this.loadDataButton.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.loadDataButton.Location = new System.Drawing.Point(642, 520);
            this.loadDataButton.Name = "loadDataButton";
            this.loadDataButton.Padding = new System.Windows.Forms.Padding(10, 0, 0, 0);
            this.loadDataButton.Size = new System.Drawing.Size(180, 40);
            this.loadDataButton.TabIndex = 5;
            this.loadDataButton.Text = "  Загрузить данные";
            this.loadDataButton.UseVisualStyleBackColor = false;
            this.loadDataButton.Click += new System.EventHandler(this.loadDataButton_Click);
            // 
            // saveChangesButton
            // 
            this.saveChangesButton.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Right)));
            this.saveChangesButton.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(122)))), ((int)(((byte)(204)))));
            this.saveChangesButton.FlatAppearance.BorderSize = 0;
            this.saveChangesButton.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.saveChangesButton.Font = new System.Drawing.Font("Segoe UI Semibold", 10F, System.Drawing.FontStyle.Bold);
            this.saveChangesButton.ForeColor = System.Drawing.Color.White;
            this.saveChangesButton.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.saveChangesButton.Location = new System.Drawing.Point(442, 520);
            this.saveChangesButton.Name = "saveChangesButton";
            this.saveChangesButton.Padding = new System.Windows.Forms.Padding(10, 0, 0, 0);
            this.saveChangesButton.Size = new System.Drawing.Size(180, 40);
            this.saveChangesButton.TabIndex = 4;
            this.saveChangesButton.Text = "  Сохранить изменения";
            this.saveChangesButton.UseVisualStyleBackColor = false;
            this.saveChangesButton.Click += new System.EventHandler(this.saveChangesButton_Click);
            // 
            // deleteStudentButton
            // 
            this.deleteStudentButton.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Right)));
            this.deleteStudentButton.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(192)))), ((int)(((byte)(0)))), ((int)(((byte)(0)))));
            this.deleteStudentButton.FlatAppearance.BorderSize = 0;
            this.deleteStudentButton.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.deleteStudentButton.Font = new System.Drawing.Font("Segoe UI Semibold", 10F, System.Drawing.FontStyle.Bold);
            this.deleteStudentButton.ForeColor = System.Drawing.Color.White;
            this.deleteStudentButton.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.deleteStudentButton.Location = new System.Drawing.Point(642, 100);
            this.deleteStudentButton.Name = "deleteStudentButton";
            this.deleteStudentButton.Padding = new System.Windows.Forms.Padding(10, 0, 0, 0);
            this.deleteStudentButton.Size = new System.Drawing.Size(180, 40);
            this.deleteStudentButton.TabIndex = 3;
            this.deleteStudentButton.Text = "  Удалить студента";
            this.deleteStudentButton.UseVisualStyleBackColor = false;
            this.deleteStudentButton.Click += new System.EventHandler(this.deleteStudentButton_Click);
            // 
            // editStudentButton
            // 
            this.editStudentButton.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Right)));
            this.editStudentButton.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(122)))), ((int)(((byte)(204)))));
            this.editStudentButton.FlatAppearance.BorderSize = 0;
            this.editStudentButton.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.editStudentButton.Font = new System.Drawing.Font("Segoe UI Semibold", 10F, System.Drawing.FontStyle.Bold);
            this.editStudentButton.ForeColor = System.Drawing.Color.White;
            this.editStudentButton.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.editStudentButton.Location = new System.Drawing.Point(442, 100);
            this.editStudentButton.Name = "editStudentButton";
            this.editStudentButton.Padding = new System.Windows.Forms.Padding(10, 0, 0, 0);
            this.editStudentButton.Size = new System.Drawing.Size(180, 40);
            this.editStudentButton.TabIndex = 2;
            this.editStudentButton.Text = "  Редактировать";
            this.editStudentButton.UseVisualStyleBackColor = false;
            this.editStudentButton.Click += new System.EventHandler(this.editStudentButton_Click);
            // 
            // addStudentButton
            // 
            this.addStudentButton.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Right)));
            this.addStudentButton.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(122)))), ((int)(((byte)(204)))));
            this.addStudentButton.FlatAppearance.BorderSize = 0;
            this.addStudentButton.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.addStudentButton.Font = new System.Drawing.Font("Segoe UI Semibold", 10F, System.Drawing.FontStyle.Bold);
            this.addStudentButton.ForeColor = System.Drawing.Color.White;
            this.addStudentButton.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.addStudentButton.Location = new System.Drawing.Point(242, 100);
            this.addStudentButton.Name = "addStudentButton";
            this.addStudentButton.Padding = new System.Windows.Forms.Padding(10, 0, 0, 0);
            this.addStudentButton.Size = new System.Drawing.Size(180, 40);
            this.addStudentButton.TabIndex = 1;
            this.addStudentButton.Text = "  Добавить студента";
            this.addStudentButton.UseVisualStyleBackColor = false;
            this.addStudentButton.Click += new System.EventHandler(this.addStudentButton_Click);
            // 
            // studentsDataGridView
            // 
            this.studentsDataGridView.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom)
            | System.Windows.Forms.AnchorStyles.Left)
            | System.Windows.Forms.AnchorStyles.Right)));
            this.studentsDataGridView.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill;
            this.studentsDataGridView.BackgroundColor = System.Drawing.Color.FromArgb(((int)(((byte)(45)))), ((int)(((byte)(45)))), ((int)(((byte)(48)))));
            this.studentsDataGridView.BorderStyle = System.Windows.Forms.BorderStyle.None;
            dataGridViewCellStyle1.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(15)))), ((int)(((byte)(15)))), ((int)(((byte)(15)))));
            dataGridViewCellStyle1.Font = new System.Drawing.Font("Segoe UI", 9F);
            dataGridViewCellStyle1.ForeColor = System.Drawing.Color.White;
            dataGridViewCellStyle1.SelectionBackColor = System.Drawing.Color.FromArgb(((int)(((byte)(63)))), ((int)(((byte)(63)))), ((int)(((byte)(70)))));
            dataGridViewCellStyle1.SelectionForeColor = System.Drawing.Color.White;
            dataGridViewCellStyle1.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.studentsDataGridView.ColumnHeadersDefaultCellStyle = dataGridViewCellStyle1;
            this.studentsDataGridView.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            dataGridViewCellStyle2.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle2.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(45)))), ((int)(((byte)(45)))), ((int)(((byte)(48)))));
            dataGridViewCellStyle2.Font = new System.Drawing.Font("Segoe UI", 9F);
            dataGridViewCellStyle2.ForeColor = System.Drawing.Color.White;
            dataGridViewCellStyle2.SelectionBackColor = System.Drawing.Color.FromArgb(((int)(((byte)(63)))), ((int)(((byte)(63)))), ((int)(((byte)(70)))));
            dataGridViewCellStyle2.SelectionForeColor = System.Drawing.Color.White;
            dataGridViewCellStyle2.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.studentsDataGridView.DefaultCellStyle = dataGridViewCellStyle2;
            this.studentsDataGridView.EnableHeadersVisualStyles = false;
            this.studentsDataGridView.GridColor = System.Drawing.Color.FromArgb(((int)(((byte)(63)))), ((int)(((byte)(63)))), ((int)(((byte)(70)))));
            this.studentsDataGridView.Location = new System.Drawing.Point(20, 150);
            this.studentsDataGridView.MultiSelect = false;
            this.studentsDataGridView.Name = "studentsDataGridView";
            this.studentsDataGridView.ReadOnly = true;
            dataGridViewCellStyle3.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle3.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(45)))), ((int)(((byte)(45)))), ((int)(((byte)(48)))));
            dataGridViewCellStyle3.Font = new System.Drawing.Font("Segoe UI", 9F);
            dataGridViewCellStyle3.ForeColor = System.Drawing.Color.White;
            dataGridViewCellStyle3.SelectionBackColor = System.Drawing.Color.FromArgb(((int)(((byte)(63)))), ((int)(((byte)(63)))), ((int)(((byte)(70)))));
            dataGridViewCellStyle3.SelectionForeColor = System.Drawing.Color.White;
            dataGridViewCellStyle3.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.studentsDataGridView.RowHeadersDefaultCellStyle = dataGridViewCellStyle3;
            this.studentsDataGridView.RowHeadersVisible = false;
            this.studentsDataGridView.SelectionMode = System.Windows.Forms.DataGridViewSelectionMode.FullRowSelect;
            this.studentsDataGridView.Size = new System.Drawing.Size(802, 350);
            this.studentsDataGridView.TabIndex = 0;
            // 
            // headerPanel
            // 
            this.headerPanel.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(122)))), ((int)(((byte)(204)))));
            this.headerPanel.Controls.Add(this.logoPictureBox);
            this.headerPanel.Controls.Add(this.titleLabel);
            this.headerPanel.Dock = System.Windows.Forms.DockStyle.Top;
            this.headerPanel.Location = new System.Drawing.Point(0, 0);
            this.headerPanel.Name = "headerPanel";
            this.headerPanel.Size = new System.Drawing.Size(1114, 60);
            this.headerPanel.TabIndex = 2;
            // 
            // logoPictureBox
            // 
            this.logoPictureBox.Image = ((System.Drawing.Image)(resources.GetObject("logoPictureBox.Image")));
            this.logoPictureBox.Location = new System.Drawing.Point(20, 10);
            this.logoPictureBox.Name = "logoPictureBox";
            this.logoPictureBox.Size = new System.Drawing.Size(40, 40);
            this.logoPictureBox.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom;
            this.logoPictureBox.TabIndex = 1;
            this.logoPictureBox.TabStop = false;
            // 
            // titleLabel
            // 
            this.titleLabel.AutoSize = true;
            this.titleLabel.Font = new System.Drawing.Font("Segoe UI Light", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.titleLabel.ForeColor = System.Drawing.Color.White;
            this.titleLabel.Location = new System.Drawing.Point(70, 15);
            this.titleLabel.Name = "titleLabel";
            this.titleLabel.Size = new System.Drawing.Size(273, 32);
            this.titleLabel.TabIndex = 0;
            this.titleLabel.Text = "Student Management Pro";
            this.titleLabel.Click += new System.EventHandler(this.titleLabel_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(45)))), ((int)(((byte)(45)))), ((int)(((byte)(48)))));
            this.ClientSize = new System.Drawing.Size(1114, 650);
            this.Controls.Add(this.contentPanel);
            this.Controls.Add(this.navigationPanel);
            this.Controls.Add(this.headerPanel);
            this.MinimumSize = new System.Drawing.Size(800, 600);
            this.Name = "Form1";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Student Management Pro";
            this.WindowState = System.Windows.Forms.FormWindowState.Maximized;
            this.FormClosing += new System.Windows.Forms.FormClosingEventHandler(this.Form1_FormClosing);
            this.navigationPanel.ResumeLayout(false);
            this.navButtonsPanel.ResumeLayout(false);
            this.contentPanel.ResumeLayout(false);
            this.importExportPanel.ResumeLayout(false);
            this.statisticsPanel.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.studentsChart)).EndInit();
            this.studentsPanel.ResumeLayout(false);
            this.studentsPanel.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.studentsDataGridView)).EndInit();
            this.headerPanel.ResumeLayout(false);
            this.headerPanel.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.logoPictureBox)).EndInit();
            this.ResumeLayout(false);

        }
    }
}