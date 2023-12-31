<?php
include 'conn.php';

// insert/create
if (isset($_POST['addData'])) {
    $Id = $_POST['user_id'];
    $Fname =  $_POST['firstname'];
    $Lname = $_POST['lastname'];
    $Age = $_POST['age']; 
    $Gender = $_POST['gender'];
    $Contact = $_POST['contact'];
    $Address = $_POST['address'];
    $Date = $_POST['date'];
    $Time = $_POST['time']; 
    $Reason = $_POST['reason'];
   
    //     INSERT INTO table_name 
    $insertData = $conn->prepare("INSERT INTO appointment (user_id, fname, lname, age, gender, contact, address,  date, time, reason ) VALUES(?, ?, ?,  ?, ?, ?, ?, ?, ?, ?)");
    $insertData->execute([
        $Id, 
        $Fname, 
        $Lname, 
        $Age,
        $Gender,
        $Contact, 
        $Address, 
        $Date, 
        $Time,
        $Reason,
    ]);

    $msg = "Data inserted!";
    header("location: index.php?msg=$msg");
}

// update
if (isset($_POST['editData'])) {
    $Id = $_POST['user_id'];
    $Fname =  $_POST['firstname'];
    $Lname = $_POST['lastname'];
    $Age = $_POST['age']; 
    $Gender = $_POST['gender'];
    $Contact = $_POST['contact'];
    $Address = $_POST['address'];
    $Date = $_POST['date'];
    $Time = $_POST['time'];
    $Reason = $_POST['reason'];

    //UPDATE table_name 
    $update = $conn->prepare("UPDATE appointment SET fname = ?, lname = ?, age = ?, gender = ?, contact = ?,  address = ?,  date = ?, time = ?, reason = ?  WHERE id = ?");
    $update->execute([
    $Fname,
    $Lname ,
    $Age ,
    $Gender ,
    $Contact,
    $Address ,
    $Date,
    $Time ,
    $Reason,
    $Id
    ]);

    $msg = "Data updated!";
    header("location: index.php?msg=$msg");
}


    // delete
if(isset($_GET['delete'])){
    $id = $_GET['id'];

    // DELETE FROM table_name 
    $delete = $conn->prepare("DELETE FROM appointment WHERE id = ?");
    $delete->execute([$id]);

    $msg = "Data Deleted!";
    header("location: index.php?msg=$msg");

}


//Register
    if(isset($_POST['register'])){
        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $email = $_POST['email'];
        $pass1 = $_POST['password1'];
        $pass2 = $_POST['password2'];
    
        if($pass1 == $pass2){
            $hash = password_hash($pass1, PASSWORD_DEFAULT);
            //INSERT INTO table_name 
            $addUser = $conn->prepare("INSERT INTO users (u_fname, u_lname, u_email, u_pass) VALUES(?, ?, ?, ?)");
            $addUser->execute([
                $fname,
                $lname,
                $email,
                $hash
            ]);
    
            $msg = "User registration successful!";
            header("location: register.php?msg=$msg");
        }else{
            $msg = "Password do not match!";
            header("location: register.php?msg=$msg");
        }
    }

    // logout
if(isset($_GET['logout'])){
    session_start();

    unset($_SESSION['logged_in']);
    unset($_SESSION['u_id']);

    header("location: login.php");
}
   ?> 