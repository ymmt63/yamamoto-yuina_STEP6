<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム-送信完了画面</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>お問い合わせフォーム-送信完了画面</h1>
    </header>
    <?php
    $subject = "お問い合わせが来ました。";
    $name = $_POST["name"];
    $companyName = $_POST["companyName"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $message = $_POST["message"];
    $body = "名前：$name";
    $to = "rinkurobrown.3636@gmail.com";
    if ($name && $companyName && $email && $age && $message) {
        $displayMessage = "お問い合わせが送信されました。ありがとうございます！";
        echo $displayMessage;
        echo "<script>console.log('PHP POSTデータ：'," . json_encode($_POST) . ");</script>";
        error_log("送信データ-名前：$name,会社名：$companyName,メールアドレス：$email,年齢：$age,お問い合わせ内容：$message");
    } else {
        $errorMessage = "エラーが発生しました。すべての項目を入力して再送してください。";
        echo $errorMessage;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        //index.phpのページに戻る処理
        header('Location:http://localhost:8081/index.php');
    }


    ?>
    <script src="style.js" defer></script>
    <p><a href="./index.php">お問い合わせフォームに戻る</a></p>
</body>

</html>