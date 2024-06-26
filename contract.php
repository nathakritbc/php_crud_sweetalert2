<?php
session_start();
if (isset($_SESSION['a_username'])) {?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Crud By Php Mysqli พี่เจมส์ ตาโต</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png"
        href="https://scontent.fkkc3-1.fna.fbcdn.net/v/t1.0-9/119980752_337785307574954_1757152202764221432_o.jpg?_nc_cat=105&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeEdQ3uuMUpSNsKpHfjvpUDro1XX0a4IIyujVdfRrggjKx0oaTlnEEJRQqIYyg0KJMUxDMwjlPd-dN2hT7EGYqeo&_nc_ohc=0bT4uczorNcAX96yl_4&_nc_ht=scontent.fkkc3-1.fna&oh=6b8d05997d7e1dd2078a3062bc4a3886&oe=5FBB4911" />
    <!-- การลิ้ง css bootstrap เเบบ cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- การลิ้ง javascript ของ bootstrap เเบบ cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <link rel="icon" href="./images/box.png" type="image/png">
    <!-- การลิ้ง icon เพื่อใช้งาน icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- การลิ้ง sweetalert2 เเบบ cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- google font -->
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>

    <!-- การนำเข้า Navbar -->
    <?php include_once "navBar.php";?>

    <div class="container my-5 z-depth-1">


        <!--Section: Content-->
        <section class="dark-grey-text">

            <div class="row pr-lg-5">
                <div class="col-md-7 mb-4">

                    <div class="view">
                        <img src="https://scontent.fbkk5-3.fna.fbcdn.net/v/t39.30808-6/283985604_725828415437306_38237685636193656_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=6tHpBcR2y84Q7kNvgEC1pmF&_nc_ht=scontent.fbkk5-3.fna&oh=00_AYBDM7XFSuQ6OwJoAFAFJAK1Mi0cI1T6e9tXqFJzbbznxA&oe=6658C888"
                            class="img-fluid" alt="smaple image">
                    </div>

                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <div>

                        <h1 class="font-weight-bold mb-4 text-primary">พี่เจมส์ ตาโต</h1>

                        <p><span class="ml-4">ผมนายณัฐกฤต</span> ทิศเสถียร ชื่อเล่น เจมส์ เป็นผู้พัฒนาระบบ BackEnd
                            ระบบจัดการหลังบ้านของ Admin
                            โดยเปิดเป็น Open Source ให้นักพัฒนาสามารถนำไปต่อยอดได้ ซึ่งระบบจะมีการอัปเดตปรับปรุงเรื่อย
                            ๆ ระบบพัฒนาด้วยภาษา <a href="#">PHP,Jquery,Bootstrap4,SweetAlert2</a> เเละ <a
                                href="#">DataTable</a> ฐานข้อมูล MariaDB
                            สามารถติดตามได้ที่ Facebook <br><a
                                href="https://www.facebook.com/profile.php?id=100040304628322">พี่เจมส์ตาโต</a>
                            เบอร์โทรศัพท์ <a href="#">061-103-3102</a>
                        </p>

                        <h4 class="font-weight-bold text-primary mb-4">สนับสนุนค่าขนม</h4>
                        <img src="./images/bank-logo.png" class="img-fluid" width="60" alt="Responsive image"><br><br>
                        <h6><a class="mb-3" href="#">1371-720-258</a> <br>ณัฐกฤต ทิศเสถียร</h6>


                        <a type="button" href="https://www.facebook.com/profile.php?id=100040304628322"
                            class="btn btn-warning btn-rounded mx-0 mt-4">ติดต่อ</a>

                    </div>
                </div>
            </div>

        </section>
        <!--Section: Content-->


    </div>

</body>

</html>
<?php
} else {
    header('Location: login.php');
    exit;
}
?>