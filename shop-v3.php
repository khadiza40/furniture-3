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
            <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center">Shop</h2>
            <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4">
                <li><a href="index.php">Home</a></li>
                <li>/</li>
                <li class="text-primary">Shop</li>
            </ul>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Shop Slider Start -->
    <div class="s-py-100-50 overflow-hidden" data-aos="fade-up">
        <div class="relative">
            <div>
                <button class="absolute top-1/2 transform -translate-y-1/2 left-0 z-10 shop_prev w-9 h-9 md:w-14 md:h-14 flex items-center justify-center text-white duration-300 bg-title bg-opacity-90 hover:bg-primary p-2">
                    <svg class="fill-current" width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.180223 7.38726L5.62434 12.8314C5.8199 13.0598 6.16359 13.0864 6.39195 12.8908C6.62031 12.6952 6.64693 12.3515 6.45132 12.1232C6.43307 12.1019 6.41324 12.082 6.39195 12.0638L1.87877 7.54516L23.4322 7.54516C23.7328 7.54516 23.9766 7.30141 23.9766 7.00072C23.9766 6.70003 23.7328 6.45632 23.4322 6.45632L1.87877 6.45632L6.39195 1.94314C6.62031 1.74758 6.64693 1.40389 6.45132 1.17553C6.25571 0.947171 5.91207 0.920551 5.68371 1.11616C5.66242 1.13441 5.64254 1.15424 5.62434 1.17553L0.180175 6.6197C-0.0308748 6.83196 -0.0308748 7.1749 0.180223 7.38726Z"/>
                    </svg>
                </button>
                <button class="absolute top-1/2 transform -translate-y-1/2 z-10 right-0 shop_next w-9 h-9 md:w-14 md:h-14 flex items-center justify-center text-white duration-300 bg-title bg-opacity-90 hover:bg-primary p-2">
                    <svg class="fill-current" width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.8198 6.61958L18.3757 1.17541C18.1801 0.947054 17.8364 0.920433 17.608 1.11604C17.3797 1.31161 17.3531 1.65529 17.5487 1.88366C17.5669 1.90494 17.5868 1.92483 17.608 1.94303L22.1212 6.46168L0.567835 6.46168C0.267191 6.46168 0.0234375 6.70543 0.0234375 7.00612C0.0234375 7.30681 0.267191 7.55052 0.567835 7.55052L22.1212 7.55052L17.608 12.0637C17.3797 12.2593 17.3531 12.6029 17.5487 12.8313C17.7443 13.0597 18.0879 13.0863 18.3163 12.8907C18.3376 12.8724 18.3575 12.8526 18.3757 12.8313L23.8198 7.38714C24.0309 7.17488 24.0309 6.83194 23.8198 6.61958Z"/>
                    </svg>
                </button>
            </div>
            <div class="container">
                <div class="owl-carousel shop-v3-slider max-w-[1440px] mx-auto" data-carousel-autoplay="true" data-carousel-loop="true" data-carousel-animateout="false" data-carousel-margin="0" data-carousel-items="3" data-carousel-xl="3" data-carousel-lg="3" data-carousel-md="2" data-carousel-sm="2">
                    
                    <!-- shop-slider code  -->
                    <?php
                        include "$base_dir/Components/Shop/shop-slider.php";
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Shop Slider End -->

    <!-- Chose Category Start -->
    <div class="s-py-50-100" data-aos="fade-up">
        <div class="container-fluid">
            <!-- Top Bar -->
            <div class="flex items-center lg:justify-center gap-6 flex-wrap" >
                <div class="flex items-start sm:items-center gap-[15px] flex-wrap sm:flex-nowrap sm:max-w-[420px] w-full flex-col sm:flex-row">
                    <h4 class="font-medium leading-none text-xl flex-none">Choose Brand</h4>
                    <div class="sm:max-w-[252px] w-full">
                        <select class="outline-select small-select">
                            <option value="1">Navana Furniture</option>
                            <option value="2">RFL Furniture</option>
                            <option value="2">Gazi Furniture</option>
                            <option value="2">Plastic Furniture</option>
                            <option value="2">Luxury Furniture</option>
                        </select>
                    </div>
                </div>
                <div class="hidden 2xl:block">
                    <svg width="24" height="41" viewBox="0 0 24 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.566987" y1="40.6689" x2="23.567" y2="0.831777" stroke="#BB976D"/>
                    </svg>
                </div>
                <div class="flex items-start sm:items-center gap-[15px] flex-wrap sm:flex-nowrap sm:max-w-[347px] w-full flex-col sm:flex-row">
                    <h4 class="font-medium leading-none text-xl flex-none">Sort By</h4>
                    <div class="sm:max-w-[252px] w-full">
                        <select class="outline-select small-select">
                            <option value="1">Sort by Latest</option>
                            <option value="2">Sort by Name</option>
                            <option value="2">Sort by Number</option>
                            <option value="2">Sort by Price</option>
                            <option value="2">Sort by Date</option>
                        </select>
                    </div>
                </div>
                <div class="hidden 2xl:block">
                    <svg width="24" height="41" viewBox="0 0 24 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.566987" y1="40.6689" x2="23.567" y2="0.831777" stroke="#BB976D"/>
                    </svg>
                </div>
                <div class="sm:max-w-[411px] w-full flex items-start sm:items-center gap-[15px] flex-wrap sm:flex-nowrap flex-col sm:flex-row">
                    <h4 class="font-medium leading-none text-xl flex-none">Price Range</h4>
                    <div class="grid grid-cols-2 gap-[15px] sm:max-w-[260px] w-full">
                        <div class="py-[10px] px-5 border border-title dark:border-white-light flex items-center justify-center gap-[5px]">
                            <span class="text-title dark:text-white font-medium leading-none">Min:</span>
                            <div class="relative">
                                <span class="text-title dark:text-white font-medium leading-none absolute left-0 top-1/2 block transform -translate-y-1/2">$</span>
                                <input class="pl-[10px] w-full appearance-none bg-transparent text-title dark:text-white font-medium leading-none placeholder:text-title dark:placeholder:text-white placeholder  placeholder:font-medium placeholder:leading-none outline-none " type="number" placeholder="0" value="0">
                            </div>
                        </div>
                        <div class="py-[10] px-5 border border-title dark:border-white-light flex items-center justify-center gap-[5px]">
                            <span class="text-title dark:text-white font-medium leading-none">Max:</span>
                            <div class="relative">
                                <span class="text-title dark:text-white  font-medium leading-none absolute left-0 top-1/2 block transform -translate-y-1/2">$</span>
                                <input class="pl-[10px] w-full appearance-none bg-transparent text-title dark:text-white font-medium leading-none placeholder:text-title dark:placeholder:text-white  placeholder:font-medium placeholder:leading-none outline-none " type="number" placeholder="100" value="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-[1720px] mx-auto mt-8 md:mt-12" data-aos="fade-up" data-aos-delay="200">
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5 lg:gap-[30px]">

                    <!-- shops-v3 code  -->
                    <?php
                        include "$base_dir/Components/Shop/shops-v3.php";
                    ?>

                </div>
            </div>
            <div class="text-center mt-7 md:mt-12" data-aos="fade-up">
                <a href="shop-v1.php" class="btn btn-outline" data-text="Load More">
                    <span>Load More</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Chose Category End -->

    <!-- popup code  -->
    <?php
        include "$base_dir/Components/Home/popup.php";
    ?>
    

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>