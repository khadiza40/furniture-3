<?php
$services = [
    [
        'img' => '/img/svg/car.svg', 
        'title' => "Free Shipping", 
        'desc' => "Enjoy free shipping on all orders, making your shopping experience even more convenient. Get your favorite products delivered.", 
        'data' => "100", 
    ],
    [
        'img' => '/img/svg/box.svg', 
        'title' => "Easy to Return", 
        'desc' => "Experience hassle-free returns with our easy-to-use return policy. If you're not satisfied, simply return your product for a quick.",
        'data' => "200",  
    ],
    [
        'img' => '/img/svg/card.svg', 
        'title' => "Secure Payment", 
        'desc' => "Shop with confidence using our secure payment options, ensuring your personal information stays protected. We prioritize your safety.", 
        'data' => "300", 
    ],
    [
        'img' => '/img/svg/support.svg', 
        'title' => "Customer Support", 
        'desc' => "Our dedicated customer support team is here to assist you every step of the way. Reach out to us anytime for prompt, friendly help.", 
        'data' => "400", 
    ]
];
?>

<?php foreach ($services as $item): ?>
<!-- Single Chose Card -->
<div class="why-choose-card p-6 rounded-[10px]" data-aos="fade-up" data-aos-delay="<?php echo $item['data']; ?>">
    <img src="<?php echo $static_url, $item['img']; ?>" class="w-12 h-12" alt="">
    <h4 class="font-semibold leading-none mt-5 sm:mt-7 text-xl md:text-2xl"><?php echo $item['title']; ?></h4>
    <p class="mt-[15px]"><?php echo $item['desc']; ?> </p>
</div>
<?php endforeach; ?>