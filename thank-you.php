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

    <!-- Thank you Area Start -->
    <div class="py-16 sm:py-24">
        <div class="container">
            <div class="max-w-[710px] mx-auto text-center p-7 sm:p-10 lg:p-12">
                <div class="div">
                    <img src="<?php echo $static_url; ?>/img/thank-you.png" alt="thank-you">
                </div>
                <h3 class="leading-[1.2] mt-4 md:mt-6 text-2xl md:text-[32px] font-bold text-title dark:text-white">
                For Shopping with Furnixar
                </h3>
                <p class="mt-3 text-base sm:text-lg text-paragraph dark:text-white">
                    Please Check your email for Download Invoice . Or <a href="index.php" class="text-primary underline">Click here </a>
                </p>
                <a href="index.php" class='btn btn-solid mt-4 md:mt-6' data-text="Back to home">
                    <span>Back to home</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Thank you Area End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>
