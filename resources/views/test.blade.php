<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .item--container {
    border: 1px solid black;
    position: fixed;
    font-size: 48px;
    display: block;
  }
</style>

<body>
  <table border="1">
    <form action="/store" method="get">
    <tr>
      <td>名前</td>
      <td>{{ $name }}</td>
    </tr>
    <tr>
      <td>性別</td>
      <td>{{ $sex }}</td>
    </tr>
    <tr>
      <td>メールアドレス：</td>
      <td>{{ $mail }}</td>
    </tr>
    
  </table>
  <input type="submit" value="登録">
  </form>
</body>

</html>