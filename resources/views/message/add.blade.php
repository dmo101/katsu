<title>add</title>
<h1>Add Message</h1>
<table >
  <form  action="" method="post">
    {{ csrf_field() }}
    <tr>
      <th>作者id</th>
      <td>
      <select  name="auther_id">
        <option value="">选择id</option>
        @foreach ($items as $item)
        <option value="{{$item->id}}">{{$item->id}}</option>
        @endforeach
      </select>
      <td>
        @if ( $errors->has('auther_id') )
        {{$errors->first('auther_id')}}
        @endif
      </td>
    </tr>
    <tr>
      <th>标题</th><td><input type="text" name="title" value="{{old('title')}}"> </td>
      <td>
        @if ( $errors->has('title') )
        {{ $errors->first('title') }}
        @endif
      </td>
    </tr>
    <tr>
      <th>内容</th><td><textarea name="comment" rows="8" cols="80">{{old('comment')}}</textarea></td>
      <td>
        @if ( $errors->has('comment') )
        {{ $errors->first('comment') }}
        @endif
      </td>
    </tr>
    <tr>
      <th></th><td><input type="submit" name="" value="提交"></td>
    </tr>
  </form>
</table>
<a href="{{ url('message') }}">back</a>
