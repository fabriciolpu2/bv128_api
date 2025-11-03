<?php

namespace App\Logging;

use App\Jobs\SendDiscordLogJob;
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;

class DiscordLogger
{
    public function __invoke(array $config)
    {
        $logger = new Logger('discord');

        $logger->pushHandler(new class($config['level'] ?? 'error') extends AbstractProcessingHandler {
            protected function write(array $record): void
            {
                $url = config('logging.channels.discord.host');

                $payload = [
                    'content' => "**[{$record['level_name']}]** " . $record['message']
                ];
                SendDiscordLogJob::dispatch($url, $payload);
            }
        });

        return $logger;
    }
}
