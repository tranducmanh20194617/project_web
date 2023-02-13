<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/register.css">
  </head>
  <body >
    <i class="logo"><b>HNFoods</b></i>
    <div class="wrapper">
      <div class="title">Đăng ký</div>
      <form  action='' class="form" method='POST'>
        
         <div class="field">
          <input type="text" name = "ten_tk" required>
          <label>Tên tài khoản</label>
        </div><div class="field">
          <input type="email" name="username" required>
          <label>Email</label>
        </div>
        <div class="field">
          <input type="password" name = "password"required>
          <label>Password</label>
        </div>
        <div class="field">
          <input type="password" name = "confirm_password"required>
          <label> Confirm Password</label>
        </div>
         <div class="field">
          <input type="text" name = "sodienthoai" required>
          <label> Số điện thoại</label>
        </div>
          <br><br>
        <div class="field">
          <input type="submit" name ="dangky"value="Register">
        </div>
     <div class="signup-link"><a href="../login/login.php">Quay lại trang đăng nhập</a></div>
     <div class="signup-link"><a href="../trangchu/foodinfo.php">Quay lại trang chủ</a></div>
        <?php require 'xulydangky.php';?> 
      </form>
    </div>
  </body>
</html>