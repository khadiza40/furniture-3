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
            <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center">Wishlist</h2>
            <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4">
                <li><a href="index.php">Home</a></li>
                <li>/</li>
                <li class="text-primary">wishlist</li>
            </ul>
        </div>
    </div>
    <!-- Banner End -->

    <!-- My Profile Start -->
    <div class="s-py-100" data-aos="fade-up">
        <div class="container-fluid">
            <!-- portfolio Navs -->
            <div class="max-w-[1720px] mx-auto flex items-start gap-8 md:gap-12 2xl:gap-24 flex-col md:flex-row my-profile-navtab">
                <div class="w-full md:w-[200px] lg:w-[300px] flex-none">
                    <ul class="divide-y dark:divide-paragraph text-title dark:text-white text-base sm:text-lg lg:text-xl flex flex-col justify-center leading-none">
                        <li class="pb-3 lg:pb-6 pl-6 lg:pl-12">
                            <a class="duration-300 hover:text-primary" href="my-account.php">My Account</a>
                        </li>
                        <li class="py-3 lg:py-6 pl-6 lg:pl-12">
                            <a class="duration-300 hover:text-primary" href="edit-account.php">Edit Account</a>
                        </li>
                        <li class="py-3 lg:py-6 pl-6 lg:pl-12">
                            <a class="duration-300 hover:text-primary" href="order-history.php">Order History</a>
                        </li>
                        <li class="active text-primary py-3 lg:py-6 pl-6 lg:pl-12">
                            <a class="duration-300 hover:text-primary" href="wishlist.php">Wishlist</a>
                        </li>
                        <li class="pt-3 lg:pt-6 pl-6 lg:pl-12">
                            <a class="duration-300 hover:text-primary" href="login.php">Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-auto md:flex-1">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 sm:gap-6 lg::gap-8">
                        
                        <!-- wishlists code  -->
                        <?php
                            include "$base_dir/Components/Pages/wishlists.php";
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- My Profile End -->
    
<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>
