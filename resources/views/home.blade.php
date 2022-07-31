@extends('app.banner')
@section('home')

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
@endsection