    <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l12 s12">

      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">


          <h3>LOG IN</h3>
        
          <div class="w3-container w3-white w3-margin w3-padding-large">
            <form class='white' action='login.php' method='POST'>
                <p><label>Username</label></p>
                <p><input name='username' size='30' type='text' value='<?php echo $un; ?>'></p>
                <div style="color:red;"><?php echo $err['errun']; ?></div>

                <p><label>Password</label></p>
                <p><input name='password' size='30' type='password' value='<?php echo $pw; ?>'></p>
                <div style="color:red;"><?php echo $err['errpw']; ?></div>

                <p><input type='submit' name='submit' value='LOG IN'></p>
            </form>
        </div>

        </div>
        
      </div>
      
    <!-- END BLOG ENTRIES -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>