<table>
  <form action="" method="get">
    {{ csrf_field() }}
  <tr>
    <th>Search:</th>
  </tr>
  <tr>
    <th>name:</th>
    <td>
        <input type="text" name="name" value="{{ $name }}">
    </td>
  </tr>
  <tr>
    <th>Age</th>
    <td><input type="text" name="min" value="{{ $min }}">~<input type="text" name="max" value="{{ $max }}"> </td>
  </tr>
  <tr>
    <th><input type="submit" name="" value="search"></th>
  </tr>

@if (isset($items))
  <tr>
    <th>結果</th>
    @if (isset($items[0]))
    <td>
      @foreach ($items as $item)
      <tr>
        <th><td>
        ID:{{$item->id}},Name:{{$item->name}},Age:{{$item->age}},E-mail:{{$item->mail}}
        </th></td>
      </tr>
      @endforeach
    </td>
    @else
    <tr>
      <td>查无此人</td>
    </tr>
    @endif
  </tr>
@endif
</table>
