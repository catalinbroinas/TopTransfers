<!-- Carousel wrapper -->
<div id="topTransferPL" class="carousel slide d-block" data-mdb-ride="carousel" data-interval="180000">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-mdb-target="#topTransferPL" data-mdb-slide-to="0" class="active"></li>
    <li data-mdb-target="#topTransferPL" data-mdb-slide-to="1"></li>
    <li data-mdb-target="#topTransferPL" data-mdb-slide-to="2"></li>
    <li data-mdb-target="#topTransferPL" data-mdb-slide-to="3"></li>
    <li data-mdb-target="#topTransferPL" data-mdb-slide-to="4"></li>
  </ol>
  <!-- Indicators -->

  <!-- Inner -->
  <div class="carousel-inner">

    <?php 
    require_once 'slide1.php';
    require_once 'slide2.php';
    require_once 'slide3.php';
    require_once 'slide4.php'; 
    require_once 'slide5.php'; 
    ?>
    
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <a class="carousel-control-prev" href="#topTransferPL" role="button" data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#topTransferPL" role="button" data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
  <!-- Controls -->

</div>
<!-- Carousel wrapper -->