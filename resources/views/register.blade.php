<html>
</head></head>
<body>
  @include('index')
  <div class="container">
	<h4> <center>Edit {{ $students->Name }} </center></h4>
  <form method="post" action="{{url('postregister')}}">
  {{ csrf_field() }}
  <br>
  <table align="center" cellpadding = "10">
  <td>ID</td>
  <td><input type="number" name="S_ID" maxlength="30" value="{{ $students->S_ID }}" />
  </td>
  </tr>
  <tr>
  <td>Course Code</td>
  <td><input type="text" id="code" name="CourseCode" maxlength="30"/>
  </td>
  </tr>
  <tr>
  <td><button class="button" type="submit" class="registerbtn">Register</button></td>
  </tr>
</form>
</body>
</html>
