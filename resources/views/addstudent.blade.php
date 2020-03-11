<head>
</head>
<body>
  @include('index')
  <div class="content">
  <br><br>
  <h3><center>STUDENT REGISTRATION FORM</center></h3>
  <form method="post" action="{{url('posts')}}">
  {{ csrf_field() }}
  <br>
  <table align="center" cellpadding = "10">
  <tr>
  <td>NAME</td>
  <td><input type="text" id="name" name="Name" maxlength="30"/>
  </td>
  </tr>
  <tr>
  <td>ID</td>
  <td><input type="number" id="sid" name="S_ID" maxlength="30"/>
  </td>
  </tr>
  <tr>
  <td>EMAIL</td>
  <td><input type="text" id="email" name="Email" maxlength="100" /></td>
  </tr>
  <tr>
  <td>Department</td>
  <td><input type="text" id="dept" name="Department" maxlength="100" /></td>
  </tr>
  <tr>
  <td><button class="addstudent" type="submit" class="registerbtn">Register</button></td>
  </tr>
</form>
</div>
</body>
