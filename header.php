<!DOCTYPE html>
<html lang="en">
<head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">


<?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >


<header class="header">

	<img class="logo" src="http://127.0.0.1/wordpress/wp-content/uploads/2021/10/logo-bella.png" alt="">
    <ul class="main-nav">
        <?php wp_nav_menu(

            array(
                'theme_location' => 'top-menu',
                'menu-class' => 'main-nav'
            )

        );?>
    </ul>


    <img class="dropbtn" src="https://img.icons8.com/ios-glyphs/90/000000/menu--v1.png"/>


</header> 

    