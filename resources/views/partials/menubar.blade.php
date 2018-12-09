<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:pink;">
  <a class="navbar-brand" href="/" style="color:white;">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link active" href="{{URL('/notice')}}"><button type="button" name="button" class="btn btn-default">Notice</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL('/freeboard')}}"><button type="button" name="button" class="btn btn-default">Free Board</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL('/member')}}"><button type="button" name="button" class="btn btn-default">member twitter</button></a>
      </li>
      <li class="nav-item dropdown ">
          <div class="dropdown" id="mydropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                showroom
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{URL('/showroom/nogizaka')}}" style="color:red">nogizaka46</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{URL('/showroom/keyakizaka')}}" style="color:red">keyakizaka46</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{URL('/showroom/akb')}}" style="color:red">AKB48</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{URL('/showroom/nmb')}}" style="color:red">NMB48</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{URL('/showroom/hkt')}}" style="color:red">HKT48</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{URL('/showroom/ske')}}" style="color:red">SKE48</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{URL('/showroom/ngt')}}" style="color:red">NGT48</a>
                </li>
            </ul>
            </div>
      </li>
      &nbsp;
      <li class="nav-item dropdown ">
          <div class="dropdown" id="mydropdown">
    		<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    			坂道TEAM
    		</button>
    		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{route('group',['num'=>6])}}" style="color:red">nogizaka46</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{route('group',['num'=>7])}}" style="color:red">keyakizaka46</a>
                </li>
    		</ul>
      		</div>
      </li>
      &nbsp;
      <li class="nav-item dropdown ">
          <div class="dropdown" id="mydropdown">
           <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
               AKB GROUP
           </button>
           <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{route('group',['num'=>1])}}" style="color:red">AKB48</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{route('group',['num'=>2])}}" style="color:red">NMB48</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{route('group',['num'=>3])}}" style="color:red">HKT48</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{route('group',['num'=>4])}}" style="color:red">SKE48</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{route('group',['num'=>5])}}" style="color:red">NGT48</a>
                </li>
           </ul>
           </div>
      </li>
      &nbsp;
      <li class="nav-item dropdown ">
          <div class="dropdown" id="mydropdown">
           <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
               POINT
           </button>
           <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
               <li role="presentation">
                   <a role="menuitem" tabindex="-1" href="/whatislotto" style="color:red">ガチャとは？</a>
               </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="{{URL('/lotto')}}" style="color:red">ICONガチャ</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="/auction" style="color:red">ガチャ競売</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="/quiz" style="color:red">QUIZ</a>
                </li>
           </ul>
           </div>
      </li>
      </ul>
      <lesson v-bind:lessons="lessons"></lesson>
      <ul class="nav navbar-nav navbar-right nav-item dropdown">
          <div class="dropdown"  id="mydropdown">
              &nbsp;
              @if(Auth::check())

              <a href="/logout" class="btn btn-light">
                  logout
                  @else
                  <a href="/login" class="btn btn-light">
                      login
                      @endif
                  </a></button>
              </div>
          </ul>
  </div>
</nav>
<br><br><br><br>
