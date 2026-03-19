<?php
include("config.php");

echo "<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Insert Data</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>
  </head>";

if(isset($_GET['updateid'])){

    $id = $_GET['updateid'];
    $stu = $conn->query("SELECT * FROM student WHERE id='$id'");
    $data = $stu->fetchAll();

    foreach($data as $student){
        $id = $student['id'];
        $name = $student['name'];
        $email = $student['email'];
        $program = $student['program'];


    echo "<div class='container my-5'>
    <form method='post'>
  <div class='mb-3'>
    
    <label class='form-label'>Name</label>
    <input type='text' name='name' class='form-control' value='".$name."'>
</div>

<div class='mb-3'>
 
    <label>Email</label>
    <input type='email' name='email' class='form-control' value='".$email."'>
</div>

<div class='mb-3'>
    
    <label>Program of Study</label>
    <input type='text' name='program' class='form-control' value='".$program."'>
</div>
  <button type='submit' name='btn' class='btn btn-primary'>Submit</button>
</form>

</div>";

    }
}

?>

<?php
include("config.php");
if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $program = $_POST['program'];
    if($name!='' && $email!='' && $program!=''){

    $sql = $conn->query("UPDATE student SET name='$name', email='$email', program='$program' WHERE id='$id'");
    if($sql){
        header("Location:display.php");
    }
 }
}

?>