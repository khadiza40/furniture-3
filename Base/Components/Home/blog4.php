<?php
$blogs = [
    [
        'id' => 16,
        'img' => '/img/home-v5/blog-01.jpg', 
        'title' => 'Home Office Storage Ideas to Boost Productivity in 2025.', 
        'tag' => 'Vase', 
        'date' => '23 Jan, 2025', 
    ],
    [
        'id' => 17,
        'img' => '/img/home-v5/blog-02.jpg', 
        'title' => 'Consectetur purus habitasse ut diam habitant varius1.', 
        'tag' => 'Interior', 
        'date' => '23 Jan, 2025', 
    ],
    [
        'id' => 18,
        'img' => '/img/home-v5/blog-03.jpg', 
        'title' => 'The Key Components of a Quality Sofa habitant vel tempor.', 
        'tag' => 'Sofa', 
        'date' => '23 Jan, 2025', 
    ]
];
?>

<?php foreach ($blogs as $item): ?>
<!-- Single Blog -->
<div class="relative group mx-[15px] sm:mx-0">
    <a href="blog-details-v1.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="overflow-hidden block">
        <img class="duration-300 transform scale-100 group-hover:scale-110 w-full" src="<?php echo $static_url, $item['img']; ?>" alt="blog-card">
    </a>
    <div class="bg-white bg-opacity-90 dark:bg-title dark:bg-opacity-90 p-5 md:p-6 absolute z-10 w-11/12 max-w-md transform left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        <ul class="flex items-center gap-[10px] flex-wrap">
            <li class="text-[15px] leading-none dark:text-white"><?php echo $item['date']; ?></li>
            <li><a href="blog-tag.php" class="inline-block text-title font-medium text-[15px] leading-none py-[10px] px-5 rounded-md bg-primary-midum"><?php echo $item['tag']; ?></a></li>
        </ul>
        <h5 class="mt-3 font-medium dark:text-white leading-[1.5] text-xl"><a href="blog-details-v1.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="text-underline"><?php echo $item['title']; ?></a></h5>
    </div>
</div>
<?php endforeach; ?>