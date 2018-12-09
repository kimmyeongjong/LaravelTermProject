<!DOCTYPE html>
<html lang="ko" dir="ltr" muted="muted">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <link rel="icon" href="/favicon.ico" type="image/ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://translate.googleapis.com/translate_static/css/translateelement.css" charset="UTF-8">
    <script type="text/javascript" src="/js/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="{{URL::to('/')}}/ckeditor/ckeditor.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="/dropzone/dropzone.js"></script>
        <link rel="stylesheet" href="/dropzone/dropzone.css">
        <script type="text/javascript" src="jquery/lib/jquery.js"></script>
        <script type='text/javascript' src='jquery/lib/jquery.bgiframe.min.js'></script>
        <script type='text/javascript' src='jquery/lib/jquery.ajaxQueue.js'></script>
        <script type='text/javascript' src='jquery/jquery.autocomplete.js'></script>
        <link rel="stylesheet" type="text/css" href="jquery/jquery.autocomplete.css" />
        <link rel="stylesheet" href="/js/Nwagon.css" type="text/css">
        <script src="/js/Nwagon.js"></script>
        <style type="text/css">
            #load {
               width: 100%;
               height: 100%;
               top: 0;
               left: 0;
               position: fixed;
               display: block;
               opacity: 0.8;
               background: white;
               z-index: 99;
               text-align: center;
           }
           #load > img {
               position: absolute;
               top: 5%;
               left: 25%;
               width: 50%;
               z-index: 100;
           }
           #load > h1{
               position: absolute;
               color:black;
               top: 85%;
               left: 30%;
               z-index: 120;
           }

           #icon {
              display: inline-block;
              width: 30px;
              background-color: #3a57af;
              padding: 8px 0px 8px 15px;
              margin-left: 15px;
              -webkit-border-radius: 4px 0px 0px 4px;
              -moz-border-radius: 4px 0px 0px 4px;
              border-radius: 4px 0px 0px 4px;
              color: white;
              -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09);
              -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09);
              box-shadow: 1px 2px 5px rgba(0,0,0,.09);
              border: solid 0px #cbc9c9;
          }
          .navbar{ position: fixed; }
          .dropdown{ margin-top: 7px; }
          .logo{
            width: 100px;
            height: 150px;
            display: inline-block;
        }
        </style>
    </head>
    <body>
        <!-- SCM Music Player http://scmplayer.co -->
        <script type="text/javascript" src="http://scmplayer.co/script.js"
        data-config="{'skin':'skins/scmPurple/skin.css','volume':100,'autoplay':false,'shuffle':true,'repeat':1,'placement':'top','showplaylist':false,
        'playlist':[{'title':'%u30C9%u30AD%u30C9%u30AD%u30E1%u30AD%u30E1%u30AD','url':'http://other.web.np01.sycdn.kuwo.cn/resource/n2/46/34/1709240787.mp3'}
        ,{'title':'%u590F%u306E%u82B1%u306F%u5411%u65E5%u8475%u3060%u3051%u3058%u3083%u306A%u3044','url':'https://www.youtube.com/watch?v=1C_9hTBHPs8'}
        ,{'title':'%u604B%u306F%u707D%u96E3','url':'https://www.youtube.com/watch?v=2Z-6_38MT_A'},{'title':'%u65E9%u9001%u308A%u30AB%u30EC%u30F3%u30C0%u30FC'
        ,'url':'https://www.youtube.com/watch?v=4gMAun5RyZA'},{'title':'%u50D5%u3060%u3063%u3066%u6CE3%u3044%u3061%u3083%u3046%u3088',
        'url':'http://sf.sycdn.kuwo.cn/resource/n2/53/51/412505432.mp3'},{'title':'Ambivalent',
        'url':'https://www.youtube.com/watch?v=zoOiWFT0dVE'},{'title':'%u5E30%u308A%u9053%u306F%u9060%u56DE%u308A%u3057%u305F%u304F%u306A%u308B',
        'url':'https://www.youtube.com/watch?v=s1cgEj5JowM'},{'title':'%u30B8%u30B3%u30C1%u30E5%u30FC%u3067%u884C%u3053%u3046%uFF01'
        ,'url':'https://www.youtube.com/watch?v=7eoiyP4kaAQ'}
        ,{'title':'%u4E0D%u5354%u548C%u97F3','url':'https://www.youtube.com/watch?v=5b0qb4RoS8U'}]}" ></script>
    <div id="load">
       <img src="/img/loding.gif" alt="loading">
       <h1 id="go">로딩중입니다.</h1>
   </div>
   <script>
    $(window).load(function() {
     $('#load').hide();
 });
</script>
<!-- SCM Music Player script end -->
@yield('menubar')
@yield('section')
@yield('content')
@yield('leftSidebar')
@yield('mainSection')
<!-- --------------FOOTER-----------------------------------------------FOOTER-------------------------------------- -->
<!-- background-size:100%;  background-attachment: fixed; -->
<footer class="page-footer font-small stylish-color-dark pt-4" style="background-color:pink;">
    <br>
    <!-- <div style="background-image:url('/img/front.gif'); background-size:100%; height: 100%;background-repeat: repeat-y;"> -->
        <!-- Footer Links -->

        <ul class="list-unstyled list-inline text-center py-2">
          <li class="list-inline-item">
            <a href="/register" class="btn btn-secondary btn-rounded">Sign up!</a>
        </li>
    </ul>
    <div class="footer-copyright text-center py-1" style="color:white">© 2018 Copyright:
      <a href="https://github.com/KIMMyeongJong" style="color:white">KIM Myeong Jong</a>
  </div>
  <br>
<!-- </div> -->
</footer>
<!-- -------------FOOTER---------------------------------FOOTER------------------------------- -->

</body>
</html>
