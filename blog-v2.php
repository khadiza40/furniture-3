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
            <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center">Blog Post</h2>
            <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4">
                <li><a href="index.php">Home</a></li>
                <li>/</li>
                <li class="text-primary">Blog</li>
            </ul>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Feature Post Start -->
    <div class="s-py-100">
        <div class="container-fluid">
            <div class="max-w-[1720px] mx-auto mb-5 md:mb-6">
                <h3 class="font-medium leading-none text-2xl md:text-3xl" data-aos="fade-up">Featured Posts</h3>
                <div class=" mt-12 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-7 md:gap-9" data-aos="fade-up" data-aos-delay="100">
                    
                    <!-- blogs-v2-featured code  -->
                    <?php
                        include "$base_dir/Components/Blog/blogs-v2-featured.php";
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Feature Post End -->

    <!-- Latest Post Start -->
    <div class="s-pb-100">
        <div class="container-fluid">
            <div class="max-w-[1720px] mx-auto">
                <h3 class="font-medium leading-none text-2xl md:text-3xl mb-5 md:mb-6" data-aos="fade-up">Latest Posts</h3>
                <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 md:gap-[30px]" data-aos="fade-up" data-aos-delay="100">
                    
                    <!-- blogs-v2 code  -->
                    <?php
                        include "$base_dir/Components/Blog/blogs-v2.php";
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
    <!-- Latest Post End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>