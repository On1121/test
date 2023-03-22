<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8"> 
    <title>お問合わせフォームを作る </title>
    <link rel="stylesheet" type="text/css" href="php.css">
</head> 

<body>
    <h1> お問合わせフォーム</h1> 
    <form method="post" action="mail_confirm.php">
        <div>
            <label>名前</label> <br> 
            <input type="text" class="text" size="35" name="name">
        </div> 

        <div> 
            <label>メールアドレス</label> <br>
            <input type="text" class="text" size="35" name="mail">
        </div>
        
        <div>
            <label>年齢</label><br>
            <select class="dropdown" name="age">
                <option>選択してください</option> 
                <script>
                    for(var i = 18; i <= 65; i ++){
                        document.write("<option>");
                        document.write(i);
                        document.write("</option>");
                    }
                </script> 
            </select>
        </div>

        <div>
            <label>コメント</label><br>
            <textarea cols="35" rows="7" name="comments"></textarea>
        </div>

        <div>
            <input type="submit" class="submit" value="送信する">
        </div>
    </form>
    
</body> 
</html>