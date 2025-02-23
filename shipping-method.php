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
            <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center">Method of Shipping</h2>
            <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4 flex-wrap">
                <li><a href="index.php">Home</a></li>
                <li>/</li>
                <li class="text-primary">Shipping Method</li>
            </ul>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Payment Method Start -->
    <div class="s-py-100">
        <div class="container">
            <div class="max-w-[940px] mx-auto">
                <!-- Title -->
                <div class="max-w-xl mb-8 md:mb-12" data-aos="fade-up">
                    <div>
                        <svg class="w-16" viewBox="0 0 68 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M66.9474 35.34H58.3624C60.294 31.9588 60.1455 27.7758 57.9789 24.5401C54.5907 19.309 56.176 17.3974 56.1818 17.3859C56.3998 17.1571 56.3912 16.7949 56.1624 16.5768C56.0566 16.4758 55.9161 16.4193 55.7697 16.4187H54.2301C54.3002 15.3447 54.4244 14.275 54.6021 13.2136C55.1068 13.389 55.636 13.4838 56.1703 13.4941C56.814 13.5248 57.4398 13.2767 57.8873 12.813C58.597 12.0232 60.1767 11.5023 60.749 11.365C61.0585 11.301 61.2576 10.9983 61.1935 10.6886C61.1296 10.3791 60.8268 10.18 60.5172 10.2441C60.5027 10.2471 60.4884 10.2506 60.4741 10.2547C60.3825 10.2547 58.1333 10.827 57.0401 12.0461C56.5823 12.5554 55.4891 12.3151 54.8137 12.0747C55.3174 9.64798 56.2331 6.86072 57.8929 5.01208C58.1047 4.77657 58.0855 4.41399 57.85 4.20223C57.6145 3.99047 57.2519 4.00964 57.0401 4.24515C56.3311 5.05701 55.7396 5.96444 55.2831 6.94084C54.1384 6.32845 52.9079 5.3841 53.1425 4.86327C53.5718 3.91892 54.4761 1.57236 53.6118 0.284608C53.451 0.0124633 53.1 -0.0776792 52.8279 0.0831464C52.5557 0.243972 52.4656 0.594955 52.6264 0.8671C52.6372 0.885271 52.649 0.902871 52.6616 0.919898C53.0222 1.49223 52.799 2.86583 52.0893 4.40541C51.3796 5.94498 53.6689 7.41016 54.8079 8.00538C53.816 10.7115 53.2373 13.5516 53.0909 16.4301H52.8848C52.877 15.6279 52.7888 14.8283 52.6216 14.0435C52.4908 13.4603 52.3207 12.8867 52.1122 12.3265C51.9848 11.9778 51.8398 11.6358 51.6772 11.302C51.56 10.9455 51.4833 10.5769 51.4483 10.2031C51.3338 9.38471 51.2251 8.60633 50.7901 8.17136C50.5675 7.94701 50.2052 7.94543 49.9807 8.16807C49.9795 8.16922 49.9784 8.17022 49.9774 8.17136C49.7555 8.39457 49.7555 8.75514 49.9774 8.97835C50.1728 9.41576 50.2872 9.88507 50.3151 10.3634C50.3584 10.8553 50.4702 11.3388 50.647 11.8C50.7844 12.0804 50.916 12.3723 51.0419 12.7214C51.1049 12.8988 51.1621 13.082 51.2193 13.2937C50.6718 13.2299 50.1841 12.9174 49.8973 12.4467C49.2422 11.5237 48.473 10.6871 47.6079 9.95704C47.3664 9.75315 47.0053 9.78362 46.8014 10.0251C46.8012 10.0253 46.8011 10.0256 46.8009 10.0257C46.597 10.2672 46.6275 10.6284 46.869 10.8323C46.8692 10.8324 46.8695 10.8326 46.8696 10.8327C47.6328 11.4895 48.3149 12.2349 48.9014 13.0534C49.4411 13.932 50.4059 14.459 51.4368 14.4384H51.5573C51.6865 15.0985 51.7555 15.7689 51.7634 16.4416H49.9777C49.7515 16.443 49.5473 16.5777 49.4569 16.785C49.3638 16.992 49.4021 17.2345 49.5541 17.4031C49.5541 17.4031 51.1567 19.3319 47.7685 24.563C45.6019 27.7987 45.4534 31.9817 47.385 35.3629H34.2614C34.6112 34.6687 34.8875 33.9398 35.0856 33.188H36.0528C37.3709 33.1882 38.4396 32.1198 38.4396 30.8016C38.4397 29.4835 37.3712 28.4148 36.0531 28.4148C36.0529 28.4148 36.0528 28.4148 36.0527 28.4148H35.4803C35.4338 27.8689 35.3554 27.3262 35.2457 26.7894C35.1904 26.5185 34.9496 26.3259 34.6733 26.3315H26.3859C26.1097 26.3259 25.8688 26.5185 25.8136 26.7894C25.6142 27.7399 25.5144 28.7085 25.516 29.6796C25.4901 31.6466 25.9232 33.5925 26.7809 35.3629H21.916V31.3566C21.916 31.0405 21.6598 30.7843 21.3437 30.7843H20.0731V29.5022H21.3437C21.6598 29.5022 21.916 29.246 21.916 28.9299V25.8851C21.916 25.569 21.6598 25.3127 21.3437 25.3127H3.93918C3.62311 25.3127 3.36685 25.569 3.36685 25.8851V28.3518H2.09627C1.78019 28.3518 1.52393 28.6081 1.52393 28.9242V31.3394C1.52393 31.6555 1.78019 31.9117 2.09627 31.9117H3.36685V35.3457H1.0489C0.732825 35.3457 0.476562 35.602 0.476562 35.9181V48.9272C0.476562 49.2433 0.732825 49.4995 1.0489 49.4995H1.52966V51.9262C1.52966 52.2423 1.78592 52.4986 2.10199 52.4986H8.88986L9.59956 62.6689C9.62059 62.9693 9.87084 63.2019 10.1719 63.2012H13.0336C13.3346 63.2019 13.5849 62.9693 13.6059 62.6689L14.3156 52.4986H53.6807L54.3904 62.6689C54.4114 62.9693 54.6616 63.2019 54.9627 63.2012H57.8244C58.1254 63.2019 58.3757 62.9693 58.3967 62.6689L59.1064 52.4986H65.8943C66.2103 52.4986 66.4666 52.2423 66.4666 51.9262V49.4995H66.9474C67.2634 49.4995 67.5197 49.2433 67.5197 48.9272V35.9124C67.5197 35.5963 67.2634 35.34 66.9474 35.34ZM35.5205 29.6568V29.5366H36.0528C36.7387 29.5364 37.2949 30.0924 37.2949 30.7784C37.2951 31.4643 36.739 32.0205 36.0531 32.0205C36.0529 32.0205 36.0528 32.0205 36.0527 32.0205H35.3201C35.4539 31.2397 35.521 30.449 35.5205 29.6568ZM48.7071 25.1582C51.294 21.1519 51.2425 18.7653 50.8705 17.5634H54.8768C54.5048 18.7653 54.4533 21.1633 57.0403 25.1582C59.1206 28.2251 59.1206 32.2503 57.0403 35.3171H48.7185C48.7185 35.3171 48.7128 35.3229 48.7071 35.3171C46.6566 32.2413 46.6566 28.2342 48.7071 25.1582ZM26.678 29.6568C26.6787 28.9184 26.7401 28.1816 26.8611 27.4533H34.1927C34.3166 28.1811 34.3779 28.9184 34.3759 29.6568C34.4228 31.6459 33.9282 33.6103 32.945 35.34H28.1088C27.1257 33.6103 26.6311 31.6459 26.678 29.6568ZM20.7715 31.9175V35.3515H4.51151V31.9175H20.7715ZM4.51151 26.4574H20.7715V28.3518H4.51151V26.4574ZM2.6686 30.7728V29.5022H3.7732C3.82614 29.523 3.88238 29.5346 3.93918 29.5366C3.99584 29.5334 4.05179 29.5218 4.10516 29.5022H18.9286V30.7728H2.6686ZM1.62123 48.3549V36.4961H33.4258V48.3549H1.62123ZM12.4956 62.0565H10.7042L10.0403 52.4986H13.1709L12.4956 62.0565ZM57.2864 62.0565H55.4892L54.8196 52.4986H57.9503L57.2864 62.0565ZM65.299 51.3539H2.67432V49.4995H65.3219L65.299 51.3539ZM66.3521 48.3549H34.5705V36.4847H66.375L66.3521 48.3549Z" fill="#BB976D"></path>
                            <path d="M60.0067 41.8481H56.1778C55.8617 41.8481 55.6055 42.1044 55.6055 42.4205C55.6055 42.7365 55.8617 42.9928 56.1778 42.9928H60.0067C60.3228 42.9928 60.579 42.7365 60.579 42.4205C60.579 42.1044 60.3228 41.8481 60.0067 41.8481Z" fill="#BB976D"></path>
                            <path d="M8.59566 41.8472H4.40046C4.08439 41.8472 3.82812 42.1034 3.82812 42.4195C3.82812 42.7356 4.08439 42.9918 4.40046 42.9918H8.59566C8.91173 42.9918 9.16799 42.7356 9.16799 42.4195C9.16799 42.1034 8.91173 41.8472 8.59566 41.8472Z" fill="#BB976D"></path>
                            <path d="M55.3901 27.1234C55.2373 26.8467 54.8892 26.7463 54.6125 26.8991C54.6085 26.9014 54.6043 26.9036 54.6003 26.9059C54.3193 27.0506 54.2087 27.3956 54.3532 27.6767C54.3535 27.6773 54.3539 27.678 54.3542 27.6786C54.3542 27.6786 55.207 29.3956 54.3142 32.429C54.2219 32.7313 54.3921 33.0512 54.6945 33.1434C54.6955 33.1437 54.6966 33.1439 54.6976 33.1444C54.7528 33.1499 54.8084 33.1499 54.8636 33.1444C55.1264 33.1548 55.3625 32.9848 55.4359 32.7323C56.4718 29.2239 55.4359 27.2093 55.3901 27.1234Z" fill="#BB976D"></path>
                        </svg>
                    </div>
                    <h3 class="font-medium leading-none mt-4 md:mt-6 text-2xl md:text-3xl">Delivery Option</h3>
                    <p class="mt-3">Delivery Option: Choose your preferred delivery option for seamless convenience. Get your items delivered on your terms, hassle-free. </p>
                </div>
                <!-- Table -->
                <div class="overflow-x-auto border-b border-dashed border-primary pb-6 md:pb-10" data-aos="fade-up" data-aos-delay="100">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-[#ECF2F5] dark:bg-dark-secondary
                            text-base sm:text-lg font-medium text-title dark:text-white leading-none text-left">
                                <th class="p-4 sm:p-5 whitespace-nowrap">Delivery Option</th>
                                <th class="p-4 sm:p-5 whitespace-nowrap">Time</th>
                                <th class="p-4 sm:p-5 whitespace-nowrap">Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-base sm:text-lg text-title dark:text-white leading-none text-left border-b border-bdr-clr dark:border-bdr-clr-drk">
                                <td class="p-4 sm:p-5 whitespace-nowrap">Standard Delivery</td>
                                <td class="p-4 sm:p-5 whitespace-nowrap">2 Days</td>
                                <td class="p-4 sm:p-5 whitespace-nowrap">$5</td>
                            </tr>
                            <tr class="text-base sm:text-lg text-title dark:text-white leading-none text-left border-b border-bdr-clr dark:border-bdr-clr-drk">
                                <td class="p-4 sm:p-5 whitespace-nowrap">Quick Delivery</td>
                                <td class="p-4 sm:p-5 whitespace-nowrap">1 Days</td>
                                <td class="p-4 sm:p-5 whitespace-nowrap">$7.5</td>
                            </tr>
                            <tr class="text-base sm:text-lg text-title dark:text-white leading-none text-left border-b border-bdr-clr dark:border-bdr-clr-drk">
                                <td class="p-4 sm:p-5 whitespace-nowrap">Regular Working Day</td>
                                <td class="p-4 sm:p-5 whitespace-nowrap">3 Days</td>
                                <td class="p-4 sm:p-5 whitespace-nowrap">FREE</td>
                            </tr>
                            <tr class="text-base sm:text-lg text-title dark:text-white leading-none text-left">
                                <td class="p-4 sm:p-5 whitespace-nowrap">Super Fast Delivery</td>
                                <td class="p-4 sm:p-5 whitespace-nowrap">12 Hour</td>
                                <td class="p-4 sm:p-5 whitespace-nowrap">$10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Content -->
                <div class="mt-8 md:mt-12">
                    <h3 class="font-medium leading-none text-2xl md:text-3xl" data-aos="fade-up">Shipping Rule</h3>
                    <p class="text-base sm:text-lg mt-3 md:mt-4" data-aos="fade-up" data-aos-delay="100">Shipping Rule: Discover our transparent shipping rules, ensuring clarity and peace of mind. We prioritize efficient delivery, ensuring your items arrive safely and on time. With clear guidelines in place, you can shop confidently knowing your orders are handled with care. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Payment Method End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>