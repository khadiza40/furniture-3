<?php
$blogs = [
    [
        'id' => 22,
        'img' => '/img/shortcode/blog/blog-04.jpg', 
        'title' => 'Consectetur purus habitasse ut diam habitant varius2.', 
        'tag' => 'Interior', 
        'date' => '23 Jan, 2025', 
    ],
    [
        'id' => 23,
        'img' => '/img/shortcode/blog/blog-12.jpg', 
        'title' => 'Far far away of furniture of this habitant vel tempor1.', 
        'tag' => 'Vase', 
        'date' => '23 Jan, 2025', 
    ],
    [
        'id' => 24,
        'img' => '/img/shortcode/blog/blog-13.jpg', 
        'title' => 'The Key Components of a Quality Sofa.', 
        'tag' => 'Sofa', 
        'date' => '23 Jan, 2025', 
    ],
    [
        'id' => 25,
        'img' => '/img/shortcode/blog/blog-12.jpg', 
        'title' => 'Far far away of furniture of this habitant vel tempor2.', 
        'tag' => 'Vase', 
        'date' => '23 Jan, 2025', 
    ]
];
?>

<?php foreach ($blogs as $item): ?>
<!-- Single Blog Slider -->
<div class="relative group">
    <a href="blog-details-v1.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="overflow-hidden block">
        <img class="duration-300 transform scale-100 group-hover:scale-110 w-full" src="<?php echo $static_url, $item['img']; ?>" alt="blog-card">
    </a>
    <div class="sm:bg-white sm:bg-opacity-90 sm:dark:bg-title sm:dark:bg-opacity-90 mt-4 sm:p-5 md:p-6 sm:absolute z-10 bottom-0 left-0 sm:w-11/12 max-w-md ">
        <ul class="flex items-center gap-[10px] flex-wrap">
            <li class="text-[15px] leading-none dark:text-white"><?php echo $item['date']; ?></li>
            <li><a href="blog-tag.php" class="inline-block text-title font-medium text-[15px] leading-none py-[10px] px-5 rounded-md bg-[#dbcbbd]"><?php echo $item['tag']; ?></a></li>
        </ul>
        <h5 class="mt-3 font-medium dark:text-white leading-[1.5] text-xl"><a href="blog-details-v1.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="text-underline"><?php echo $item['title']; ?> </a></h5>
    </div>
</div>
<?php endforeach; ?>