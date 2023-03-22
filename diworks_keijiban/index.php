<!DOCTYPE html>
<html lang="ja">
    
<head>
    <meta charset="UTF-8">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
    
    <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;root=8888","root","root");
        $stmt = $pdo->query("select * from diworks_keijiban");
    
        
    ?>
     
<header>
    <div class="header_logo">
        <img src="diblog_logo.jpg">
    </div>
        
    <div class="header_menu">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>D .I Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </div>
</header>
     
<main>
    <div class="main-container">
        
    <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
        
    <body>
        <form method="post" action="insert.php">
            <div class="nyuuryokuform">
            <h3>入力フォーム</h3>  
                
                <div>
                    <label>ハンドルネーム</label> <br> 
                    <input type="text" class="text" size="35" name="handlename">
                </div> 
            
                <div> 
                    <label>タイトル</label> <br>
                    <input type="text" class="text" size="35" name="title">
                </div>

                <div>
                    <label>コメント</label><br>
                    <textarea cols="45" rows="7" class="commentarea" name="comments"></textarea>
                </div>

                <div>
                    <input type="submit" class="submit" value="投稿する">
                </div>
            </div>
        </form>

        <div class="kizinonakami">
            <h4>タイトル</h4>
                <div class="p">
                    記事の中身,記事の中身,記事の中身,生地の中身,記事の中身,記事の中身,記事の中身,記事の中身,生地の中身,記事の中
                    <br>
                    身,記事の中身,記事の中身,生地の中身
                    <br>
                    記事の中身,記事の中身,記事の中身,生地の中身,記事の中身,記事の中身
                    <br>
                    記事の中身,記事の中身,記事の中身,生地の中身,記事の中身,記事の中身
                    <br>
                    <div class="toorisugari">
                        posted by 通りすがり
                    </div>
            </div>
        </div>

        <?php
            
            while ($row = $stmt->fetch()) {
                
                echo"<div class='kizinonakami'>";
                echo"<h4>".$row['title']."</h4>";
                
                echo"<div class='p'>";
                echo $row['comments'];
                
                echo "<div class='toorisugari'>posted by".$row['handlename']."</div>";
                
            echo"</div>";
        echo"</div>";
            }
        ?>
    </body> 
        
    </div>
    </div>
        
    <div class="right">
        <h2>人気の記事</h2>
        <li>
            <ul>PHPオススメ本</ul>
            <ul>PHP MyAdminの使い方</ul>
            <ul>今人気のエディタTOP</ul>
            <ul>HTMLの基礎</ul>
        </li>
        <h2>オススメリンク</h2>
            <li>
            <ul>ディーアイワークス株式会社</ul>
            <ul>XAMPPのダウンロード</ul>
            <ul>Eelipeeのダウンロード</ul>
            <ul>Blaketaのダウンロード</ul>
        </li>
        <h2>カテゴリ</h2>
        <li>
            <ul>HTML</ul>
            <ul>PHP</ul>
            <ul>MYSQL</ul>
            <ul>Javascript</ul>
        </li>
    </div>
    
</main>
   
    <footer>
      Copyright(c) D.I.blog is the one which provides A to Z about programming
    </footer>

</body>
</html>