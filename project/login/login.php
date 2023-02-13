<?php  
  // session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <!----<title>Login Form Design | CodeLab</title>---->
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body >
    <i class="logo"><b>HNFoods</b></i>
    <div class="wrapper">
      <div class="title">Đăng nhập</div>
      <form  action='' class="dangnhap" method='POST'>
        <div class="field">
          <input type="email" name="username" >
          <label>Tài khoản</label>
        </div>
        <div class="field">
          <input type="password" name = "password">
          <label>Mật khẩu</label>
        </div>
        
        <div class="field">
          <input type="submit"  name ="dangnhap" value="Login">
        </div>
        <div class="signup-link">Chưa có tài khoản? <a href="../register/register.php">Đăng ký</a> ngay</div>
        <div class="signup-link"><a href="../trangchu/foodinfo.php">Quay lại trang chủ</a></div>

        <?php require 'xulydangnhap.php';?>  
      </form>
    </div>
  </body>
</html>