<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, user-scalable=yes" />
    <?php wp_head(); ?>
</head>
<body  <?php body_class(); ?>>
    <?php wp_body_open(); ?> 
    <div id="wrapper" class="hfeed">
        <header id="header">
            <nav id="menu" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <?php function afficherImage() {
                
                $cheminImage = 'http://planty.local/wp-content/uploads/2023/07/Logo.png';
                $altText = 'Logo';

$codeHTML= '<a href="http://planty.local">'.'<img src="' . esc_url( $cheminImage ) . '" alt="'  . esc_attr( $altText ) . '" class="logo"></a>';
echo $codeHTML;
}
            ?>
            
<div class="header_position">
                <?php afficherImage(); wp_nav_menu(['theme_location' => 'main-menu']); ?>
</div>
            </nav>
        </header>
        <div id="container">
            <main id="content">