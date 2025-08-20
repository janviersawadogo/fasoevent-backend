<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
       public function hello()
    {
        return response()->json([
            'message' => 'Hello World, tout marche très bien !',
            'status' => 'success'
        ]);
    }

public function echo(Request $request)
    {
        $text = $request->input('text', '');     
        return response()->json([
            'message' => 'Vous avez envoyé ce texte au serveur : ' . $text,
            'original_text' => $text,
            'status' => 'success'
        ]);
    }

     public function echoUrl($text)
    {
        return response()->json([
            'message' => 'Texte reçu via URL : ' . $text,
            'status' => 'success'
        ]);
    }

}
