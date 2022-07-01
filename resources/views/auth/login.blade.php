<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            min-height: 100vh;
        }
        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .social-btn {
            text-decoration: none;
            color: #1a202c;
            border: 1px solid #1a202c;
            background: transparent;
            border-radius: 0.25rem;
            padding: 0.5rem;
        }
        .social-btn:hover {
            color: white;
            background: #1a202c;
        }
    </style>
</head>
<body class="antialiased">
<div class="wrapper">
    <div>
        <a class="social-btn" href="http://localhost:8080/auth/redirect?provider=google">Login with Google</a>
    </div>
</div>
</body>
</html>
