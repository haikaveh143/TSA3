<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - TSA3</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #333;
        }

        nav {
            background: #26354a;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h2 {
            color: white;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        nav a:hover {
            color: #8ec5ff;
        }

        .container {
            width: 85%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }

        h1 {
            margin-bottom: 10px;
        }

        p {
            margin-top: 10px;
            line-height: 1.6;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 14px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #26354a;
            color: white;
        }

        .pending {
            color: #d97706;
            font-weight: bold;
        }

        .completed {
            color: #16a34a;
            font-weight: bold;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #777;
        }
    </style>
</head>

<body>

    <nav>
        <h2>TSA3 Tasks</h2>

        <div>
            <a href="/">Home</a>
            <a href="/tasks">Task List</a>
            <a href="/profile">Profile</a>
            <a href="/about">About</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        TSA3 - Tasks for Today Management System
    </footer>

</body>
</html>