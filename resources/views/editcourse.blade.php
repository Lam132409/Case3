<html>
</head></head>
<body>
  @include('index')
  <div class="container">
	<h4> <center>Edit {{ $course->CourseName }} </center></h4>
  <form method="post" action="{{url('updatecourse')}}">
  {{ csrf_field() }}
  <br>
  <table align="center" cellpadding = "10">
  <tr>
  <td>Course Name</td>
  <td><input type="text" name="CourseName" maxlength="30" value="{{ $course->CourseName }}" />
  </td>
  </tr>
  <tr>
  <td>Course Code</td>
  <td><input type="text" name="CourseCode" maxlength="30" value="{{ $course->CourseCode }}" />
  </td>
  </tr>
  <tr>
  <td>Credit</td>
  <td><input type="is_float" name="Credit" maxlength="100" value="{{ $course->Credit }}" /></td>
  </tr>
  <input type="hidden" name="cid" value="{{$course->id}}"
  <tr>
  <td><button class="button" type="submit" class="registerbtn">Update</button></td>
  </tr>
</form>
</body>
</html>
