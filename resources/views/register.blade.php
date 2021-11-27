<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>登録フォーム画面</title>
</head>
<style>

/*お問い合わせの部分*/
.main-title{
  text-align:center;
  font-size:25px;
}
/*フォームの題目の部分*/
.sub-title{
  text-align:left;
  font-weight:bold;
}
/*※の部分*/
.asterisk{
  color:red;
}
/*テーブルタグの部分*/
table {
  width: 70%;
  border-collapse: collapse;
}
/*テーブルタグのth.tdの部分*/
table th,
table td {
  padding: 5px;
}
/*テーブルタグのthの部分*/
table th {
  font-weight: bold;
  background-color: #dedede;
}
/*フォームのテキストの部分*/
.format{
  width:100%;
  padding: 10px 15px;
  border-radius: 5px;
  border: 2px solid #ddd;
  box-sizing: border-box;
}
/*フォームの名前の部分*/
.nameing{
  width:100%;
  padding: 10px 15px;
  border-radius: 5px;
  border: 2px solid #ddd;
  box-sizing: border-box;
}
/*例の文字の部分*/
.example{
  color:#ACACAC;
}
/*性別のラジオボタンのとこ*/
.gender-radio {
  position: relative;
  display: inline-block;
  margin: 1em 1em;
  padding-left: 35px;
  cursor: pointer;
  user-select: none;
}

.gender-radio input {
  display: none;
}

.radio-mark {
  position: absolute;
  top: -3px;
  left: 0;
  height: 30px;
  width: 30px;
  border: solid 2px #d4dae2;
  border-radius: 50%;
  box-sizing: border-box;
}

.radio-mark:after {
  content: "";
  position: absolute;
  background: #000000;
  border-radius: 50%;
  top: 8px;
  bottom: 8px;
  left: 8px;
  right: 8px;
  opacity: 0;
}

.gender-radio input:checked + .radio-mark:after {
  opacity: 1;
}
/*確認ボタンの部分*/
.check-button{
  text-align:center;
}

.button-a{
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

.button-a:hover{
  background-color:#FFF;
  color:#000;
}

</style>
<body>
  <h1 class="main-title">お問い合わせ</h1>
  <table>
    <form action="/verification" method="post">
    @csrf
    <tr>
        <td><div class="sub-title">お名前<span class="asterisk">※</span></div></td>
        <td>
          <input type=text class="nameing" name="first_name" value="{{ old('first_name') }}" >
        </td>
        <td>
          <input type=text class="nameing" name="last_name" value="{{ old('last_name') }}">
        </td>
    </tr>
    @error('first_name')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
    @enderror
    <tr>
    </tr>
    @error('last_name')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
    @enderror
    <tr>
      <td></td>
      <td>
        <div class="example">
          例）山田
        </div>
      </td>
      <td>
        <div class="example">
          例）太郎
        </div>
      </td>
    </tr>
    <tr>
      <td><div class="sub-title">性別<span class="asterisk">※</span></div></td>
      <td>
        <label class="gender-radio">
          <input type="radio" name="gender" value="男性" checked>
          <span class="radio-mark"></span>
          男性
        </label>
        <label class="gender-radio">
          <input type="radio" name="gender" value="女性">
          <span class="radio-mark"></span>
          女性
        </label>
      </td>
    </tr>
    @error('gender')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
    @enderror
    <tr>
      <td><div class="sub-title">メールアドレス<span class="asterisk">※</span></div></td>
      <td>
        <input type="email" class="format" name="email" value="{{ old('email') }}">
      </td>
    </tr>
    @error('email')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
    @enderror
    <tr>
      <td></td>
      <td>
        <div class="example">
          例）test@example.com
        </div>
      </td>
    </tr>
    <tr>
      <td><div class="sub-title">郵便番号<span class="asterisk">※</span></div></td>
      <td>
        〒<input type="text" class="format" name="postcode" value="{{ old('postcode') }}">
      </td>
    </tr>
    @error('postcode')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
    @enderror
    <tr>
      <td></td>
      <td>
        <div class="example">
          例）123-4567
        </div>
      </td>
    </tr>
    <tr>
      <td><div class="sub-title">住所<span class="asterisk">※</span></div></td>
      <td>
        <input type="text" class="format" name="address" value="{{ old('address') }}">
      </td>
    </tr>
    @error('address')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
    @enderror
    <tr>
      <td></td>
      <td>
        <div class="example">
          例）東京都渋谷区千駄ヶ谷1-2-3
        </div>
      </td>
    </tr>
    <tr>
      <td><div class="sub-title">建物名</div></td>
      <td>
        <input type="text" class="format" name="building_name" value="{{ old('building_name') }}">
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <div class="example">
          例）千駄ヶ谷マンション101
        </div>
      </td>
    </tr>
    <tr>
      <td><div class="sub-title">ご意見<span class="asterisk">※</span></div></td>
      <td>
        <input type ="text" class="format" name="opinion" value="{{ old('opinion') }}">
      </td>
    </tr>
    @error('opinion')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
    @enderror
  </table>
  <div class="check-button">
  <input type="submit" value="確認" class="button-a">
  </div>
  </form>
</body>
</html>