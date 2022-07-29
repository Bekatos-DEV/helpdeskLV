<link href="/css/style.css" rel="stylesheet"> 
<link href="/css/bootstrap.min.css" rel="stylesheet"> 
<link href="/css/responsive.css" rel="stylesheet"> 
<link href="/css/bootstrap-select.min.css" rel="stylesheet"> 
<link href="/css/animate.css" rel="stylesheet"> 

<section class="doc_banner_area_one">
            <img class="p_absolute star" src="img/home_one/banner_bg_two.png" alt="">
            <img class="dark" src="img/home_one/wave_one.svg" alt="">
            <img class="dark_two" src="img/home_one/wave_two.svg" alt="">
            <img class="p_absolute star_one" src="img/home_one/star.png" alt="">
            <img class="p_absolute star_two" src="img/home_one/star.png" alt="">
            <img class="p_absolute star_three" src="img/home_one/star.png" alt="">
            <img class="p_absolute one wow fadeInLeft" data-wow-delay="0.1s" src="img/home_one/b_man.png" alt="">
            <img class="p_absolute two wow fadeInRight" data-wow-delay="0.2s" src="img/home_one/b_man_two.png" alt="">
            <img class="p_absolute three wow fadeInUp" data-wow-delay="0.3s" src="img/home_one/flower.png" alt="">
            <img class="p_absolute four wow fadeInRight" data-wow-delay="0.4s" src="img/home_one/girl_img.png" alt="">
            <img class="p_absolute five wow fadeIn" data-wow-delay="0.5s" src="img/home_one/file.png" alt="">
            <img class="p_absolute bl_left" src="img/v.svg" alt="">
            <img class="p_absolute bl_right" src="img/home_one/b_leaf.svg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="media doc_features_item_one wow fadeInLeft" data-wow-delay="0.2s">
                            <img src="img/home_one/Lamp_idea.png" alt="">
                            <div class="media-body" >
                                <a href="?do=talepadd">
                                    <h3>Bir Talep Ekle</h3>
                                </a>
                                <p>Teknik destek bölümüne bir yardım talebi gönderin .</p>
                                <a href="?do=talepadd" class="learn_btn">Tıklayın <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="media doc_features_item_one wow fadeInLeft" data-wow-delay="0.5s">
                            <img src="img/home_one/Duplicate.png" alt="">
                            <?php 
							// if($_SESSION)
							{ ?>
							<!--	<div class="media-body">
                                <a href="?do=tickets">
                                    <h3>Mevcut Talebi Görüntüle</h3>
                                </a>
                                <p>Daha önce kaydettiğiniz talebi görüntüleyin</p>
                                <a href="?do=tickets" class="learn_btn">Tıklayın <i class="arrow_right"></i></a>
                            </div>
                            -->
							<?php } 
							// else { ?>
								<div class="media-body">
                                <a href="?do=talepshow&category=6">
                                    <h3>Mevcut Talebi Görüntüle</h3>
                                </a>
                                <p>Daha önce kaydettiğiniz talebi görüntüleyin</p>
                                <a href="?do=talepshow&category=6" class="learn_btn">Tıklayın <i class="arrow_right"></i></a>
                            </div>
                            
							<?php // } ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="media doc_features_item_one wow fadeInLeft" data-wow-delay="0.7s">
                            <img src="img/home_one/chat.png" alt="">
                            <div class="media-body">
                                <a href="?do=contact">
                                    <h3>İletişim</h3>
                                </a>
                                <p>Daha detaylı bilgi için iletişim adreslerimizi görüntüleyin.</p>
                                <a href="?do=contact" class="learn_btn">Tıklayın <i class="arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>