<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;


class TranslateController extends Controller
{
    public function translate_func(Request $request)
    {
        $validated = $request->validate([
            'text_tran' => 'required|string|max:255',
        ]);
        
        $text = $request->input('text_tran');

        try {
            $result = Gemini::geminiPro()->generateContent(
                'Please translate the following text from Darija (Moroccan Arabic) to english: '.$text.'. Ensure that the translation maintains the original meaning and context, and is free from grammatical errors.'
            );
            $translatedText = $result->text();
            return view('welcome', compact('translatedText', 'text'));
        } catch (\Throwable $th) {
            $error = 'Translation failed: ' . $th->getMessage();
            return view('welcome', compact('error', 'text'));
        }
    }

}
