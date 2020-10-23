<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>投稿内容編集</title>
</head>

<body>
  <div class="container">
    <form class="row" method="POST">
      @csrf
      <h1>内容入力</h1>
      <!-- カテゴリーセレクトボックス -->
      <div class="col-12">
        <select name="category">
          <option value=""></option>
        </select>
      </div>
      <!-- 本文 -->
      <div class="col-12">
        <textarea name="description" id="" cols="40" rows="10" placeholder="入力してください"></textarea>
      </div>
      <!-- 商品化・サービス化希望チェックボックス -->
      <div class="col-12">
        <label for="produce_check">商品化/サービス化を希望しますか？<input type="checkbox" name="produce" value="1" id="produce_check"></label>
      </div>
      <!-- 投稿ボタン -->
      <div class="col-12"><input type="submit" value="投稿する"></div>
    </form>
  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>