<!DOCTYPE html>
      <html lang="en">
        <head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>HNFOOD</title>
          <!-- CSS -->
          <link rel="stylesheet" href="css/style.css?t=[timestamp]" type="text/css" />
          <!-- Unicons CSS -->
          <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
          <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
          <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
          <script src="js/script.js" defer></script>
        </head>
        <body>
          <!--header</!-->
          <?php include "../topbar/topbar.php" ?>
          <!--end of header</!-->

      <section class = "menu">
        <div class = "menu-container">
         
          <div class = "food-items">
          <?php  
          include "../connect_database/connect_db.php";  
          $name_dish = $_GET['name_dishes'];
          $query_all = "SELECT * FROM  dishes  WHERE dishes.name = '$name_dish'" ;
     
          $show= pg_query($db_connection,$query_all);
          if (pg_num_rows($show) == 0){
            echo '<script language="javascript">alert("Not Found!"); window.location="../trangchu/foodinfo.php";</script>';

          }
          else{
          while($row_ = pg_fetch_array($show)){
          
?>
          
            <!-- item -->
            <div class = "food-item ">
              <div class = "food-img">
                <img src = "<?php echo '../trangchu/foods/'.$row_['image']; ?>" alt = "food image">
              </div>
              <div class = "food-content">
                <h2 class = "food-name"><?php echo $row_['name']; ?></h2>
                <div class = "line"></div>
                
                <h3 class = "food-price"><?php echo $row_['price'] . " đồng"; ?></h3>
                <p class = "type">Loại :<?php echo $row_['type'] ; ?></p>
                
              <p class = "sale">Sale: <span><?php echo $row_['sale_off'] . "%"; ?></span></p> 
                
               <a href=" <?php echo '/project/restaurant/restaurant.php?stall='.$row_['id_stall'] ?>" class="chi_tiet">Chi tiết</a>       
              </div>
            </div>
            <!-- end of item -->
<?php }} ?>
           
          </div>
        </div>
      </section>
       <!-- footer-->
          <?php include "../footer/footer.php" ?>

 <!-- end of footer -->
    </body>
  </html>
