<?php

use App\Actions\promptGemini;
use App\Http\Controllers\PromptController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Exception\GuzzleException;


// Route::get('/', function () {
//     $client = new Illuminate\Support\Facades\Http;

//     // Set the API key and the request body
//     $apiKey = config('services.gemini.gemini_secret');
//     $url = 'https://generativelanguage.googleapis.com/v1beta3/models/text-bison-001:generateText?key='.$apiKey;
//     $body = [
//         "contents" => [
//           [
//             "parts" => [
//               [
//                 "text" => "Write a story about a magic backpack."
//               ]
//             ]
//           ]
//         ]
//       ];
    
//     // Send a POST request to the generative language API
//     $response = $client::post($url, $body)->json();
    
//     // Dump the response
//     dd($response);
// });

// Route::get('/', function (promptGemini $promptGemini) {
//   //  $response = $promptGemini->prompt("who is Jeff Bezzoz");

//   //  return $response->original['text'];
//   return view('welcome');
// })->name('welcome');

Route::get('/', [PromptController::class , 'index'])->name('welcome');

Route::post('/chat_prompt' , [PromptController::class , 'store'])->name('chat_prompt');



