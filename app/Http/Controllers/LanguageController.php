<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Change the application language.
     *
     * @param  string  $lang
     * @return \Illuminate\Http\Response
     */
    public function change($lang)
    {
        if (in_array($lang, ['en', 'vi'])) {
            Session::put('locale', $lang);
            app()->setLocale($lang);
        }
        //dd(session('locale'));

        return redirect()->back();
    }
}
