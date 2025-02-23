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
            <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center">Payment Completed</h2>
            <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4">
                <li><a href="index.php">Home</a></li>
                <li>/</li>
                <li class="text-primary">Payment</li>
            </ul>
        </div>
    </div>
    <!-- Banner End -->

    <!--  Payment Completed Area Start -->
    <div class="py-16 sm:py-24">
        <div class="container">
            <div class="max-w-[710px] mx-auto text-center bg-success dark:bg-dark-secondary p-7 sm:p-10 lg:p-12">
                <div class="mx-auto flex items-center justify-center">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.0099 3.76465C44.5049 3.76465 56.2601 15.5198 56.2601 30.0148C56.2601 44.5098 44.5049 56.265 30.0099 56.265C15.5149 56.265 3.75977 44.5098 3.75977 30.0148C3.75977 15.5198 15.5149 3.76465 30.0099 3.76465ZM24.5588 38.5411L18.1321 32.1091C17.0372 31.0135 17.037 29.227 18.1321 28.1317C19.2274 27.0366 21.0219 27.0435 22.1092 28.1317L26.64 32.666L37.911 21.395C39.0064 20.2997 40.7931 20.2997 41.8882 21.395C42.9835 22.4901 42.982 24.2784 41.8882 25.3721L28.6254 38.635C27.5316 39.7287 25.7433 39.7303 24.6482 38.635C24.6174 38.6042 24.5878 38.5729 24.5588 38.5411Z" fill="#49B66E"/>
                    </svg>
                </div>
                <h3 class="leading-[1.2] mt-4 md:mt-6 text-2xl md:text-[32px] font-bold text-title dark:text-white">
                    Payment Completed
                </h3>
                <p class="mt-3 text-base sm:text-lg text-paragraph dark:text-white">
                    Hey there. We tried to charge your card but, something went wrong. Please update your payment method below to continue
                </p>
                <a href="/shop-v1.php" class="btn btn-solid mt-4 md:mt-6" data-text="Back to Shop">
                    <span>Back to Shop</span>
                </a>
            </div>
        </div>
    </div>
    <!--  Payment Completed Area End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>