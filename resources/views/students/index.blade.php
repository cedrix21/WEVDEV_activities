<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
    <h1>Student List</h1>
    <a href="{{ route('students.create') }}">➕ Add Student</a>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Age</th>
            <th>Gender</th>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->course }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->gender }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
