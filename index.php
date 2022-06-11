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
    <div class="block-main">
        <ul class="slider">
            <li><a href="#"><img src="image/italy-city.jpg" alt="イタリア街"></a></li>
            <li><a href="#"><img src="image/italy-restaurant.jpg" alt="イタリアのレストラン"></a></li>
            <li><a href="#"><img src="image/cafe.jpg" alt="カフェ"></a></li>
        </ul>
        <div class="news">
            <div class="news-content">
                <p><span>2022.3.20</span>テキスト入力テキスト入力テキスト入力テキスト入力テキスト</p>
                <p><span>2022.2.25</span>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力</p>
                <p><span>2022.1.20</span>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入</p>
            </div>
            <a href=""><button>More →</button></a>
        </div>
        <div class="concept">
            <h3>コンセプト入力コンセプト入力コンセプト入力コンセプト入力</h3>
            <div class="concept-content">
                <img src="image/pasuta.png" alt="パスタ">
                <div class="concept-text">
                    <p>テキスト入力テキスト入力テキスト入力テキスト<br>
                    テキスト入力テキスト入力テキスト入力テキスト<br>
                    テキスト入力テキスト入力テキスト入力テキスト<br>
                    テキスト入力テキスト入力テキスト入力テキスト<br>
                    テキスト入力テキスト入力テキスト入力テキスト</p>
                </div>
            </div>
        </div>
        <div class="menu">
            <h3>MENU</h3>
            <div class="menu-first">
                <div class="menu-1">
                    <p>テキスト入力テキスト入力テキスト<br>
                    入力ストテキスト入力テキスト<br>
                    テキストテキスト入力</p>
                    <a href=""><button>More →</button></a>
                </div>
                <div class="menu-2">
                    <p>テキスト入力テキスト入力テキスト<br>
                    入力ストテキスト入力テキスト<br>
                    テキストテキスト入力</p>
                    <a href=""><button>More →</button></a>
                </div>
                <div class="menu-3">
                    <p>テキスト入力テキスト入力テキスト<br>
                    入力ストテキスト入力テキスト<br>
                    テキストテキスト入力</p>
                    <a href=""><button>More →</button></a>
                </div>
            </div>
            <div class="menu-second">
                <div class="menu-4">
                    <p>テキスト入力テキスト入力テキス<br>ト入力ストテキスト入力テキスト</p>
                    <a href=""><button>More →</button></a>
                </div>
                <div class="menu-5">
                    <p>テキスト入力テキスト入力テキス<br>ト入力ストテキスト入力テキスト</p>
                    <a href=""><button>More →</button></a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="block-footer">
            <div class="footer-logo">
                <img src="image/logo.png" alt="レガーメのロゴ">
            </div>
            <div class="restaurant-detail">
                <p>東京都〇〇区〇〇〇〇　〇〇-〇〇</p>
                <p>〇〇〇〇ビル</p>
                <p>〇〇-〇〇〇〇-〇〇〇〇</p>
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
            <div class="privacy">
                <p>©〇〇〇〇〇〇 ALL RIGHTS RESERVED</p>
            </div>
        </div>
    </footer>
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JS（slick） -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="slide.js"></script>
</body>
</html>