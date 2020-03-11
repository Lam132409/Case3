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
<h3>Student List</h3>
<div class="table-responsive" id="find">
  <table class="tables">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Department</th>
    <th>Actions</th>
  </tr>
  <?php foreach ($students as $i): ?>
  <tr>
    <td> {{$i->S_ID}} </td>
    <td>{{$i->Name}}</td>
    <td>{{$i->Email}}</td>
    <td>{{$i->Department}}</td>
    <td>
      <a href="delete/{{$i->id}}" class="btn btn-default">Delete</a>
      <a href="edit/{{$i->id}}" class="btn btn-default">Edit</a>
      <a href="register_edit/{{$i->id}}" id="register" class="btn btn-default">Register Courses</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
</div>
</div>
</body>
</html>
