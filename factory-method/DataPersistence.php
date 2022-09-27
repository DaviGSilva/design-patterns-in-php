<?php

/**
 * Standardize the important methods
 */
interface DataPersistence
{
    public function setData(array $data): void;

    public function validate(): void;

    public function persist(): bool;
}
