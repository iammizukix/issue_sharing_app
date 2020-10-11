<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  @for($i = 0; $i

  < count($texts); $i++) <p>{{ $texts[$i] }}</p> @endfor
</body>

</html>