@extends('app.banner')
@section('kategoriler')
            <div class="container">
                <div class="communities-boxes">
                    <div class="docly-com-box wow fadeInRight" data-wow-delay="0.5s">
                        <div class="icon-container">
                            <img src="img/home_support/rc1.png" alt="communinity-box">
                        </div>
                        <div class="docly-com-box-content">

							<?php // if($_SESSION) { ?>
							<!-- 	<h3 class="title"><a href="?do=ticketadd&category=1"> Genel</a></h3> -->
							<?php // }else { ?>
							<!-- 	<h3 class="title"><a href="?do=talepshow&category=1"> Genel</a></h3> -->
							<?php // } ?>
                            <h3 class="title"><a href=""> Genel</a></h3>
                            
                        </div>
                        <!-- /.docly-com-box-content -->
                    </div>
                    <!-- /.docly-com-box -->

                    <div class="docly-com-box wow fadeInRight" data-wow-delay="0.7s">
                        <div class="icon-container">
                            <img src="img/home_support/rc2.png" alt="communinity-box">
                        </div>
                        <div class="docly-com-box-content">
                            
                            <?php // if($_SESSION) { ?>
							<!--	<h3 class="title"><a href="?do=ticketadd&category=2"> Sistem Destek (Bilgi İşlem)</a></h3> -->
							<?php // }else { ?>
							<!--	<h3 class="title"><a href="?do=talepshow&category=2"> Sistem Destek (Bilgi İşlem)</a></h3> -->
							<?php // } ?>
                            <h3 class="title"><a href=""> Sistem Destek (Bilgi İşlem)</a></h3>
                        </div>
                        <!-- /.docly-com-box-content -->
                    </div>
                    <!-- /.docly-com-box -->

                    <div class="docly-com-box wow fadeInRight" data-wow-delay="0.9s">
                        <div class="icon-container">
                            <img src="img/home_support/rc3.png" alt="communinity-box">
                        </div>
                        <div class="docly-com-box-content">
                            
                            <?php // if($_SESSION) { ?>
							<!--	<h3 class="title"><a href="?do=ticketadd&category=3"> Yazılım (GM - Akıllı Kabin)</a></h3> -->
							<?php // }else { ?>
							<!--	<h3 class="title"><a href="?do=talepshow&category=3"> Yazılım (GM - Akıllı Kabin)</a></h3> -->
							<?php // } ?>
                            <h3 class="title"><a href=""> Yazılım (GM - Akıllı Kabin)</a></h3>
                           
                        </div>
                        <!-- /.docly-com-box-content -->
                    </div>
                    <!-- /.docly-com-box -->

                    <div class="docly-com-box wow fadeInRight" data-wow-delay="1.1s">
                        <div class="icon-container">
                            <img src="img/home_support/rc4.png" alt="communinity-box">
                        </div>
                        <div class="docly-com-box-content">

                            <?php // if($_SESSION) { ?>
							<!--	<h3 class="title"><a href="?do=ticketadd&category=4"> Raporlama</a></h3> -->
							<?php // }else { ?>
							<!--	<h3 class="title"><a href="?do=talepshow&category=4"> Raporlama</a></h3> -->
							<?php // } ?>
                            <h3 class="title"><a href=""> Raporlama</a></h3>

                        </div>
                        <!-- /.docly-com-box-content -->
                    </div>
                    <!-- /.docly-com-box -->

                    <div class="docly-com-box wow fadeInRight" data-wow-delay="1.3s">
                        <div class="icon-container">
                            <img src="img/home_support/rc5.png" alt="communinity-box">
                        </div>
                        <div class="docly-com-box-content">

                            <?php // if($_SESSION) { ?>
							<!--	<h3 class="title"><a href="?do=ticketadd&category=5"> Satış</a></h3> -->
							<?php // }else { ?>
							<!--	<h3 class="title"><a href="?do=talepshow&category=5"> Satış</a></h3> -->
							<?php // } ?>
                            <h3 class="title"><a href=""> Satış</a></h3>
                        </div>
                        <!-- /.docly-com-box-content -->
                    </div>
                    <!-- /.docly-com-box -->
                </div>
            </div>
 @endsection
