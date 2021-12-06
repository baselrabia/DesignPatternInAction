<?php







class LedgerReader
{


    public function parse($path)
    {
        $reader = new SplFileObject(realpath($path));
        $reader->setFlags(SplFileObject::READ_CSV);
        $reader->setCsvControl('\t');

        return $this->readTransactions($reader);
    }

    private function readTransactions($reader)
    {
        $transactions = [];
        foreach ($reader as $record) {
            if ($record[0] == null) {
                continue;
            }

            $transactions[] = $this->parseRecord($record);
        }

        return $transactions;
    }

    public function parseRecord($record)
    {
        $type = $this->getType(array_slice($record, -3));

        return new Transaction([
            'date' => $record[0],
            'description' => $record[1],
            'type' => $type,
        ]);
    }

    private function getType($attributes)
    {
        [$debit, $credit] = $attributes;

        if ($credit == TransactionType::NOT_APPPLICABLE) {
            return new Debit($this->toCents($debit));
        }

        return new Credit($this->toCents($credit));
    }
}
