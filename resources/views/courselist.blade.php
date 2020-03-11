<!DOCTYPE html>
<html >
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<body>
  @include('index')
    <div class="content">
<h3>Course List</h3>
<div class="table-responsive">
  <table class="tables">
  <tr>
    <th>Course Code</th>
    <th>Course Name</th>
    <th>Credit</th>
    <th>Actions</th>
  </tr>
  <?php foreach ($course as $i): ?>
  <tr>
    <td>{{$i->CourseCode}}</td>
    <td> {{$i->CourseName}} </td>
    <td>{{$i->Credit}}</td>
    <td>
      <a href="deletecourse/{{$i->id}}" class="btn btn-default">Delete</a>
      <a href="editcourse/{{$i->id}}" class="btn btn-default">Edit</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
</div>
</div>
</body>
</html>
