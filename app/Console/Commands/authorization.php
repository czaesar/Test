<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class authorization extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */



    protected $signature = 'user:create {name} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get login and password after return token';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        $users=DB::table('users')->get();
        $userName=$this->argument('name');
        $userPassword=$this->argument('password');
        foreach($users as $user)
        {
//            echo " name " . $user->name;
//            echo " password " . $user->password;
            if($user->name == $userName && $user->password == $userPassword)
            {
                echo $user->remember_token;
            }
        }



    }
}
