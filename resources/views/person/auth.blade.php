<h1>ログイン</h1>
<h2>{{$msg}}</h2>
<table>
  <form action="" method="post">
    {{ csrf_field() }}
    <tr>
      <th>User:</th><td><input type="text" name="name" value="{{old('name')}}"></td>
    </tr>
    <tr>
      <th>password:</th><td><input type="password" name="password"></td>
    </tr>
    <tr>
        <th></th><td><input type="submit" value="ログイン"></td>
    </tr>
  </form>
</table>
