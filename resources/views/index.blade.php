<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Course Registration System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the side navigation */
.sidenav {
  height: 125%;
  width: 212px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:DodgerBlue;
  overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.sidenav a:hover {
  color: black;
}

/* Style the content */
.content {
  margin-left: 200px;
  padding-left: 20px;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: #008CBA;}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="sidenav">
  <div>
  <a href="/"><h5>Home</h5></a>

  <br>
  <form action="{{url('search')}}" method="get" role="search">
      {{ csrf_field() }}
      <div class="input-group">
          <input type="number" class="form-control" name="search" 
              placeholder="Search "> <span class="input-group-btn">
              <button type="submit" class="fa fa-search">
                  <span class="glyphicon glyphicon-search"></span>
              </button>
          </span>
      </div>
  </form>


  <br>
  <a href="/create">Add Student</a>
	<a href="studentlist">Student List</a>
  <a href="create_course">Add Course</a>
	<a href="courselist">Course List</a>
  <a href="register">Register Course</a>
	<a href="registerlist">Student Registered Courses List</a>

</div>
</div>

<div class="content">
  <h2 style="color:DodgerBlue;"><center>Student Course Registration System</center></h2>
</div>

</body>
</html>
