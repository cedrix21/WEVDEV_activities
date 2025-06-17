<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

    <form method="POST" action="{{ route('students.update', $student->id) }}">
        @csrf
        @method('PUT')

        <p>
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ old('name', $student->name) }}">
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email', $student->email) }}">
        </p>
        <p>
            <label>Course:</label><br>
            <input type="text" name="course" value="{{ old('course', $student->course) }}">
        </p>
        <p>
            <label>Age:</label><br>
            <input type="number" name="age" value="{{ old('age', $student->age) }}">
        </p>
        <p>
            <label>Gender:</label><br>
            <select name="gender">
                <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Other" {{ $student->gender == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
        </p>

        <button type="submit">Update Student</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">⬅ Back to list</a>
</body>
</html>
