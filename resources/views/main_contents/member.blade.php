
<div class="container">
    <div class="row">
		@foreach($members as $member)
		<div class="col-sm-2">
          @if($member->characteristic == 0)
		  <div class="panel panel-primary" style="background-color:pink">
          @elseif($member->characteristic == 1)
          <div class="panel panel-primary" style="background-color:#9F81F7">
          @elseif($member->characteristic == 2)
          <div class="panel panel-primary" style="background-color:#A9F5D0">
          @endif
			<div class="panel-heading">{{$member->name_cc}}<br> {{$member->name_en}}</div>
			<div class="panel-body">
				<a href="/group/{{$member->mem_num}}"><img src="/img/{{$member->mem_num}}.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
			</div>
			<h3 style="color:#9999FF">{{$member->nickname}}</h3>
			<h4 style="color:black">{{$member->birthday}} </h4>
		  </div>
		</div>
		@endforeach
    </div>
</div>
