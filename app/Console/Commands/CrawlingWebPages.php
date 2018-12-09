<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Snoopy;

class CrawlingWebPages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $snoopy = new Snoopy;
        $snoopy->fetchtext("http://www.php.net/");
        print $snoopy->results;
    }
}