<?php

namespace app\Http\Controllers;

class SampleController extends Controller
{
    /**
     * pass an array to the 'foo' view
     * as a second parameter.
    */
    public function foo()
    {
        return view('foo', [
            'key' => 'The big brown fox jumped over the lazy dog'
        ]);
    }

    /**
     * Pass a key variable to the 'foo view
     * using the compact method as
     * the second parameter.
    */
    public function bar()
    {
        $key = 'If a would chuck can chuck wood,';

        return view('foo', compact('key'));
    }

    /**
     * Pass a key, value pair to the view
     * using the with method.
    */
    public function baz()
    {
        return view('foo')->with(
            'key',
            'How much woood would a woodchuck chuck.'
        );
    }
}
