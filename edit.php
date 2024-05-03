<?php

    include_once 'dib_config.php';


    $id =$_GET['id'];

    $select = "SELECT * FROM `student_info` WHERE id=$id";

    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($result );
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap min css cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Select2 from a CDN css link-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>edit student information</title>

   
</head>
<body>

   <div class="row" style="margin-left: 0;margin-right: 0;">
        <!--left sidber-->
        
        <?php
            include_once 'sidber.php';
        ?>
        <!--right sider-->
        <div class="rigth-sidber col-md-10 bg-secondary text-white text-capitalize"  style="padding-left: 15px; font-size: 16px;">
            <h1 style="color: #30d9f0; font-weight: 600;">Registration Form :</h1>
            <!--form tag-->
            <form class="needs-validation mb-3" action="update_query.php?id=<?php echo $row['id']; ?>" novalidate method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4  mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">First name :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="first_name" value="<?php echo $row['first_name']; ?>">
                        </div>
                        <div class="col-md-4 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom02">Last name :</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="last_name" value="<?php echo $row['last_name']; ?>">
                        </div>
                        <div class="col-md-2 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom02">Your Photo :</label>
                            <input type="file" class="form-control" id="validationCustom02" placeholder="your photo" name="image" value="<?php echo $row['image']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Address :</label>
                            <input type="address" class="form-control" id="validationCustom01" placeholder="Address" name="address" value="<?php echo $row['address']; ?>">
                        </div>
                        <div class="col-md-5 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Phone Number :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Phone Number" name="phone" value="<?php echo $row['phone']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Email Address :</label>
                            <input type="email" class="form-control" id="validationCustom01" placeholder="Your Email Address" name="email" value="<?php echo $row['email']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Career Objective: :</label><br>
                            <textarea class="form-control" id="validationCustom01"  style="width: 100%; height: 80px; resize: none;
                            border: 1px solid #DCDCDC;" name="about_us"><?php echo $row['about_us']; ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 mb-2">
                            <label class="mb-2" for="validationCustom03">Special Qualification :</label>
                            <select class="form-control select" multiple="multiple" name="special_qualifiaction[]">
                            <?php
                                foreach(json_decode($row['special_qualifiaction']) as $special_qualifiaction){
                                    echo "<option selected>$special_qualifiaction</option>";
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 mb-2">
                            <label class="mb-2" for="validationCustom03">My Completed Project List :</label>
                            <select  class="form-control select text-secondary" multiple="multiple" name="project[]" >

                            <?php
                                foreach(json_decode($row['project']) as   $project){
                                    echo "<option selected>$project</option>";
                                }
                            ?>

                            </select>
                        </div>
                        <div class="col-md-3 mb-2">
                            <label class="mb-2" for="validationCustom03">GitHub Link :</label>
                            <select class="form-control select" multiple="multiple" value="link" name="link[]">
                            <?php
                                foreach(json_decode($row['link']) as  $link ){
                                    echo "<option selected> $link </option>";
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="p-1 mt-2 bg-dark text-warning" style="border-radius: 5px;">Working Experience :</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4  mb-2 text-capitalize">
                        <label class="mb-2" for="validationCustom01">Name of Organization:</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Name of Organization" name="experience" value="<?php echo $row['experience']; ?>">
                        </div>
                        <div class="col-md-3 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Designation : </label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Designation" name="designation" value="<?php echo $row['designation']; ?>">
                        </div>
                        <div class="col-md-3  mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Duration :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Duration" name="duration" value="<?php echo $row['duration']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="p-1 mt-2 bg-dark text-warning" style="border-radius: 5px;">Academic Qualification :</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Exam Title :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Exam Title" name="qualification" value="<?php echo $row['qualification']; ?>">
                        </div>
                        <div class="col-md-2 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Concentration/Major :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Concentration/Major" name="major" value="<?php echo $row['major']; ?>">
                        </div>
                        <div class="col-md-4 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Institute Name :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Institute" name="institute" value="<?php echo $row['institute']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Result :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Result" name="result" value="<?php echo $row['result']; ?>">
                        </div>
                        <div class="col-md-4 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Pas.Year :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Pas.Year" name="year" value="<?php echo $row['year']; ?>">
                        </div>
                        <div class="col-md-3 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Duration :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Duration" name="duriation" value="<?php echo $row['duriation']; ?>">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                        <h4  class="p-1 mt-2 bg-dark text-warning" style="border-radius: 5px;">Personal Details :</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Father's Name :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Fothers Name"  name="father_name" value="<?php echo $row['father_name']; ?>">
                        </div>
                        <div class="col-md-4 mb-2 text-capitalize" >
                            <label class="mb-2" for="validationCustom01">Mother's Name :</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Mothers Name" name="mother_name"  value="<?php echo $row['mother_name']; ?>">
                        </div>
                        <div class="col-md-2 mb-2 text-capitalize" >
                            <label class="mb-2" for="validationCustom01">Date of Birth :</label>
                            <input type="date" class="form-control" id="validationCustom03" placeholder="Date of Birth" name="dob"  value="<?php echo $row['dob']; ?>">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2 mb-2 text-capitalize" >
                            <label class="mb-2" for="validationCustom01">Marital Status :</label>
                            <select style="padding: 12px 25px; background-color: #fff; border: 1px solid #DCDCDC;border-radius: 5px;" name="marital"  value="<?php echo $row['marital']; ?>">                                
                                <option value="Unmarried" <?php if ($row['marital'] === 'Hindu') echo 'Unmarried'; ?>>Unmarried</option>
                                <option value="married" <?php if ($row['marital'] === 'Islam') echo 'married'; ?>>married</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Nationality :</label> <br>
                            <select style="padding: 12px 77px; background-color: #fff; border: 1px solid #DCDCDC;border-radius: 5px;" name="nationality">
                                <option value="bangladeshi" <?php if ($row['nationality'] === 'bangladeshi') echo 'selected'; ?>>Bangladeshi</option>
                                 <option value="indian" <?php if ($row['nationality'] === 'indian') echo 'selected'; ?>>Indian</option>
                            </select>

                        </div>
                        <div class="col-md-3 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Religion :</label> <br>
                            <select style="padding: 12px 92px; background-color: #fff; border: 1px solid #DCDCDC;border-radius: 5px;" name="religion">
                                <option value="Hindu" <?php if ($row['religion'] === 'Hindu') echo 'selected'; ?>>Hindu</option>
                                <option value="Islam" <?php if ($row['religion'] === 'Islam') echo 'selected'; ?>>Islam</option>
                            </select>                               
                        </div>
                        <div class="col-md-2 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Gender :</label> <br>
                                <select style="padding: 12px 47px; background-color: #fff; border: 1px solid #DCDCDC;border-radius: 5px;"  name="gender[]">
                                    <option>Gender</option>
                                    <option value="Male" <?php if ($row['gender'] === 'Male') echo 'selected'; ?>>Male</option>
                                    <option value="Female" <?php if ($row['gender'] === 'Female') echo 'selected'; ?>>Female</option>
                                    <option value="others" <?php if ($row['gender'] === 'others') echo 'selected'; ?>>Others</option>
						        </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Permanent Address :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Permanent Address" name="pr_address" value="<?php echo $row['pr_address']; ?>" style="padding: 10px;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 mb-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Current Location :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Current Location " name="location" value="<?php echo $row['location']; ?>" style="padding: 10px;">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required >
                        <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                        </label>  
                    </div>
                    </div>
                    <button class="btn btn-danger" type="reset" style="padding: 7px 25px;">
                        Reset
                    </button>
                    <button class="btn btn-primary" style="margin-left: 20px; padding: 7px 20px;" type="submit">
                        Submit
                    </button>
            </form>      
        </div>
   </div>


    <!--jequery cdn link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--bootstrap js cdn link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Select2 from a CDN js link-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
         'use strict';
         window.addEventListener('load', function() {
           // Fetch all the forms we want to apply custom Bootstrap validation styles to
           var forms = document.getElementsByClassName('needs-validation');
           // Loop over them and prevent submission
           var validation = Array.prototype.filter.call(forms, function(form) {
             form.addEventListener('submit', function(event) {
               if (form.checkValidity() === false) {
                 event.preventDefault();
                 event.stopPropagation();
               }
               form.classList.add('was-validated');
             }, false);
           });
         }, false);
       })();
   
           $(document).ready(function() {
                   $(".select").select2({
                       tags: true,
                       tokenSeparators: [',', ' ']
                   })
           });  
   </script> 
</body>
</html>