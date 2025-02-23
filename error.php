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
            <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center">Error Page</h2>
            <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4">
                <li><a href="index.php">Home</a></li>
                <li>/</li>
                <li class="text-primary">Error</li>
            </ul>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Error Area Start -->
    <div class="s-py-100 overflow-hidden">
        <div class="container">
            <div class="flex items-center justify-center gap-5">
                <h2 class="text-6xl sm:text-[100px] md:text-[150px] font-semibold leading-none" data-aos="fade-right">4</h2>
                <img class="w-36 sm:w-44 md:w-auto" src="<?php echo $static_url; ?>/img/thumb/error.png" alt="error" data-aos="zoom-in">
                <h2 class="text-6xl sm:text-[100px] md:text-[150px] font-semibold leading-none" data-aos="fade-left">4</h2>
            </div>
            <div class="max-w-[603px] mx-auto text-center mt-8 md:mt-12">
                <h2 data-aos="fade-up" class="text-4xl font-bold">Oops Sorry ! Page not found</h2>
                <p class="mt-4 md:mt-6" data-aos="fade-up">Sorry for the inconvenience. Go to our homepage or check out our  
                for Fashion, Chair, Decoration...</p>
                <div data-aos="fade-up" data-aos-delay="100">
                    <a class="btn btn-outline mt-4 md:mt-6" href="index.php" data-text="Go Back To Home">
                        <span>Go Back To Home</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Error Area End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>