<title>add</title>
<form class="" action="{{url('person/add')}}" method="post">
  {{ csrf_field() }}
  <table>
    <tr>
      <th>name</th><td><input type="text" name="name" value="{{old('name')}}"></td>
      <td>
        @if ($errors->has('name'))
        {{$errors->first('name')}}
        @endif
      </td>
    </tr>
    <tr>
      <th>mail</th><td><input type="text" name="mail" value="{{old('mail')}}"></td>
      <td>
        @if ($errors->has('mail'))
        {{$errors->first('mail')}}
        @endif
      </td>
    </tr>
    <tr>
      <th>sub</th><td><input type="text" name="sub" value="{{old('sub')}}"></td>
      <td>
        @if ($errors->has('sub'))
        {{$errors->first('sub')}}
        @endif
      </td>
    </tr>
    <tr>
      <th>age</th><td><input type="text" name="age" value="{{old('age')}}"></td>
      <td>
        @if ($errors->has('age'))
        {{$errors->first('age')}}
        @endif
      </td>
    </tr>
    <tr>
      <td><input type="submit" name="" value="submit"></td>
    </tr>
  </table>
</form>
<a href="{{url('person')}}">back</a>
