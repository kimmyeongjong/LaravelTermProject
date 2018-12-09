
<div id="myCarousel" class="carousel slide" data-ride="carousel">

	<!--페이지-->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<!--페이지-->

	<div class="carousel-inner">
		<!--슬라이드1-->
		<div class="item active">
			<img src="https://nogizakazk.files.wordpress.com/2017/12/dasasdsds.jpg" style="width:100%" alt="First slide">
			<div class="container">
				<div class="carousel-caption">
					<h1 style="color:white">乃木坂46</h1>
					<p style="color:white">nogizaka46</p>
				</div>
			</div>
		</div>
		<!--슬라이드1-->

		<!--슬라이드2-->
		<div class="item">
			<img src="http://livedoor.blogimg.jp/fumichen2/imgs/c/c/cc9dd81d.jpg" style="width:100%" data-src="" alt="Second slide">
			<div class="container">
				<div class="carousel-caption">
					<h1 style="color:white">欅坂46</h1>
					<p style="color:black">keyakizaka46</p>
				</div>
			</div>
		</div>
		<!--슬라이드2-->

		<!--슬라이드3-->
		<div class="item">
			<img src="http://images6.fanpop.com/image/photos/34300000/AKB48-akb48-fan-club-34351277-1920-1080.jpg" style="width:100%" data-src="" alt="Third slide">
			<div class="container">
				<div class="carousel-caption">
					<h1 style="color:black">AKB48</h1>
					<p style="color:black">akb48</p>
				</div>
			</div>
		</div>
		<!--슬라이드3-->
	</div>

	<!--이전, 다음 버튼-->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<br>
<div class="container">
	<h1>nogizaka46 VS AKB48</h1>
	<br>
	<form class="" action="" method="post">
		<table class="table">
			<tr>
				<td><h1> 乃木坂46 </h1></td>
				<td> <button type="submit" name="button" style="width:85px; height:50px;" class="btn btn-default" onclick="alert('dsds');">
					<span class="glyphicon glyphicon-thumbs-up" style="font-size:40px; color:#7F1085;"></span>
				</button></td>
				<td><h1> VS </h1></td>
				<td><h1> AKB48 </h1></td>
				<td> <button type="submit" name="button" style="width:85px; height:50px;" class="btn btn-default" onclick="alert('dsds');">
					<span class="glyphicon glyphicon-thumbs-up" style="font-size:40px; color:#F390B0;"></span>
				</button></td>
			</tr>
		</table>
	</form>
</div>
<div class="progress">
	<div class="progress-bar progress-bar-success" role="progressbar" style="width:60%; background-color:#7F1085 !important;">
		乃木坂46
	</div>
	<div class="progress-bar" role="progressbar" style="width:40%; background-color:#F390B0 !important;">
		AKB48
	</div>
</div>
<div class="container">
	<script>

	function callMembersList () {
		var url = "localhost:8000/callMembersList";
		var xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function () {
			if(xmlhttp.readyState == XMLHttpRequest.DONE && xmlhttp.status === 200) {
				return xmlhttp.responseText;
			}
		}

		xmlhttp.open("get" , url , true);
		xmlhttp.send();
	}

	document.onload(function () {

	})
</script>

<div class="container">
<br>
	<ul id="myTab" class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active">
			<a data-target="#nogizaka46" id="nogizaka46-tab" role="tab" data-toggle="tab" aria-controls="nogizaka46" aria-expanded>乃木坂46</a>
		</li>
		<li role="presentation" class="">
			<a data-target="#keyakizaka46" role="tab" id="keyakizaka46-tab" data-toggle="tab" aria-controls="keyakizaka46" aria-expanded="false">欅坂46</a>
		</li>
		<li role="presentation" class="">
			<a data-target="#akb48" role="tab" id="akb48-tab" data-toggle="tab" aria-controls="akb48" aria-expanded="false">AKB48</a>
		</li>
		<li role="presentation" class="">
			<a data-target="#nmb48" role="tab" id="nmb48-tab" data-toggle="tab" aria-controls="nmb48" aria-expanded="false" >NMB48</a>
		</li>
		<li role="presentation" class="">
			<a data-target="#hkt48" role="tab" id="hkt48-tab" data-toggle="tab" aria-controls="hkt48" aria-expanded="false">HKT48</a>
		</li>
		<li role="presentation" class="">
			<a data-target="#ske48" role="tab" id="ske48-tab" data-toggle="tab" aria-controls="ske48" aria-expanded="false">SKE48</a>
		</li>
		<li role="presentation" class="">
			<a data-target="#ngt48" role="tab" id="ngt48-tab" data-toggle="tab" aria-controls="ngt48" aria-expanded="false">NGT48</a>
		</li>

	</ul>
	<div id="myTabContent" class="tab-content">
		<div role="tabpanel" class="tab-pane fade active in" id="nogizaka46" aria-labelledby="nogizaka46-tab">
		<img src="https://vignette.wikia.nocookie.net/akb48/images/c/ce/%EB%85%B8%EA%B8%B0%EC%9E%90%EC%B9%B446_%EA%B3%B5%EC%8B%9D_%EB%A1%9C%EA%B3%A0.png/revision/latest?cb=20150627135847&path-prefix=ko" class="logo">
		<table class="table" border="1px">
			<tr>
				<td>fdsfds</td>
				<td>fdsfds</td>
			</tr>
			<tr>
				<td>ewqeqw</td>
				<td>vcxv</td>
			</tr>
		</table>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="keyakizaka46" aria-labelledby="keyakizaka46-tab">
		<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Keyakizaka46_logo.svg/440px-Keyakizaka46_logo.svg.png" class="logo">
			<p>keyakizaka</p>
		</div>

		<div role="tabpanel" class="tab-pane fade" id="akb48" aria-labelledby="akb48-tab">
		<img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/AKB48_Logo.png" class="logo">
			<p>akb48</p>
		</div>

		<div role="tabpanel" class="tab-pane fade" id="nmb48" aria-labelledby="nmb48-tab">
		<img src="https://vignette.wikia.nocookie.net/akb48/images/a/a1/0208NMB48_logo.jpg/revision/latest?cb=20120711223736" class="logo">
			<p>nmb48</p>
		</div>

		<div role="tabpanel" class="tab-pane fade" id="hkt48" aria-labelledby="hkt48-tab">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/HKT48_logo.svg/732px-HKT48_logo.svg.png" alt="hkt48 logo img" class="logo">
			<p>hkt48</p>
		</div>

		<div role="tabpanel" class="tab-pane fade" id="ske48" aria-labelledby="ske48-tab">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/SKE48_logo.svg/730px-SKE48_logo.svg.png" alt="" class="logo">
			<p>ske48</p>
		</div>

		<div role="tabpanel" class="tab-pane fade" id="ngt48" aria-labelledby="ngt48-tab">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/ed/NGTLogo.png" alt="" class="logo">
			<p>ngt48</p>
		</div>
	</div>
</div>
