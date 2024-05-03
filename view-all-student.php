
<?php

    include_once 'dib_config.php';

    $select = "SELECT * FROM `student_info`";
    $result = mysqli_query($conn, $select);
      
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
    <!--fontwasome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--css llink-->
    <link rel="stylesheet" href="style.css">
    <title>view all student</title>
</head>
 <body>

   <div class="row" style="margin-left: 0;margin-right: 0;">
        <!--left sidber-->
        
        <?php
            include_once 'sidber.php';
        ?>

        <!--right sidber-->
        <div class="rigth-sidber col-md-10 bg-secondary  text-dark">
            <h1 style="color: aqua; font-weight: 600;">All Data Here :</h1> 
            
            <table class="table table-hover table-dark" style="margin: 0;">
                <thead class="bg-body-secondary">
                        <tr class="bg-primary">
                          <th scope="col">Id</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">institute</th>
                          <th scope="col">Ection</th>
                        </tr>
                </thead>
                <tbody>

                    <?php while( $row = mysqli_fetch_assoc($result)){?> 
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['institute']; ?></td>
                            <td>
                                <a href="cv.php?id=<?php echo $row['id'];?>" target="_blank" class="btn btn-success">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="edit.php?id=<?php echo $row['id'];?>" target="_blank" class="btn btn-warning">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                <a href="delete_query.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are yoou sure ?')" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
   </div>


    <!--jequery cdn link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--bootstrap js cdn link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Select2 from a CDN js link-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    </body>
</html>