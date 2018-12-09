@extends('layouts.basicFrame')
@section('menubar')
    @include('partials.menubar')
@endsection
@section('mainSection')
<!-- 벽돌 깨기 게임 -->
<br><br>
    <div class="container" style="">
        <canvas id="canvas" width="700" height="500" style="background-color:pink;"></canvas>
        <div class="" style="display:inline-block">
            <h1 id="notification"> 포인트 획득</h1>
        </div>
    </div>

    <script>
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");

// ----------------------------------------------------------------------------
    var keyX = canvas.width-(canvas.width-25);
    var keyY = canvas.height-50;
    const keyWidth =100;
    const keyHeight =40;
    const keyPadding = 10;
    var keyPad = [];
    var moveYPoint = 0;

    function drawKeyboards() {
        for (var i = 0; i < 6; i++) {
            ctx.beginPath();
            ctx.rect(keyX, keyY,keyWidth,keyHeight);
            ctx.fillStyle="white";
            ctx.fill();
            ctx.closePath();
            keyPad[i] = { x:keyX, y:keyY };
            keyX = keyX +keyWidth+keyPadding;
        }
        keyX = canvas.width-(canvas.width-25);
        keyY = canvas.height-50;
    }

    function drawKeyPressed(keyX,color) {
        ctx.beginPath();
        ctx.rect(keyX, keyY,keyWidth,keyHeight);
        ctx.fillStyle=color;
        ctx.fill();
        ctx.closePath();
    }

    function drawBlock(keyX) {

        ctx.beginPath();
        ctx.rect(keyX, moveYPoint,keyWidth,keyHeight);
        ctx.fillStyle = "red";
        ctx.fill();
        ctx.closePath();
        moveYPoint=moveYPoint+2;
    }

    function keyDownHandler(e) {
        if(e.keyCode == 83) {//s
            drawKeyPressed(keyPad[0]['x'],"black");
        }
        else if(e.keyCode == 68) {//d
            drawKeyPressed(keyPad[1]['x'],"black");
        }
        else if(e.keyCode == 70) {//f
            drawKeyPressed(keyPad[2]['x'],"black");
        }
        else if(e.keyCode == 74) {//j
            drawKeyPressed(keyPad[3]['x'],"black");
        }
        else if(e.keyCode == 75) {//k
            drawKeyPressed(keyPad[4]['x'],"black");
        }
        else if(e.keyCode == 76) {//l
            drawKeyPressed(keyPad[5]['x'],"black");
        }
    }
    function keyUpHandler(e) {
        if(e.keyCode == 83) {//s
            drawKeyPressed(keyPad[0]['x'],"white");
        }
        else if(e.keyCode == 68) {//d
            drawKeyPressed(keyPad[1]['x'],"white");
        }
        else if(e.keyCode == 70) {//f
            drawKeyPressed(keyPad[2]['x'],"white");
        }
        else if(e.keyCode == 74) {//j
            drawKeyPressed(keyPad[3]['x'],"white");
        }
        else if(e.keyCode == 75) {//k
            drawKeyPressed(keyPad[4]['x'],"white");
        }
        else if(e.keyCode == 76) {//l
            drawKeyPressed(keyPad[5]['x'],"white");
        }
    }
    document.addEventListener("keydown", keyDownHandler, false);
    document.addEventListener("keyup", keyUpHandler, false);

    var blockArr = [];

    function returnRandomArr() {
        for (var i = 0; i < 40; i++) {
            blockArr[i] = Math.floor(Math.random()*6);
        }
        return blockArr;
    }
    var blockArr = returnRandomArr();
    var tempNum = 0;

    function drawAll() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        drawKeyboards();
        drawBlock(keyPad[blockArr[0]]['x']);
    }
    setInterval(drawAll,70);

// ----------------------------------------------------------------------------

    </script>
@endsection
