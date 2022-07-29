<link href="/css/style.css" rel="stylesheet"> 
<link href="/css/bootstrap.min.css" rel="stylesheet"> 
<link href="/css/responsive.css" rel="stylesheet"> 
<link href="/css/bootstrap-select.min.css" rel="stylesheet"> 
<link href="/css/animate.css" rel="stylesheet"> 

<?php


	if($_POST)
	{
		function mailYolla()
		{
			$catname="";
			$konu=$_POST["konu"];
			$mesaj=$_POST["message"];
			$oncelik=$_POST["oncelik"];
			$category=@$_GET["category"];
			if($category==1)
			 $catname="Genel";
		 else if($category==2)
			 $catname="Sistem Destek";
		 else if($category==3)
			 $catname="Yazılım";
		 else if($category==4)
			 $catname="Raporlama";
		 else if($category==5)
			 $catname="Satış";
			$usermail=$_SESSION["mail"];
			$adsoyad=$_SESSION["name"]." ".$_SESSION["surname"];
			require("mail/class.phpmailer.php"); // PHPMailer dosyamizi çagiriyoruz
			$mail = new PHPMailer(); // Sinifimizi $mail degiskenine atadik
			$mail->IsSMTP(true);  // Mailimizin SMTP ile gönderilecegini belirtiyoruz
			$mail->From     = $usermail;//"admin@localhost"; //Gönderen kisminda yer alacak e-mail adresi
			$mail->Sender   = $usermail;//"admin@localhost";//Gönderen Mail adresi
			$mail->ReplyTo  = ($_POST["mailiniz"]);//"admin@localhost";//Tekrar gönderimdeki mail adersi
			$mail->AddReplyTo=($usermail);//"admin@localhost";//Tekrar gönderimdeki mail adersi
			$mail->FromName = $adsoyad;//"PHP Mailer";//gönderenin ismi
			$mail->Host     = "mail.giltas.com.tr";//"localhost"; //SMTP server adresi
			$mail->SMTPAuth = true; //SMTP server'a kullanici adi ile baglanilcagini belirtiyoruz
			$mail->Port     = 587; //Natro SMPT Mail Portu
			$mail->CharSet = 'UTF-8'; //Türkçe yazı karakterleri için CharSet  ayarını bu şekilde yapıyoruz.
			$mail->Username = "destek@giltas.com.tr";//"admin@localhost"; //SMTP kullanici adi
			$mail->Password = "123*Destek";//""; //SMTP mailinizin sifresi
			$mail->WordWrap = 50;
			$mail->IsHTML(true); //Mailimizin HTML formatinda hazirlanacagini bildiriyoruz.
			$mail->Subject  = $konu." /Mail Konusu";//"Deneme Maili"; // Mailin Konusu Konu
			//Mailimizin gövdesi: (HTML ile)
			$body  = "						"."Mail İçeriği Başlığı"."<br><br>";
			$body .= "Gönderen Adi		: ".$adsoyad."<br>";
			$body .= "E-posta Adresi	: ".$usermail."<br>";
			$body .= "Oncelik&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$oncelik."<br>";
			$body .= "Kategori&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$catname."<br>";
			$body .= "Konu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$konu."<br>";
			$body .= "Mesaj&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$mesaj."<br>";


			//  $body = $_POST["mesaj"];//"Bu mail bir deneme mailidir. SMTP server ile gönderilmistir.";
			// HTML okuyamayan mail okuyucularda görünecek düz metin:
			$mail->Body = $body;
			$mail->ClearAddresses();
			$mail->ClearAttachments();
			$mail->AddAttachment('images.png'); //mail içinde resim göndermek için
			$mail->AddAddress("destek@giltas.com.tr"); // Mail gönderilecek adresleri ekliyoruz.
			$mail->Send();
			$mail->ClearAddresses();
			$mail->ClearAttachments();

		}
		$maxBoyut       = 6000000;
	  $dosyaUzantisi  = substr($_FILES["dosya"]["name"],-4,4);
	  $dosyaAdi       = rand(1,999999).$dosyaUzantisi;
	  $dosyaYolu      = "dosya/".$dosyaAdi;

		$konu=$_POST["konu"];
		$mesaj=$_POST["message"];
		$oncelik=$_POST["oncelik"];
		$category=@$_GET["category"];
		$userID=$_SESSION["id"];
		$cozum=0;
		$file1="";
		$file2="";
		$dosya1=$_FILES["dosya"]["type"];
					if($dosya1!="")
					{
						if($dosya1 == "image/jpeg" || $dosya1 == "image/png" || $dosya1 == "image/jpg" || $dosya1 == "image/JPG")
						{
							if(is_uploaded_file($_FILES["dosya"]["tmp_name"]))
							{
								$tasi = move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyaYolu);

							}
							else
							{
								echo '<script type="text/javascript">';
	echo 'alert("Dosya 1 taşınırken hata ");';
	echo 'window.location.href = "index.php";';
	echo '</script>';
							}
						}
						else
						{
		echo '<script type="text/javascript">';
	echo 'alert("Resim  için dosya formatı jpg,png veya jpeg olmalıdır '.$dosya1.' ");';
	echo 'window.location.href = "index.php";';
	echo '</script>';
						}
					}
		$x=$db->prepare("insert into tickets set
		oncelik=?,
		konu=?,
		mesaj=?,
		file1=?,
		file2=?,
		userID=?,
		cozum=?,
		category=?
		");
		$kayit=$x->execute(array($oncelik,$konu,$mesaj,$dosyaYolu,$file2,$userID,$cozum,$category));
		if($kayit)
		{
			mailYolla();
			echo '<script type="text/javascript">';
			echo 'alert("Talebiniz Gönderildi");';
			echo 'window.location.href = "index.php" ; ';
			echo '</script>';
		}
		else
		{
			echo "hata";
		}

	}
?>

<section class="breadcrumb_area breadcrumb_area_four">
            <img class="p_absolute bl_left" src="img/v.svg" alt="">
            <img class="p_absolute bl_right" src="img/home_one/b_leaf.svg" alt="">
            <img class="p_absolute one wow fadeInRight" src="img/home_one/b_man_two.png" alt="">
            <div class="container">
                <div class="breadcrumb_content_two text-center">
                    <h2>Destek Talebi Oluşturun</h2>
                </div>
            </div>
        </section>
        <section class="contact_area sec_pad">
            <div class="container">
                <div class="contact_info">
                    <form action="" class="contact_form" method="post" enctype="multipart/form-data">
                        <div class="row contact_fill">
                            <div class="col-lg-12 form-group">
                                <h6>Öncelik</h6>
                                <select class="form-control" id="oncelik" name="oncelik">
									<option value="1">Düşük Öncelik</option>
									<option value="2">Orta Öncelik</option>
									<option value="3">Yüksek Öncelik</option>
								</select>
                            </div>
                            <div class="col-lg-12 form-group">
                                <h6>Konu :</h6>
                                <input type="text" class="form-control" name="konu" id="konu" placeholder="Konu Başlığı">
                            </div>
                            <div class="col-lg-12 form-group">
                                <h6>Mesajınız :</h6>
                                <textarea class="form-control message" id="message" placeholder="Mesajınızı Giriniz ..." name="message"></textarea>
                            </div>
														<div class="col-lg-12 form-group">
                                <h6>Dosya Yükle :</h6>
																<input type="file" name="dosya" data-max-size="32154" >
                            </div>
                            <div class="col-lg-12 form-group">
                                <button type="submit" class="btn action_btn thm_btn">Talep Oluştur</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
