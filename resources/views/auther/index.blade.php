<title>auther</title>
<h1>Auther一覧</h1>
<table border="1">
  <tr>
    <th>Auther</th><th>Title</th>
  </tr>
@foreach ($items as $item)
  <tr>
    <td>{{ $item->getData() }}</td>
    <td>
    @if ( $item->messages != null)
    <table width="100%">
      @foreach ($item->messages as $obj)
        <tr><td><a href="message/view/{{$obj->id}}">{{ $obj->title }}</a></td></tr>
      @endforeach
    </table>
    @endif
    </td>
  </tr>
@endforeach
</table>
<br>
<a href="message">Message一覧</a>
