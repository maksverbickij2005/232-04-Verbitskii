using System;
using System.Drawing;
using System.Text.RegularExpressions;
using System.Windows.Forms;

namespace StudentManagementApp
{
    public partial class StudentEditForm : Form
    {
        public Student Student { get; private set; }
        private bool isEditMode;

        // Элементы управления
        private TextBox lastNameTextBox;
        private TextBox firstNameTextBox;
        private TextBox middleNameTextBox;
        private NumericUpDown courseNumericUpDown;
        private ComboBox groupComboBox;
        private DateTimePicker birthDatePicker;
        private TextBox emailTextBox;
        private MaskedTextBox phoneMaskedTextBox;
        private Button saveButton;
        private Button cancelButton;
        private Panel headerPanel;
        private Label titleLabel;
        private Panel contentPanel;
        private Panel footerPanel;

        public StudentEditForm(Student student = null, bool isEditMode = false)
        {
            this.isEditMode = isEditMode;
            Student = student ?? new Student();

            InitializeComponent();
            InitializeUI();
            ApplyPremiumStyling();

            if (student != null)
            {
                LoadStudentData();
            }
        }

        private void InitializeComponent()
        {
            this.SuspendLayout();
            this.ClientSize = new Size(500, 650);
            this.FormBorderStyle = FormBorderStyle.FixedDialog;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.StartPosition = FormStartPosition.CenterParent;
            this.BackColor = Color.White;
            this.Padding = new Padding(0);
            this.ResumeLayout(false);
        }

        private void InitializeUI()
        {
            // Header Panel
            headerPanel = new Panel
            {
                Dock = DockStyle.Top,
                Height = 70,
                BackColor = Color.FromArgb(44, 62, 80)
            };

            titleLabel = new Label
            {
                Text = isEditMode ? "РЕДАКТИРОВАНИЕ СТУДЕНТА" : "НОВЫЙ СТУДЕНТ",
                Dock = DockStyle.Fill,
                Font = new Font("Segoe UI Semibold", 16),
                ForeColor = Color.White,
                TextAlign = ContentAlignment.MiddleCenter,
                Padding = new Padding(0, 20, 0, 0)
            };
            headerPanel.Controls.Add(titleLabel);

            // Content Panel
            contentPanel = new Panel
            {
                Dock = DockStyle.Fill,
                AutoScroll = true,
                Padding = new Padding(40, 20, 40, 20)
            };

            // Footer Panel
            footerPanel = new Panel
            {
                Dock = DockStyle.Bottom,
                Height = 80,
                BackColor = Color.FromArgb(245, 245, 247)
            };

            // Добавляем панели на форму
            this.Controls.Add(contentPanel);
            this.Controls.Add(footerPanel);
            this.Controls.Add(headerPanel);

            // Создаем элементы формы
            CreateFormFields();
            CreateButtons();
        }

