<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        /* General styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Heading styles */
        h2 {
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 20px;
        }

        /* Paragraph styles */
        p {
            color: #7f8c8d;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        /* Button styles */
        .cta-button {
            background-color: purple;
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .cta-button:hover {
            background-color: #9b59b6;
        }

        .text-btn{
            color: white
        }

        /* Footer styles */
        .footer {
            text-align: center;
            font-size: 14px;
            color: #bdc3c7;
            margin-top: 30px;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .container {
                padding: 30px;
            }
            h2 {
                font-size: 24px;
            }
            p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Thank You for Reaching Out!</h2>
        <p>We have received your contact form submission and will get back to you shortly. We appreciate your interest and will be in touch soon.</p>

        <!-- Call-to-action button (optional) -->
        <a href="{{route('home')}}" class="cta-button"><span class="text-btn">Visit Our Website</span></a>

        <div class="footer">
            <p>If you have any further questions, feel free to <a href="{{route('contact.index')}}">Contact Us</a>.</p>
        </div>
    </div>
</body>
</html>
