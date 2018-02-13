<head>
<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
@if (($user->op) == "1")
<a href="person/add">add</a>
@endif
<title>Person</title>
<h1>Person</h1>
<table  border="1">
  <tr>
    <th><a href="person?sort=id">id</a></th><th><a href="person?sort=name">name</a></th>
    <th><a href="person?sort=mail">mail</a></th><th><a href="person?sort=sub">sub</a></th>
    <th><a href="person?sort=age">age</a></th><th>edit</th>
  </tr>
  @foreach ($items as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->mail}}</td>
      <td>{{$item->sub}}</td>
      <td>{{$item->age}}</td>
      <td><a href="view/{{$item->id}}">View&nbsp&nbsp
        @if (($user->op) == "1")
          <a href="person/update/{{$item->id}}">Update&nbsp&nbsp
          <form  action="{{url('person/delete')}}" method="post">
                {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$item->id}}">
            <input type="submit" name="" value="delete">
          </form></td>
        @endif
    </tr>
   @endforeach
</table>
{{ $items->appends(['sort'=> $sort])->links()}}

<p>User:{{ $user->name }}</p>
<p>E-mail:{{ $user->email }}</p>


<a href="{{url('home')}}">返回个人中心</a>
