<?php

namespace App\Console\Commands;

use Bubblegum\Candyman\Command;
use Bubblegum\Candyman\Console;

class Info extends Command
{
    protected string $info = 'prints bubblegum info';

    public function handle($args): void
    {
        $file = file_get_contents('composer.json');
        if ($file === false) {
            throw new \Exception('Unable to read composer.json');
        }
        $json = json_decode($file, true);
        Console::info($json['description']);
        $bubblegumData = [
            'version' => $json['version'],
            'licence' => $json['license'],
            'founder' => $json['authors'][0]['name'],
        ];
        foreach ($bubblegumData as $key => $value) {
            Console::info("{$key}: {$value}");
        }
    }

}