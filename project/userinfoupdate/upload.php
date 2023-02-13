<?php
$filename = '../images/1675834854_2560x1600-1011861-night-planet-space-moonlight-atmosphere-universe-Aurora-midnight-darkness-computer-wallpaper-outer-space-phenomenon.jpg';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
?>
<?php if(isset($alert)):?>
  <script>alert("Wrong image format!")</script>
<?php endif;?>
<section>
  <form method="post" enctype="multipart/form-data">
    <section>
      <input type="file" name="file" class="hidden">
    </section>
    <section><input type="submit" value="Upload" name="upload"></section>
  </form>
</section>