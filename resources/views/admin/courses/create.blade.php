<!-- resources/views/admin/courses/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
</head>
<body>
    <h1>Create a New Course</h1>

    <!-- Form for creating a course -->
    <form action="{{ route('admin.courses.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Course Name</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="description">Course Description</label>
            <textarea name="description" id="description" required></textarea>
        </div>

        <button type="submit">Create Course</button>
    </form>
</body>
</html>
