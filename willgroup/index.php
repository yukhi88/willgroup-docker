<?php
$dsn = 'mysql:dbname=willgroup_db;host=mysql';
$user = 'root';
$password = 'pass';

        
// DBへ接続
 try{
     $dbh = new PDO($dsn, $user,  $password);
        
     // クエリの実行
    $sql = "SELECT i.id,i.date,i.genre,i.content
            FROM ir_tbl i
            ORDER BY i.id desc";

            $stmt = $dbh->query($sql);
            $result_ir = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $sql = "SELECT r.id,r.date,r.genre,r.company,r.content
            FROM release_tbl r
            ORDER BY r.id desc";

            $stmt = $dbh->query($sql);
            $result_release = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
     }catch(PDOException $e){
         print("データベースの接続に失敗しました".$e->getMessage());
        die();
     }
        

?>

<!DOCTYPE html>
<html lang="ja">

<head id="top-head">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>株式会社ウィルグループ | 個と組織をポジティブに変革するチェンジエージェント・グループ</title>

    <div class="clearfix pc">
        <h1 id="logo">
            <a href="index.html"><img src="img/tit_header01.png" width="300" alt="logo"></a>
        </h1>
        <p class="en">
            <a class="en_mode" href="">English</a>
        </p>
    </div>

    


    <nav class="topnav fix">
        <div class="drawer">
            <!--- いわゆるロゴ svg を利用------>
            <div class="sp">
              <div id="logo"><a href="#"><img src="img/tit_header01.png" alt=""/></a></div>
            </div>
           <!-- ハンバーガーメニュー部分 --> 
           <div class="Toggle">
                <span></span>
                <span></span>
                <span></span>
           </div>
        </div>
         <!-------------- drawer ここまで-->

        <div class="navmenu">
            <ul class="topnav">
                <li class="topnav"><a href="#">企業情報</a></li>
                <li class="topnav"><a href="#">IR情報</a></li>
                <li class="topnav"><a href="#">サスティナビリティ</a></li>
                <li class="topnav"><a href="#">採用情報</a></li>
                <li class="topnav"><a href="#">お問い合わせ</a></li>   
            </ul>
            <div class="sp en2">
                <a href="#">English</a>
            </div>
        </div>
    </nav>


</head>

<body>

    <div class="image1">
        <h1>世の中にポジティブな変化を。</h1>
    </div>

    <section>
        <h1 class="title">WHO WE ARE</h1><br>

        <ul class="clearfix">
            <li class="left block01">
                <a href="#">
                    <span class="pc">
                        <img src="img/btn_index01_on.jpg" alt="TOP MESSAGE">
                        <img src="img/btn_index01_off.jpg" alt="TOP MESSAGE">
                    </span>

                    <span class="sp">
                        <img src="img/btn_index01_sp_off.jpg" alt="TOP MESSAGE">
                    </span>

                </a>
            </li>
            <li class="block01">
                <a href="#">
                    <span class="pc">
                        <img src="img/btn_index02_on.jpg" alt="ABOUT WILL GROUP">
                        <img src="img/btn_index02_off.jpg" alt="ABOUT WILL GROUP">
                    </span>

                    <span class="sp">
                        <img src="img/btn_index02_sp_off.jpg" alt="TOP MESSAGE">
                    </span>
                </a>
            </li>
            <li class="left block02">
                <a href="#">
                    <span class="pc">
                        <img src="img/btn_index03_on.jpg" alt="HISTORY">
                        <img src="img/btn_index03_off.jpg" alt="HISTORY">
                    </span>

                    <span class="sp">
                        <img src="img/btn_index03_sp_off.jpg" alt="TOP MESSAGE">
                    </span>
                </a>
            </li>
            <li class="block02">
                <a href="#">
                    <span class="pc">
                        <img src="img/btn_index04_on.jpg" alt="STRENGTH">
                        <img src="img/btn_index04_off.jpg" alt="STRENGTH">
                    </span>

                    <span class="sp">
                        <img src="img/btn_index04_sp_off.jpg" alt="TOP MESSAGE">
                    </span>

                </a>
            </li>
            <li class="block02">
                <a href="#">
                    <span class="pc">
                        <img src="img/btn_index05_on.jpg" alt="GROUWTH STRATEGY">
                        <img src="img/btn_index05_off.jpg" alt="GROUWTH STRATEGY">
                    </span>

                    <span class="sp">
                        <img src="img/btn_index05_sp_off.jpg" alt="TOP MESSAGE">
                    </span>
                    
                </a>
            </li>
        </ul>
    </section>

    <section>
    <div class="space">
        <h1 class="title">OUR BUSINESS</h1>
    </div>

    <div class="will">
        <h1 class="service">W・I・L・Lの領域で<br>革新的なサービスを。</h1>
        <li class="target">Working「働く」、Interesting「遊ぶ」、Learning「学ぶ」、Living「暮らす」
            <br>の領域で、期待価値の高いブランディングカンパニーを創出します。
        </li>
    </div>

    <ul class="clearfix">
        <li class="left block03">
            <a href="#">
                <span class="pc">
                    <img src="img/btn_index06_on.jpg" alt="">
                    <img src="img/btn_index06_off.jpg" alt="">
                </span>

                <span class="sp">
                    <img src="img/btn_index06_sp_off.jpg" alt="TOP MESSAGE">
                </span>
            </a>
        </li>
        <li class="block03">
            <a href="#">
                <span class="pc">
                    <img src="img/btn_index07_on.jpg" alt="">
                    <img src="img/btn_index07_off.jpg" alt="">
                </span>

                <span class="sp">
                    <img src="img/btn_index07_sp_off.jpg" alt="TOP MESSAGE">
                </span>
            </a>
        </li>
        <li class="block03">
            <a href="#">
                <span class="pc">
                    <img src="img/btn_index08_on.jpg" alt="">
                    <img src="img/btn_index08_off.jpg" alt="">
                </span>

                <span class="sp">
                    <img src="img/btn_index08_sp_off.jpg" alt="TOP MESSAGE">
                </span>
            </a>
        </li>
        <li class="left block03">
            <a href="#">
                <span class="pc">
                    <img src="img/btn_index09_on.jpg" alt="">
                    <img src="img/btn_index09_off.jpg" alt="">
                </span>

                <span class="sp">
                    <img src="img/btn_index09_sp_off.jpg" alt="TOP MESSAGE">
                </span>
            </a>
        </li>
        <li class="block03">
            <a href="#">
                <span class="pc">
                    <img src="img/btn_index10_on.jpg" alt="">
                    <img src="img/btn_index10_off.jpg" alt="">
                </span>

                <span class="sp">
                    <img src="img/btn_index10_sp_off.jpg" alt="TOP MESSAGE">
                </span>
            </a>
        </li>
        <li class="block03">
            <a href="#">
                <span class="pc">
                    <img src="img/btn_index11_on.jpg" alt="">
                    <img src="img/btn_index11_off.jpg" alt="">
                </span>

                <span class="sp">
                    <img src="img/btn_index11_sp_off.jpg" alt="TOP MESSAGE">
                </span>
            </a>
        </li>

    </ul>

    <div class="btn">
        <a href="#">ウィルグループの事業へ</a>
    </div>
