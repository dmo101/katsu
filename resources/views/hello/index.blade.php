<style>
  span{
    font-size: 3px;

  }
  p{
    font-size: 3px;
  }
</style>
<title>add</title>
<h1>教师资料</h>
<p>格林威治 时间:</p>
<p>{{date("Y年m月j日G点i分s秒")}}</p>

<form action="hello" method="post">
   {{ csrf_field() }}
  <span>name</span> <input type="text" name="name" value="{{old('name')}}">
  @if ($errors->has('name'))
  <span>{{$errors->first('name')}}</span>
  @endif
   <br>
  <span>age</span> <input type="text" name="age" value="{{old('age')}}">
  @if ($errors->has('age'))
  <span>{{$errors->first('age')}}</span>
  @endif
  <br>
  <span>mail</span> <input type="text" name="mail" value="{{old('mail')}}">
  @if ($errors->has('mail'))
  <span>{{$errors->first('mail')}}</span>
  @endif
  <br>
  <span>sub</span> <input type="text" name="sub" value="{{old('sub')}}">
  @if ($errors->has('sub'))
  <span>{{$errors->first('sub')}}</span>
  @endif
  <br>
  <span>性别:
  <input type="radio" name="gender" value="man"
  <?php if ( (null !== old("gender")) && (old("gender") == "man") ) {
    echo "checked";}  ?>
  >男
  <input type="radio" name="gender" value="woman"
  <?php if ( (null !== old("gender")) && (old("gender") == "woman") ) {
    echo "checked";}  ?>
  >女
  @if ($errors->has('gender'))
  {{$errors->first('gender')}}
  @endif
  </span><br>

  <span>爱好:
  <input type="checkbox" name="aihao[]" value="sport"
  <?php if ( (null !== old("aihao")) && in_array("sport",old("aihao")) ) {
    echo "checked";}  ?>
  >运动&nbsp&nbsp&nbsp&nbsp
  <input type="checkbox" name="aihao[]" value="eat"
  <?php if ( (null !== old("aihao")) && in_array("eat",old("aihao")) ) {
    echo "checked";}  ?>
  >美食&nbsp&nbsp&nbsp&nbsp
  <input type="checkbox" name="aihao[]" value="music"
  <?php if ( (null !== old("aihao")) && in_array("music",old("aihao")) ) {
    echo "checked";}  ?>
  >音乐&nbsp&nbsp&nbsp&nbsp
  <input type="checkbox" name="aihao[]" value="game"
  <?php if ( (null !== old("aihao")) && in_array("game",old("aihao")) ) {
    echo "checked";}  ?>
  >游戏&nbsp&nbsp&nbsp&nbsp
  @if ($errors->has('aihao'))
  {{$errors->first('aihao')}}
  @endif</span>
  <br><hr>
  <textarea name="comment" rows="8" cols="80">{{old("comment")}}</textarea><br><hr>
  <input type="submit" name="" value="submit">
</form>
