<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>

h1{
  text-align:center;
}

p{
  display:flex;
  justify-content: space-between;
  padding-right:150px;
}

.line-1{
  display:flex;
}

.line-2{
  display:flex;
}

.line-3{
  display:flex;
}

.line-4{
  text-align:center;
}

  .button-a{
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

  .button-a:hover{
  background-color:#FFF;
  color:#000;
}

a{
  color:#808080
}
</style>
<body>
<h1>管理システム</h1>
<div class="main-box">
  <form action="" method="post">
  @csrf
  <div class="line-1">
    <div class="sub-title">お名前</div>
    <input type="text">
    <div class="sub-title">性別</div>
    <label class="gender-radio">
    <input type="radio" name="gender" checked>
    <span class="radio-mark"></span>
    男性
    </label>
    <label class="gender-radio">
    <input type="radio" name="gender">
    <span class="radio-mark"></span>
    女性
    </label>
  </div>
  <div class ="line-2">
    <div class="sub-title">登録日</div>
    <input type="date">
    <p>-</p>
    <input type="date">
  </div>
  <div class ="line-3">
    <div class="sub-title">メールアドレス</div>
    <input type="text">
  </div>
  <div class="line-4">
  <button class="button-a">検索</button><br>
  <a href="#" class="button">リセット</a>
  </div>
</form>
</div>
<table>
  <tr>
    <div class="leyout-title">
      <th>
        <p>ID</p>
      </th>
      <th>
        <p>お名前</p>
      </th>
      <th>
        <p>性別</p>
      </th>
      <th>
        <p>メールアドレス</p>
      </th>
      <th>
        <p>ご意見</p>
      </th>
    </div>
  </tr>
@foreach ($items as $item)

<tr>
  <div class="layout">
  <td>
    <p class="databases">{{$item->id}}</p>
  </td>
  <td>
    <p class="databases">{{$item->fullname}}</p>
  </td>
  <td>
    <p class="databases">{{$item->gender}}</p>
  </td>
  <td>
    <p class="databases">{{$item->email}}</p>
  </td>
  <td>
    <p class="databases">{{$item->opinion}}</p>
  </td>
  <td>
    <form action="{{ url('/management')}}" method="post">
      @csrf
    <input type="hidden" name="id" value="{{$item->id}}" >
    <input type="submit" value="削除" class="delete-button">
  </td>
</div>
</tr>
@endforeach
</table>
</body>
</html>