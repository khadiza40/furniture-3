<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Furnixar/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/navbar.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page= 'nav';
$fpage= 'foot6';

// Optionally define the Hero block content
ob_start();
?>

    <!-- Banner Start -->
    <div class="flex items-center gap-4 flex-wrap bg-overlay p-14 sm:p-16 before:bg-title before:bg-opacity-70" style="background-image:url('<?php echo $static_url; ?>/img/shortcode/breadcumb.jpg');">
        <div class="text-center w-full">
            <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center">Portfolio</h2>
            <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4">
                <li><a href="index.php">Home</a></li>
                <li>/</li>
                <li class="text-primary">Portfolio</li>
            </ul>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Portfolio v2 Area Start -->
    <div class="s-py-100 overflow-hidden relative">
        <div class="container-fluid">
            <div class="max-w-[1720px] mx-auto" data-aos="fade-up" data-aos-delay="100">
                <!-- portfolio Navs -->
                <div class="portfolio1-button flex justify-center gap-[15px] flex-wrap mb-8 md:mb-12">
                    <button class="active btn btn-sm btn-theme-outline" data-filter="*" data-text="All">
                        <span>All</span>
                    </button>
                    <button class="btn btn-sm btn-theme-outline" data-filter=".Sofa" data-text="Sofa & Chair">
                        <span>Sofa & Chair</span>
                    </button>
                    <button class="btn btn-sm btn-theme-outline" data-filter=".Interior" data-text="Full Interior">
                        <span>Full Interior</span>
                    </button>
                    <button class="btn btn-sm btn-theme-outline" data-filter=".Vase" data-text="Lamp & Vase">
                        <span>Lamp & Vase</span>
                    </button>
                    <button class="btn btn-sm btn-theme-outline" data-filter=".Table" data-text="Table">
                        <span>Table</span>
                    </button>
                    <button class="btn btn-sm btn-theme-outline" data-filter=".Design" data-text="Art Design">
                        <span>Art Design</span>
                    </button>
                </div>
                <!-- Gallery -->
                <div class="portfolio1-isotope -m-[10px] md:-m-[15px]">
                    
                    <!-- portfolios-v2 code  -->
                    <?php
                        include "$base_dir/Components/Pages/portfolios-v2.php";
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio v2 Area End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>