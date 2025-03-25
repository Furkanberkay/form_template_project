
This project is a fully modular, developer-friendly, OOP-based contact form system. Built with PHP + JavaScript + AJAX + PDO + SweetAlert, it's designed to be easily integrated into any web project.

---

## 🚀 Features

- ✅ Dynamic form field configuration (controlled from a single config file)
- ✅ Secure database operations using PDO
- ✅ OOP structure for scalability and maintenance
- ✅ User-friendly alerts via SweetAlert
- ✅ AJAX submission using Fetch API
- ✅ Lightweight, portable, and easily extendable

---

## 📁 Project Structure

```
form_template_project/
├── example/
│   └── index.php                # Example page displaying the form
│
├── form_template/
│   ├── config/
│   │   └── config.php           # Defines form fields
│   │
│   ├── core/
│   │   ├── FormGenerator.php    # Class to generate the form HTML
│   │   └── FormProcessor.php    # Class to handle form submission
│   │
│   ├── database/
│   │   └── db.php               # PDO database connection
│   │
│   ├── public/
│   │   ├── css/
│   │   │   └── style.css        # CSS file
│   │   ├── js/
│   │   │   └── form-handler.js  # Handles AJAX submission
│   │   └── php/
│   │       └── process-form.php # Form processing endpoint
│
└── README.md                    # Project documentation
```

---

## ⚙️ Setup Instructions

1. Place this project into your `htdocs` folder, e.g.:
   ```
   C:\xampp\htdocs\form_template_project
   ```

2. Create the database:
   ```sql
   CREATE DATABASE contact_form_db;
   ```

3. Create the table:
   ```sql
   CREATE TABLE contact_form (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       phone VARCHAR(20) NOT NULL,
       email VARCHAR(255) NOT NULL,
       subject VARCHAR(255) NOT NULL,
       message TEXT NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

4. Open the project in your browser:
   ```
   http://localhost/form_template_project/example/index.php
   ```

---

## 🧠 Usage & Customization

### 🔧 Adding/Editing Form Fields

Modify `form_template/config/config.php` like this:
```php
return [
    'fields' => [
        'name' => ['label' => 'Full Name', 'type' => 'text', 'required' => true],
        'phone' => ['label' => 'Phone Number', 'type' => 'text', 'required' => true],
        'email' => ['label' => 'Email', 'type' => 'email', 'required' => true],
        'subject' => ['label' => 'Subject', 'type' => 'text', 'required' => true],
        'message' => ['label' => 'Message', 'type' => 'textarea', 'required' => true]
    ]
];
```

FormGenerator will automatically build the form based on this config.

---

## 🔍 Technical Overview

- **AJAX:** Form data is submitted via Fetch API in `form-handler.js`.
- **Processing:** `FormProcessor.php` validates and inserts data into the database using PDO.
- **Response:** `process-form.php` returns a JSON response.
- **Feedback:** SweetAlert displays a message to the user.

---

## 🎯 Developer Use Cases

- Add/remove form fields? → Edit `config.php`.
- Customize layout? → Update `style.css`.
- Need data export? → Extend `FormProcessor.php`.
- Want admin panel? → Fully possible.

---

## 👑 Developed By

**Furkan Berkay Ozcan**  
Crafted with passion for developers who love clean code and modularity.  
Fork it, use it, extend it. You’re welcome ✨

---

## 🛠️ Potential Improvements

- [ ] Admin panel to view/delete messages
- [ ] Email notifications on submission
- [ ] CAPTCHA support
- [ ] Multi-language support

---

## 📜 License

This project is open-source. Feel free to use, modify, and share it in your own projects.
