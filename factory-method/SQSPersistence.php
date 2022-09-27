<?php

class SQSPersistence implements DataPersistence
{
    public function setData(array $data): void
    {
        echo 'Receives: ' . json_encode($data);
    }

    public function validate(): void
    {
        echo 'SQS validation';
    }

    public function persist(): bool
    {
        echo 'Push command in AWS queue';
        return true;
    }
}
