    <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l12 s12">

      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">


          <h3>ADD STORY</h3>
        
          <div class="w3-container w3-white w3-margin w3-padding-large">
            <form class='white' action='delete.php' method='POST'>
                <p><label>Name</label></p>
                <p><textarea name='story' cols="50" rows="5" style="height: 30px; vertical-align: top;"><?php echo $nm; ?></textarea></p>
                <div style="color:red;"><?php echo $err['errnm']; ?></div>

                <p><input type='submit' name='submit' value='DELETE'></p>
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