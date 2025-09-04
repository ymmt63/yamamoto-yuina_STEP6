console.log("HELLO - JavaScriptファイルが読み込まれました！");
console.log("現在のページ:", window.location.href);

// DOMContentLoadedイベントで要素の取得と処理を実行
document.addEventListener('DOMContentLoaded', function() {
    console.log("DOMContentLoadedイベントが発生しました！");
    console.log("DOMの構築が完了しました！");

    // ---------index.php------------
    // 項目に不備があったらエラーを表示する
    const btnSend1 = document.querySelector(".btn_send1");
    console.log(btnSend1);

    if(btnSend1){

        btnSend1.addEventListener("click", () => {
            console.log(btnSend1);
            // 要素の取得
            const name = document.getElementById("name").value;
            const companyName = document.getElementById("companyName").value;
            const email = document.getElementById("email").value;
            const age = document.getElementById("age").value;
            const message = document.getElementById("message").value;
            
            console.log("要素の取得結果:");
            console.log("name:", name);
            console.log("companyName:", companyName);
            console.log("email:", email);
            console.log("age:", age);
            console.log("message:", message);

            if (name === ""|| companyName === "" || email === "" || age === "" || message === ""){
                event.preventDefault();
                alert("必須項目が未入力です。入力内容をご確認ください。")
            } 
        });
    }

    // ボタンクリックにより背景色変更
    const btnColorChange = document.querySelector(".btn_colorChange");
    if (btnColorChange) {
        const colors = [
            "blue",
            "red",
            "yellow",
            "gray",
            "white",
        ];
        let colorIndex = 0;
        
        btnColorChange.addEventListener("click", () => {
            document.body.style.background = colors[colorIndex];
            colorIndex = (colorIndex + 1) % colors.length;
            console.log("背景色を変更しました:", colors[colorIndex - 1]);
        });
        
        console.log("背景色変更ボタンが見つかりました");
    } else {
        console.log("背景色変更ボタンが見つかりませんでした");
    }        
        // 送信ボタンをクリックするとsend.phpにデータが引き継がれる

    console.log("JavaScriptファイルの読み込み完了");

    const btnSend2 = document.querySelector(".btn_send2");
    if(btnSend2){
        btnSend2.addEventListener("click", (event) => {
            event.preventDefault();//デフォルトのボタンの挙動を防止
            const name = document.getElementById("name").value;
            const companyName = document.getElementById("companyName").value;
            const email = document.getElementById("email").value;
            const age = document.getElementById("age").value;
            const message = document.getElementById("message").value;
            console.log(btnSend2);
            if (confirm(`下記の内容を本当に送信しますか。\n お名前▶️ '${name}'\n 会社名▶️'${companyName}' \n メールアドレス▶️'${email}' \n 年齢▶️ '${age}' \n お問い合わせ内容▶️'${message}'`)) {
                 // OKを押した時の処理 - フォームを送信
                 const form = document.querySelector('.checkform');
                 form.submit();
                //send.phpにデータが引き継がれているのかを確認したい↓
                // console.log("名前：'${name}'会社名：'${companyName}'メールアドレス：'${email}'年齢：'${age}'問い合わせ内容：'${message}'");
            } else {
                // キャンセルを押した時の処理
                alert("キャンセルしました。");
            }
        });
    }
});


