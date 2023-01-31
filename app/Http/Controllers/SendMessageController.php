<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Dialogue;

class SendMessageController extends Controller
{
    public function send_dialogue(Request $request) {
        // 使用するbotの設定
        $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient(config('app.line.line_message_channel_token'));
        $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => config('app.line.line_message_channel_secret')]);

        $targetUserId = $request['events'][0]['source']['userId'];
        $sentMessage = $request['events'][0]['message']['text'];

        if ($sentMessage === "強化系") {
            $speakerCharacterData = Character::where('system', '=', '強化系')->inRandomOrder()->first();
            $speakerCharacterName = $speakerCharacterData['name'];


            return;
        }

        return;
    }
}
