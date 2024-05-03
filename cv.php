<?php

    include_once 'dib_config.php';

    $id =$_GET['id'];

    $select = "SELECT * FROM `student_info` WHERE id=$id";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($result);   
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--fontwasome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css link-->
    <link rel="stylesheet" href="style.css">
    <title>CV</title>
</head>
<body>
    <section class="form-section">
        <div class="container">
            <div class="main-col">
                <div class="left-col">
                    <h2><?php echo $row['first_name'].''.$row['last_name']; ?></h2>
                    <p>Address : <?php echo $row['address']; ?></p>
                    <p>Phone : <?php echo $row['phone']; ?></p>
                    <p>E-mail : <a href="#"><?php echo $row['email']; ?></a></p>
                </div>
                <div class="right-col">
                    <img src="<?php echo $row['image']; ?>" style="border: 8px solid gainsboro; width:160px; height:180px">
                </div>
            </div>

        </div>
    </section>
   
    <div class="objective">
        <div class="container">
                <h2>Career Objective :</h2>
            <p style="margin-left: px;">
            <?php echo $row['about_us']; ?>
            <!--
                I am a Web Developer, and I'm very passionate and dedicated to my work. I completed <b>2 projects</b>
                during my training season. I have acquired the skills and knowledge necessary to make your project
                a success. I enjoy every step of the work process, from discussion and collaboration.-->
            </p> 
        </div>
    </div>
    
    <section>
        <div class="objective">
            <div class="container">
                <h2>Special Qualification :</h2>
            <p style="margin-left: 5px;">Good command and specialty over     presentation. <br>
                Skilled <b style="color: #000;">Web Design & Development</b>
            </p>
            <ul style="list-style-type:none;" >
                <?php
                    foreach(json_decode($row['special_qualifiaction']) as $special_qualifiaction){
                        echo "<li>$special_qualifiaction</li>";
                    }
                ?>
            </ul>
            <h2 style="background-color: transparent; text-decoration: none; line-height:0px;">My Completed Project List :</h2>
              <ol >
              <?php
                    foreach(json_decode($row['project']) as   $project ){
                        echo "<a href=''><li> $project </a> </li>";
                    }
                ?>
              </ol>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="github">
                <h2 style="line-height: 0px;">GitHub Link :</h2>
                <a href="#">https://github.com/</a>
            </div>
            <div class="experence">
                <h3 style="line-height: 0px; font-size: 22px; ">Working Experience :</h3>
                <span>Name of Organization</span><b>:</b> <span> <?php echo $row['experience']; ?> </span><br>
                <span>Designation</span><b>:</b> <span> <?php echo $row['designation']; ?> </span><br>
                <span>Duration </span><b>:</b> <span><b> <?php echo $row['duration']; ?> </b></span>
            </div>
        </div>
    </section>      
    <section>
        <div class="container">
            <div class="table">
                <h2 style="background-color: #DCDCDC; text-decoration: underline;
                padding: 5px 0;">Academic Qualification :</h2>
                <table>
                        <tr>
                            <th>Exam Title</th>
                            <th>Concentration/Major</th>
                            <th>Institute</th>
                            <th>Result</th>
                            <th>Pas.Year</th>
                            <th>Duration</th>
                        </tr>
                        <tr>                           
                                <td> <?php echo $row['qualification']; ?> </td>
                                <td> <?php echo $row['major']; ?>  </td>
                                <td> <?php echo $row['institute']; ?>  </td>
                                <td> <?php echo $row['result']; ?> </td>
                                <td> <?php echo $row['year']; ?>  </td>
                                <td> <?php echo $row['duriation']; ?>  </td>                          
                        </tr>

                        <!--
                        <tr>
                            <td>Diploma-in-Engineering</td>
                            <td>Computer</td>
                            <td>Kurigram Polytechnic Institute,Kurigram</td>
                            <td></td>
                            <td>Continue</td>
                            <td>4 Years</td>
                        </tr>
                        <tr>
                            <td>Secondary School  Certificate (SSC) </td>
                            <td>Science</td>
                            <td>jaldhaka pilot high school</td>
                            <td>4.50</td>
                            <td></td>
                            <td>2 Years</td>
                        </tr>-->
                </table>
            </div>
        </div>
    </section>        
    <section class="personal-section">
        <div class="container">
         <h2 style="background-color: #DCDCDC; text-decoration: underline;
         padding: 5px 0;">Personal Details :</h2>
         <div class="details">
             <div class="main-col">
                 <div class="left-col">
                     <p>Father's Name</p>
                     <p>Mother's Name</p>
                     <p>Date of Birth</p>
                     <p>Gender</p>
                     <p>Marital Status</p>
                     <p>Nationality</p>
                     <p>Religion</p>
                     <p>Permanent Address</p>
                     <p>Current Location</p>
                 </div>
                 <div class="right-col">
                     <p>: <?php echo $row['father_name']; ?>  </p>
                     <p>: <?php echo $row['mother_name']; ?>  </p>
                     <p>: <?php echo $row['dob']; ?> </p>
                     <p>: <?php echo $row['gender']; ?>  </p>
                     <p>: <?php echo $row['marital']; ?> </p>
                     <p>: <?php echo $row['nationality']; ?> </p>
                     <p>: <?php echo $row['religion']; ?> </p>
                     <p>: <?php echo $row['pr_address']; ?>  </p>
                     <p>: <?php echo $row['location']; ?>  </p>
                 </div>
             </div>
        </div>
        </div>
    </section>        
     <section>
        <div class="container">
            <div class="cap">
                <p>I do hereby declare that the above mentioned information’s are authentic to the best of my knowledge.</p>
            </div>
            <h5><?php echo $row['first_name'].''.$row['last_name']; ?></h5>
        </div>
    </section>          
</body>
</html>