<html>
   <head>
    <title>employee list</title>
    @vite('resources/css/app.css')
   </head>
   <body>
    <header>
      <a href="{{ route('employees.create')}}" id="btn">Add New Employees</a>
    </header>
    <main>
      <div class="main">
        <h1>Employee List</h1>
    <ul>
            @foreach ($employees as $employee)
          <li>{{$employee->name}}-{{$employee->position}}
            <a href="{{route('employees.edit', $employee->id)}}">Edit</a>
            <form action="{{route('employees.destroy', $employee->id)}}" method="post" style="display:inline;">
               @csrf
               @method('DELETE')
               <button class="button" type="submit">Delete</button>
            </form>
          </li>
      @endforeach
    </ul>
  </div>
    </main>
    <footer>
    </footer>
   </body>
</html>