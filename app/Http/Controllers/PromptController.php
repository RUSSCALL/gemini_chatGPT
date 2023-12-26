<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Prompt;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Actions\promptGemini;

class PromptController extends Controller
{
    public function index(Request $request){
        if (!session()->has('chat_id')) {
            $chat = Chat::create([
                'uuid' => Str::uuid(),
                'title' => 'test chat'
            ]);

            $request->session()->put('chat_id' , $chat->uuid);
        }

        $prompts = Prompt::where('chat_id', session('chat_id'))->with('response')->orderBy('created_at', 'asc')->get();
        return view('welcome' , ['chats' => $prompts]);
    }


    public function store(Request $request, promptGemini $promptGemini){
        $request->validate([
            'user_prompt' => 'required|string',
            // 'user_id' => 'required'
        ]);

        $prompt = Prompt::create([
            'chat_id' => session('chat_id'),
            'user_id' => 1,
            'content' => $request['user_prompt']
        ]);

        #query gemini and store its response in the database
        $promptGemini->prompt($request['user_prompt'] , $prompt->id);

        #fetch the all the prompt and responses joined to each other where their prompt ids match from teh databases based on teh session chat_id and sort them by created_at
        $prompts = Prompt::where('chat_id', session('chat_id'))->with('response')->orderBy('created_at', 'asc')->get();

        return view('welcome' , ['chats' => $prompts])->with('success', 'Prompt created successfully.');
    }
}
