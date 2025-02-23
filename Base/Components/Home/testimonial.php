<?php
$testimonials = [
    [
        'img' => '/img/testimonial/tmnl-02.jpg', 
        'name' => 'Jennifer Smith', 
        'title' => "Berminghum ,UK", 
        'desc' => "Furnixar exceeded my expectations with their exceptional furniture pieces. The quality craftsmanship and attention to detail truly shine through in every product. My home has been transformed into a stylish sanctuary thanks to Furnixar!", 
    ],
    [
        'img' => '/img/testimonial/tmnl-03.jpg', 
        'name' => 'Jackyer Smith', 
        'title' => "Berminghum ,UK", 
        'desc' => "Furnixar exceeded my expectations with its exceptional furniture pieces. The quality craftsmanship and attention to detail truly shine through in every product. My home has been transformed into a stylish sanctuary thanks to Furnixar!", 
    ],
];
?>

<?php foreach ($testimonials as $item): ?>
<!-- Single Testimonial Slide -->
<div class="text-center">
    <h6 class="dark:text-white italic font-normal text-lg"><?php echo $item['desc']; ?> </h6>
    <div class="flex items-center justify-center gap-3 mt-6 author">
        <div class="w-11 h-11 rounded-full overflow-hidden p-1 bg-[#bb976d]">
            <img class="rounded-full" src="<?php echo $static_url, $item['img']; ?>" alt="testimonial">
        </div>
        <div class="text-left">
            <h5 class="dark:text-white font-medium leading-none text-xl"><?php echo $item['name']; ?></h5>
            <span class="block text-[14px] leading-none text-[#bb976d] mt-[5px]"><?php echo $item['title']; ?></span>
        </div>
    </div>
</div>
<?php endforeach; ?>