<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  body {
    width: 100%;
    height: 100%;

    font-size: 48px;
  }

  h1 {
    text-align: center;
  }

  table {
    width: 90%;
    column-width: 50%;
    margin: 30px;
    /* padding: 20px; */
    box-sizing: border-box;
  }

  .buttons {
    width: 100%;
    align-items: center;
    align-content: center;
    /* background-color: red; */
    /* display: flex; */
    /* position: relative; */
    text-align: center;
  }

  .center {
    /* position: absolute; */
    margin: 0 auto;
    left: 50%;
    /* width: 100% */
    /* margin-bottom: 30px;
    margin-top: 30px; */
    /* transform: translateX(-50%); */
    text-align: center;
  }

  .send_button {
    font-size: 48px;
    padding: 20px;
    background-color: black;
    margin: 50px;
    border-radius: 10px;
    padding: 30px;

  }
</style>
<h1>内容確認</h1>
<table border="1">
  <tr>
    <th>col1</th>
    <th>col2</th>
  </tr>
  <tr>
    <td>お名前</td>
    <td>{{ $fullname }}</td>
  </tr>
  <tr>
    <td>性別</td>
    <td>{{ $gender }}</td>
  </tr>
  <tr>
    <td>メールアドレス</td>
    <td>{{ $email }}</td>
  </tr>
  <tr>
    <td>住所</td>
    <td>{{ $address }}</td>
  </tr>
  <tr>
    <td>建物名</td>
    <td>{{ $building_name }}</td>
  </tr>
  <tr>
    <td>郵便番号</td>
    <td>{{ $postcode }}</td>
  </tr>
  <tr>
    <td>ご意見</td>
    <td>{{ $opinion }}</td>
  </tr>
</table>
<div class="buttons">
  <a href="/store" class="center send_button">送信</a><br><br>
  <a class="center" href="/">修正する</a>
</div>

<body>

</body>

</html>