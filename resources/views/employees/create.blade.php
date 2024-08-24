<html>
    <head>
        <title>Add Employee</title>
    @vite('resources/css/create.css')
    </head>
    <body>
        <main>
          <div class="main">
             <h1>Add New Employee</h1>
           <form action="{{route('employees.store')}}" method="post" class="form">
               @csrf

               <label for="name" class="label" >Name:</label>
               <br>
               <div class="inputBox">
                <input type="text" name="name" placeholder="enter your name" required>
               </div>
              
                <label for="position" >position:</label>
                <br>
                <div class="inputBox">
                <input type="text" name="position" placeholder="your position please!!" required>
               </div>
               <br>

               <label for="department" >Department:</label>
               <br>
               <div class="inputBox">
               <input type="text" name="department" placeholder="department please!! " required>
               </div>
               <br> 

               <label for="email" >Email:</label>
               <br>
              <div class="inputBox">
               <input type="email" name="email" placeholder="enter your email" required>
               </div>
                 <br>
                <button type="submit" class="btn">Add Employee</button><br><br>
                <a href="{{route('employees.index')}}" class="backhome">&larr; back to home</a>
            </form>
          </div>
        </main>
    </body>
</html>