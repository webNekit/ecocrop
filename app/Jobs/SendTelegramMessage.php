<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class SendTelegramMessage implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;

    /**
     * Create a new job instance.
     */
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // https://api.telegram.org/bot
        // Получаем переменные из файла .env
        $botToken = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        $text = "Новая заявка от: {$this->name}\n\n{$this->email}";

        Http::post("https://api.telegram.org/bot/{$botToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $text
        ]);
    }
}
