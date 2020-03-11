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
<h3>Student Registered Course List</h3>
<div class="table-responsive">
  <table class="tables">
    <tr>
      <th>Student ID</th>
      <th>Registered Courses</th>
      <th>Actions</th>
    </tr>

    <?php foreach ($registers as $i): ?>
    <tr>
      <td><h5>{{$i->S_ID}} </h5</td>
      <td><h5>{{$i->CourseCode}} </h5></td>
      <td>
        <a href="deleteregister/{{$i->id}}" class="btn btn-default">Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
</div>
</body>
</html>
