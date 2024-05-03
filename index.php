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
    <link rel="stylesheet" href="style.css">
    <title>dashboard</title>
</head>
<body>
    <div class="row" style="margin-left: 0;margin-right: 0;">
        
        <?php
            include_once 'sidber.php';
        ?>

        <div class="rigth-sidber col-md-10 bg-secondary position-relative">
           <div class="heading position-absolute"  style="text-align:right;">
                <h2>
                <marquee  style="margin-top: 10px; font-size: 36px; color: white;">কুড়িগ্রাম পলিটেকনিক ইনস্টিটিউট,কুড়িগ্রাম  </marquee>
                </h2>
                
           </div>
            <div class="img ">
                <img src="image/kurigram.jpg" alt="" width=100%; height=650px; >
            </div>
        </div>
    </div>
</body>
</html>