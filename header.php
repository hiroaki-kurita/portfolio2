<!-- フロントエンド -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title></title>
    <link rel="" href="">
    <!-- BootstrapのCSS読み込み -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- スタイルシート（slick） -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- スタイルシート -->
    <link rel="stylesheet" href="style.css">
    <?php wp_header(); ?>
</head>
<body>
    <header>
        <div class="block-header">
            <div class="header-logo">
                <img src="image/logo.png" alt="レガーメのロゴ">
            </div>
            <nav>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">MENU</a></li>
                    <li><a href="#">RESERVE</a></li>
                    <li><a href="#">ACCESS</a></li>
                    <li><a href="#">NEWS</a></li>
                </ul>
            </nav>
        </div>
        <!-- スマホ対応（ハンバーガーメニュー） -->
        <div class="header-sp">
            <img src="image/logo-sp.png" alt="スマホ用レガーメのロゴ">
            <button type="button" class="header-button">
                <div class="h-menu">
                    <input id="h-menu_checkbox" class="h-menuCheckbox" type="checkbox">
                    <label class="h-menu_icon" for="h-menu_checkbox"><span class="hamburger-icon"></span></label>
                    <label id="h-menu_black" class="h-menuCheckbox" for="h-menu_checkbox"></label>
                    <div id="h-menu_content">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">MENU</a></li>
                            <li><a href="#">RESERVE</a></li>
                            <li><a href="#">ACCESS</a></li>
                            <li><a href="#">NEWS</a></li>
                        </ul>
                        <div class="h-menu_policy">
                            <p>©〇〇〇〇〇〇 ALL RIGHTS RESERVED</p>
                        </div>
                    </div>
                </div>
            </button>
        </div>
    </header>