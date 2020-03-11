<head>
</head>
<body>
  @include('index')
  <div class="content">
  <br><br>
  <h3><center>Course Registration Form</center></h3>
  <form method="post" action="{{url('postregister')}}">
  {{ csrf_field() }}
  <br>

  <table align="center" cellpadding = "10">
    <td>ID</td>
    <td><input type="number" id="sid" name="S_ID" maxlength="30"/>
    </td>
    </tr>
    <tr>
    <td>Course Code</td>
    <td><input type="text" id="code" name="CourseCode" maxlength="30"/>
    </td>
    </tr>

  <tr>
  <td><button class="register" type="submit" class="registerbtn">Register</button></td>
  </tr>

</form>
</div>
</body>
</html>
