<title>Message</title>
<a href="message/add">Add Message</a>
<h1>Messages一覧</h1>
<table border="1">
  <tr>
    <th>Message(id:title:comment)</th><th>Auther</th>
  </tr>
@foreach ($items as $item)
<tr>
  <td>{{ $item->getData() }}</td><td><a href="auther/view/{{$item->auther->id}}">
    {{ $item->auther_name() }}</a></td>
</tr>
@endforeach
</table>
<br>
<a href="auther">Auther一覧</a>
