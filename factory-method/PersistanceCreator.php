<?php

/**
 * Creator.
 * Standardize the execution of persistence action following the Template Method.
 */
abstract class PersistenceCreator
{
    /**
     * Method responsible for determining which class of the DataPersistence family
     * will execute in the subclass.
     */
    abstract public function factoryMethod(): DataPersistence;

    /**
     * Template Method.
     * Standardizes the class independent persistence action (Sequence of methods).
     */
    public function persist(array $data): void
    {
        try {
            $persistence = $this->factoryMethod();
            $persistence->setData($data);
            $persistence->validate();
            $persistence->persist();
        } catch (Throwable $throwable) {
            exit($throwable->getMessage());
        }
    }
}
