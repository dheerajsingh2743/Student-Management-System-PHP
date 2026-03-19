<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
<div class="container my-5 mx-3 text-center shadow-lg p-3 mb-5 bg-white rounded">
    
<h1 class="text-center shaow-lg p-3 mb-5 bg-white rounded">Student Management System</h1>

<button class="btn btn-primary "> <a href="index.php" class="text-light"> ADD Student</a></button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name of Student</th>
      <th scope="col">Email of Student</th>
      <th scope="col">Course of Student</th>
      <th scope="col">Opeartion</th>
    </tr>
  </thead>
  <tbody>

  <?php
  include("config.php");
  $sql = $conn->query("SELECT * FROM student");
  $data = $sql->fetchAll();

  if(count($data)>0){
    foreach($data as $stu){
        $id = $stu['id'];
        $name = $stu['name'];
        $email = $stu['email'];
        $course = $stu['program'];
        echo "<tr>
      <td>".$name."</td>
      <td>".$email."</td>
      <td>".$course."</td>
      <td>
    <a href='update.php?updateid=".$id."' class='btn btn-success'>Update</a>
    <a href='delete.php?deleteid=".$id."' class='btn btn-danger'>Delete</a>
      </td>
    </tr>";
    }
    
  }
  ?>
</table>
</div>
</body>
</html>