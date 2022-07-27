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
    <header class="block-header">
        <div class="header-logo">
            <img src="image/logo.png" alt="レガーメのロゴ">
        </div>
        <div class="header-nav">
            <nav>
                <ul>
                    <a href="#"><li>Home</li></a>
                    <ul class="dropdwn">
                        <li>Menu
                            <ul class="dropdwn_menu">
                                <li><a href="#">Moring</a></li>
                                <li><a href="#">Lunch</a></li>
                                <li><a href="#">Dinner</a></li>
                                <li><a href="#">Drink</a></li>
                                <li><a href="#">Party</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a href="#"><li>Reserve</li></a>
                    <a href="#"><li>Access</li></a>
                    <a href="#"><li>News</li></a>
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
                            <li><a href="#">Home</a></li>
                            <li>Menu
                                <div class="service_menu">
                                    <a href="#" style="font-size: 12px;color:whitesmoke;">Morning</a>
                                    <a href="#" style="font-size: 12px;color:whitesmoke;">Lunch</a>
                                    <a href="#" style="font-size: 12px;color:whitesmoke;">Dinner</a>
                                    <a href="#" style="font-size: 12px;color:whitesmoke;">Drink</a>
                                    <a href="#" style="font-size: 12px;color:whitesmoke;">Party</a>
                                </div>
                            </li>
                            <li><a href="#">Reserve</a></li>
                            <li><a href="#">Access</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                        <div class="h-menu_policy">
                            <p>©Legame ALL RIGHTS RESERVED</p>
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
        <div class="topics">
            <div class="container">
                <p>7月の季節限定メニューが始まりました</p>
                <a href="">詳しくはこちら</a>
            </div>
        </div>
        <div class="concept">
            <div class="container">
                <div class="concept-logo">
                    <img src="image/concept-logo.jpg" alt="">
                </div>
                <h3>１つ１つ洗練された素材と最高の料理でおもてなし</h3>
                <div class="concept-content">
                    <img src="image/pasuta.jpg" alt="パスタ">
                    <div class="concept-text">
                        <p>テキスト入力テキスト入力テキスト入力テキスト
                        テキスト入力テキスト入力テキスト入力テキスト
                        テキスト入力テキスト入力テキスト入力テキスト
                        テキスト入力テキスト入力テキスト入力テキスト
                        テキスト入力テキスト入力テキスト入力テキスト
                        テキスト入力テキスト入力テキスト入力テキスト</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="container">
                <h3>Menu</h3>
                <div class="menu-first">
                    <div class="menu-1">
                        <img src="image/morning.jpg" alt="">
                        <p>&nbsp;</p>
                    </div>
                    <div class="menu-2">
                        <img src="image/lunch.jpg" alt="">
                        <p>&nbsp;</p>
                    </div>
                    <div class="menu-3">
                        <img src="image/dinner.jpg" alt="">
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div class="menu-second">
                    <div class="menu-4">
                        <img src="image/drink.jpg" alt="">
                        <p>&nbsp;</p>
                    </div>
                    <div class="menu-5">
                        <img src="image/party-course.jpg" alt="">
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="group">
            <div class="news container">
                <h3>News</h3>
                <div class="news-content">
                    <div class="news-topics">
                        <a href="">2022.7.15</a>
                        <a href="" style="font-weight: normal;">7月の季節限定メニューが始まりました</a>
                    </div>
                    <div class="news-topics">
                        <a href="">2022.4.20</a>
                        <a href="" style="font-weight: normal;">ゴールデンウィークの営業時間について</a>
                    </div>
                    <div class="news-topics">
                        <a href="">2022.2.18</a>
                        <a href="" style="font-weight: normal;">臨時休業のお知らせ</a>
                    </div>
                    <div class="news-topics">
                        <a href="">2022.1.1</a>
                        <a href="" style="font-weight: normal;">新年のご挨拶</a>
                    </div>
                    <div class="news-topics">
                        <a href="">2021.11.20</a>
                        <a href="" style="font-weight: normal;">臨時休業のお知らせ</a>
                    </div>
                    <a href=""><button>More →</button></a>
                    <div class="news-image">
                        <img src="image/wine.png" alt="">
                    </div>
                </div>
            </div>
            <div class="information container">
                <h3>Information</h3>
                <div class="information-content">
                    <div class="information-topics">
                        <p>[Mon-Thu]</p>
                        <p style="font-weight: normal; font-size: 18px;">11：00 〜 22：00 （LO：FOOD 21：00 , Drink 21：30）</p>
                    </div>
                    <div class="information-topics">
                        <p>[Fri&Sat]</p>
                        <p style="font-weight: normal; font-size: 18px;">11：00 〜 23：30 （LO：FOOD 22：00 , Drink 23：00）</p>
                    </div>
                    <div class="information-topics">
                        <p>[Sun&Holiday]</p>
                        <p style="font-weight: normal; font-size: 18px;">11：00 〜 23：00 （LO：FOOD 22：00 , Drink 22：30）</p>
                    </div>
                    <div class="reserve-content">
                        <a href=""><button>Reservation</button></a>
                        <div class="reserve-image">
                            <img src="image/pasuta2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="block-footer container">
            <div class="footer-logo">
                <img src="image/logo.png" alt="レガーメのロゴ">
            </div>
            <div class="restaurant-detail">
                <p>東京都目黒区〇〇〇〇　〇〇-〇〇</p>
                <p>〇〇〇〇ビル</p>
                <p>03-0000-0000</p>
            </div>
            <div class="sns-image">
                <a href=""><img src="image/line.svg" alt=""></a>
                <a href=""><img src="image/instagram.svg" alt=""></a>
                <a href=""><img src="image/facebook.svg" alt=""></a>
            </div>
            <div class="privacy">
                <p>©Legame  ALL RIGHTS RESERVED</p>
            </div>
        </div>
    </footer>
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JS（slick） -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="style.js"></script>
</body>
</html>