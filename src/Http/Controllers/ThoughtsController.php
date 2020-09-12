<?php

namespace Tyteck\WriteYourThoughts\Http\Controllers;

use Illuminate\Routing\Controller;

class ThoughtsController extends Controller
{
    public function __invoke()
    {
        return 'my thoughts';
    }

    public function index()
    {
        $foo = 'my thoughts';
        return view('thoughts::index', compact('foo'));
    }
}
