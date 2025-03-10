<?php
$cards = [
    [
        'img' => '/img/shortcode/product-card/pdct-10.jpg', 
        'price' => '$120', 
        'title' => 'Classic Lamp Light', 
        'rate' => '( 1,230 )', 
        'tag' => 'Lamp & Vase', 
    ],
    [
        'img' => '/img/shortcode/product-card/pdct-11.jpg', 
        'price' => '$120', 
        'title' => 'Premium Vase', 
        'rate' => '( 1,230 )', 
        'tag' => 'Lamp & Vase', 
    ],
    [
        'img' => '/img/shortcode/product-card/pdct-12.jpg', 
        'price' => '$120', 
        'title' => 'Premium Vase', 
        'rate' => '( 1,230 )', 
        'tag' => 'Lamp & Vase', 
    ]
];
?>

<?php foreach ($cards as $item): ?>
<div>
    <div class="group relative overflow-hidden">
        <img class="w-full transform duration-300 group-hover:scale-110" src="<?php echo $static_url, $item['img']; ?>" alt="product-card">
        <div class="absolute w-11/12 h-[91.6666%] top-2/4 left-2/4 transform -translate-x-2/4 -translate-y-2/4 bg-white dark:bg-title bg-opacity-70 dark:bg-opacity-70 flex items-end justify-center p-5 scale-110 opacity-0 duration-200 group-hover:scale-100 group-hover:opacity-100">
            <a href="#" class="absolute z-20 top-3 right-3 text-title text-[15px] leading-none font-medium p-[10px] bg-primary-midum">
                <?php echo $item['tag']; ?>
            </a>
            <ul class="flex items-center justify-center gap-2 mt-1">
                <li>
                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.1622 13.6923L7.181 11.201L3.19978 13.6922C3.05515 13.7839 2.86858 13.7769 2.72931 13.6758C2.59043 13.5751 2.52673 13.4001 2.56864 13.2337L3.70764 8.67717L0.150459 5.6612C0.0189569 5.55107 -0.0324041 5.37191 0.0206119 5.2088C0.0736279 5.04526 0.220726 4.93062 0.391668 4.9187L5.03447 4.59449L6.79065 0.23853C6.91968 -0.07951 7.44233 -0.07951 7.57136 0.23853L9.32754 4.59449L13.9703 4.9187C14.1413 4.93062 14.2884 5.04526 14.3414 5.2088C14.3944 5.37191 14.3431 5.55107 14.2115 5.6612L10.6543 8.67723L11.7933 13.2337C11.8353 13.4001 11.7716 13.5752 11.6327 13.6759C11.4905 13.7791 11.3045 13.7814 11.1622 13.6923Z" fill="#EE9818"/>
                    </svg>
                </li>
                <li>
                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.1622 13.6923L7.181 11.201L3.19978 13.6922C3.05515 13.7839 2.86858 13.7769 2.72931 13.6758C2.59043 13.5751 2.52673 13.4001 2.56864 13.2337L3.70764 8.67717L0.150459 5.6612C0.0189569 5.55107 -0.0324041 5.37191 0.0206119 5.2088C0.0736279 5.04526 0.220726 4.93062 0.391668 4.9187L5.03447 4.59449L6.79065 0.23853C6.91968 -0.07951 7.44233 -0.07951 7.57136 0.23853L9.32754 4.59449L13.9703 4.9187C14.1413 4.93062 14.2884 5.04526 14.3414 5.2088C14.3944 5.37191 14.3431 5.55107 14.2115 5.6612L10.6543 8.67723L11.7933 13.2337C11.8353 13.4001 11.7716 13.5752 11.6327 13.6759C11.4905 13.7791 11.3045 13.7814 11.1622 13.6923Z" fill="#EE9818"/>
                    </svg>
                </li>
                <li>
                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.1622 13.6923L7.181 11.201L3.19978 13.6922C3.05515 13.7839 2.86858 13.7769 2.72931 13.6758C2.59043 13.5751 2.52673 13.4001 2.56864 13.2337L3.70764 8.67717L0.150459 5.6612C0.0189569 5.55107 -0.0324041 5.37191 0.0206119 5.2088C0.0736279 5.04526 0.220726 4.93062 0.391668 4.9187L5.03447 4.59449L6.79065 0.23853C6.91968 -0.07951 7.44233 -0.07951 7.57136 0.23853L9.32754 4.59449L13.9703 4.9187C14.1413 4.93062 14.2884 5.04526 14.3414 5.2088C14.3944 5.37191 14.3431 5.55107 14.2115 5.6612L10.6543 8.67723L11.7933 13.2337C11.8353 13.4001 11.7716 13.5752 11.6327 13.6759C11.4905 13.7791 11.3045 13.7814 11.1622 13.6923Z" fill="#EE9818"/>
                    </svg>
                </li>
                <li>
                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.1622 13.6923L7.181 11.201L3.19978 13.6922C3.05515 13.7839 2.86858 13.7769 2.72931 13.6758C2.59043 13.5751 2.52673 13.4001 2.56864 13.2337L3.70764 8.67717L0.150459 5.6612C0.0189569 5.55107 -0.0324041 5.37191 0.0206119 5.2088C0.0736279 5.04526 0.220726 4.93062 0.391668 4.9187L5.03447 4.59449L6.79065 0.23853C6.91968 -0.07951 7.44233 -0.07951 7.57136 0.23853L9.32754 4.59449L13.9703 4.9187C14.1413 4.93062 14.2884 5.04526 14.3414 5.2088C14.3944 5.37191 14.3431 5.55107 14.2115 5.6612L10.6543 8.67723L11.7933 13.2337C11.8353 13.4001 11.7716 13.5752 11.6327 13.6759C11.4905 13.7791 11.3045 13.7814 11.1622 13.6923Z" fill="#EE9818"/>
                    </svg>
                </li>
                <li>
                    <svg class="fill-current dark:text-white" width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6075 13.6923L7.62632 11.201L3.64509 13.6922C3.50046 13.7839 3.3139 13.7769 3.17462 13.6758C3.03574 13.5751 2.97204 13.4001 3.01395 13.2337L4.15295 8.67717L0.595772 5.6612C0.464269 5.55107 0.412908 5.37191 0.465924 5.2088C0.51894 5.04526 0.666039 4.93062 0.836981 4.9187L5.47978 4.59449L7.23596 0.23853C7.365 -0.07951 7.88764 -0.07951 8.01667 0.23853L9.77285 4.59449L14.4157 4.9187C14.5866 4.93062 14.7337 5.04526 14.7867 5.2088C14.8397 5.37191 14.7884 5.55107 14.6569 5.6612L11.0997 8.67723L12.2387 13.2337C12.2806 13.4001 12.2169 13.5752 12.078 13.6759C11.9358 13.7791 11.7498 13.7814 11.6075 13.6923Z" fill-opacity="0.3"/>
                    </svg>
                </li>
                <li class="dark:text-gray-100"><?php echo $item['rate']; ?></li>
            </ul>
        </div>
    </div>
    <div class="mt-4 md:mt-6 flex items-start justify-between gap-2 flex-wrap">
        <div>
            <h5 class="font-normal leading-none dark:text-white text-xl"><a href="#"><?php echo $item['title']; ?></a></h5>
            <h5 class="font-normal leading-none mt-3 dark:text-white text-xl"><?php echo $item['price']; ?></h5>
        </div>
        <div class="flex gap-[10px]">
            <button class="bg-title bg-opacity-5 dark:bg-white dark:bg-opacity-5 w-9 lg:w-12 h-9 p-2 lg:h-12 flex items-center justify-center group transition-all duration-300 hover:bg-primary dark:hover:bg-primary faveIcon">
                <svg class="fill-current transition-all duration-300 group-hover:text-white dark:text-white" width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.3927 0.293945C15.4463 0.293945 13.7401 1.16184 12.4584 2.80385C12.2875 3.02285 12.1351 3.24194 12.0001 3.45412C11.865 3.24189 11.7127 3.02285 11.5417 2.80385C10.2601 1.16184 8.55381 0.293945 6.60743 0.293945C2.93056 0.293945 0.300781 3.37264 0.300781 7.06692C0.300781 11.2911 3.7629 15.2723 11.5265 19.9754C11.672 20.0636 11.8361 20.1077 12.0001 20.1077C12.1641 20.1077 12.3281 20.0636 12.4737 19.9755C20.2372 15.2723 23.6994 11.2912 23.6994 7.06696C23.6994 3.3746 21.0717 0.293945 17.3927 0.293945ZM19.4564 12.3268C17.8401 14.1302 15.3977 16.0292 12.0001 18.1227C8.60248 16.0292 6.16002 14.1302 4.54374 12.3268C2.91873 10.5136 2.1288 8.79311 2.1288 7.06696C2.1288 4.40702 3.92637 2.12196 6.60743 2.12196C7.97277 2.12196 9.13694 2.71561 10.0676 3.88645C10.8118 4.8228 11.1254 5.78969 11.1276 5.79659C11.2466 6.17841 11.6001 6.43849 12.0001 6.43849C12.4001 6.43849 12.7536 6.17846 12.8727 5.79659C12.8756 5.78735 13.1797 4.85064 13.8994 3.92858C14.8351 2.72977 16.0105 2.12191 17.3927 2.12191C20.0766 2.12191 21.8713 4.40917 21.8713 7.06692C21.8713 8.79307 21.0814 10.5136 19.4564 12.3268Z"/>
                </svg>
            </button>
            <a href="#" class="bg-title bg-opacity-5 dark:bg-white dark:bg-opacity-5 w-9 lg:w-12 h-9 p-2 lg:h-12 flex items-center justify-center group transition-all duration-300 hover:bg-primary dark:hover:bg-primary">
                <svg class="fill-current transition-all duration-300 group-hover:text-white dark:text-white" width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.3186 5.42595H15.731C15.3937 2.56101 12.951 0.331055 9.99699 0.331055C7.04292 0.331055 4.60026 2.56101 4.26293 5.42595H1.67532C1.20634 5.42595 0.826172 5.80611 0.826172 6.2751V21.2201C0.826172 21.6891 1.20634 22.0693 1.67532 22.0693H18.3186C18.7876 22.0693 19.1678 21.6891 19.1678 21.2201V6.2751C19.1678 5.80611 18.7876 5.42595 18.3186 5.42595ZM9.99699 2.02935C12.013 2.02935 13.6916 3.50072 14.016 5.42595H5.978C6.30238 3.50072 7.98093 2.02935 9.99699 2.02935ZM17.4695 20.371H2.52447V7.12425H4.22277V9.6717C4.22277 10.1407 4.60293 10.5208 5.07192 10.5208C5.5409 10.5208 5.92107 10.1407 5.92107 9.6717V7.12425H14.0729V9.6717C14.0729 10.1407 14.4531 10.5208 14.9221 10.5208C15.391 10.5208 15.7712 10.1407 15.7712 9.6717V7.12425H17.4695V20.371Z" />
                </svg>
            </a>
        </div>
    </div>
</div>
<?php endforeach; ?>