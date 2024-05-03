<?php 


$id =$_GET['id'];


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


   $sql = "UPDATE `student_info` SET `first_name`='$first_name',`last_name`='$last_name',`address`='$address',`phone`='$phone',`email`='$email',`about_us`='$about_us',`special_qualifiaction`='$special_qualifiaction',`project`='$project',`link`='$link ',`experience`=' $experience',`designation`='$designation',`duration`='$duration',`qualification`='$qualification ',`major`='$major',`institute`='$institute ',`result`='$result ',`year`='$year ',`duriation`='$duriation ',`father_name`='$father_name',`mother_name`='$mother_name ',`dob`='$dob ',`marital`='$marital',`nationality`='$nationality',`religion`='$religion',`gender`='$gender',`pr_address`='$pr_address',`location`='$location',`image`='$image' WHERE id = '$id'";


   $result = mysqli_query($conn, $sql);

   if($result){
        header("Location: view-all-student.php");
    }else{
       echo 'Something is rong';
    }
?>