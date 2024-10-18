<?php
use Bubblegum\Candyman\Candyman;

use App\Console\Commands\Info;

Candyman::registerCommand('info', Info::class);
