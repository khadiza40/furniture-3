<?php
$services = [
    [
        'img' => '/img/svg/car.svg', 
        'title' => "Free Shipping", 
        'class' => "", 
        'style' => "", 
        'data' => "100", 
        'desc' => "Enjoy hassle-free shopping with complimentary shipping on all orders. Elevate your experience without cost.", 
    ],
    [
        'img' => '/img/svg/box.svg', 
        'title' => "Easy to Return", 
        'class' => "lg:max-w-[290px] w-full 2xl:flex items-center justify-between gap-7", 
        'style' => "w-[1px] h-[120px] border-l border-dashed border-secondary hidden 2xl:block border-[#bb976d]", 
        'data' => "200",
        'desc' => "Satisfaction guaranteed or your money back! Enjoy stress-free returns with our hassle-free process.", 
    ],
    [
        'img' => '/img/svg/card.svg', 
        'title' => "Secure Payment", 
        'class' => "lg:max-w-[290px] w-full 2xl:flex items-center justify-between gap-7", 
        'style' => "w-[1px] h-[120px] border-l border-dashed border-secondary hidden 2xl:block border-[#bb976d]", 
        'data' => "300",
        'desc' => "Shop with confidence knowing your payments are secure. Our encrypted checkout ensures your information.", 
    ],
    [
        'img' => '/img/svg/support.svg', 
        'title' => "Customer Support", 
        'class' => "lg:max-w-[290px] w-full 2xl:flex items-center justify-between gap-7", 
        'style' => "w-[1px] h-[120px] border-l border-dashed border-secondary hidden 2xl:block border-[#bb976d]", 
        'data' => "400",
        'desc' => "Experience dedicated support tailored to your needs. Our team is here to assist you every step of the way.", 
    ]
];
?>

<?php foreach ($services as $item): ?>
<!-- Single Service -->
<div class="<?php echo $item['class']; ?>" data-aos="fade-up" data-aos-delay="<?php echo $item['data']; ?>">
    <div class="<?php echo $item['style']; ?>"></div>
    <div class="text-center sm:text-left lg:max-w-[220px] w-full">
        <img src="<?php echo $static_url, $item['img']; ?>" class="w-12 h-12" alt="">
        <h5 class="font-semibold text-xl md:text-2xl mt-3 md:mt-7"><?php echo $item['title']; ?></h5>
        <p class="mt-2 sm:mt-3"><?php echo $item['desc']; ?> </p>
    </div>
</div>
<?php endforeach; ?>