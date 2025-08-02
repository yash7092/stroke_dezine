<<<<<<< HEAD
# sd_stroke_dezine
=======
# SD Stroke Design Project

SD Stroke Design is a professional web-based contact platform created for a creative design agency. Built using Laravel 11 and integrated with PHPMailer, the site allows potential clients to easily submit design inquiries via a secure and responsive contact form. Messages are instantly delivered to the agency's inbox through Gmail SMTP, without requiring any database.

This project focuses on clean UI, mobile responsiveness, and reliable message handling to ensure a seamless communication channel between clients and the agency.

# 📨 SD Stroke – Laravel 11 Contact Form with PHPMailer

This project is a Laravel 11 application with a simple frontend and a fully functional contact form using **PHPMailer** to send emails via **Gmail SMTP**.  
No database is used. The form submits via AJAX and delivers messages to a Gmail inbox.

---

## 🚀 Features

- Laravel 11 (Blade templating)
- PHPMailer integration via Gmail SMTP
- Frontend: HTML/CSS/JS with AJAX
- JSON response with success popup
- No database or migrations needed

---

## 🧰 Technologies Used

- Laravel 11
- PHPMailer
- Blade templates
- JavaScript (AJAX)
- Gmail SMTP

---

## 📦 Installation Guide

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/sd_stroke.git
cd sd_stroke
```

### 2. Install Laravel & PHPMailer

```bash
composer install
composer require phpmailer/phpmailer
```

### 3. Create .env File

```bash
copy .env.example .env
php artisan key:generate
```

Update your `.env` file and add:

```env
MAIL_SMTP_HOST=smtp.gmail.com
MAIL_SMTP_PORT=587
MAIL_SMTP_ENCRYPTION=tls
MAIL_SMTP_USERNAME=your-email@gmail.com
MAIL_SMTP_PASSWORD=your-app-password
MAIL_SENDER_NAME="Website Contact Form"
MAIL_RECEIVER_EMAIL=your-email@gmail.com

```

🔐 **Use a Gmail App Password** from https://myaccount.google.com/apppasswords

---

## ✉️ Configure MailController

In `app/Http/Controllers/MailController.php`, use:

```php
$mail->isSMTP();
$mail->Host       = env('MAIL_SMTP_HOST');
$mail->SMTPAuth   = true;
$mail->Username   = env('MAIL_SMTP_USERNAME');
$mail->Password   = env('MAIL_SMTP_PASSWORD');
$mail->SMTPSecure = env('MAIL_SMTP_ENCRYPTION');
$mail->Port       = env('MAIL_SMTP_PORT');

$mail->setFrom(env('MAIL_SMTP_USERNAME'), env('MAIL_SENDER_NAME'));
$mail->addReplyTo($email, $name);
$mail->addAddress(env('MAIL_RECEIVER_EMAIL'));
```

---

## ▶️ Run the Project

```bash
php artisan serve
```

Then open in your browser: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## ❌ No Database Required

No need to run migrations. This app does **not use a database**.

```bash
# Skip this
php artisan migrate
```

---

## 📁 Project Structure

```
sd_stroke/
├── app/
│   └── Http/
│       └── Controllers/
│           └── MailController.php          # Handles PHPMailer logic

├── bootstrap/
│   └── app.php                             # Laravel bootstrap file

├── public/
│   ├── css/
│   │   └── style.css                       # Custom frontend styling
│   ├── images/                             # Static images (logo, etc.)
│   └── index.php                           # Laravel public entry point

├── resources/
│   └── views/
│       ├── index.blade.php                 # Main view with contact form
│       └── emails/
│           └── contact.blade.php           # (Optional) email template

├── routes/
│   └── web.php                             # Routes: homepage and form submit

├── storage/
│   └── logs/
│       └── laravel.log                     # Laravel logs

├── .env                                    # Contains SMTP credentials
├── .gitignore                              # Ignores vendor, .env, etc.
├── composer.json                           # Laravel & PHPMailer dependencies
├── README.md                               # Project documentation
```

---

## 🛡️ License

MIT License

---

## 👨‍💻 Developed by

**Krunal Christian**  
📧 [kunal.christian234@gmail.com](mailto:kunal.christian234@gmail.com)
>>>>>>> aecb667957a196685e6b489106a369f85bd19f80
