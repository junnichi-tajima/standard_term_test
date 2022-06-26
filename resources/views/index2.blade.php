<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="/test" method="get">
    <div>
      <label for="">名前</label>
      <input type="text" name="name" value="{{ old('name') }}">
    </div>
    <div>
      <label for="">性別</label>
      <input type="radio" name="sex" value="mail" id=""{{ old ('sex') == 'mail' ? 'checked' : '' }}>男性
      <input type="radio" name="sex" value="femal" id="" {{ old ('sex') == 'femal' ? 'checked' : '' }}>女性
    </div>
    <div>
      <label for="">メール</label>
      <input type="email" name="mail" id="" value="{{ old('email') }}">
    </div>
    <input type="submit" value="送信">
  </form>
    <!-- <pre><code>{{ var_dump(session()->get('_old_input')) }}</code></pre> -->
</body>

</html>