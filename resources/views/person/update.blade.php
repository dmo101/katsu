<title>add</title>
<form class="" action="" method="post">
  {{ csrf_field() }}
  <table>
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr>
      <th>name</th><td><input type="text" name="name" value=
        @if (null != old('name'))
        "{{old('name')}}"
        @else
        "{{$form->name}}"
        @endif
        ></td>
      <td>
        @if ($errors->has('name'))
        {{$errors->first('name')}}
        @endif
      </td>
    </tr>
    <tr>
      <th>mail</th><td><input type="text" name="mail" value=
        @if (null != old('mail'))
        "{{old('mail')}}"
        @else
        "{{$form->mail}}"
        @endif
        ></td>
      <td>
        @if ($errors->has('mail'))
        {{$errors->first('mail')}}
        @endif
      </td>
    </tr>
    <tr>
      <th>sub</th><td><input type="text" name="sub" value=
        @if (null != old('sub'))
        "{{old('sub')}}"
        @else
        "{{$form->sub}}"
        @endif
        ></td>
      <td>
        @if ($errors->has('sub'))
        {{$errors->first('sub')}}
        @endif
      </td>
    </tr>
    <tr>
      <th>age</th><td><input type="text" name="age" value=
        @if (null != old('age'))
        "{{old('age')}}"
        @else
        "{{$form->age}}"
        @endif
        ></td>
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
