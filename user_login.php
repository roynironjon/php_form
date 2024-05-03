<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap min css cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Select2 from a CDN css link-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <!--css llink-->
    <title>login</title>
</head>
<body>
   <div class="row bg-dark text-white m-auto" style="margin: 0; height:100vh">
        <div class="col-md-4 m-auto bg-danger" style="border-radius: 10px;">
           <div class="form-group" >
            <h1 style="text-align:center; padding:20px 0px;">Login Form</h1>
           </div>
            <form method="POST" action="user-login-insert.php">
                <div class="form-group mt-3">
                    <label for="email" class="pb-2">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Email address" name="email">
                </div>
                <div class="form-group mt-3">
                    <label for="password" class="pb-2">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <p class="mt-3">Allready login? <a href="user_registration.php" class="text-white">register</a></p>    
        </div>
   </div>
</body>
</html>