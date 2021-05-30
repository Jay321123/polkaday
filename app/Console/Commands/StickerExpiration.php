<?php

namespace App\Console\Commands;

use App\Parkers;
use Carbon\Carbon;
use Illuminate\Console\Command;

class StickerExpiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sticker';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Manage Sticker expiration update';

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
     * @return int
     */
    public function handle()
    {
            $parkers = Parkers::whereDate('qr_expiration',Carbon::now())
            ->whereYear('qr_expiration',Carbon::now())
            ->get();
            foreach($parkers as $parker){
                $parker->update([
                    'expiration_status' =>'expired'
                ]);
            }
    }
}
