<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPO法人登録</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #87CEEB; /* 背景色をスカイブルーに設定 */
            color: #000; /* 文字色を黒に設定（見やすくするため） */
        }

        .container {
            text-align: left;
            margin-left: 20px;
            padding: 20px;
            background-color: #fff; /* フォーム背景を白に設定 */
            border-radius: 10px; /* フォームの角を丸める */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* フォームに軽い影を追加 */
        }

        .jumbotron {
            padding: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"], textarea {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px; /* 入力フィールドの角を丸める */
        }

        input[type="submit"] {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF; /* ボタンの背景を青色に設定 */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* ボタンのホバー時の色を濃くする */
        }
    </style>
</head>

<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

    <div class="container">
        <h1>NPO法人情報入力</h1>
        <form method="POST" action="insert.php">
        <div class="jumbotron">
        <fieldset>
            <label for="name">法人名：
            <input type="text" id="nponame" name="nponame" required></label><br>

　　　　　　<label for="name">担当者氏名：
            <input type="text" id="name" name="name" required></label><br>
            
            <label for="email">Email：
            <input type="text" id="email" name="email" required></label><br>
            
            <label for="question">仕事内容：
            <textarea name="question" rows="5" required></textarea></label><br>
            
            <input type="submit" value="送信">
            </fieldset>
            </div>
        </form>
    </div>
</body>
</html>