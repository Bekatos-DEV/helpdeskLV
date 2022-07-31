@extends('app.banner')

<?php 
if($_POST)
{
	$category=@$_GET["category"];
	echo $category;
	$userMail=trim($_POST["email"]);
	$userPassword=trim(md5($_POST["password"]));
	$uye=$db->prepare("select * from user where userMail=? and userPassword=?");
	$uye->execute(array($userMail,$userPassword));
	$z=$uye->fetch(PDO::FETCH_ASSOC);
	$x=$uye->rowCount();
	if($x && $z["onay"]==1)
	{
		$_SESSION["name"]=$z["userName"];
		$_SESSION["surname"]=$z["userSurname"];
		$_SESSION["id"]=$z["ID"];
		$_SESSION["mail"]=$z["userMail"];
		if($category==0)
		{
			header("refresh:0.7;url=index.php");
		}
		else if($category==1)
		{
			header("refresh:0.7;url=?do=ticketadd&category=1");
		}
		else if($category==2)
		{
			header("refresh:0.7;url=?do=ticketadd&category=2");
		}
		else if($category==3)
		{
			header("refresh:0.7;url=?do=ticketadd&category=3");
		}
		else if($category==4)
		{
			header("refresh:0.7;url=?do=ticketadd&category=4");
		}
		else if($category==5)
		{
			header("refresh:0.7;url=?do=ticketadd&category=5");
		}
		else if($category==6)
		{
			header("refresh:0.7;url=?do=tickets");
		}
	}
	else
	{
		echo '<script type="text/javascript">';
		echo 'alert("E-Mail veya Şifre Yanlış !") ;';
		echo 'window.location.href="?do=talepshow&category='.$category.'";';
		echo '</script>';
	}
}
?>
@section('ShowReports')	
            <div class="container">
                <div class="">
                    <div class="sign_inner signup_inner">
                        <div class="text-center">
							<?php
							$category=0;
							$category=@$_GET["category"];
							if($category==6)
							{ 
							?>
								
								<h3 style="color:#FA9B00">Mevcut Talepleri Görüntüle</h3>
                            <p>Henüz Üye Olmadınız mı? <a href="signup.html">Buraya Tıklayın</a></p>
							<?php }
							else
							{ ?>
								<h3 style="color:#FA9B00">Giriş Yapınız </h3>
                            <p style="color:white">Henüz Üye Olmadınız mı? <a href="?do=signup" style="color:#F5AF95">Buraya Tıklayın</a></p>
							<?php } ?>
                            
                            
                        </div>
                        
                        <form action="" class="row login_form" method="post">
                            <div class="col-lg-12 form-group">
                                <div class="small_text">E-Mail Adresiniz </div>
                                <input type="email" class="form-control" id="email" placeholder="email@email.com" name="email">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Şifreniz </div>
                                <div class="confirm_password">
                                    <input id="password" name="password" type="password" class="form-control" placeholder="******" autocomplete="off">
                                    <a href="#" class="forget_btn">Şifrenizi mi unuttunuz ?</a>
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn action_btn thm_btn">Giriş Yap</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection