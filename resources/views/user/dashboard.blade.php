<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .dashboard-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            max-width: 600px;
            text-align: center;
        }

        h2 {
            font-size: 2.5rem;
            color: #4e73df;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 40px;
        }

        .dashboard-options {
            margin-top: 20px;
        }

        .dashboard-options a {
            font-size: 1.1rem;
            color: #fff;
            background-color: #4e73df;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
            margin-right: 15px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .dashboard-options a:hover {
            background-color: #2e59d9;
            transform: scale(1.05);
        }

        .dashboard-options a.logout {
            background-color: #e74a3b;
        }

        .dashboard-options a.logout:hover {
            background-color: #c0392b;
        }

        .logout-link {
            font-size: 1.1rem;
            color: #e74a3b;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .logout-link:hover {
            color: #c0392b;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome, {{ Auth::user()->name }}!</h2>
        <p>You're now logged in to your dashboard.</p>

        <div class="dashboard-options">
            <a >View Profile</a>
            <a href="#" class="logout-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>

        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</body>
</html>
