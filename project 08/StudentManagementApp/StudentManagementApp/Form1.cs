using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Text.RegularExpressions;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Windows.Forms.DataVisualization.Charting;
using Newtonsoft.Json;

namespace StudentManagementApp
{
    public partial class Form1 : Form
    {
        private List<Student> students = new List<Student>();
        private string currentDataFile = "students_data.json";
        private bool dataChanged = false;

        public Form1()
        {
            InitializeComponent();
            InitializeDataGridView();
            InitializeChart();
            LoadData();
            UpdateChart();
            ShowStudentsPanel();
            WireUpEventHandlers();
        }

        private void WireUpEventHandlers()
        {
            // Сначала отписываемся от всех событий
            UnwireEventHandlers();

            // Навигация
            navStudentsButton.Click += navStudentsButton_Click;
            navStatisticsButton.Click += navStatisticsButton_Click;
            navImportExportButton.Click += navImportExportButton_Click;

            // Кнопки управления студентами
            addStudentButton.Click += addStudentButton_Click;
            editStudentButton.Click += editStudentButton_Click;
            deleteStudentButton.Click += deleteStudentButton_Click;
            saveChangesButton.Click += saveChangesButton_Click;
            loadDataButton.Click += loadDataButton_Click;

            // Фильтрация и сортировка
            sortComboBox.SelectedIndexChanged += sortComboBox_SelectedIndexChanged;
            searchTextBox.TextChanged += searchTextBox_TextChanged;
            filterCourseComboBox.SelectedIndexChanged += filterCourseComboBox_SelectedIndexChanged;
            filterGroupComboBox.SelectedIndexChanged += filterGroupComboBox_SelectedIndexChanged;

            // Импорт/экспорт
            exportCsvButton.Click += exportCsvButton_Click;
            importCsvButton.Click += importCsvButton_Click;
            exportStatsButton.Click += exportStatsButton_Click;

            // Форма
            this.FormClosing += Form1_FormClosing;

            // Обработчик изменения типа статистики
            if (statsTypeCombo != null)
            {
                statsTypeCombo.SelectedIndexChanged += StatsTypeCombo_SelectedIndexChanged;
            }
        }

        private void UnwireEventHandlers()
        {
            // Навигация
            navStudentsButton.Click -= navStudentsButton_Click;
            navStatisticsButton.Click -= navStatisticsButton_Click;
            navImportExportButton.Click -= navImportExportButton_Click;

            // Кнопки управления студентами
            addStudentButton.Click -= addStudentButton_Click;
            editStudentButton.Click -= editStudentButton_Click;
            deleteStudentButton.Click -= deleteStudentButton_Click;
            saveChangesButton.Click -= saveChangesButton_Click;
            loadDataButton.Click -= loadDataButton_Click;

            // Фильтрация и сортировка
            sortComboBox.SelectedIndexChanged -= sortComboBox_SelectedIndexChanged;
            searchTextBox.TextChanged -= searchTextBox_TextChanged;
            filterCourseComboBox.SelectedIndexChanged -= filterCourseComboBox_SelectedIndexChanged;
            filterGroupComboBox.SelectedIndexChanged -= filterGroupComboBox_SelectedIndexChanged;

            // Импорт/экспорт
            exportCsvButton.Click -= exportCsvButton_Click;
            importCsvButton.Click -= importCsvButton_Click;
            exportStatsButton.Click -= exportStatsButton_Click;

            // Форма
            this.FormClosing -= Form1_FormClosing;

            // Обработчик изменения типа статистики
            if (statsTypeCombo != null)
            {
                statsTypeCombo.SelectedIndexChanged -= StatsTypeCombo_SelectedIndexChanged;
            }
        }

        private void InitializeDataGridView()
        {
            studentsDataGridView.SelectionMode = DataGridViewSelectionMode.FullRowSelect;
            studentsDataGridView.MultiSelect = false;
            studentsDataGridView.ReadOnly = true;
            studentsDataGridView.AutoSizeColumnsMode = DataGridViewAutoSizeColumnsMode.Fill;
            studentsDataGridView.RowHeadersVisible = false;

            studentsDataGridView.Columns.Add("Number", "ID");
            studentsDataGridView.Columns.Add("LastName", "Фамилия");
            studentsDataGridView.Columns.Add("FirstName", "Имя");
            studentsDataGridView.Columns.Add("MiddleName", "Отчество");
            studentsDataGridView.Columns.Add("Course", "Курс");
            studentsDataGridView.Columns.Add("Group", "Группа");
            studentsDataGridView.Columns.Add("BirthDate", "Дата рождения");
            studentsDataGridView.Columns.Add("Email", "Email");
            studentsDataGridView.Columns.Add("Phone", "Телефон");
        }

