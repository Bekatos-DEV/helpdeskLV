<link href="/css/style.css" rel="stylesheet"> 
<link href="/css/bootstrap.min.css" rel="stylesheet"> 
<link href="/css/responsive.css" rel="stylesheet"> 
<link href="/css/bootstrap-select.min.css" rel="stylesheet"> 
<link href="/css/animate.css" rel="stylesheet"> 


<?php /*
	$sayfa=intval(@$_GET["sayfa"]);
	if(!$sayfa)
	{
		$sayfa=1;
	}
	$s=$db->prepare("select * from tickets where userID=?");
	$s->execute(array($_SESSION["id"]));
	$s->fetchALL(PDO::FETCH_ASSOC);
	$toplam=$s->rowCount();
	$limit=10;
	$goster=$sayfa*$limit-$limit;
	$sayfa_sayisi=ceil($toplam/$limit);
	$forlimit=3; */
?>
<section class="breadcrumb_area">
            <img class="p_absolute bl_left" src="img/v.svg" alt="">
            <img class="p_absolute bl_right" src="img/home_one/b_leaf.svg" alt="">
            <img class="p_absolute star" src="img/home_one/banner_bg.png" alt="">
            <img class="p_absolute wave_shap_one" src="img/blog-classic/shap_01.png" alt="">
            <img class="p_absolute wave_shap_two" src="img/blog-classic/shap_02.png" alt="">
            <img class="p_absolute one wow fadeInRight" src="img/home_one/b_man_two.png" alt="">
            <img class="p_absolute two wow fadeInUp" data-wow-delay="0.2s" src="img/home_one/flower.png" alt="">
            <div class="container">
                <div class="breadcrumb_content_two text-center">
					<h2>Destek Taleplerim</h2>
                </div>
            </div>
        </section>


        <section class="doc_blog_grid_area sec_pad forum-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- /.post-header -->
						<?php 
						//$tickets=$db->prepare("SELECT * FROM tickets WHERE userID=?");
						//$tickets->execute(array($_SESSION["id"]));
						//$x=$tickets->fetchALL(PDO::FETCH_ASSOC);

						//foreach($x as $m)
						{
						?>
                        <div class="community-posts-wrapper bb-radius" onclick="window.location='?do=oneticket&id=<?php // echo $m["ID"] ?>';">
                            <div class="community-post style-two docly richard bug">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/forum/musteri.png" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="?do=oneticket&id=<?php// echo $m["ID"] ?>"><?php //echo $m["konu"]; ?></a>
                                        </h3>
										 <div class="cat-wrap">
											<!-- color : yellow - green - orange / default : purple -->
											 <?php /* if($m["oncelik"]==1)
												{
													$renk="color-green";
													$oncelik="Düşük Öncelik";
												}
												else if($m["oncelik"]==2)
												{
													$renk="color-orange";
													$oncelik="Orta Öncelik";
												}
												else
												{
													$renk="";
													$oncelik="Yüksek Öncelik";
												} */
											 ?>
                                            <a class="badge <?php // echo $renk ?>" style="color:white"><?php // echo $oncelik ?></a>

                                        </div>
                                        <?php /* 
												 if($m["cozum"]==1)
												 { ?>
													 <span class="com-featured">
                                           			 <i class="icon_check"></i>
                                        			</span>
												<?php } */
										?>
                                        <ul class="meta">
											<?php /*
												 $cat=$m["category"];
												 if($cat==1)
												 	$catname="Genel";
												else if($cat==2)
													$catname="Sistem Destek";
												else if($cat==3)
													$catname="Yazılım";
												else if($cat==4)
													$catname="Raporlama";
												else
													$catname="Satış" */
											?>
                                            <li><img src="img/home_support/cmm1.png" alt="cmm"><a href="#"><?php // echo $catname ?></a></li>
                                            <li><i class="icon_calendar"></i><?php // echo $m["ticDate"];?></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- /.community-posts-wrapper -->
						<?php } ?>
                        <div class="pagination-wrapper">

                            <ul class="post-pagination">
                            <?php /*
						      for($i = $sayfa - $forlimit; $i<$sayfa + $forlimit +1; $i++ )
                              {
	                               if($i>0 && $i<=$sayfa_sayisi)
	                               {
		                              if($i == $sayfa)
		                              {
			                             echo '<li><a href="#" class="active">'.$i.'</a></li>';
		                              }
                                        else
		                              {
			                             echo '<li><a href="?do=anasayfa&sayfa='.$i.'">'.$i.'</a></li>';
		                              }
	                               }
                            }
                        if($sayfa != $sayfa_sayisi)
                        {
	                           echo '<li class="next-post"><a href="?do=anasayfa&sayfa='.$sayfa_sayisi.'"><i class="arrow_carrot-right"></i></a></li></ul>';

                        } */
						?>
                            <!--
                            <ul class="post-pagination">

                                <li class="prev-post pegi-disable"><a href="#"><i class="arrow_carrot-left"></i></a>
                                </li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">15</a></li>
                                <li class="next-post"><a href="#"><i class="arrow_carrot-right"></i></a></li>
                            </ul>
                            -->
                        </div>
                        <!-- /.pagination-wrapper -->

                    </div>
                    <!-- /.col-lg-12 -->

                </div>
            </div>
        </section>
