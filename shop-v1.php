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

    <!-- Shop Start -->
    <div class="s-py-100">
        <div class="container-fluid">
            <!-- Shop Header -->
            <div class="flex items-start justify-between gap-8 max-w-[1720px] mx-auto flex-col lg:flex-row border-b border-bdr-clr dark:border-bdr-clr-drk pb-8 md:pb-[50px]" >
                <div>
                    <h4 class="font-medium leading-none text-xl sm:text-2xl mb-5 sm:mb-6">Choose Category</h4>
                    <div class="flex flex-wrap gap-[10px] md:gap-[15px]">
                        <a class="btn btn-theme-outline btn-sm shop1-button" href="product-category.php" data-text="Sofa & Chair"><span>Sofa & Chair</span></a>
                        <a class="btn btn-theme-outline btn-sm shop1-button" href="product-category.php" data-text="Full Interior"><span>Full Interior</span></a>
                        <a class="btn btn-theme-outline btn-sm shop1-button" href="product-category.php" data-text="Lamp & Vase"><span>Lamp & Vase</span></a>
                        <a class="btn btn-theme-outline btn-sm shop1-button" href="product-category.php" data-text="Table"><span>Table</span></a>
                        <a class="btn btn-theme-outline btn-sm shop1-button" href="product-category.php" data-text="Wood Design"><span>Wood Design</span></a>
                    </div>
                </div>
                <div class="max-w-[562px] w-full grid sm:grid-cols-2 gap-8 md:gap-12">
                    <div>
                        <h4 class="font-medium leading-none text-xl sm:text-2xl mb-5 sm:mb-6">Price Range</h4>
                        <div class="grid grid-cols-2 gap-[15px]">
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
                    <div>
                        <h4 class="font-medium leading-none text-xl sm:text-2xl mb-5 sm:mb-6">Choose Brand</h4>
                        <select class="outline-select small-select">
                            <option value="1">Navana Furniture</option>
                            <option value="2">RFL Furniture</option>
                            <option value="2">Gazi Furniture</option>
                            <option value="2">Plastic Furniture</option>
                            <option value="2">Luxury Furniture</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="max-w-[1720px] mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 sm:gap-8 pt-8 md:pt-[50px]" data-aos="fade-up" data-aos-delay="200">
                
                <!-- shops-v1 code  -->
                <?php
                    include "$base_dir/Components/Shop/shops-v1.php";
                ?>

            </div>
            <div class="text-center mt-7 md:mt-12">
                <a href="shop-v1.php" class="btn btn-outline" data-text="Load More">
                    <span>Load More</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Shop End -->


    <!-- popup code  -->
    <?php
        include "$base_dir/Components/Home/popup.php";
    ?>

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>