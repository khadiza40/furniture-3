<?php
$blogs = [
    [
        'id' => 1,
        'img' => '/img/shortcode/blog/blog-01.jpg', 
        'title' => 'Auctor sit elementum habitant vel tempor varius.', 
        'tag' => 'Interior', 
        'date' => '23 Jan, 2025', 
    ],
    [
        'id' => 2,
        'img' => '/img/shortcode/blog/blog-02.jpg', 
        'title' => 'Consectetur purus habitasse ut diam habitant varius.', 
        'tag' => 'Chair', 
        'date' => '23 Jan, 2025', 
    ],
    [
        'id' => 3,
        'img' => '/img/shortcode/blog/blog-03.jpg', 
        'title' => 'Far far away of furniture of this habitant vel tempor.', 
        'tag' => 'Vase', 
        'date' => '23 Jan, 2025', 
    ],
    [
        'id' => 4,
        'img' => '/img/shortcode/blog/blog-14.jpg', 
        'title' => 'Auctor sit elementum habitant vel tempor varius1.', 
        'tag' => 'Interior', 
        'date' => '23 Jan, 2025', 
    ],
    [
        'id' => 5,
        'img' => '/img/shortcode/blog/blog-15.jpg', 
        'title' => 'Auctor sit elementum habitant vel tempor varius2.', 
        'tag' => 'Vase', 
        'date' => '23 Jan, 2025', 
    ]
];
?>

<?php foreach ($blogs as $item): ?>
<!-- Single Blog -->
<div class="group">
    <a href="blog-details-v1.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="overflow-hidden block">
        <img class="duration-300 transform scale-100 group-hover:scale-110 w-full" src="<?php echo $static_url, $item['img']; ?>" alt="blog">
    </a>
    <div class="text-center mt-4 px-3">
        <ul class="flex items-center justify-center gap-[10px] flex-wrap">
            <li class="text-[15px] leading-none dark:text-white"><?php echo $item['date']; ?></li>
            <li><a href="blog-tag.php" class="inline-block text-title font-medium text-[15px] leading-none py-2 px-[10px] rounded-md bg-primary-midum"><?php echo $item['tag']; ?></a></li>
        </ul>
        <h5 class="text-xl mt-3 font-medium dark:text-white leading-[1.5]"><a href="blog-details-v1.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="text-underline"><?php echo $item['title']; ?> </a></h5>
    </div>
</div>
<?php endforeach; ?>