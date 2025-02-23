<?php
$categorys = [
    [
        'img' => '/img/home-v1/pdct-cgry-01.jpg', 
        'name' => '5 items', 
        'title' => "New Seat Tools", 
    ],
    [
        'img' => '/img/home-v1/pdct-cgry-02.jpg', 
        'name' => '13 items', 
        'title' => "Flexible Sofa", 
    ],
    [
        'img' => '/img/home-v1/pdct-cgry-03.jpg', 
        'name' => '23 items', 
        'title' => "Interior Item", 
    ],
];
?>

<?php foreach ($categorys as $item): ?>
<!-- Single Product -->
<a class="relative block" href="product-category.php">
    <img class="w-full object-cover" src="<?php echo $static_url, $item['img']; ?>" alt="product">
    <div class="absolute bottom-7 left-0 px-5 transform w-full flex justify-start">
        <div class="p-[15px] bg-white dark:bg-title w-auto">
            <span class="md:text-xl text-primary font-medium leading-none"><?php echo $item['name']; ?></span>
            <h4 class="text-xl md:text-2xl mt-[10px] font-semibold leading-[1.5]"><?php echo $item['title']; ?></h4>
        </div>
    </div>
</a>
<?php endforeach; ?>