<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailControlles extends Controller
{
    public function apiEmails()
    {
        $email=Email::first();
        return response()->json([
            'student_email' => $emails->email,
        ]);
    }
}
