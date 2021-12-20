

<?php
include 'header.php';
?>
  <div class="wrap">
  <center>
  <h2>GetSource</h2>
  <p>Easiest way to download a website.</p>
 

  <form name="form" action="scraping.php" method="get">
    <div >
      <div class="search">
        <input type="text" class="searchTerm" name="subject" id="subject" placeholder="https://URL .." />
        <button type="submit" class="searchButton">
        <img src="img/download.png" alt="home" width="25px" height="25px"/>
          
        </button>
      </div>
    </div>

  </form>
  </center>
  </div>


  <?php
  include 'footer.php';
  ?>
