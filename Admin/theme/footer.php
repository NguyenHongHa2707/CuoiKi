<section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
  <!-- Jquery JS-->
  <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

<?php
//     include "..//demo/includes/database.php";

//     $servername = "localhost";
//     $username = "root";
//     $password = "1234567890";
//     $dbname = "myblog";
    
//     // tạo connection
//     $conn = mysqli_connect($servername, $username, $password, $dbname);
//     // kiểm tra connection
//     if (!$conn) {
//         die("Connection failed: " . mysqli_connect_error());
//     }

//     $sql = "SELECT username, password,email FROM user";
//     $result = mysqli_query($conn, $sql);
    
//     if (mysqli_num_rows($result) > 0) {
//         // hiển thị dữ liệu trên trang
//         while($row = mysqli_fetch_assoc($result)) {
//             echo "id: " . $row["username"]. " - Name: " . $row["password"]. " "
//                 . $row["ngaydangky"]. $row["email"]. " - Name: " . $row["phai"]. " "
//                 . $row["nghenghiep"].$row["mota"]. "<br>";
//         }
//     } else {
//         echo "0 results";
//     }
    
//     mysqli_close($conn);


//    $u = $_POST['username'];
//    $p = $_POST['password'];
//    $ngay = $_POST['ngaydangky'];
//    $e = $_POST['email'];
//    $phai = $_GET['phai']; 
//    $nghe = $_POST['nghenghiep'];
//    $mota = $_POST['mota'];   //nl2br($_POST['mota']);
//    $mota = $_POST['mota'];   //nl2br($_POST['mota']);
//    echo $mota;