        private void CreateFormFields()
        {
            int yPos = 20;
            int fieldHeight = 70;
            int spacing = 15;

            // Last Name
            lastNameTextBox = CreateTextBox("Фамилия", yPos);
            yPos += fieldHeight + spacing;

            // First Name
            firstNameTextBox = CreateTextBox("Имя", yPos);
            yPos += fieldHeight + spacing;

            // Middle Name
            middleNameTextBox = CreateTextBox("Отчество", yPos);
            yPos += fieldHeight + spacing;

            // Course
            var courseLabel = CreateLabel("Курс", yPos);
            contentPanel.Controls.Add(courseLabel);

            courseNumericUpDown = new NumericUpDown
            {
                Location = new Point(40, yPos + 25),
                Size = new Size(100, 30),
                Minimum = 1,
                Maximum = 5,
                Value = Student.Course > 0 ? Student.Course : 1,
                Font = new Font("Segoe UI", 10)
            };
            contentPanel.Controls.Add(courseNumericUpDown);
            yPos += fieldHeight + spacing;

            // Group
            var groupLabel = CreateLabel("Группа", yPos);
            contentPanel.Controls.Add(groupLabel);

            groupComboBox = new ComboBox
            {
                Location = new Point(40, yPos + 25),
                Size = new Size(200, 30),
                DropDownStyle = ComboBoxStyle.DropDownList,
                Font = new Font("Segoe UI", 10)
            };
            groupComboBox.Items.AddRange(new[] { "ИТ-101", "ИТ-102", "ИТ-201", "ИТ-202", "ИТ-301", "ИТ-302", "ИТ-231", "ИТ-232", "ИТ-131", "ИТ-132", "ИТ-321" });
            if (!string.IsNullOrEmpty(Student.Group))
                groupComboBox.SelectedItem = Student.Group;
            contentPanel.Controls.Add(groupComboBox);
            yPos += fieldHeight + spacing;

            // Birth Date
            // Birth Date
            var birthDateLabel = CreateLabel("Дата рождения", yPos);
            contentPanel.Controls.Add(birthDateLabel);

            // Устанавливаем минимальную и максимальную даты
            DateTime minDate = new DateTime(1991, 12, 25);
            DateTime maxDate = DateTime.Today;

            birthDatePicker = new DateTimePicker
            {
                Location = new Point(40, yPos + 25),
                Size = new Size(200, 30),
                Format = DateTimePickerFormat.Short,
                MinDate = minDate,
                MaxDate = maxDate,
                Font = new Font("Segoe UI", 10)
            };

            // Устанавливаем значение с проверкой границ
            if (Student.BirthDate != default)
            {
                if (Student.BirthDate < minDate)
                    birthDatePicker.Value = minDate;
                else if (Student.BirthDate > maxDate)
                    birthDatePicker.Value = maxDate;
                else
                    birthDatePicker.Value = Student.BirthDate;
            }
            else
            {
                birthDatePicker.Value = maxDate; // или minDate, в зависимости от ваших требований
            }

            contentPanel.Controls.Add(birthDatePicker);
            yPos += fieldHeight + spacing;
            // Email
            emailTextBox = CreateTextBox("Email", yPos);
            yPos += fieldHeight + spacing;

            // Phone
            var phoneLabel = CreateLabel("Телефон", yPos);
            contentPanel.Controls.Add(phoneLabel);

            phoneMaskedTextBox = new MaskedTextBox
            {
                Location = new Point(40, yPos + 25),
                Size = new Size(200, 30),
                Mask = "+7 (000) 000-00-00",
                Text = !string.IsNullOrEmpty(Student.Phone) ? Student.Phone : "+7 ",
                Font = new Font("Segoe UI", 10)
            };
            contentPanel.Controls.Add(phoneMaskedTextBox);
        }

        private TextBox CreateTextBox(string labelText, int yPos)
        {
            var label = CreateLabel(labelText, yPos);
            contentPanel.Controls.Add(label);

            var textBox = new TextBox
            {
                Location = new Point(40, yPos + 25),
                Size = new Size(400, 30),
                Font = new Font("Segoe UI", 10)
            };
            contentPanel.Controls.Add(textBox);

            return textBox;
        }

        private Label CreateLabel(string text, int yPos)
        {
            return new Label
            {
                Text = text,
                Location = new Point(40, yPos),
                Font = new Font("Segoe UI Semibold", 10),
                ForeColor = Color.FromArgb(64, 64, 64),
                AutoSize = true
            };
        }

        private void CreateButtons()
        {
            saveButton = new Button
            {
                Text = "СОХРАНИТЬ",
                Size = new Size(150, 40),
                Location = new Point(footerPanel.Width - 320, 20),
                BackColor = Color.FromArgb(0, 122, 204),
                ForeColor = Color.White,
                FlatStyle = FlatStyle.Flat,
                Font = new Font("Segoe UI Semibold", 10),
                Cursor = Cursors.Hand
            };
            saveButton.FlatAppearance.BorderSize = 0;
            saveButton.Click += SaveButton_Click;

            cancelButton = new Button
            {
                Text = "ОТМЕНА",
                Size = new Size(150, 40),
                Location = new Point(footerPanel.Width - 160, 20),
                BackColor = Color.FromArgb(230, 230, 230),
                ForeColor = Color.FromArgb(64, 64, 64),
                FlatStyle = FlatStyle.Flat,
                Font = new Font("Segoe UI Semibold", 10),
                Cursor = Cursors.Hand
            };
            cancelButton.FlatAppearance.BorderSize = 0;
            cancelButton.Click += (s, e) => { this.DialogResult = DialogResult.Cancel; this.Close(); };

            footerPanel.Controls.Add(saveButton);
            footerPanel.Controls.Add(cancelButton);
        }

