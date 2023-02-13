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
            $system = $sentMessage;
            $speakerCharacterData = Character::where('system', '=', '強化系')->inRandomOrder()->first();
            $speakerCharacterName = $speakerCharacterData['name'];

            $dialoguesObjects = $speakerCharacterData->dialogues;

            $dialoguesList = [];
            foreach($dialoguesObjects as $dialoguesObject) {
                array_push($dialoguesList, $dialoguesObject);
            }
            
            $dialoguesListRandomIndex = array_rand($dialoguesList, 1);
            $dialogueToSend = $dialoguesList[$dialoguesListRandomIndex]['dialogue'];

            $messageToSend = $dialogueToSend . "\n\n" . $speakerCharacterName;

            $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($messageToSend);
            $response = $bot->pushMessage($targetUserId, $textMessageBuilder);


            return;
        }

        if ($sentMessage === "変化系") {
            $system = $sentMessage;
            $speakerCharacterData = Character::where('system', '=', '変化系')->inRandomOrder()->first();
            $speakerCharacterName = $speakerCharacterData['name'];

            $dialoguesObjects = $speakerCharacterData->dialogues;

            $dialoguesList = [];
            foreach($dialoguesObjects as $dialoguesObject) {
                array_push($dialoguesList, $dialoguesObject);
            }
            
            $dialoguesListRandomIndex = array_rand($dialoguesList, 1);
            $dialogueToSend = $dialoguesList[$dialoguesListRandomIndex]['dialogue'];

            $messageToSend = $dialogueToSend . "\n\n" . $speakerCharacterName;

            $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($messageToSend);
            $response = $bot->pushMessage($targetUserId, $textMessageBuilder);


            return;
        }

        if ($sentMessage === "具現化系") {
            $system = $sentMessage;
            $speakerCharacterData = Character::where('system', '=', '具現化系')->inRandomOrder()->first();
            $speakerCharacterName = $speakerCharacterData['name'];

            $dialoguesObjects = $speakerCharacterData->dialogues;

            $dialoguesList = [];
            foreach($dialoguesObjects as $dialoguesObject) {
                array_push($dialoguesList, $dialoguesObject);
            }
            
            $dialoguesListRandomIndex = array_rand($dialoguesList, 1);
            $dialogueToSend = $dialoguesList[$dialoguesListRandomIndex]['dialogue'];

            $messageToSend = $dialogueToSend . "\n\n" . $speakerCharacterName;

            $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($messageToSend);
            $response = $bot->pushMessage($targetUserId, $textMessageBuilder);


            return;
        }

        if ($sentMessage === "放出系") {
            $system = $sentMessage;
            $speakerCharacterData = Character::where('system', '=', '放出系')->inRandomOrder()->first();
            $speakerCharacterName = $speakerCharacterData['name'];

            $dialoguesObjects = $speakerCharacterData->dialogues;

            $dialoguesList = [];
            foreach($dialoguesObjects as $dialoguesObject) {
                array_push($dialoguesList, $dialoguesObject);
            }
            
            $dialoguesListRandomIndex = array_rand($dialoguesList, 1);
            $dialogueToSend = $dialoguesList[$dialoguesListRandomIndex]['dialogue'];

            $messageToSend = $dialogueToSend . "\n\n" . $speakerCharacterName;

            $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($messageToSend);
            $response = $bot->pushMessage($targetUserId, $textMessageBuilder);


            return;
        }

        if ($sentMessage === "操作系") {
            $system = $sentMessage;
            $speakerCharacterData = Character::where('system', '=', '操作系')->inRandomOrder()->first();
            $speakerCharacterName = $speakerCharacterData['name'];

            $dialoguesObjects = $speakerCharacterData->dialogues;

            $dialoguesList = [];
            foreach($dialoguesObjects as $dialoguesObject) {
                array_push($dialoguesList, $dialoguesObject);
            }
            
            $dialoguesListRandomIndex = array_rand($dialoguesList, 1);
            $dialogueToSend = $dialoguesList[$dialoguesListRandomIndex]['dialogue'];

            $messageToSend = $dialogueToSend . "\n\n" . $speakerCharacterName;

            $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($messageToSend);
            $response = $bot->pushMessage($targetUserId, $textMessageBuilder);


            return;
        }

        if ($sentMessage === "特質系") {
            $system = $sentMessage;
            $speakerCharacterData = Character::where('system', '=', '特質系')->inRandomOrder()->first();
            $speakerCharacterName = $speakerCharacterData['name'];

            $dialoguesObjects = $speakerCharacterData->dialogues;

            $dialoguesList = [];
            foreach($dialoguesObjects as $dialoguesObject) {
                array_push($dialoguesList, $dialoguesObject);
            }
            
            $dialoguesListRandomIndex = array_rand($dialoguesList, 1);
            $dialogueToSend = $dialoguesList[$dialoguesListRandomIndex]['dialogue'];

            $messageToSend = $dialogueToSend . "\n\n" . $speakerCharacterName;

            $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($messageToSend);
            $response = $bot->pushMessage($targetUserId, $textMessageBuilder);


            return;
        }

        return;
    }
}
