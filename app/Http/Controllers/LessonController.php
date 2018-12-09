<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\NewLessonNotification;
use App\Lesson;
use App\User;

class LessonController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function newLesson()
    {
        $lesson = new Lesson();
        $lesson->user_id = auth()->user()->id;
        $lesson->title = 'laravel Notification~';
        $lesson->body = 'Ohh Nooooooooooooo';
        $lesson->save();
        $user = User::where('id','!=',auth()->user()->id)->get();

        if (\Notification::send($user,new NewLessonNotification(Lesson::latest('id')->first()))) {
            return back();
        }
    }

    public function notification()
    {
        return auth()->user->unreadNotifications;
    }

    public function markAsRead(Request $request)
    {
        auth()->user->unreadNotifications->find($request->not_id)->markAsRead();
    }

    public function readLesson($Lesson_id)
    {
        $lesson = Lesson::find([$lesson_id]);
        return view('lesson',compact('lesson'));
    }

    public function allMarkAsread()
    {
        auth()->user->unreadNotifications->markAsRead();
    }

    public function readAllLesson()
    {
        $lessons = auth()->user()->readNotifications;

        return view('allLesson',compact('lessons'));
    }

}
