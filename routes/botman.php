<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Oi', function ($bot) {
    $bot->reply('Oi!');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
