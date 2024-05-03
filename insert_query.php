<?php 

    include_once 'dib_config.php';

   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $about_us = $_POST['about_us'];
   $special_qualifiaction = json_encode($_POST['special_qualifiaction']);
   $project = json_encode($_POST['project']);
   $link = json_encode($_POST['link']);
   $experience = $_POST['experience'];
   $designation = $_POST['designation'];
   $duration = $_POST['duration'];
   $qualification = $_POST['qualification'];
   $major = $_POST['major'];
   $institute = $_POST['institute'];
   $result = $_POST['result'];
   $year = $_POST['year'];
   $duriation = $_POST['duriation'];
   $father_name = $_POST['father_name'];
   $mother_name = $_POST['mother_name'];
   $dob = $_POST['dob'];
   $marital = $_POST['marital'];
   $nationality = $_POST['nationality'];
   $religion = $_POST['religion'];
   $gender = $_POST['gender'];
   $pr_address = $_POST['pr_address'];
   $location = $_POST['location'];
 

   $random = rand(1111, 9999);


   $image ='upload/' .$random .$_FILES['image']['name'];

   move_uploaded_file( $_FILES['image']['tmp_name'], $image);


   $sql = "INSERT INTO `student_info`(`id`, `first_name`, `last_name`, `address`, `phone`, `email`, `about_us`, `special_qualifiaction`, `project`,`link`, `experience`, `designation`, `duration`, `qualification`, `major`, `institute`, `result`, `year`, `duriation`, `father_name`,`mother_name`, `dob`, `marital`, `nationality`, `religion`, `gender`, `pr_address`, `location`, `image`) 
   VALUES ('NULL','$first_name',' $last_name',' $address',' $phone',' $email','$about_us ','$special_qualifiaction','$project','$link',
   '$experience','$designation',' $duration',' $qualification','$major','$institute','$result','$year','  $duriation ','  $father_name',
   '$mother_name',' $dob','$marital','$nationality','$religion', '$gender','$pr_address','$location', ' $image')";


   $result = mysqli_query($conn, $sql);


   if($result){
        header("Location: view-all-student.php");
   }else{
        echo 'Something is rong';
   }
?>