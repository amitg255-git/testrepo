<?php
include "conn.php";

if (isset($_POST['submit'])){
    $state=$_POST['state'];
    $name =$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $subj=$_POST['subject'];
    $notes=$_POST['notes'];
   
  

   


    // SQL query to insert data
    $sql ="INSERT INTO enquary(state,name,email,mobile,subject,notes)VALUES('$state','$name','$email','$mobile','$subj','$notes')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Apply Successfully');
            window.location.href='index.php';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
