<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class TestController extends Controller
{
    //

    public function test()
    {
        $hello = [
            'helo' => 'hello'
        ];
        //return auth()->user()->roles()->get();
        //return auth()->user()->assignRole(1);

        //return $this->convertPipeToArray('hello|hel');

        //return (array_key_exists('check', $hello)) ? $hello['check'] : 'hhh';

        return User::all();
    }

    protected function convertPipeToArray(string $pipeString)
    {
        $pipeString = trim($pipeString);

        if (strlen($pipeString) <= 2) {
            return $pipeString;
        }

        $quoteCharacter = substr($pipeString, 0, 1);
        $endCharacter = substr($quoteCharacter, -1, 1);

        if ($quoteCharacter !== $endCharacter) {
            return explode('|', $pipeString);
        }

        if (! in_array($quoteCharacter, ["'", '"'])) {
            return explode('|', $pipeString);
        }

        return explode('|', trim($pipeString, $quoteCharacter));
    }
}
