<?php
use App\Http\Controllers\TestController;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Notifications\Slack;
use App\Notifications\TestNotification;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\PointCheck;

Auth::routes();
Route::get('/register',['as' => 'register', 'uses' => 'Auth\RegisterController@goRegister']);

Route::get('whatislotto',function ()
{
    return view('lottoExplanation');
});
Route::get('/','MainPageController@index')->name('main');
Route::get('logout','MainPageController@logout');

Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');

Route::post('/comment','CommentController@writeComment');

Route::resource('/','MainPageController');
Route::resource('freeboard','FreeBoardController');
Route::get('freeBoard/{num}','FreeBoardController@view');

Route::get('/freeBoard/write',function ()
{
    $nogi = \App\Idol_member::where('team_num',6)->select('name_cc','name_en')->get();
    $keyaki = \App\Idol_member::where('team_num',7)->select('name_cc','name_en')->get();
    $akb = \App\Idol_member::where('team_num',1)->select('name_cc','name_en')->get();
    $nmb = \App\Idol_member::where('team_num',2)->select('name_cc','name_en')->get();
    $hkt = \App\Idol_member::where('team_num',3)->select('name_cc','name_en')->get();
    $ske = \App\Idol_member::where('team_num',4)->select('name_cc','name_en')->get();
    $ngt = \App\Idol_member::where('team_num',5)->select('name_cc','name_en')->get();

    return view('free_board.freeBoardWrite',
        ['nogi'=>$nogi,
        'keyaki'=>$keyaki,
        'akb'=>$akb,
        'nmb'=>$nmb,
        'hkt'=>$hkt,
        'ske'=>$ske,
        'ngt'=>$ngt]
    );
});
Route::get('showroom/{group}','FreeBoardController@test');
Route::get('member/{num}','MemberController@getMember')->name('mem')->where('num', '[0-9]+');

Route::get('/group/{num}','IdolMemController@index')->name('group')->where('num', '[0-9]+');

Route::get('/member',function ()
{
    return view('idol_page.membertwitter');
});

Route::get('/quiz',function ()
{
    return view('quiz');
})->Middleware(CheckLogin::class);
Route::post('/quiz/point','QuizController@getPoint');

Route::resource('notice','NoticepageController')->Middleware(CheckLogin::class);
Route::get('/notice/write','NoticepageController@write');
Route::get('/notice/delete/{num}','NoticepageController@delete');
Route::get('/notice/modify/{num}','NoticepageController@modify');
Route::post('/modify/clear','NoticepageController@update');

Route::get('/lotto',function ()
{
    return view('icongacya');
})->Middleware(CheckLogin::class);

Route::resource('/auction','AuctionController');
Route::get('/chart/{para}','AuctionController@chart');
Route::get('/server/{data}','AuctionController@server');

Route::get('/iconAuction','AuctionController@view');
Route::get('/iconregist','AuctionController@regist');
Route::resource('/goAction','AuctionController');

Route::get('/temp',function ()
{
    return view('memberintroducewrite');
});

Route::resource('/lotto/get','GetIdolController')->Middleware(PointCheck::class);

Route::get('/home', 'HomeController@index')->name('home');
