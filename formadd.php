    <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l12 s12">

      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">


          <h3>ADD STORY</h3>
        
          <div class="w3-container w3-white w3-margin w3-padding-large">
            <form class='white' action='add.php' method='POST'>
                <p><label>Name</label></p>
                <p><textarea name='story' cols="50" rows="5" style="height: 30px; vertical-align: top;"><?php echo $nm; ?></textarea></p>
                <div style="color:red;"><?php echo $err['errnm']; ?></div>

                <p><label>Summary</label></p>
                <p><textarea name='summary' cols="50" rows="5" style="height: 100px; vertical-align: top;"><?php echo $sm; ?></textarea></p>
                <div style="color:red;"><?php echo $err['errsm']; ?></div>

                <p><label>Plot</label></p>
                <p><textarea name='plot' cols="50" rows="5" style="height: 200px; vertical-align: top;"><?php echo $pt; ?></textarea></p>
                <div style="color:red;"><?php echo $err['errpt']; ?></div>

                <p><input type='submit' name='submit' value='ADD'></p>
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