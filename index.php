

<?php 
 require 'header.php'
 ?>
<?php  require 'nav.php'?>



<?php

$request = isset($_GET['item']);

if (isset($_GET['item']) && $_GET['item'] === 'contact') 
{
     require './pages/contact.php';
}
elseif (isset($_GET['item']) && $_GET['item'] === 'project') {

     require './pages/projects.php';
}
else
{
?>

<!-- ============ HEROE SECTION ============= -->
<section class="heroe bg_main">

    <div class="circli_1"></div>
    <div class="circli_2"></div>
    <div class="circli_3"></div>
    <div class="circli_4"></div>

    <div class="fg_center heroe_1">
        <div class="left_sec">
            <h1 class="h1">
                I am a <span class="purple" style="font-weight:700;">UI/UX (Product) Designer</span> based in Lagos, Nigeria. 
                I am passionate about <span class="yellow" style="font-weight:700;">designing</span>  and love 
                <span class="yellow" style="font-weight:700;">making complex issues look simple.</span> 
            </h1>

            <span class="line"></span>


            <div class="caption">
                <h3 class="text">Software used:</h3>
                <img class="img_1" src="img/w-img/icons8-figma-48.png" alt="">
                <img src="img/w-img/logos_sketch.png">
                <img src="img/w-img/xd.png">
            </div>

            <div class="icons_top">
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <i class='bx bxl-linkedin-square' ></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <i class='bx bxl-behance' ></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <i class='bx bxl-twitter' ></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <i class='bx bxl-dribbble' ></i>
                </a>
            </div>
        </div>
        
        <div class="right_sec">
            <div class="d_img"></div>
        </div>
    </div>
</section>
<!-- ============ END HEROE SECTION ============= -->



<?php } ?>

<?php  require 'footer.php'?>