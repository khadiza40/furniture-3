<?php
$blogs = [
    [
        'img' => '/img/shortcode/blog/blog-05.jpg', 
        'title' => 'Auctor sit elementum habitant vel tempor varius.', 
        'tag' => 'Interior', 
        'date' => '23 Jan, 2025', 
    ],
    [
        'img' => '/img/shortcode/blog/blog-06.jpg', 
        'title' => 'Lorem ipsum dolor sit amet of this constent for new habitant vel tempor varius.', 
        'tag' => 'Interior', 
        'date' => '23 Jan, 2025', 
    ]
];
?>

<?php foreach ($blogs as $item): ?>
<div class="group sm:flex items-center">
    <div class="sm:w-1/2 overflow-hidden">
        <img class="duration-300 transform scale-100 group-hover:scale-110 w-full" src="<?php echo $static_url, $item['img']; ?>" alt="blog-card">
    </div>
    <div class="bg-snow dark:bg-title p-5 md:p-6 sm:ml-[-10%] sm:w-[60%] relative z-10">
        <ul class="flex items-center gap-[10px] flex-wrap">
            <li class="text-[15px] leading-none dark:text-white"><?php echo $item['date']; ?></li>
            <li><a href="#" class="inline-block text-title font-medium text-[15px] leading-none py-[10px] px-5 rounded-md bg-[#dbcbbd]"><?php echo $item['tag']; ?></a></li>
        </ul>
        <h5 class="mt-3 font-medium leading-snug dark:text-white text-xl"><a href="#" class="text-underline"><?php echo $item['title']; ?> </a></h5>
    </div>
</div>
<?php endforeach; ?>