<?php

namespace App\Services;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class Operations
{
    public static function decryptId($value)
    {
        // faz uma checagem se o $value está encripitado
        try {
            $id = Crypt::decrypt($value);
        } catch (DecryptException $e) {
            return redirect()->route('home');
        }
        return $value;
    }
}
