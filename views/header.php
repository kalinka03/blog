
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Главная</title>
    <link href="/views/css/bootstrap.min.css" rel="stylesheet">
    <link href="/views/css/font-awesome.min.css" rel="stylesheet">
    <link href="/views/css/prettyPhoto.css" rel="stylesheet">
    <link href="/views/css/price-range.css" rel="stylesheet">
    <link href="/views/css/animate.css" rel="stylesheet">
    <link href="/views/css/main.css" rel="stylesheet">
    <link href="/views/css/responsive.css" rel="stylesheet">

    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
    <script type="text/javascript">tinymce.init({ selector:'textarea', width=700, });</script>

</head>

<body>
    <header id="header">
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="logo pull-left">
                            <a href="#"><img class="img-main" src="/views/images/shop/e-shopping.jpg" alt="" /><span class="main-site">В К У С Н Я Ш К А</span></a>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">     
                                <li><a class="hover-menu" href="/"></i> Главная</a></li>
                                <li><a href="/catalog"></i> Все посты</a></li>
                                <?php
                                if( isset( $_SESSION['user'] ) ) { ?>
                                <span>
                                    <?=$_SESSION['user_name']?></span>
                                    <li> <a href="/logout">Выйти</a></li>
                                    <?php } 
                                    else  { ?>
                                    <li><a href="/login"> <i class="fa fa-lock"></i> Войти</a></li> 
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </body>


        </html>
        <?php
        if(isset($_SESSION['flash_msg'])){
            echo $_SESSION['flash_msg'];
            unset($_SESSION['flash_msg']);
        }
        ?>














