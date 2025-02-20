<?php include_once ('header.php');?>


<!-- slick slider -->
<section class="screen-height">
<div class="hero-section container">
    <div class="slider-container">
        <div class="one-time">
            <div><img src="assets/img/slider 1.jpg" alt=""></div>
            <div><img src="assets/img/slider 2.jpg" alt=""></div>
            <div><img src="assets/img/slider 3.jpg" alt=""></div>
            <div><img src="assets/img/slider 4.jpg" alt=""></div>
            <div><img src="assets/img/slider 5.jpg" alt=""></div>
        </div>
    </div>
    <div class="fixed-img">
        <img src="assets/img/fixed img.JPG" alt="">
    </div>
</div>
</section>

<?php include_once ('footer.php');?>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(function(){
        $('.one-time').slick({
            dots: true,
            infinite: true,
            autoplay:true,
            autoplaySpeed:2000,
            prevArrow: '<span class="custom-prev">&lt;</span>',
            nextArrow: '<span class="custom-next">&gt;</span>',
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
    });

</script>