<?php
  $host="localhost";
  $user="root";
  $password="";
  $db="studentgrade";

  $conn=mysqli_connect($host,$user,$password,$db);

  $sql="SELECT * from studentgrades";

  $result=mysqli_query($conn,$sql);

 if(isset($_POST['submit_grade'])){

  $studentid=$_POST['student_id'];
  $web1=$_POST['web1'];
  $design1=$_POST['design1'];
  $programming1=$_POST['programming1'];


  $check="SELECT * FROM studentgrades WHERE studentid = 'StudentID'";

  $check_user=mysqli_query($conn,$check);

  $row_count=mysqli_num_rows($check_user);

  if($row_count==1)
  {
    echo "<script type='text/javascript'>

    alert('Student records already exists.');

    </script>";
  }

  else
  {

    $sql="INSERT INTO studentgrades(StudentID,Web1,Design1,Programming1) VALUES ('$studentid','$web1','design1','programming1')";

    $result=mysqli_query($conn,$sql);

    if($result)
    {
      echo "<script type='text/javascript'>
      alert('Grade Inserted Successfully');
      </script>";
    }

    else
    {
      echo "Insert Failed";
    }
  }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style type="text/css">
      label{
        display: inline-block;
        text-align:right;
        width: 100px;
        padding-top:20px;
        padding-bottom:20px;
      }
      .add{
        background: skyblue;
        width: 400px;
        padding-top: 10px;
        padding-bottom: 10px;
      }

    </style>
    <title></title>
    <!-- end of web manifest -->
</head>

<body> 
  
  <?php
  include 'display_side.php';
   ?>

  <div class="content">
    <center>
      <h1>Add Student Grade</h1>
      <div class="add">
<form action="#" method="POST">
  <div>
      <label for="Student ID">Student ID:</label>
      <input type="text" name="student_id" placeholder="ID">
  </div>
  <div>
      <label>Web1:</label>
      <input type="value" name="web1" placeholder="Web1 grade">
  </div>
  <div>
      <label>Design1:</label>
      <input type="value" name="design1"  placeholder="Design1 grade">
  </div>
  <div>
      <label>Programming1:</label>
      <input type="value" name="programming1" placeholder="Programming1">
  </div>


  
  <input type="submit" value="Submit Grade" name="submit_grade" >
</form>
</div>
</center> 
</div>
</body>
<link rel="stylesheet" href="C:\xampp\htdocs\StudentGrade\css\styles.css">
</html>