</section>
    <!-- ニュース関連 -->

    
    <div class="news">
        <div class="newsArea">
        <section class="news1"> 
            <h2>ニュースリリース</h2>
            <section class="menu">
                <ul>
                    <?php
                    foreach ($result_release as $value){
                echo ' 
                <li class="content">
                    <time>'.$value["date"].'</time><span class="frame">'.$value["genre"].'</span><span class="com">'.$value["company"].'</span>
                    <div class="text">
                        <a href="#">'.$value["content"].'</a>
                    </div>
                </li>
                ';
                }
                ?> 
                </ul>
            </section>
            <div class="btn">
                <a href="#">一覧へ</a>
            </div>
        </section>
        

        <section class="news2">
            <h2>IRニュース</h2>
            <section class="menu">
                <ul>
                    <?php
                    foreach ($result_ir as $value){
                echo ' 
                <li class="content">
                    <time>'.$value["date"].'</time><span class="frame">'.$value["genre"].'</span>
                    <div class="text">
                        <a href="#">'.$value["content"].'</a>
                    </div>
                </li>
                ';
                }
                ?> 
                </ul>
            
            </section>
            <div class="btn">
                <a href="#">IRニュースへ</a>
            </div>
        </section>
        </div>
    </div>

    <div class="navbottom">
        <nav class="topnav">
            <ul class="topnav">
                <li class="topnav"><a href="#">企業情報</a></li>
                <li class="topnav"><a href="#">IR情報</a></li>
                <li class="topnav"><a href="#">サスティナビリティ</a></li>
                <li class="topnav"><a href="#">採用情報</a></li>
                <li class="topnav"><a href="#">お問い合わせ</a></li>
            </ul>
        </nav>
    </div>

    <div class="group">
        <h2>グループ会社</h2>

        <a href="#">株式会社ウィルオブ・ワーク</a>
        <a href="#">株式会社ウィルオブ・コンストラクション</a>
        <a href="#">株式会社ボーダーリンク</a>
        <br>
        <a href="#">株式会社クリエイティブバンク</a>
        <a href="#">株式会社ウィルオブ・チャレンジ</a>
        <a href="#">一般財団法人WILLOF財団</a>
        <a href="#">株式会社ＣＥｓｐａｃｅ</a>
        <br>
        <a href="#">フォースタートアップ株式会社</a>
        <a href="#">ハイブリィド株式会社</a>
        <p style="display:inline">WILL GROUP Asia Pacific Pte. Ltd.</p>
        <br>
        <a href="#">Good Job Creations (Singapore) Pte.Ltd.</a>
        <a href="#">Scientec Consulting Pte. Ltd.</a>
        <a href="#">The Chapman Consulting Group Pte.Ltd.</a>
        <br>
        <a href="#">Oriental Aviation International Pte.Ltd.</a>
        <a href="#">Ethos BeathChapman</a>
        <a href="#">Quay Appointments Pty Ltd</a>
        <a href="#">u&u Holdings Pty Ltd</a>
        <br>
        <a href="#">DFP Recruitment Holdings Pty Ltd</a>
        <a href="#">Asia Recruit Holdings Sdn.Bhd.</a>
        <p style="display:inline">GJC Myanmar Ltd.</p>
        <a href="#">Dream Job Myanmar Ltd.</a>
        <br>
        <a href="#">WILLOF Vietnam Company Limited</a>

    </div>

</body>
<footer>
    <!-- トップに戻るボタン -->
    <div id="page_top">
        <!-- <a href id="scroll_top"> -->
        <div id="scroll_top">
            <img src="img/ico_footer02.png" alt="">
            <!-- </a> -->
        </div>
    </div>


    <li class="policy">
        <a href="#">サイトマップ</a>
        <a href="#">関連サイト一覧</a>
        <a href="#">プライバシーポリシー</a>
        <a href="#">免責事項</a>
    </li>

    <p id="company">Copyright &copy; WILL GROUP, INC. All Rights Reserved.</p>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="main.js"></script>
</footer>


</html>