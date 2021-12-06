<?php

namespace App;

class Load extends Command
{
    // ...

    public function handle(ledgerReader $reader)
    {

         $transactions = $reader->parse($this->argument('input'));

        foreach ($transactions as $transaction) {
            $transaction->categorize();
            $transaction->save();
        }
    }
}
