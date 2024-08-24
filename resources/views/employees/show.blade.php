<html>
    <head>
        <title>employee details</title>
    </head>
    <body>
        <h1>employee details</h1>
        <p>name:{{$employee->name}}</p>
        <p>email:{{$employee->email}}</p>
        <p>position:{{$employee->position}}</p>
        <p>department{{$employee->department}}</p>
        <a href="{{route('employees.index')}}">Back to list</a>
        <a href="{{route('employees.edit', $employee->id)}}">edit</a>
    </body>
</html>