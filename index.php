<?php
include("config.php");
if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $program = $_POST['program'];
    if($name!='' && $email!='' && $program!=''){

    $sql = $conn->query("INSERT INTO student
    (name, email, program)
    VALUES ('$name','$email','$program');
    ");
    if($sql){
        header("Location:display.php");
    }
 }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
<body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <!-- for name of student -->
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter Student Full Name">
</div>

<div class="mb-3">
    <!-- for email of student -->
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter Student Email">
</div>

<div class="mb-3">
    <!-- for Program of student -->
    <label >Program of Study</label>
    <input type="text" name="program" class="form-control" placeholder="Enter Student Program of Study">
</div>
  <button type="submit" name="btn" class="btn btn-primary">Submit</button>
</form>

</div>

</body>
</html>