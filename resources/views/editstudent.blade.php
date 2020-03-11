<html>
</head></head>
<body>
  @include('index')
  <div class="container">
	<h4> <center>Edit {{ $students->Name }} </center></h4>
  <form method="post" action="{{url('update')}}">
  {{ csrf_field() }}
  <br>
  <table align="center" cellpadding = "10">
  <tr>
  <td>NAME</td>
  <td><input type="text" name="Name" maxlength="30" value="{{ $students->Name }}" />
  </td>
  </tr>
  <tr>
  <td>ID</td>
  <td><input type="number" name="S_ID" maxlength="30" value="{{ $students->S_ID }}" />
  </td>
  </tr>
  <tr>
  <td>EMAIL</td>
  <td><input type="text" name="Email" maxlength="100" value="{{ $students->Email }}" /></td>
  </tr>
  <tr>
  <td>Department</td>
  <td><input name="button"type="text" name="Department" maxlength="100" value="{{ $students->Department }}" /></td>
  </tr>
  <input type="hidden" name="sid" value="{{$students->id}}"
  <tr>
  <td><button type="submit" class="registerbtn">Update</button></td>
  </tr>
</form>
</body>
</html>
