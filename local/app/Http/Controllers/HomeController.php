<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;
use Theme;
use Spatie\TranslationLoader\LanguageLine;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       
        $roleid= Auth::user()->roles_id;
       

       
        if ($roleid==1) return $this->adminDashboard();
        if ($roleid==2) return $this->userDashboard();  

        
    }
    private function adminDashboard()
    {
        $language_id= Auth::user()->language_id;
        if ($language_id==1)  app()->setLocale('en');
        if ($language_id==2) app()->setLocale('nl');
        if ($language_id==3) app()->setLocale('hi');
        //setting for language
        
        Theme::uses('admin');
        
        
        $data['info'] = 'Hello World'; 

        return Theme::view('index', $data);

    }
    private function userDashboard()
    {
        Theme::uses('default');
         $language_id= Auth::user()->language_id;
        if ($language_id==1)  app()->setLocale('en');
        if ($language_id==2) app()->setLocale('nl');
        if ($language_id==3) app()->setLocale('hi');
        //setting for language
        
        $data['info'] = 'Hello World'; 

        return Theme::view('index', $data);
    }
    public function setLang()
    {
       
       
        LanguageLine::create([
            'group' => 'validation',
            'key' => 'required',
            'text' => ['en' => 'This is a required field', 'nl' => 'Dit is een verplicht veld'],
         ]);

        
    }

}
