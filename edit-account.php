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
            <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center">Edit Account</h2>
            <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4">
                <li><a href="index.php">Home</a></li>
                <li>/</li>
                <li class="text-primary">Account</li>
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
                        <li class="active text-primary py-3 lg:py-6 pl-6 lg:pl-12">
                            <a class="duration-300 hover:text-primary" href="edit-account.php">Edit Account</a>
                        </li>
                        <li class="py-3 lg:py-6 pl-6 lg:pl-12">
                            <a class="duration-300 hover:text-primary" href="order-history.php">Order History</a>
                        </li>
                        <li class="py-3 lg:py-6 pl-6 lg:pl-12">
                            <a class="duration-300 hover:text-primary" href="wishlist.php">Wishlist</a>
                        </li>
                        <li class="pt-3 lg:pt-6 pl-6 lg:pl-12">
                            <a class="duration-300 hover:text-primary" href="login.php">Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-auto md:flex-1 overflow-auto">
                    <!-- Profile Content -->
                    <div class="w-full max-w-[951px] bg-[#F8F8F9] dark:bg-dark-secondary p-5 sm:p-8 lg:p-[50px]">
                        <div class="flex items-start flex-col lg:flex-row gap-5 sm:gap-6">
                            <div class="grid gap-5 sm:gap-6 w-full lg:w-1/2">
                                <div>
                                    <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">Full Name</label>
                                    <input class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300" type="text" placeholder="Enter your full name">
                                </div>
                                <div>
                                    <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">Designation</label>
                                    <input class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300" type="text" placeholder="Enter your designation">
                                </div>
                                <div>
                                    <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">Phone No.</label>
                                    <input class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300 appearance-none" type="number" placeholder="Type your phone number">
                                </div>
                                <div>
                                    <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">Mail</label>
                                    <input class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300" type="email" placeholder="Enter your email address">
                                </div>
                            </div>
                            <div class="grid gap-5 sm:gap-6 w-full lg:w-1/2">
                                <div>
                                    <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">Location</label>
                                    <input class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300" type="text" placeholder="Enter your location">
                                </div>
                                <div>
                                    <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">Bio</label>
                                    <textarea class="w-full h-28 md:h-[168px] bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300" name="Message" placeholder="Write your bio . . ."></textarea>
                                </div>
                                <div>
                                    <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">Web / Social Media</label>
                                    <input class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300" type="text" placeholder="www.facebook.com/johndoe">
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-8 md:mt-12">
                            <button class="btn btn-solid" data-text="Save Change">
                                <span>Save Change</span>
                            </button>
                        </div>
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