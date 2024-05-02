<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Leader;
use App\Models\Lesson;
use App\Models\News;
use App\Models\Smena1;
use App\Models\Smena2;
use App\Models\Sport;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $students = Student::first();
        $news = News::limit(6)->latest()->get();
        return view('index',compact('students','news'));
    }
    public function contact() {
        return view('contact');
    }
    public function faq() {
        return view('faq');
    }
    public function gallery() {
        $galleries = Gallery::all();
        return view('gallery',compact('galleries'));
    }
    public function leaders() {
        $leader = Leader::first(); 
        return view('leaders',compact('leader'));
    }
    public function lessons() {
        $services1 = Smena1::all();
        $services2 = Smena2::all();
        $lessons = Lesson::all();
        $sports = Sport::all();
        return view('lessons',compact('services1','services2','lessons','sports'));
    }

    public function news() {
        $news = News::all();
        return view('news',compact('news'));
    }
    public function leader_show() {
        $leader = Leader::first();
        return view('leader_show',compact('leader'));
    }

    public function projects() {
        return view('projects');
    }
    public function requisites() {
        return view('requisites');
    }
    public function schoolRule() {
        return view('schoolRule');
    }
    public function services1() {
        $services1 = Smena1::all();
        $services2 = Smena2::all();
        $lessons = Lesson::all();
        $sports = Sport::all();
        return view('services1',compact('services1','services2','lessons','sports'));
    }
    public function services2() {
        $services1 = Smena1::all();
        $services2 = Smena2::all();
        $lessons = Lesson::all();
        $sports = Sport::all();
        return view('services2',compact('services1','services2','lessons','sports'));
    }
    public function sports () {
        $services1 = Smena1::all();
        $services2 = Smena2::all();
        $lessons = Lesson::all();
        $sports = Sport::all();
        return view('sports',compact('services1','services2','lessons','sports'));
    }
    public function stateSymbols() {
        return view('stateSymbols');
    }
    public function strategy() {
        return view('strategy');
    }
    public function teachers() {
        $teachers = Teacher::all();
        return view('teachers',compact('teachers'));
    }
    public function show_news($id) {      
        $new = News::findOrFail($id);
        return view('show_news',compact('new')); 
    }
    public function lesson_show($id) {      
        $lesson = Lesson::findOrFail($id);
        return view('show_lesson',compact('lesson')); 
    }
    public function teacher_show($id) {      
        $teacher = Teacher::findOrFail($id);
        return view('teacher_show',compact('teacher')); 
    }
    public function sport_show($id) {      
        $sport = Sport::findOrFail($id);
        return view('sport_show',compact('sport')); 
    }
    public function cookie() {
        return view('cookie');
    }
    public function privacy(){
        return view('privacy');
    }
    public function terms(){
        return view('terms');
    }

}
