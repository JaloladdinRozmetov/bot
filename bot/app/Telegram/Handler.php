<?php

namespace App\Telegram;

use DefStudio\Telegraph\Facades\Telegraph;
use DefStudio\Telegraph\Handlers\WebhookHandler;
use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\Keyboard\Keyboard;
use DefStudio\Telegraph\Models\TelegraphChat;
use Illuminate\Support\Facades\Storage;

class Handler extends WebhookHandler
{
    public function start()
    {
        $this->reply("salom")->send();
    }


}
