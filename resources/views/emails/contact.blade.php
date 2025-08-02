<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            padding: 20px;
            color: #333;
        }

        .container {
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2563eb;
            border-bottom: 1px solid #eee;
            padding-bottom: 8px;
        }

        p {
            margin: 10px 0;
            font-size: 15px;
        }

        strong {
            color: #111;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>📬 New Message from SD Stroke Website Contact Form</h2>
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Subject:</strong> {{ $subject }}</p>
        <p><strong>Message:</strong> {{ $message }}</p>
    </div>
</body>

</html>