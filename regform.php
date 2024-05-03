<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap min css cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Select2 from a CDN css link-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!--css llink-->
    <title>add new student</title>
</head>
<body>

   <div class="row" style="margin-left: 0;margin-right: 0;">
        <!--left sidber-->
        
        <?php
            include_once 'sidber.php';
        ?>
        <!--right sider-->
        <div class="rigth-sidber col-md-10 bg-white text-dark  " style="padding-left: 15px;">
            <!--form tag-->
            <form class="needs-validation mt-3 mb-3" action="insert_query.php" novalidate method="POST" enctype="multipart/form-data">
                <div class="row mt-20">
                    <div class="col-md-10 ">
                    <h1 style="color: #30d9f0; font-weight: 600; text-align:center;">Registration Form</h1>
                    </div>
                </div>
                    <div class="row ">
                        <div class="col-md-4  mb-3 text-capitalize">
                            <label class="mb-2" for="validationCustom01">First name :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="first_name">
                        </div>
                        <div class="col-md-4 mb-3 text-capitalize">
                            <label class="mb-2" for="validationCustom02">Last name :</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="last_name">
                        </div>
                        <div class="col-md-2  text-capitalize">
                            <label class="mb-2" for="validationCustom02">Your Photo :</label>
                            <input type="file" class="form-control" id="validationCustom02" placeholder="your photo" name="image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5  mb-3  text-capitalize">
                            <label class="mb-2" for="validationCustom01">Address :</label>
                            <input type="address" class="form-control" id="validationCustom01" placeholder="Address" name="address">
                        </div>
                        <div class="col-md-5  mb-3  text-capitalize">
                            <label class="mb-2" for="validationCustom01">Phone Number :</label>
                            <input type="number" class="form-control" id="validationCustom01" placeholder="Phone Number" name="phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10  mb-3  text-capitalize">
                            <label class="mb-2" for="validationCustom01">Email Address :</label>
                            <input type="email" class="form-control" id="validationCustom01" placeholder="Your Email Address" name="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10  mb-3  text-capitalize">
                            <label class="mb-2" for="validationCustom01">Career Objective :</label><br>
                            <textarea class="form-control" id="validationCustom01"  style="width: 100%; height: 80px; resize: none;
                            border: 1px solid #DCDCDC;" name="about_us"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10  mb-3 ">
                            <label class="mb-2" for="validationCustom03">Special Qualification :</label>
                            <select class="form-control select" multiple="multiple" name="special_qualifiaction[]">
                                <option>Html5,Css3</option>
                                <option>Jequery</option>
                                <option>WordPress basic</option>
                                <option>Bootstrap basic</option>
                                <option>PHP</option>
                                <option>Photoshoop</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 mb-3 ">
                            <label class="mb-2" for="validationCustom03">My Completed Project List :</label>
                            <select class="form-control select" multiple="multiple" name="project[]">
                                <option>http://raxmasters.com</option>
                                <option>hhttp://safecom.ie/</option>
                                <option>https://www.visiconnex.com/</option>
                            </select>
                        </div>
                        <div class="col-md-3  mb-3 ">
                            <label class="mb-2" for="validationCustom03">GitHub Link :</label>
                            <select class="form-control select" multiple="multiple" value="link" name="link[]">
                                <option>https://github.com/</option>
                                <option>https://github.com/</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="p-1 mt-2 bg-secondary text-white" style="border-radius: 5px;">Working Experience :</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Name of Organization:</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Name of Organization" name="experience">
                        </div>
                        <div class="col-md-3 mb-3 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Designation : </label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Designation" name="designation">
                        </div>
                        <div class="col-md-3  mb-3 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Duration :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Duration" name="duration">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="p-1 mt-2 bg-secondary text-white" style="border-radius: 5px;">Academic Qualification :</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4  text-capitalize">
                            <label class="mb-2" for="validationCustom01">Exam Title :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Exam Title" name="qualification">
                        </div>
                        <div class="col-md-3  text-capitalize">
                            <label class="mb-2" for="validationCustom01">Concentration/Major :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Concentration/Major" name="major">
                        </div>
                        <div class="col-md-3   text-capitalize">
                            <label class="mb-2" for="validationCustom01">Institute Name :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Institute" name="institute">
                        </div>
                    </div>
                    <div class="row mt-2 ">                   
                        <div class="col-md-3 mb-3 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Result :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Result" name="result">
                        </div>
                        <div class="col-md-4 mb-3 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Pas.Year :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Pas.Year" name="year">
                        </div>
                        <div class="col-md-3 mb-3 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Duration :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Duration" name="duriation" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <h4  class="p-1 mt-2 bg-secondary text-white" style="border-radius: 5px;">Personal Details :</h4>
                        </div>
                    </div>
                    <div class="row  mb-3 ">
                        <div class="col-md-4 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Father's Name :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Fothers Name"  name="father_name">
                        </div>
                        <div class="col-md-4 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Mother's Name :</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Mothers Name" name="mother_name">
                        </div>
                        <div class="col-md-2  text-capitalize">
                            <label class="mb-2" for="validationCustom01">Date of Birth :</label>
                            <input type="date" class="form-control" id="validationCustom03" placeholder="Date of Birth" name="dob">
                        </div>
                    </div>                   
                    <div class="row" style="padding-bottom: 20px;">                        
                        <div class="col-md-2  text-capitalize" >
                            <label class="mb-2" for="validationCustom01">Marital Status :</label>
                            <select style="padding: 12px 25px; background-color: #fff; border: 1px solid #DCDCDC;border-radius: 5px;" name="marital">
                                <option selected="selected">Marital Status </option>
                                <option>Unmarried</option>
                                <option>married</option>
                            </select>
                        </div>
                        <div class="col-md-3 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Nationality :</label> <br>
                            <select style="padding: 12px 77px; background-color: #fff; border: 1px solid #DCDCDC;border-radius: 5px;" name="nationality">
                                <option selected="selected">Nationality </option>
                                <option>bangladeshi</option>
                                <option>indian</option>
                            </select>
                        </div>
                        <div class="col-md-3 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Religion :</label> <br>
                            <select style="padding: 12px 92px; background-color: #fff; border: 1px solid #DCDCDC;border-radius: 5px;" name="religion">
                                <option selected="selected">Religion </option>
                                <option>Hindu</option>
                                <option>Islam</option>
                            </select>
                        </div>
                        <div class="col-md-2 text-capitalize">
                            <label class="mb-2" for="validationCustom01">Gender :</label> <br>
                            <select style="padding: 12px 47px; background-color: #fff; border: 1px solid #DCDCDC;border-radius: 5px;" name="gender">
                                <option selected="selected">Gender </option>
                                <option>Male</option>
                                <option>Female</option>
                                <option> others</option>
                            </select>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="col-md-10  mb-3  text-capitalize">
                            <label class="mb-2" for="validationCustom01">Permanent Address :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Permanent Address" name="pr_address" style="padding: 10px;">
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-md-10  mb-3  text-capitalize">
                            <label class="mb-2" for="validationCustom01">Current Location :</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Current Location " name="location" style="padding: 10px;">
                        </div>
                    </div>
                    <div class="form-group  mb-3  text-black ">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required >
                            <label class="form-check-label text-black" for="invalidCheck">
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