


<?php  require 'header.php'?>
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
                I am a <span class="purple" style="font-weight:600;">UI/UX (Product) Designer</span> based in Lagos, Nigeria. 
                I am passionate about <span class="yellow" style="font-weight:600;">designing</span>  and love 
                <span class="yellow" style="font-weight:600;">making complex issues look simple.</span> 
            </h1>

            <span class="line"></span>


            <div class="caption">
                <h3 class="text">Software used:</h3>
                <i class="figma">icon</i>
                <i class="sketch">icon</i>
                <i class="xd">icon</i>
            </div>

            <div class="icons_top">
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="linkedin">iconv</i>
                </a>
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="behance">iconv</i>
                </a>
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="twitter">iconv</i>
                </a>
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="dribble">iconv</i>
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