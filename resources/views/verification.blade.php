<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>内容確認フォーム</title>
</head>
<style>
  .text{
    border:none;
    outline:none;
    margin-left:50px;
    font-size:15px;
  }

  h1{
    text-align:center;
  }

  table td{
    font-weight:bold;
    padding-bottom:30px;
  }

  .button-a{
    text-align:center;
  }

  .button-b{
  margin:10px;
  border:1px solid #000;
  border-radius:5px;
  background-color:#000;
  color:#FFF;
  width: 140px;
  height:40px;
  font-weight:bold;
  cursor: pointer;
  transition:0.4s;
  margin-top:15px;
  }

  .button-b:hover{
  background-color:#FFF;
  color:#000;
}

a{
  color:#808080
}

</style>
<body>
  <h1>内容確認</h1>
  <table>
    <form action="/completion" method="post">
      @csrf
    <tr>
        <td>お名前</td>
        <td>
          <input type="text" name="fullname" value={{$first_name}}{{$last_name}} class="text">
        </td>
    </tr>
    <tr>
      <td>性別</td>
      <td>
        <input type="text" name="gender" value={{$gender}} class="text">
      </td>
    </tr>
    <tr>
      <td>メールアドレス</td>
      <td>
        <input type="text" name="email" value={{$email}} class="text">
      </td>
    </tr>
    <tr>
      <td>郵便番号</td>
      <td>
        <input type="text" name="postcode"  value={{$postcode}} class="text">
      </td>
    </tr>
    <tr>
      <td>住所</td>
      <td>
        <input type="text" name="address" value={{$address}} class="text">
      </td>
    </tr>
    <tr>
      <td>建物名</td>
      <td>
        <input type="text" name="building_name" value={{$building_name}} class="text">
      </td>
    </tr>
    <tr>
      <td>ご意見</td>
      <td>
        <input type="text" name="opinion" value={{$opinion}} class="text">
      </td>
    </tr>
  </table>
  <div class="button-a">
  <input type="submit" value="送信" class="button-b"><br>
  </form>
  <a href="/">修正する</a>
  </div>
</body>
</html>