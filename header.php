<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daraz Home Page</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- slick slider link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

</head>
<body>

    <?php 
    function is_active($check){
        $requested_uri = $_SERVER['REQUEST_URI'];
        $search = strpos($requested_uri, $check);

        if($search !==false){
            return 'active';
        }
    } 
    
    $main_menus =[
        'index' => 'Home', 
        'savemoreonapp' => 'Save More on App', 
        'becomeaseller' => 'Become a Seller',
        'help&support' => 'Help & Support',
        'probeshkorun' => 'প্রবেশ করুন',
        'singup' => 'Sing Up',
        'changelanguage' => 'Change Language'
    ]
    ?>

    <div class="header">
        <div class="header-bg">
            <div class="header-wrapper container">
                <div class="menu">
                    <ul>
                        <?php foreach($main_menus as $key=>$value) : ?>
                        <li><a class="<?php 
                        echo is_active($key);?>" href="<?php echo $key;?>.php"><?php echo $value;?></a></li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <div class="header-items">
                    <div class="header-items-wrapper">
                    <div class="site-logo">
                        <img src="assets/img/logo.png" alt="">
                    </div>
                    <div class="input-fields">
                        <input class="active" type="text" placeholder="দারাজ এ অনুসন্ধান">
                        <i class="fa-solid fa-magnifying-glass search"></i>
                    </div>
                    <div class="shopping-cart">
                    <i class="fa-solid fa-cart-shopping cart"></i>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>