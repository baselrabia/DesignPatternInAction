<?php
 


class LedgerReader
{


    private $parser;

    public function __construct($format)
    {
        $this->parser = $this->makeParser($format);
    }


    public function parse($path, $format = "row")
    {
        $reader = new SplFileObject(realpath($path)); 

        return $this->readTransactions($reader, $format);
    }

    private function readTransactions($reader)
    {

        $transactions = [];
        foreach ($reader as $line) {
            if (empty($line)) {
                continue;
            }

            $transactions[] = $this->parser->parse($line);
        }

        return $transactions;
    }

    private function makeParser($format)
    {
        switch ($format) {
            case "row":
                return new RowParser();
            case "csv":
                return new CsvParser();
            default:
                throw new Exception("Unknown format: $format");
        }
    }

 
}
