<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link rel="stylesheet" href="./style.css">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="bm_list_view.php">ブックマーク一覧 編集</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="bm_list_viewonly.php">ブックマーク一覧 閲覧のみ</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="user_index.php">ユーザー登録</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="insert.php">
  <div class="contents">
   <fieldset>
    <legend>新規登録 (ユーザー登録又はログイン必要)</legend>
     <label>書籍名：<input type="text" name="name"></label><br>
     <label>書籍URL：<input type="text" name="url"></label><br>
     <label>書籍コメント：<br>
     <textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
   </fieldset>
  </div>
</form>
<!-- Main[End] -->

</body>
</html>
