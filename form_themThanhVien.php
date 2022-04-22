<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM THÀNH VIÊN</title>
    <link rel="stylesheet" href="public/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <div class="container">
        <div class="col-6 m-auto mt-5">
            <form action="" method="post" id="myform">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">HỌ VÀ TÊN</label>
                    <input type="text"  name="named" class="form-control name" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">EMAIL</label>
                    <input type="emial"  name="emailed" class="form-control email" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">SỐ ĐIỆN THOẠI</label>
                    <input type="emial"  name="phoned" class="form-control phone" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">THÔNG TIN LIÊN LẠC</label>
                    <input type="textarea"  name="contracted" class="form-control contact" id="exampleInputPassword1">
                </div>
              
                <input type="submit" id="gui" name="send" class="btn btn-primary mb-5"></input>
                <div class="nhap"><h3 class="reset" onclick="datlai()">Reset Form</h3></div>
            </form>
        </div>
    </div>
</body>

<?php 
require_once ('pdo.php');
// lấy dữ liệu từ form về
if(isset($_POST['send'])==true){
    $name = $_POST['named'];
    $email = $_POST['emailed'];
    $phone = $_POST['phoned'];
    $contact = $_POST['contracted'];
    // tiến hành insert vào database
    $sql = "INSERT INTO thongtin (ho_Va_Ten,email,sdt,thong_tin) VALUE('$name','$email','$phone','$contact')";
    $conn->exec($sql);
    echo "New record created successfully";
}
?>
<script src="public/js/main2.js"></script>
</html>
<link rel="stylesheet" href="public/bootstrap-5.1.3-dist/js/bootstrap.bundle.js">