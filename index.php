<?php
require 'base.php';
?>


<!DOCTYPE html>
<html>

  <?php include 'header.php'; ?>

  <body>
  <div class="container">
    <br><br>
    <div class="row">
        <div class="span6"><img src="img/responsive.png"></div>

          <div class="span6">
          <h1>WHY USE VPN?</h1>
            <p> When you use public networks, like the Wi-Fi Hotspots, which can be accessed by anyone extremely easy, hackers can steal your private information stored on your device, including your identity. By using VPN, the public network connections you use will be secured and encrypted, keeping all your personal details private and protected! </p>
             <a href="#">Read More &rarr;</a>
        </div>
    </div>

      <!-- <div class="hr-divider"></div> -->
      <br><br>

    
</div>


<!-- /.Row View -->
<div class="container">
        <table class="table table-bordered">
            <?php for($i = 0; $i < count($data); $i++): ?>
            <tr>
                <?php foreach ($data[$i] as $key => $value): ?>
                    <?php if ($key > 0 && $key < 6): ?>
                        <td><?php echo $value ?></td>
                    <?php endif ?>
                <?php endforeach ?>

                <?php if ($i > 0): ?>
                    <td class="center">
                        <form action="download.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $i ?>">
                            <input type="submit" class="btn btn-primary" value="Download">
                        </form>
                    </td>
                <?php else: ?>
                    <td></td>
                <?php endif ?>
            </tr>
            <?php endfor; ?>
        </table>
</div>


<!--Footer
==========================-->

<footer>
    <div class="container">
      <div class="row">
        <div class="span4">Copyright &copy 2013 Shapebootstrap | All Rights Reserved  <br>
        <small>Aliquam tincidunt mauris eu risus.</small>
        </div>
        <div class="span2">
 <!-- Histats.com  START  (standard)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="myspace tracker" ><script  type="text/javascript" >
try {Histats.start(1,3399390,4,605,110,55,"00011111");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?3399390&101" alt="myspace tracker" border="0"></a></noscript>
<!-- Histats.com  END  -->
          
        </div>
        <div class="span6">
            <div class="social pull-right">
                <a href="#"><img src="img/social/googleplus.png" alt=""></a>
                <a href="#"><img src="img/social/dribbble.png" alt=""></a>
                <a href="#"><img src="img/social/twitter.png" alt=""></a>
                <a href="#"><img src="img/social/dribbble.png" alt=""></a>
                <a href="#"><img src="img/social/rss.png" alt=""></a>
            </div>
        </div>
      </div>
    </div>
</footer>

<!--/.Footer-->

  </body>
</html>

