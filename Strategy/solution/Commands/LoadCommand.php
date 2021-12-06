<?php

namespace App;

class Load extends Command
{
    // ...

    public function handle()
    {

        $reader = new LedgerReader($this->option('format'));
        $transactions = $reader->parse($this->argument('input'));

        foreach ($transactions as $transaction) {
            $transaction->categorize();
            $transaction->save();
        }
    }
}
