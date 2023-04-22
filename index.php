<?php
require_once ('bootloader.php'); 

$pageTitle = 'Top 10 transferuri Premier League2020-2021';

require_once ('view/layout/head.php'); 
?>

<header>
	<?php require_once ('view/components/carousel.php'); ?>
</header>

<?php require_once ('view/layout/footer.php'); ?>

<script>
	let myIndex = 0;
    slideShow();
    modalImages();
    zoomImage();
</script>
