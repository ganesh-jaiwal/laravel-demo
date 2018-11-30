<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $tasks = [
            'hello 1',
            'hello 2',
            'hello 3',
            'hello 4',
            'hello 5',
        ];
        $foo = 'Hello Series.';
        return view('welcome')->with([
            'tasks' => $tasks,
            'foo'   => $foo,
        ]);
    }

    public function vueDemo()
    {
        return view('vue');
    }

    public function vueWithLaravel()
    {
        return view('vueWithLaravel');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
