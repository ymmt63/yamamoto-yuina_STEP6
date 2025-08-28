<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>お問い合わせフォーム</h2>
    </header>
    <!-- メニューバー -->
    <div class="sidebar1">
        <ul>
            <li><a href="https://www.google.com/?client=safari&channel=mac_bm">トップページ</a></li>
            <li><a href="https://www.google.com/?client=safari&channel=mac_bm">人気投稿</a></li>
            <li><a href="https://www.google.com/?client=safari&channel=mac_bm">エンジニアおすすめ商品</a></li>
            <li><a href="https://www.google.com/?client=safari&channel=mac_bm">エンジニアおすすめ記事</a></li>
            <li><a href="https://www.google.com/?client=safari&channel=mac_bm">投稿ページ</a></li>
        </ul>
    </div>
    <!-- 表 -->
    <form action="confirm.php" method="POST" class="form">
        <table class="table" border="1">
            <!-- 項目１ -->
            <tr>
                <th>
                    お名前
                </th>
                <td>
                    <input type="text" id="name" name="name">
                </td>
            </tr>
            <!-- 項目2-->
            <tr>
                <th>
                    会社名
                </th>
                <td>
                    <input type="text" id="companyName" name="companyName">
                </td>
            </tr>
            <!-- 項目3 -->
            <tr>
                <th>
                    メールアドレス
                </th>
                <td>
                    <input type="text" id="email" name="email">
                </td>
            </tr>
            <!-- 項目4 -->
            <tr>
                <th>
                    年齢
                </th>
                <td>
                    <input type="text" id="age" name="age">
                </td>
            </tr>
            <!-- 項目5 -->
            <tr>
                <th>
                    お問い合わせ内容
                </th>
                <td>
                    <textarea placeholder="お問い合わせ内容" id="message" name="message" cols="40"></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" value=送信 class="btn_send1">
    </form>
    <footer>
        <p class="colorChangeText">下のボタンを押すとfooterの背景色が変わります。</p>
        <button class="btn_colorChange">押してみてね！</button>
    </footer>
    <script src="style.js" defer></script>

</body>

</html>