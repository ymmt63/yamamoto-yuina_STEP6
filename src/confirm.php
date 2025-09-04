<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム-確認画面</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="body2">
    <script src="style.js" defer></script>
    <header class=header2>
        <h2 class="title2">お問い合わせフォーム-確認画面</h2>
    </header>
    <?php

    $name = $_POST["name"];
    $companyName = $_POST["companyName"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $message = $_POST["message"];
    ?>
    <!-- メニューバー -->
    <div class="contents">
        <div class="sidebar2">
            <ul>
                <li><a href="https://www.google.com/?client=safari&channel=mac_bm">トップページ</a></li>
                <li><a href="https://www.google.com/?client=safari&channel=mac_bm">人気投稿</a></li>
                <li><a href="https://www.google.com/?client=safari&channel=mac_bm">エンジニアおすすめ商品</a></li>
                <li><a href="https://www.google.com/?client=safari&channel=mac_bm">エンジニアおすすめ記事</a></li>
                <li><a href="https://www.google.com/?client=safari&channel=mac_bm">投稿ページ</a></li>
            </ul>
        </div>
        <!-- 表 -->
        <div class="contentRight">
            <table class="table2" border="1">
                <!-- 項目１ -->
                <tr>
                    <th>
                        お名前
                    </th>
                    <td>
                        <?php echo htmlspecialchars($name); ?>
                    </td>
                </tr>
                <!-- 項目2-->
                <tr>
                    <th>
                        会社名
                    </th>
                    <td>
                        <?php echo htmlspecialchars($companyName); ?>
                    </td>
                </tr>
                <!-- 項目3 -->
                <tr>
                    <th>
                        メールアドレス
                    </th>
                    <td>
                        <?php echo htmlspecialchars($email); ?>
                    </td>
                </tr>
                <!-- 項目4 -->
                <tr>
                    <th>
                        年齢
                    </th>
                    <td>
                        <?php echo htmlspecialchars($age); ?>
                    </td>
                </tr>
                <!-- 項目5 -->
                <tr>
                    <th>
                        お問い合わせ内容
                    </th>
                    <td>
                        <?php echo htmlspecialchars($message); ?>
                    </td>
                </tr>
            </table>
            <form action="send.php" method="POST" class="checkform">
                <input type="hidden" id="name" name="name" value="<?php echo $name; ?>">
                <input type="hidden" id="companyName" name="companyName" value="<?php echo $companyName; ?>">
                <input type="hidden" id="email" name="email" value="<?php echo $email; ?>">
                <input type="hidden" id="age" name="age" value="<?php echo $age; ?>">
                <input type="hidden" id="message" name="message" value="<?php echo $message; ?>">
                <div class="btns">
                    <input type="button" class="btn_return" value="戻る" onclick="history.back()">
                    <input type="submit" class="btn_send2" value="送信"><br>
                </div>
            </form>
        </div>
    </div>
    <footer class="footer2">
    </footer>
</body>

</html>