<?php

namespace App\Actions;

use GuzzleHttp\Client;
use App\Models\Response;
use GuzzleHttp\Exception\GuzzleException;

class promptGemini{
    public function prompt($prompt , $prompt_id){
        $apiKey = config('services.gemini.gemini_secret');
        $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=' . $apiKey;
      
        try {
            $client = new Client();
            $response = $client->post($url, [
                'json' => [
                    'contents' => [
                        [
                            'parts' => [
                                ['text' => $prompt]
                            ]
                        ]
                    ]
                ]
            ]);

            try {
                $text = json_decode($response->getBody())->candidates[0]->content->parts[0]->text;
            } catch (\Throwable $e) {
                $text = 'Response blocked for safety reasons';
            }

            #store the prompt and response in the database
            $response = Response::create([
                'chat_id' => session('chat_id'),
                'prompt_id' => $prompt_id,
                'user_id' => 1,
                'content' => $text
            ]);
            return response()->json(['text' => $text]);
            } catch (GuzzleException $e) {
                return response()->json(['error' => $e->getMessage()], 500);
            }
    }
}