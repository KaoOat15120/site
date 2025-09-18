    <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">

      <!-- Blog entry -->
       <?php foreach ($stories as $each): ?>
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">


          <h3><a href="stuff.php?id=<?php echo $each['id'] ?>"><?php echo htmlspecialchars($each['story']); ?></a></h3>


          <h5>Upload On <span class="w3-opacity"><?php echo htmlspecialchars($each['upload']); ?></span></h5>


        </div>
        
        <div class="w3-justify">
          <img src="/w3images/man_hat.jpg" alt="Men in Hats" style="width:100%" class="w3-padding-16">


          <p><?php echo htmlspecialchars($each['summary']); ?></p>


          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>

          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo2')"><b>Replies  </b> <span class="w3-tag w3-white">2</span></button></p>
          
          <p class="w3-clear"></p>
        
        </div>
      </div>
      <?php endforeach; ?>
      
    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- Subscribe -->
      <div class="w3-white w3-margin">

            <p><button onclick="location.href='signup.php'" type="button" onclick="document.getElementById('subscribe').style.display='block'" class="w3-button w3-block w3-orange">SIGN UP</button></p>

            <p><button onclick="location.href='login.php'" type="button" onclick="document.getElementById('subscribe').style.display='block'" class="w3-button w3-block w3-blue">LOG IN</button></p>

          <p><button onclick="location.href='add.php'" type="button" onclick="document.getElementById('subscribe').style.display='block'" class="w3-button w3-block w3-green">ADD STORY</button></p>

          <p><button onclick="location.href='delete.php'" type="button" onclick="document.getElementById('subscribe').style.display='block'" class="w3-button w3-block w3-red">DELETE STORY</button></p>

          <p><button onclick="location.href='logout.php'" type="button" onclick="document.getElementById('subscribe').style.display='block'" class="w3-button w3-block w3-purple">LOG OUT</button></p>

      </div>

    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>