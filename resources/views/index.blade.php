<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  h1 {
    text-align: center;
  }

  .lbl {
    clear: both;
    width: 30%;
    left: 0%;
    float: left;
  }

  .inp {
    width: 30%;
    left: 30%;
    float: inline-end;
  }

  table {
    width: 100%;
  }

  .table_col0 {
    width: 40%;
  }

  .table_col1 {
    width: 60%;
  }

  label {
    width: 100%;
    font-size: 48px;
    /* margin-left: 20px; */
  }

  input {
    /* width: 100%; */
    font-size: 48px;
  }

  input[type=radio] {
    width: 100px;
    height: 100px;
    vertical-align: middle;
  }

  .memo {
    clear: both;
    color: gray;
    font-size: 8px;
  }

  .require {
    width: 100%;
  }

  .require::after {
    content: "※";
    color: red;
  }

  .contact {
    font-size: 48px;
  }

  .name{
    display: flex;
  }
</style>

<body>
  <h1>お問い合わせ</h1>
  <div class="errorlist">

  </div>
  <form action="/confirm" method="get">
    @csrf
    <table border="1">
      <tr>
        <th class="table_col0"></th>
        <th class="table_col1"></th>
      </tr>
      <tr>
        <td><label for="" class="require" >お名前</label></td>
        <td class="name">
          <div>
          <input class="input--name"name="Fam_name" type="text" value="AAAAAA" required>
          <p class="memo">例）山田</p>
        </div>
        <div>
        <input class="input--name" name="first_name" type="text" value="AAAAAA" required>
        <p class="memo">例）太郎</p>
      </div>
        </td>
      </tr>
      <tr>
        <td><label class="require" for="">性別</label></td>
        <td>
          <input class="inp_radio" type="radio" name="gender" value="1" id="" checked>男性
          <input class="inp_radio" type="radio" name="gender" value="2" id="">女性
        </td>
      </tr>
      <tr>
        <td><label for="" class="require">メールアドレス</label></td>
        <td>
          <input type="email" name="email" value="aaa@bbb.co.jp" required>
          <p class="memo">test@example.com</p>
        </td>
      </tr>
      <tr>
        <td><label for="" class="require">郵便番号</label></td>
        <td>
          <input type="text" name="postcode" value="" required>
          <p class="memo">例）123-4567</p>
        </td>
      </tr>
      <tr>
        <td><label for="" class="require">住所</label></td>
        <td>
          <input type="text" name="address" value="" required>
          <p class="memo">例）東京都渋谷区千駄ヶ谷1-2-3</p>
        </td>
      </tr>
      <tr>
        <td><label for="" >建築物</label></td>
        <td>
          <input type="text" name="building_name" value="">
          <p class="memo">例）千駄ヶ谷マンション101</p>
        </td>
      </tr>
      <tr>
        <td><label for="" class="require">ご意見</label></td>
        <td>
          <textarea class="contact" name="opinion" rows="4" cols="40" required>ううううううううううううううううううう</textarea>
          <!-- <textarea name="kansou" rows="4" cols="40">cols="40"のテキストエリアです。</textarea> -->
        </td>
      </tr>
    </table>
    <input type="submit" value="確認">
  </form>
</body>

</html>