        private void ApplyPremiumStyling()
        {
            // Стиль для текстовых полей
            foreach (Control control in contentPanel.Controls)
            {
                if (control is TextBox textBox)
                {
                    textBox.BorderStyle = BorderStyle.FixedSingle;
                    textBox.BackColor = Color.White;
                    textBox.ForeColor = Color.FromArgb(64, 64, 64);
                }
                else if (control is ComboBox comboBox)
                {
                    comboBox.FlatStyle = FlatStyle.Flat;
                    comboBox.BackColor = Color.White;
                    comboBox.ForeColor = Color.FromArgb(64, 64, 64);
                }
                else if (control is DateTimePicker dateTimePicker)
                {
                    dateTimePicker.CalendarFont = new Font("Segoe UI", 10);
                    dateTimePicker.CalendarForeColor = Color.FromArgb(64, 64, 64);
                    dateTimePicker.CalendarTitleBackColor = Color.FromArgb(44, 62, 80);
                    dateTimePicker.CalendarTitleForeColor = Color.White;
                }
                else if (control is NumericUpDown numericUpDown)
                {
                    numericUpDown.BorderStyle = BorderStyle.FixedSingle;
                    numericUpDown.BackColor = Color.White;
                    numericUpDown.ForeColor = Color.FromArgb(64, 64, 64);
                }
                else if (control is MaskedTextBox maskedTextBox)
                {
                    maskedTextBox.BorderStyle = BorderStyle.FixedSingle;
                    maskedTextBox.BackColor = Color.White;
                    maskedTextBox.ForeColor = Color.FromArgb(64, 64, 64);
                }
            }
        }

        private void SaveButton_Click(object sender, EventArgs e)
        {
            if (!ValidateForm())
            {
                this.DialogResult = DialogResult.None;
                return;
            }

            SaveStudentData();
            this.DialogResult = DialogResult.OK;
            this.Close();
        }

        private bool ValidateForm()
        {
            bool isValid = true;

            if (string.IsNullOrWhiteSpace(lastNameTextBox.Text))
            {
                MessageBox.Show("Пожалуйста, введите фамилию", "Ошибка", MessageBoxButtons.OK, MessageBoxIcon.Error);
                lastNameTextBox.Focus();
                isValid = false;
            }

            if (string.IsNullOrWhiteSpace(firstNameTextBox.Text))
            {
                MessageBox.Show("Пожалуйста, введите имя", "Ошибка", MessageBoxButtons.OK, MessageBoxIcon.Error);
                firstNameTextBox.Focus();
                isValid = false;
            }

            if (groupComboBox.SelectedIndex == -1)
            {
                MessageBox.Show("Пожалуйста, выберите группу", "Ошибка", MessageBoxButtons.OK, MessageBoxIcon.Error);
                groupComboBox.Focus();
                isValid = false;
            }

            if (!IsValidEmail(emailTextBox.Text))
            {
                MessageBox.Show("Пожалуйста, введите корректный email", "Ошибка", MessageBoxButtons.OK, MessageBoxIcon.Error);
                emailTextBox.Focus();
                isValid = false;
            }

            if (!phoneMaskedTextBox.MaskCompleted)
            {
                MessageBox.Show("Пожалуйста, введите корректный номер телефона", "Ошибка", MessageBoxButtons.OK, MessageBoxIcon.Error);
                phoneMaskedTextBox.Focus();
                isValid = false;
            }

            if (birthDatePicker.Value > DateTime.Today)
            {
                MessageBox.Show("Дата рождения не может быть в будущем", "Ошибка", MessageBoxButtons.OK, MessageBoxIcon.Error);
                birthDatePicker.Focus();
                isValid = false;
            }

            return isValid;
        }

        private bool IsValidEmail(string email)
        {
            try
            {
                return Regex.IsMatch(email,
                    @"^[^@\s]+@[^@\s]+\.[^@\s]+$",
                    RegexOptions.IgnoreCase);
            }
            catch
            {
                return false;
            }
        }

        private void LoadStudentData()
        {
            lastNameTextBox.Text = Student.LastName;
            firstNameTextBox.Text = Student.FirstName;
            middleNameTextBox.Text = Student.MiddleName;
            courseNumericUpDown.Value = Student.Course;
            if (!string.IsNullOrEmpty(Student.Group))
                groupComboBox.SelectedItem = Student.Group;
            birthDatePicker.Value = Student.BirthDate;
            emailTextBox.Text = Student.Email;
            phoneMaskedTextBox.Text = Student.Phone;
        }

        private void SaveStudentData()
        {
            Student.LastName = lastNameTextBox.Text.Trim();
            Student.FirstName = firstNameTextBox.Text.Trim();
            Student.MiddleName = middleNameTextBox.Text.Trim();
            Student.Course = (int)courseNumericUpDown.Value;
            Student.Group = groupComboBox.SelectedItem?.ToString() ?? "";
            Student.BirthDate = birthDatePicker.Value;
            Student.Email = emailTextBox.Text.Trim();
            Student.Phone = phoneMaskedTextBox.Text;
        }
    }
}