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
            <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center">Blog Tags</h2>
            <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4">
                <li><a href="index.php">Home</a></li>
                <li>/</li>
                <li><a href="blog-v1.php">Blog</a></li>
                <li>/</li>
                <li class="text-primary">Vase</li>
            </ul>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Tag Post Start -->
    <div class="s-py-100">
        <div class="container-fluid">
            <div class="max-w-[1720px] mx-auto">
                <!-- Title -->
                <!-- <h3 class="font-medium leading-none text-2xl md:text-3xl mb-5 md:mb-6" data-aos="fade-up">Latest Posts</h3> -->
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5 md:gap-[30px]" data-aos="fade-up" data-aos-delay="100">
                    
                    <!-- blogs-v1 code  -->
                    <?php
                        include "$base_dir/Components/Blog/blogs-v1.php";
                    ?>

                </div>
                <div class="text-center mt-7 md:mt-12">
                    <a href="#" class="btn btn-outline" data-text="Load More">
                        <span>Load More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Tag Post End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>