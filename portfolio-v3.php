<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Furnixar/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/navbar.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page= 'nav';
$fpage= 'foot';

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

    <!-- Portfolio v1 Area Start -->
    <div class="s-py-100 overflow-hidden relative">
        <div class="container-fluid">
            <div class="max-w-[1720px] mx-auto">
                <!-- portfolio Buttons -->
                <div class="portfolio2-button flex items-center gap-3 md:gap-4 lg:gap-6 flex-wrap mb-8 md:mb-12" data-aos="fade-up" data-aos-delay="100">
                    <button class="active text-base md:text-[17px] leading-none font-medium hover:text-primary duration-300" data-filter="*">
                        All
                    </button>
                    <svg class="fill-current text-paragraph dark:text-white-light" width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.894 0.194247C6.054 2.48625 5.214 4.77825 4.374 7.07025C3.534 9.36225 2.688 11.6542 1.836 13.9462H0.306C1.158 11.6542 2.004 9.36225 2.844 7.07025C3.684 4.77825 4.53 2.48625 5.382 0.194247H6.894Z"/>
                    </svg>
                    <button class="text-base md:text-[17px] leading-none font-medium hover:text-primary duration-300" data-filter=".Interior">
                        Full Interior
                    </button>
                    <svg class="fill-current text-paragraph dark:text-white-light" width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.894 0.194247C6.054 2.48625 5.214 4.77825 4.374 7.07025C3.534 9.36225 2.688 11.6542 1.836 13.9462H0.306C1.158 11.6542 2.004 9.36225 2.844 7.07025C3.684 4.77825 4.53 2.48625 5.382 0.194247H6.894Z"/>
                    </svg>
                    <button class="text-base md:text-[17px] leading-none font-medium hover:text-primary duration-300" data-filter=".Vase">
                        Lamp & Vase
                    </button>
                    <svg class="fill-current text-paragraph dark:text-white-light" width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.894 0.194247C6.054 2.48625 5.214 4.77825 4.374 7.07025C3.534 9.36225 2.688 11.6542 1.836 13.9462H0.306C1.158 11.6542 2.004 9.36225 2.844 7.07025C3.684 4.77825 4.53 2.48625 5.382 0.194247H6.894Z"/>
                    </svg>
                    <button class="text-base md:text-[17px] leading-none font-medium hover:text-primary duration-300" data-filter=".Table">
                        Table
                    </button>
                    <svg class="fill-current text-paragraph dark:text-white-light" width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.894 0.194247C6.054 2.48625 5.214 4.77825 4.374 7.07025C3.534 9.36225 2.688 11.6542 1.836 13.9462H0.306C1.158 11.6542 2.004 9.36225 2.844 7.07025C3.684 4.77825 4.53 2.48625 5.382 0.194247H6.894Z"/>
                    </svg>
                    <button class="text-base md:text-[17px] leading-none font-medium hover:text-primary duration-300" data-filter=".Design">
                        Art Design
                    </button>
                </div>
                <!-- Gallery -->
                <div class="portfolio2-isotope -m-[10px] sm:-m-[15px]" data-aos="fade-up" data-aos-delay="200">
                    <div class="grid-sizer"></div>
                    
                        <!-- portfolios-v3 code  -->
                        <?php
                            include "$base_dir/Components/Pages/portfolios-v3.php";
                        ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio v1 Area End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>