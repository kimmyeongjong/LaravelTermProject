
<div class="testbox">
  <h1>Registration</h1>

  <form action="{{ route('signUpCon.store')}}" method="post">
      <hr>
      <label id="icon" for="name"><i class="far fa-id-card"></i></label>
      <input type="text" name="id" id="name" placeholder="ID" value="{{old('id')}}" required/>
      <label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
      <input type="password" name="pw" id="name" placeholder="PASSWORD" value="{{old('password')}}" required/>
      <label id="icon" for="name"><i class="fas fa-user-circle"></i></label>
      <input type="text" name="name" id="name" placeholder="NAME" value="{{old('name')}}" required/>
      <label id="icon" for="name"><i class="fas fa-user-secret"></i></label>
      <input type="text" name="age" id="name" placeholder="AGE" value="{{old('name')}}" required/>
      <br><br>
      <input type="submit" name="" value="regist" class="submit" style="width:93%; height:60px;">
      <p> Thanks for sign up</p>
  </form>
</div>
