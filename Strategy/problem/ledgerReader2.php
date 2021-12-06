<?php
 


class LedgerReader
{


    public function parse($path, $format = "row")
    {
        $reader = new SplFileObject(realpath($path));
        $reader->setFlags(SplFileObject::READ_CSV);
 
        if($format == "row")
        {
             $reader->setCsvControl('\t');
        }
        else if($format == "col")
        {
             $reader->setCsvControl(',');
        }else {
            throw new Exception("Invalid format");
        }

        return $this->readTransactions($reader, $format);
    }

    private function readTransactions($reader, $format)
    {
        $transactions = [];
        foreach ($reader as $record) {
            if ($record[0] == null) {
                continue;
            }

            if($format == "row")
            {
                $transactions[] = $this->parseRowRecord($record);
            }
            else 
            {
                $transactions[] = $this->parseCsvRecord($record);
            }

         }

        return $transactions;
    }

    public function parseRowRecord($record)
    {
        $type = $this->getRowType(array_slice($record, -3));

        return new Transaction([
            'date' => $record[0],
            'description' => $record[1],
            'type' => $type,
        ]);
    }



    private function getRowType($attributes)
    {
        [$debit, $credit] = $attributes;

        if ($credit == TransactionType::NOT_APPPLICABLE) {
            return new Debit($this->toCents($debit));
        }

        return new Credit($this->toCents($credit));
    }

    public function parseCsvRecord($record)
    {
        $type = $this->getCsvType(array_slice($record, -2));

        return new Transaction([
            'date' => $record[0],
            'description' => $record[1],
            'type' => $type,
        ]);
    }



    private function getCsvType($attributes)
    {
        [$debit, $credit] = $attributes;

        if (empty($credit)) {
            return new Debit($debit);
        }

        return new Credit($credit);
    }
}
