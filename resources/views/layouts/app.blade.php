<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Aplikasi Mahasiswa')</title>
    <style>
        body {
            font-family: sans-serif;
            background-color:rgb(236, 142, 180);
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1, h2, h3 {
            color: #d63384;
        }
        a.button, button {
            background-color: #ff80ab;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            margin-right: 5px;
            cursor: pointer;
        }
        a.button:hover, button:hover {
            background-color: #d63384;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 16px;
            background-color: #fff0f5;
        }
        th, td {
            border: 1px solid #f4a9c4;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #fcd5e5;
        }
        .form-group {
            margin-bottom: 12px;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #f4a9c4;
            border-radius: 4px;
            background-color: #fff0f5;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>