        private void InitializeChart()
        {
            studentsChart.Series.Clear();
            var series = new Series("Студенты");
            series.ChartType = SeriesChartType.Column;
            studentsChart.Series.Add(series);
            studentsChart.Palette = ChartColorPalette.BrightPastel;
            studentsChart.Titles.Add("Распределение студентов по курсам");
            studentsChart.ChartAreas[0].AxisX.Title = "Курс";
            studentsChart.ChartAreas[0].AxisY.Title = "Количество студентов";
        }

        private void LoadData()
        {
            if (File.Exists(currentDataFile))
            {
                try
                {
                    string json = File.ReadAllText(currentDataFile, Encoding.UTF8);
                    students = JsonConvert.DeserializeObject<List<Student>>(json) ?? new List<Student>();
                    RefreshDataGridView();
                    dataChanged = false;
                }
                catch (Exception ex)
                {
                    MessageBox.Show($"Ошибка при загрузке данных: {ex.Message}", "Ошибка",
                        MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
            }
        }

        private void SaveData()
        {
            try
            {
                string json = JsonConvert.SerializeObject(students, Formatting.Indented);
                File.WriteAllText(currentDataFile, json, Encoding.UTF8);
                dataChanged = false;
                MessageBox.Show("Данные успешно сохранены", "Успех",
                    MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            catch (Exception ex)
            {
                MessageBox.Show($"Ошибка при сохранении данных: {ex.Message}", "Ошибка",
                    MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void RefreshDataGridView()
        {
            studentsDataGridView.Rows.Clear();

            int rowNumber = 1;
            foreach (var student in students)
            {
                studentsDataGridView.Rows.Add(
                    rowNumber++, // Порядковый номер
                    student.LastName,
                    student.FirstName,
                    student.MiddleName,
                    student.Course,
                    student.Group,
                    student.BirthDate.ToString("dd.MM.yyyy"),
                    student.Email,
                    student.Phone
                );
            }

            UpdateFilterComboBoxes();
            UpdateChart();
        }

        private void UpdateFilterComboBoxes()
        {
            filterCourseComboBox.Items.Clear();
            filterCourseComboBox.Items.Add("Все курсы");

            foreach (var course in students.Where(s => s.Course != 0).Select(s => s.Course).Distinct().OrderBy(c => c))
            {
                filterCourseComboBox.Items.Add(course);
            }
            filterCourseComboBox.SelectedIndex = 0;

            filterGroupComboBox.Items.Clear();
            filterGroupComboBox.Items.Add("Все группы");

            foreach (var group in students.Where(s => !string.IsNullOrEmpty(s.Group)).Select(s => s.Group).Distinct().OrderBy(g => g))
            {
                filterGroupComboBox.Items.Add(group);
            }
            filterGroupComboBox.SelectedIndex = 0;
        }

        private void UpdateChart()
        {
            if (studentsChart.Series.Count == 0 || students == null) return;

            var series = studentsChart.Series[0];
            series.Points.Clear();
            studentsChart.Titles.Clear();

            // Очищаем предыдущие настройки осей
            studentsChart.ChartAreas[0].AxisX.Title = "";
            studentsChart.ChartAreas[0].AxisY.Title = "Количество студентов";

            switch (statsTypeCombo?.SelectedIndex ?? 0)
            {
                case 0: // По курсам
                    var byCourse = students.GroupBy(s => s.Course)
                                         .Select(g => new { Name = $"Курс {g.Key}", Count = g.Count() })
                                         .OrderBy(x => x.Name);

                    foreach (var item in byCourse)
                    {
                        AddChartPoint(series, item.Name, item.Count, 0);
                    }
                    studentsChart.Titles.Add("РАСПРЕДЕЛЕНИЕ ПО КУРСАМ");
                    studentsChart.ChartAreas[0].AxisX.Title = "Курс";
                    break;

                case 1: // По группам
                    var byGroup = students.GroupBy(s => s.Group)
                                         .Select(g => new { Name = g.Key, Count = g.Count() })
                                         .OrderBy(x => x.Name);

                    foreach (var item in byGroup)
                    {
                        AddChartPoint(series, item.Name, item.Count, 1);
                    }
                    studentsChart.Titles.Add("РАСПРЕДЕЛЕНИЕ ПО ГРУППАМ");
                    studentsChart.ChartAreas[0].AxisX.Title = "Группа";
                    break;

                case 2: // По возрасту
                    var byAge = students.GroupBy(s => (DateTime.Now.Year - s.BirthDate.Year))
                                       .Select(g => new { Name = $"{g.Key} лет", Count = g.Count() })
                                       .OrderBy(x => x.Name);

                    foreach (var item in byAge)
                    {
                        AddChartPoint(series, item.Name, item.Count, 2);
                    }
                    studentsChart.Titles.Add("РАСПРЕДЕЛЕНИЕ ПО ВОЗРАСТУ");
                    studentsChart.ChartAreas[0].AxisX.Title = "Возраст";
                    break;

                case 3: // По году поступления
                    var byYear = students.GroupBy(s => s.BirthDate.Year)
                                        .Select(g => new { Name = g.Key.ToString(), Count = g.Count() })
                                        .OrderBy(x => x.Name);

                    foreach (var item in byYear)
                    {
                        AddChartPoint(series, item.Name, item.Count, 3);
                    }
                    studentsChart.Titles.Add("РАСПРЕДЕЛЕНИЕ ПО ГОДУ ПОСТУПЛЕНИЯ");
                    studentsChart.ChartAreas[0].AxisX.Title = "Год поступления";
                    break;
            }

            if (studentsChart.Titles.Count > 0)
            {
                studentsChart.Titles[0].Font = new Font("Segoe UI", 12, FontStyle.Bold);
                studentsChart.Titles[0].ForeColor = Color.White;
            }
        }

        private void AddChartPoint(Series series, string name, int value, int colorIndex)
        {
            DataPoint point = new DataPoint();
            point.SetValueXY(name, value);
            point.Color = GetChartColor(colorIndex);
            point.Label = value.ToString();
            series.Points.Add(point);
        }

        private Color GetChartColor(int index)
        {
            Color[] colors =
            {
                Color.FromArgb(0, 122, 204),
                Color.FromArgb(106, 168, 79),
                Color.FromArgb(216, 67, 21),
                Color.FromArgb(142, 68, 173),
                Color.FromArgb(243, 156, 18)
            };
            return colors[index % colors.Length];
        }

        private void ShowStudentsPanel()
        {
            studentsPanel.Visible = true;
            statisticsPanel.Visible = false;
            importExportPanel.Visible = false;
        }

        private void ShowStatisticsPanel()
        {
            studentsPanel.Visible = false;
            statisticsPanel.Visible = true;
            importExportPanel.Visible = false;
            UpdateChart();
        }

        private void ShowImportExportPanel()
        {
            studentsPanel.Visible = false;
            statisticsPanel.Visible = false;
            importExportPanel.Visible = true;
        }

        private void ShowStudentEditForm(Student student = null, bool isEditMode = false)
        {
            using (var form = new StudentEditForm(student, isEditMode))
            {
                if (form.ShowDialog() == DialogResult.OK)
                {
                    if (isEditMode)
                    {
                        var index = students.FindIndex(s => s.Id == form.Student.Id);
                        if (index != -1) students[index] = form.Student;
                    }
                    else
                    {
                        students.Add(form.Student);
                    }

                    dataChanged = true;
                    RefreshDataGridView();
                }
            }
        }

        private void ExportToCsv(string filePath)
        {
            try
            {
                using (var writer = new StreamWriter(filePath, false, Encoding.UTF8))
                {
                    writer.WriteLine("Фамилия;Имя;Отчество;Курс;Группа;Дата рождения;Email;Телефон");

                    foreach (var student in students)
                    {
                        writer.WriteLine(
                            $"{EscapeCsvField(student.LastName)};" +
                            $"{EscapeCsvField(student.FirstName)};" +
                            $"{EscapeCsvField(student.MiddleName)};" +
                            $"{student.Course};" +
                            $"{EscapeCsvField(student.Group)};" +
                            $"{student.BirthDate:dd.MM.yyyy};" +
                            $"{EscapeCsvField(student.Email)};" +
                            $"{EscapeCsvField(student.Phone)}"
                        );
                    }
                }

                MessageBox.Show("Данные успешно экспортированы в CSV", "Успех",
                    MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            catch (Exception ex)
            {
                MessageBox.Show($"Ошибка при экспорте данных: {ex.Message}", "Ошибка",
                    MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private string EscapeCsvField(string field)
        {
            if (string.IsNullOrEmpty(field))
                return "";

            if (field.Contains(";") || field.Contains("\"") || field.Contains("\n"))
                return $"\"{field.Replace("\"", "\"\"")}\"";

            return field;
        }

        private void ImportFromCsv(string filePath)
        {
            try
            {
                var newStudents = new List<Student>();
                var lines = File.ReadAllLines(filePath, Encoding.UTF8);

                for (int i = 1; i < lines.Length; i++)
                {
                    var line = lines[i];
                    var values = ParseCsvLine(line);

                    if (values.Length >= 8)
                    {
                        try
                        {
                            var student = new Student
                            {
                                LastName = values[0],
                                FirstName = values[1],
                                MiddleName = values[2],
                                Course = int.Parse(values[3]),
                                Group = values[4],
                                BirthDate = DateTime.Parse(values[5]),
                                Email = values[6],
                                Phone = values[7]
                            };

                            if (ValidateStudent(student))
                            {
                                newStudents.Add(student);
                            }
                        }
                        catch
                        {
                            // Пропускаем некорректные строки
                        }
                    }
                }

                if (newStudents.Count > 0)
                {
                    students.AddRange(newStudents);
                    dataChanged = true;
                    RefreshDataGridView();
                    MessageBox.Show($"Успешно импортировано {newStudents.Count} студентов",
                        "Успех", MessageBoxButtons.OK, MessageBoxIcon.Information);
                }
                else
                {
                    MessageBox.Show("Не удалось импортировать ни одного студента",
                        "Предупреждение", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show($"Ошибка при импорте данных: {ex.Message}", "Ошибка",
                    MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private string[] ParseCsvLine(string line)
        {
            var result = new List<string>();
            var inQuotes = false;
            var currentField = new StringBuilder();

            for (int i = 0; i < line.Length; i++)
            {
                char c = line[i];

                if (c == '"')
                {
                    if (inQuotes && i < line.Length - 1 && line[i + 1] == '"')
                    {
                        currentField.Append('"');
                        i++;
                    }
                    else
                    {
                        inQuotes = !inQuotes;
                    }
                }
                else if (c == ';' && !inQuotes)
                {
                    result.Add(currentField.ToString());
                    currentField.Clear();
                }
                else
                {
                    currentField.Append(c);
                }
            }

            result.Add(currentField.ToString());
            return result.ToArray();
        }

        private bool ValidateStudent(Student student)
        {
            if (string.IsNullOrWhiteSpace(student.LastName)) return false;
            if (string.IsNullOrWhiteSpace(student.FirstName)) return false;
            if (string.IsNullOrWhiteSpace(student.MiddleName)) return false;
            if (student.Course < 1 || student.Course > 5) return false;
            if (string.IsNullOrWhiteSpace(student.Group)) return false;
            if (student.BirthDate < new DateTime(1991, 12, 25) || student.BirthDate > DateTime.Today) return false;
            if (string.IsNullOrWhiteSpace(student.Email)) return false;
            if (string.IsNullOrWhiteSpace(student.Phone)) return false;

            if (!Regex.IsMatch(student.Email, @"^[^@]{3,}@(yandex\.ru|gmail\.com|icloud\.com)$", RegexOptions.IgnoreCase))
                return false;

            if (!Regex.IsMatch(student.Phone, @"^\+7-\d{3}-\d{3}-\d{2}-\d{2}$"))
                return false;

            return true;
        }

        #region Event Handlers
        private void navStudentsButton_Click(object sender, EventArgs e)
        {
            ShowStudentsPanel();
        }

        private void navStatisticsButton_Click(object sender, EventArgs e)
        {
            ShowStatisticsPanel();
        }

        private void navImportExportButton_Click(object sender, EventArgs e)
        {
            ShowImportExportPanel();
        }

        private void addStudentButton_Click(object sender, EventArgs e)
        {
            ShowStudentEditForm();
        }

        private void editStudentButton_Click(object sender, EventArgs e)
        {
            if (studentsDataGridView.SelectedRows.Count > 0)
            {
                // Теперь получаем студента по индексу строки
                int selectedIndex = studentsDataGridView.SelectedRows[0].Index;
                if (selectedIndex >= 0 && selectedIndex < students.Count)
                {
                    var student = students[selectedIndex];
                    ShowStudentEditForm(student, true);
                }
            }
            else
            {
                MessageBox.Show("Пожалуйста, выберите студента для редактирования", "Предупреждение",
                    MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
        }

        private void deleteStudentButton_Click(object sender, EventArgs e)
        {
            if (studentsDataGridView.SelectedRows.Count > 0)
            {
                var result = MessageBox.Show("Вы уверены, что хотите удалить выбранного студента?",
                    "Подтверждение", MessageBoxButtons.YesNo, MessageBoxIcon.Question);
                if (result == DialogResult.Yes)
                {
                    int selectedIndex = studentsDataGridView.SelectedRows[0].Index;
                    if (selectedIndex >= 0 && selectedIndex < students.Count)
                    {
                        students.RemoveAt(selectedIndex);
                        dataChanged = true;
                        RefreshDataGridView();
                    }
                }
            }
            else
            {
                MessageBox.Show("Пожалуйста, выберите студента для удаления", "Предупреждение",
                    MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
        }

        private void saveChangesButton_Click(object sender, EventArgs e)
        {
            SaveData();
        }

        private void loadDataButton_Click(object sender, EventArgs e)
        {
            if (dataChanged)
            {
                var result = MessageBox.Show("Есть несохраненные изменения. Хотите сохранить перед загрузкой новых данных?",
                    "Предупреждение", MessageBoxButtons.YesNoCancel, MessageBoxIcon.Warning);
                if (result == DialogResult.Yes)
                {
                    SaveData();
                }
                else if (result == DialogResult.Cancel)
                {
                    return;
                }
            }

            LoadData();
        }

        private void sortComboBox_SelectedIndexChanged(object sender, EventArgs e)
        {
            if (sortComboBox.SelectedIndex == -1) return;

            switch (sortComboBox.SelectedIndex)
            {
                case 0: students = students.OrderBy(s => s.LastName).ToList(); break;
                case 1: students = students.OrderByDescending(s => s.LastName).ToList(); break;
                case 2: students = students.OrderBy(s => s.Group).ToList(); break;
                case 3: students = students.OrderByDescending(s => s.Group).ToList(); break;
                case 4: students = students.OrderBy(s => s.Course).ToList(); break;
                case 5: students = students.OrderByDescending(s => s.Course).ToList(); break;
                case 6: students = students.OrderBy(s => s.BirthDate).ToList(); break;
                case 7: students = students.OrderByDescending(s => s.BirthDate).ToList(); break;
            }

            RefreshDataGridView();
        }

        private void searchTextBox_TextChanged(object sender, EventArgs e)
        {
            var searchText = searchTextBox.Text.ToLower();
            if (string.IsNullOrWhiteSpace(searchText))
            {
                RefreshDataGridView();
                return;
            }

            var filteredStudents = students.Where(s =>
                s.LastName.ToLower().Contains(searchText) ||
                s.FirstName.ToLower().Contains(searchText)
            ).ToList();

            studentsDataGridView.Rows.Clear();
            int rowNumber = 1;
            foreach (var student in filteredStudents)
            {
                studentsDataGridView.Rows.Add(
                    rowNumber++,
                    student.LastName,
                    student.FirstName,
                    student.MiddleName,
                    student.Course,
                    student.Group,
                    student.BirthDate.ToString("dd.MM.yyyy"),
                    student.Email,
                    student.Phone
                );
            }
        }

        private void filterCourseComboBox_SelectedIndexChanged(object sender, EventArgs e)
        {
            ApplyFilters();
        }

        private void filterGroupComboBox_SelectedIndexChanged(object sender, EventArgs e)
        {
            ApplyFilters();
        }

        private void ApplyFilters()
        {
            var filteredStudents = students.AsEnumerable();

            if (filterCourseComboBox.SelectedIndex > 0)
            {
                int selectedCourse = (int)filterCourseComboBox.SelectedItem;
                filteredStudents = filteredStudents.Where(s => s.Course == selectedCourse);
            }

            if (filterGroupComboBox.SelectedIndex > 0)
            {
                string selectedGroup = (string)filterGroupComboBox.SelectedItem;
                filteredStudents = filteredStudents.Where(s => s.Group == selectedGroup);
            }

            studentsDataGridView.Rows.Clear();
            int rowNumber = 1;
            foreach (var student in filteredStudents.ToList())
            {
                studentsDataGridView.Rows.Add(
                    rowNumber++,
                    student.LastName,
                    student.FirstName,
                    student.MiddleName,
                    student.Course,
                    student.Group,
                    student.BirthDate.ToString("dd.MM.yyyy"),
                    student.Email,
                    student.Phone
                );
            }
        }

        private void exportCsvButton_Click(object sender, EventArgs e)
        {
            using (var saveFileDialog = new SaveFileDialog())
            {
                saveFileDialog.Filter = "CSV файлы (*.csv)|*.csv";
                saveFileDialog.Title = "Экспорт данных в CSV";
                saveFileDialog.FileName = "students_export.csv";

                if (saveFileDialog.ShowDialog() == DialogResult.OK)
                {
                    ExportToCsv(saveFileDialog.FileName);
                }
            }
        }

        private void importCsvButton_Click(object sender, EventArgs e)
        {
            using (var openFileDialog = new OpenFileDialog())
            {
                openFileDialog.Filter = "CSV файлы (*.csv)|*.csv";
                openFileDialog.Title = "Импорт данных из CSV";

                if (openFileDialog.ShowDialog() == DialogResult.OK)
                {
                    ImportFromCsv(openFileDialog.FileName);
                }
            }
        }

        private void exportStatsButton_Click(object sender, EventArgs e)
        {
            using (var saveFileDialog = new SaveFileDialog())
            {
                saveFileDialog.Filter = "PNG изображения (*.png)|*.png";
                saveFileDialog.Title = "Экспорт статистики";
                saveFileDialog.FileName = "students_stats.png";

                if (saveFileDialog.ShowDialog() == DialogResult.OK)
                {
                    try
                    {
                        studentsChart.SaveImage(saveFileDialog.FileName, ChartImageFormat.Png);
                        MessageBox.Show("Статистика успешно экспортирована", "Успех",
                            MessageBoxButtons.OK, MessageBoxIcon.Information);
                    }
                    catch (Exception ex)
                    {
                        MessageBox.Show($"Ошибка при экспорте статистики: {ex.Message}", "Ошибка",
                            MessageBoxButtons.OK, MessageBoxIcon.Error);
                    }
                }
            }
        }

        private void StatsTypeCombo_SelectedIndexChanged(object sender, EventArgs e)
        {
            UpdateChart();
        }

        private void Form1_FormClosing(object sender, FormClosingEventArgs e)
        {
            if (dataChanged)
            {
                var result = MessageBox.Show("Есть несохраненные изменения. Хотите сохранить перед выходом?",
                    "Предупреждение", MessageBoxButtons.YesNoCancel, MessageBoxIcon.Warning);
                if (result == DialogResult.Yes)
                {
                    SaveData();
                }
                else if (result == DialogResult.Cancel)
                {
                    e.Cancel = true;
                }
            }
        }
        #endregion

        private void titleLabel_Click(object sender, EventArgs e)
        {
        }
    }

    public class Student
    {
        public Guid Id { get; set; } = Guid.NewGuid();
        public string LastName { get; set; }
        public string FirstName { get; set; }
        public string MiddleName { get; set; }
        public int Course { get; set; }
        public string Group { get; set; }
        public DateTime BirthDate { get; set; }
        public string Email { get; set; }
        public string Phone { get; set; }
    }
}