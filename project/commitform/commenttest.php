
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
 <?php include "../topbar/topbar.php" ?>
 <?php if (isset($_POST['commentsubmit']))
 { 
 	if(($_POST['comment']=='')){
 		echo '<script language="javascript">alert("Bạn chưa feedback!"); window.location="../commitform/commenttest.php";</script>';

 	}else{ ?>
 <script type="text/javascript">
function check_val(){
 var bad_words=new Array("death","kill","murder","fuck","nigga");
 var check_text=document.getElementById("text").value;
 var error=0;
 for(var i=0;i<bad_words.length;i++)
 {
  var val=bad_words[i];
  if((check_text.toLowerCase()).indexOf(val.toString())>-1)
  {
   error=error+1;
  }
 }
	
 if(error>0)
 {
  <script >alert("tồn tại từ xấu!"); window.location="../commitform/commenttest.php";</script>
 }
 
}
</script>
 
<?php }
}
 ?>
<body class="commentpost">
	<div class="comment-session">
		<div class="post-comment">
			<div class="list">
				<div class="user">
					<div class="image"><img src="../images/avatar.jpg" alt="image"></div>
						<div class="user-meta">
							<div class="name">name</div>
							<div class="day">3 day ago</div>
						</div>
				</div>
				<div class="comment-post">fafadasda</div>
			</div>
		</div>
		<?php if(isset($_SESSION['dangnhap'])){ ?>
		<div class="comment-box">
			<div class="user">
				<div class="image"><img src="../images/avatar.jpg" alt=""></div>
				<div class="name"><?php echo $_SESSION['dangnhap'] ?></div>
			</div>
			<form action="" method="post">
				<textarea name="comment" id="" cols="30" rows="10" placeholder="Your Comment"></textarea>
				<input type="submit"  name ="commentsubmit"  value="Feedback"  onclick="check_val();">
			</form>
		</div>
	<?php } ?>
	</div>
	 <?php include "../footer/footer.php" ?>
</body>

</html>