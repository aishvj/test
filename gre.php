<?php
include ("partials/head.php");
include ("partials/header.php");
	include ("partials/slider.php");
    include ("partials/banner.php");

include("partials/connect.php");
?>
<div class="row isotope-grid">
<?php
if (!empty($_REQUEST['term'])) { 

$term = $_REQUEST['term'];     

$sql = "SELECT * FROM products WHERE name LIKE '%".$term."%'"; 
$results = $connect->query($sql);
while ($final=$results->fetch_assoc()) { ?>
    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $final['category_id'] ?> ">
        <!-- Block2 -->
        <div class="block2">
            <div class="block2-pic hov-img0">
                <img src="<?php echo $final['picture'] ?>" alt="IMG-PRODUCT" style="min-height: 400px; max-height: 400px">
    
                <a href="details.php?details_id=<?php echo $final['id']?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                    Quick View
                </a>
            </div>
    
            <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                    <a href="details.php?details_id=<?php echo $final['id']?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                        <?php echo $final['name'] ?>
                    </a>
    
                    <span class="stext-105 cl3">
                        $<?php echo $final['price'] ?>
                    </span>
                </div>
    
                
            </div>
        </div>
    </div>
    <?php } ?>
    <?php } ?>
    </div>

   