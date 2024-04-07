<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;


class NewQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user)
    {
    $this->user = $user;
    
    }

    
    public function handle()
    {
        DB::connection('mysql')->table('queue')->insertOrIgnore([
            'name'=>$this->user]);
        
        /*
        DB::connection('mysql')->table('queue')->insertOrIgnore([
            'name'=>$this->user]);
        */
    
    return 1;
    }
}
