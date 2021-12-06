<?php





class CsvParser implements Parser
{
    public function parse($line): Transaction
    {
        $record = str_getcsv($line);
        [$date, $description] = $record;

        return new Transaction([
            'date' => Carbon::parse($date),
            'description' => $description,
            'type' => $this->getType(array_slice($record, -2)),
        ]);
    }

    private function getType($attributes)
    {
        [$debit, $credit] = $attributes;

        return $credit ? new Credit($credit) : new Debit($debit);
    }
}