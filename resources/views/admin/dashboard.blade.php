<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            overflow-x: hidden;
        }

        /* Header */
        header {
            background: #6A1B9A;
            color: white;
            padding: 2rem;
            text-align: center;
            position: relative;
        }

        header h1 {
            font-size: 2.5rem;
            font-family: 'Orbitron', sans-serif;
        }

        .nav-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .nav-buttons button {
            background: white;
            color: #6A1B9A;
            border: none;
            padding: 0.75rem 1.25rem;
            font-size: 1rem;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .nav-buttons button:hover {
            background-color: #ab47bc;
            color: white;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #512da8;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 3rem;
            box-shadow: 2px 0 5px rgba(0,0,0,0.2);
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 15px;
            text-align: left;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #673ab7;
        }

        .content {
            margin-left: 260px;
            padding: 2rem;
        }

        /* Section Styling */
        .section {
            background: white;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            color: #6A1B9A;
        }

        .action-btn {
            background: #6A1B9A;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .action-btn:hover {
            background: #ab47bc;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('courses.index') }}">Manage Courses</a>
        <a href="{{ route('learning-materials.index') }}">Learning Materials</a>
        <a href="{{ route('quizzes.index') }}">Quizzes & Assessments</a>
        <form method="POST" action="{{ route('admin.logout') }}" style="margin-top: 20px; text-align: center;">
            @csrf
            <button type="submit" class="action-btn">Logout</button>
        </form>
    </div>

    <!-- Main Content -->
    <div class="content">
        <header>
            <h1>Admin Dashboard</h1>
        </header>

        <!-- Manage Courses -->
        <div class="section">
            <h2>📚 Manage Courses</h2>
            <p>Create, update, and delete courses.</p>
            <a href="{{ route('admin.courses.create') }}" class="action-btn">+ Add Course</a>
        </div>

        <!-- Manage Learning Materials -->
        <div class="section">
            <h2>📂 Learning Materials</h2>
            <p>Upload and organize videos, PDFs, and other study materials.</p>
            <a href="{{ route('learning-materials.create') }}" class="action-btn">+ Upload Material</a>
        </div>

        <!-- Manage Quizzes & Assessments -->
        <div class="section">
            <h2>📝 Quizzes & Assessments</h2>
            <p>Create quizzes, track student scores, and set passing criteria.</p>
            <a href="{{ route('quizzes.create') }}" class="action-btn">+ Create Quiz</a>
        </div>
    </div>
</body>
</html>
