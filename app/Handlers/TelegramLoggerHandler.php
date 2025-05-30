<?php

namespace App\Handlers;

use Monolog\Handler\AbstractProcessingHandler;
use Monolog\LogRecord;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramLoggerHandler extends AbstractProcessingHandler {
    protected function write(LogRecord $record): void {
        $levelMarkers = [
            'DEBUG'     => '🐛 DEBUG',
            'INFO'      => 'ℹ️ INFO',
            'NOTICE'    => '📝 NOTICE',
            'WARNING'   => '⚠️ WARNING',
            'ERROR'     => '❌ ERROR',
            'CRITICAL'  => '🔥 CRITICAL',
            'ALERT'     => '🚨 ALERT',
            'EMERGENCY' => '🚩 EMERGENCY',
        ];
        $levelMarker = $levelMarkers[strtoupper($record['level_name'])] ?? 'LOG';

        $message = "<b>Time:</b> " . $record['datetime']->format('Y-m-d H:i:s') . "\n" .
            "<b>Level:</b> " . $levelMarker . "\n" .
            "<b>Message:</b> " . $record['message'];

        if (!empty($record['context'])) {
            $contextDetails = json_encode($record['context'], JSON_PRETTY_PRINT);
            $message .= "\n<b>Details:</b>\n<pre>" . htmlspecialchars($contextDetails) . "</pre>";
        }

        Telegram::sendMessage([
            'chat_id' => -1002325072014,
            'text' => $message,
            'parse_mode' => 'HTML',
        ]);
    }
}
