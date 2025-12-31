<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function send(Request $request)
    {
        $prompt = $request->input('prompt');

        $response = Http::withToken(config('services.openai.key'))
            ->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-5.1',
                'messages' => [
                    ['role' => 'system', 'content' => 'You are a professional marketer working in advertising businesses. You are an expert in reflecting brand voice in the content you write for websites and can adapt your style to suit different tones and styles of webpages.'],
                    ['role' => 'user', 'content' => $prompt],
                ],
            ]);

        return response()->json([
            'reply' => $response['choices'][0]['message']['content']
        ]);
    }
}
