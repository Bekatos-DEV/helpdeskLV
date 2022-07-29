<link href="/css/style.css" rel="stylesheet"> 
<link href="/css/bootstrap.min.css" rel="stylesheet"> 
<link href="/css/responsive.css" rel="stylesheet"> 
<link href="/css/bootstrap-select.min.css" rel="stylesheet"> 
<link href="/css/animate.css" rel="stylesheet"> 

<?php
	if(!@$_SESSION)
	{
		if($_POST)
		{
			function mailYolla()
			{
				$name=strip_tags($_POST["name"]);
				$surname=strip_tags($_POST["lname"]);
				$usermail=strip_tags(trim($_POST["email"]));
				$password=strip_tags(trim(md5($_POST["signup-password"])));
				$confpassword=strip_tags(trim(md5($_POST["confirm-password"])));
				$company=strip_tags($_POST["comp"]);
				require("mail/class.phpmailer.php"); // PHPMailer dosyamizi çagiriyoruz
				$mail = new PHPMailer(); // Sinifimizi $mail degiskenine atadik
				$mail->IsSMTP(true);  // Mailimizin SMTP ile gönderilecegini belirtiyoruz
				$mail->From     = $usermail;//"admin@localhost"; //Gönderen kisminda yer alacak e-mail adresi
				$mail->Sender   = $usermail;//"admin@localhost";//Gönderen Mail adresi
				$mail->ReplyTo  = $usermail;//"admin@localhost";//Tekrar gönderimdeki mail adersi
				$mail->AddReplyTo=($usermail);//"admin@localhost";//Tekrar gönderimdeki mail adersi
				$mail->FromName = $name." ".$surname;//"PHP Mailer";//gönderenin ismi
				$mail->Host     = "mail.giltas.com.tr";//"localhost"; //SMTP server adresi
				$mail->SMTPAuth = true; //SMTP server'a kullanici adi ile baglanilcagini belirtiyoruz
				$mail->Port     = 587; //Natro SMPT Mail Portu
				$mail->CharSet = 'UTF-8'; //Türkçe yazı karakterleri için CharSet  ayarını bu şekilde yapıyoruz.
				$mail->Username = "destek@giltas.com.tr";//"admin@localhost"; //SMTP kullanici adi
				$mail->Password = "123*Destek";//""; //SMTP mailinizin sifresi
				$mail->WordWrap = 50;
				$mail->IsHTML(true); //Mailimizin HTML formatinda hazirlanacagini bildiriyoruz.
				$mail->Subject  = " Yeni bir kullanıcı";//"Deneme Maili"; // Mailin Konusu Konu
				//Mailimizin gövdesi: (HTML ile)
				$body  = "						"."Yeni Bir Kullanıcı"."<br><br>";
				$body .= "Adi		: ".$name." ".$surname."<br>";
				$body .= "E-posta Adresi	: ".$usermail."<br>";
				$body .= "Şirket	: ".$company."<br>";



				//  $body = $_POST["mesaj"];//"Bu mail bir deneme mailidir. SMTP server ile gönderilmistir.";
				// HTML okuyamayan mail okuyucularda görünecek düz metin:
				$mail->Body = $body;
				$mail->ClearAddresses();
				$mail->ClearAttachments();
				$mail->AddAttachment('images.png'); //mail içinde resim göndermek için
				$mail->AddAddress("baslan@giltas.com.tr"); // Mail gönderilecek adresleri ekliyoruz.
				$mail->AddAddress("bdoygun@giltas.com.tr"); // Mail gönderilecek adresleri ekliyoruz.
				
				$mail->Send();
				$mail->ClearAddresses();
				$mail->ClearAttachments();

			}
			$name=strip_tags($_POST["name"]);
			$surname=strip_tags($_POST["lname"]);
			$mail=strip_tags(trim($_POST["email"]));
			$password=strip_tags(trim(md5($_POST["signup-password"])));
			$confpassword=strip_tags(trim(md5($_POST["confirm-password"])));
			$company=strip_tags($_POST["comp"]);
			$characters="abcdefghijklmnoprstuvwxyABCDEFGHIJKLMNOPRSTUVWXY0123456789";
			$length=32;
			$string="";
			while($length >0)
			{
				$string .=$characters[mt_rand(0,strlen($characters)-1)];
				$length-=1;
			}
			$token=$string;
			if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
			{
				echo '<script type="text/javascript">';
				echo 'alert("Geçerli Mail Adresi Giriniz") ;';
				echo 'window.location.href="?do=signup";';
				echo '</script>';
			}
			else
			{
				$v=$db->prepare("select * from user where userMail=?");
				$v->execute(array($mail));
				$x=$v->fetch(PDO::FETCH_ASSOC);
				$y=$v->rowCount();
				if($y)
				{
					echo '<script type="text/javascript">';
					echo 'alert("Bu mail adresi sistemde kayıtlıdır !") ;';
					echo 'window.location.href="?do=signup";';
					echo '</script>';
				}
				else
				{
					$x=$db->prepare("insert into user set
					userName=?,
					userSurname=?,
					userPassword=?,
					userMail=?,
					userCompany=?,
					token=?,
					onay=0
					");
					$kayit=$x->execute(array($name,$surname,$password,$mail,$company,$token));
					if($kayit)
					{
						echo '<script type="text/javascript">';
						echo 'alert("Başarıyla Kayıt Oldunuz, Onay için E-Mail Adresinizi Kontrol Ediniz");';
						echo 'window.location.href = "index.php" ; ';
						echo '</script>';
						mailYolla();
					}
					else
					{
						echo 'hata';
					}
				}
			}
		}
	}
?>
<section class="breadcrumb_area breadcrumb_area_four" style="padding-bottom: 75px;padding-top: 125px;">
            <img class="p_absolute bl_left" src="img/v.svg" alt="">
            <img class="p_absolute bl_right" src="img/home_one/b_leaf.svg" alt="">
            <img class="p_absolute one wow fadeInRight" src="img/home_one/b_man_two.png" alt="">
            <div class="container">
                <div class="breadcrumb_content_two text-center">
					<h2>Kayıt Ol</h2>
                </div>
            </div>
        </section>
<section class="signup_area signup_area_height">
            <div class="row ml-0 mr-0">
                <div class="sign_left signup_left">
                    <h2>Müşterilerini, müşterileri için kaçınılmaz kılar.</h2>
                    <img class="position-absolute top" src="img/signup/top_ornamate.png" alt="top">
                    <img class="position-absolute bottom" src="img/signup/bottom_ornamate.png" alt="bottom">
                    <img class="position-absolute middle wow fadeInRight" src="img/signup/man_image.png" alt="bottom">
                    <div class="round wow zoomIn" data-wow-delay="0.2s"></div>
                </div>
                <div class="sign_right signup_right">
                    <div class="sign_inner signup_inner">

                        <form action="" class="row login_form" method="post">
                            <div class="col-sm-6 form-group">
                                <div class="small_text">İsim :</div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="İsim">
                            </div>
                            <div class="col-sm-6 form-group">
                                <div class="small_text">Soyisim :</div>
                                <input type="text" class="form-control" name="lname" id="lname" placeholder="Soyisim">
                            </div>
							<div class="col-lg-12 form-group">
                                <div class="small_text">Kurum Adı :</div>
                                <input type="text" class="form-control" name="comp" id="comp" placeholder="Giltaş A.Ş.">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">E-Mail :</div>
                                <input type="email" class="form-control" id="email" placeholder="email@email.com" name="email">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Şifre :</div>
                                <input id="signup-password" name="signup-password" type="password" class="form-control" placeholder="5+ characters required" autocomplete="off">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Şifre Tekrar :</div>
                                <input id="confirm-password" name="confirm-password" type="password" class="form-control" placeholder="5+ characters required" autocomplete="off">
                            </div>
                            <!--<div class="col-lg-12 form-group">
                                <div class="check_box">
                                    <input type="checkbox" value="None" id="squared2" name="check">
                                    <label class="l_text" for="squared2">I accept the <span>politic of confidentiality</span></label>
                                </div>
                            </div> -->
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn action_btn thm_btn">Kayıt Ol</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
