<h1>作者资料</h1>
<table>
  <tr>
    <th>Name</th><td>{{ $item->name }}</td>
  </tr>
  <tr>
    <th>Id</th><td>{{ $item->id }}</td>
  </tr>
  <tr>
    <th>Age</th><td>{{ $item->age }}</td>
  </tr>
</table>
<br>
<a href="{{url('message')}}">Message一覧</a>
