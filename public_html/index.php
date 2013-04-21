<?php require_once('includes/initialize.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dobrodošli na portal za Grupnu kupovinu</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="stylesheet/msgBoxLight.css" />
        <link rel="stylesheet" type="text/css" href="stylesheet/main.css" />
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.timer.js"></script>
        <script type="text/javascript" src="js/jquery.msgBox.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>  
        <script type="text/javascript" src="js/main.js"></script> 
    </head>    
    
    <body>
        <?php include('layout_dropbox.php'); ?>
        <?php include('layout_header.php'); ?>
        <div id="outerDiv">
            <div id="goBack" onclick="goBack();"><img src="images/back.png" alt="Natrag" /></div>
            <?php include('layout_slider.php'); ?>
            <?php include('layout_offers.php'); ?>
            <?php include('layout_offer_details.php'); ?>                       
            <div class="sidebar"> 
                <?php include('layout_sidebar_search.php'); ?>
                <?php include('layout_sidebar_offer_details.php'); ?>                
                <?php include('layout_sidebar_basket.php'); ?>
                <?php include('layout_sidebar_newsletter.php'); ?>
                <?php include('layout_sidebar_universal.php'); ?>                
            </div>            
            <?php include('layout_loadmore.php'); ?>               
            <?php include('layout_comments.php'); ?>
            <?php include('layout_recomended_offers.php'); ?> 
        </div>
        <div class="clear"></div>
        <?php include('layout_footer.php'); ?>
    </body> 
           
</html>
