<html>
    <head>
        <title>edit employee</title>
        @vite('resources/css/edit.css')
    </head>
    <body>
        <main>
        <div class="main">
        <h1>Edit Employee</h1>
        <form action="{{route('employees.update', $employee->id)}}" method="post">
            @csrf
            @method('PUT')
            <label for="name">Name:</label>
            <div class="inputBox">
            <input type="text" name="name" value="{{$employee->name}}" required>
            </div>
            <br>

            <label for="position">Position:</label>
            <div class="inputBox">
            <input type="text" name="position" value="{{$employee->position}}" required>
            </div>
            <br>

            <label for="Department">Department</label>
            <div class="inputBox">
            <input type="text" name="department" value="{{$employee->department}}" required>
            </div>
            <br>
            <label for="name">Email:</label>
            <div class="inputBox">
            <input type="text" name="email" value="{{$employee->email}}" required>
            </div>
            <br>
            <button type="submit" class="btn">Update Employee</button>
        </form>
        <a href="{{route('employees.index')}}">&larr; back to home</a>
        </div>
    </main>
    </body>
</html>