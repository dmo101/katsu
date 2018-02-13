<title>message</title>
<h1>详细Message</h1>
<table>
  <tr>
    <th>Title</th><td>{{$item->title}}</td>
  </tr>
  <tr>
    <th>Comment</th><td>{{$item->comment}}</td>
  </tr>
  <tr>
    <th>Auther</th><td>{{$item->auther}}</td>
  </tr>
</table>
<br>
<a href="{{url('auther')}}">Auther一覧</a>
