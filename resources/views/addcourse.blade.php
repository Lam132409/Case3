<head>
</head>
<body>
  @include('index')
  <div class="content">
  <br><br>
  <h3><center>Course Registration Form</center></h3>
  <form method="post" action="{{url('postcourse')}}">
  {{ csrf_field() }}
  <br>
  <table align="center" cellpadding = "10">
  <tr>
  <td>Course Name</td>
  <td><input type="text" id="cname"name="CourseName" maxlength="30"/>
  </td>
  </tr>

  <tr>
  <td>Course Code</td>
  <td><input type="text" id="code" name="CourseCode" maxlength="30"/>
  </td>
  </tr>

  <tr>
  <td>Credit</td>
  <td><input type="is_float" id="credit" name="Credit" maxlength="100" /></td>
  </tr>

  <tr>
  <td><button class="addcourse" type="submit" class="registerbtn">Add Course</button></td>
  </tr>

</form>
</div>
</body>
</html>
