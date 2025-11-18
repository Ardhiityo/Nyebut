<?php

namespace Arya\Nyebut\Commands;

use Arya\Nyebut\Nyebut;
use Illuminate\Console\Command;

class NyebutCommand extends Command
{
    protected $signature = 'nyebut {number}';
    protected $description = 'Sebuah package untuk merubah number menjadi sebutan angka, contoh 100 menjadi seratus';

    public function handle()
    {
        $this->info(Nyebut::toText($this->argument('number')));
    }
}
