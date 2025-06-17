<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h1>Add New Student</h1>

    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        <p>
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <span style="color:red">{{ $message }}</span> @enderror
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email') <span style="color:red">{{ $message }}</span> @enderror
        </p>
        <p>
            <label>Course:</label><br>
            <input type="text" name="course" value="{{ old('course') }}">
            @error('course') <span style="color:red">{{ $message }}</span> @enderror
        </p>
        <p>
            <label>Age:</label><br>
            <input type="number" name="age" value="{{ old('age') }}">
            @error('age') <span style="color:red">{{ $message }}</span> @enderror
        </p>
        <p>
            <label>Gender:</label><br>
            <select name="gender">
                <option value="">-- Select Gender --</option>
                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
            @error('gender') <span style="color:red">{{ $message }}</span> @enderror
        </p>

        <button type="submit">Save Student</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">⬅ Back to list</a>
</body>
</html>
