@if (isset($item))
<table border="1">
  <tr>
    <th>id</th><td>{{$item->id}}</td>
  </tr>
  <tr>
    <th>name</th><td>{{$item->name}}</td>
  </tr>
  <tr>
    <th>mail</th><td>{{$item->mail}}</td>
  </tr>
  <tr>
    <th>sub</th><td>{{$item->sub}}</td>
  </tr>
  <tr>
    <th>age</th><td>{{$item->age}}</td>
  </tr>
</table>
@else
<p>查无此人</p>
@endif
<a href="{{url('person')}}">back</a>
