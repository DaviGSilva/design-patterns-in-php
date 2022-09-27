<?php

class DatabasePersistence implements DataPersistence
{
    public function setData (array $data): void
    {
        echo 'Receives: ' . json_encode($data);
    }

    public function validate(): void
    {
        echo 'Validation of data in DB';
    }

    public function persist(): bool
    {
        echo 'Insert or Update SQL statement';
        return true;
    }
}
