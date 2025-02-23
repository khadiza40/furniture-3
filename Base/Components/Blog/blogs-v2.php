<?php
$blogs = [
    [
        'id' => 4,
        'img' => '/img/shortcode/blog/blog-27.jpg', 
        'title' => 'Creating Your Dream Sanctuary: Inspirational Room Decor with Furnixar', 
        'tag' => 'Chair', 
        'date' => '23 Jan, 2025', 
        'desc' => 'Nibh purus integer elementum in. ipsuim for now dolor sit amet of this conqure varius . . .', 
    ],
    [
        'id' => 5,
        'img' => '/img/shortcode/blog/blog-28.jpg', 
        'title' => 'From Drab to Fab: Room Makeover Inspiration by Furnixar', 
        'tag' => 'Sofa', 
        'date' => '23 Jan, 2025', 
        'desc' => 'Nibh purus integer elementum in. ipsuim for now dolor sit amet of this conqure varius . . .', 
    ],
    [
        'id' => 6,
        'img' => '/img/shortcode/blog/blog-29.jpg', 
        'title' => 'Small Space, Big Style: Room Decor Solutions from Furnixar', 
        'tag' => 'Vases', 
        'date' => '23 Jan, 2025', 
        'desc' => 'Nibh purus integer elementum in. ipsuim for now dolor sit amet of this conqure varius . . .', 
    ],
    [
        'id' => 7,
        'img' => '/img/shortcode/blog/blog-22.jpg', 
        'title' => 'Innovative Room Decor: Unleashing Creativity with Furnixar', 
        'tag' => 'Interior', 
        'date' => '23 Jan, 2025', 
        'desc' => 'Nibh purus integer elementum in. ipsuim for now dolor sit amet of this conqure varius . . .', 
    ],
    [
        'id' => 8,
        'img' => '/img/shortcode/blog/blog-23.jpg', 
        'title' => 'Timeless Elegance: Classic Room Decor Ideas from Furnixar', 
        'tag' => 'Chair', 
        'date' => '23 Jan, 2025', 
        'desc' => 'Nibh purus integer elementum in. ipsuim for now dolor sit amet of this conqure varius . . .', 
    ],
    [
        'id' => 9,
        'img' => '/img/shortcode/blog/blog-24.jpg', 
        'title' => 'Budget-Friendly Brilliance: Room Decor Hacks by Furnixar', 
        'tag' => 'Sofa', 
        'date' => '23 Jan, 2025', 
        'desc' => 'Nibh purus integer elementum in. ipsuim for now dolor sit amet of this conqure varius . . .', 
    ],
    [
        'id' => 10,
        'img' => '/img/shortcode/blog/blog-25.jpg', 
        'title' => 'Personalize Your Space: Custom Room Decor Options with Furnixar', 
        'tag' => 'Vases', 
        'date' => '23 Jan, 2025', 
        'desc' => 'Nibh purus integer elementum in. ipsuim for now dolor sit amet of this conqure varius . . .', 
    ],
    [
        'id' => 11,
        'img' => '/img/shortcode/blog/blog-26.jpg', 
        'title' => 'ransform Your Home: Room Decor Tips and Trends with Furnixar', 
        'tag' => 'Lamp', 
        'date' => '23 Jan, 2025', 
        'desc' => 'Nibh purus integer elementum in. ipsuim for now dolor sit amet of this conqure varius . . .', 
    ]
];
?>

<?php foreach ($blogs as $item): ?>
<!-- Latest Post Card -->
<div class="group">
    <a href="blog-details-v2.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="overflow-hidden block">
        <img class="duration-300 transform scale-100 group-hover:scale-110 w-full" src="<?php echo $static_url, $item['img']; ?>" alt="blog-card">
    </a>
    <div class="p-5 relative z-10 before:absolute before:-z-10 before:top-0 before:left-0 before:w-full before:h-full before:bg-secondary dark:before:bg-dark-secondary before:transition-all before:duration-300 overflow-hidden before:opacity-0 group-hover:before:opacity-10 dark:group-hover:before:opacity-100">
        <ul class="flex items-center gap-[10px] flex-wrap">
            <li class="text-[15px] leading-none dark:text-white"><?php echo $item['date']; ?></li>
            <li><a href="blog-tag.php" class="inline-block text-title font-medium text-[15px] leading-none py-[10px] px-5 rounded-md group-hover:bg-primary group-hover:text-white duration-300 bg-[#dbcbbd]"><?php echo $item['tag']; ?></a></li>
        </ul>
        <h5 class="mt-3 font-medium dark:text-white leading-[1.5] text-xl"><a href="blog-details-v2.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="text-underline"><?php echo $item['title']; ?> </a></h5>
        <p class="text-base md:text-lg mt-3 dark:text-white-light"><?php echo $item['desc']; ?> </p>
    </div>
</div>
<?php endforeach; ?>