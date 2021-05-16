<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
</head>
<body> 
<form method="POST" action="http://localhost:8000/me">
  @csrf
  <label>名前: </label><input name="name" type="text" value="{{ $user->name }}" />
  <label>メールアドレス: </label><input name="email" type="email" value="{{ $user->email }}" />
  <button type="submit">変更</button>
</form>
</body>

</html>
