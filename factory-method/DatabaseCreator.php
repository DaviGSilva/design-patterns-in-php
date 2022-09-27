<?php

class DatabaseCreator extends PersistenceCreator
{
    public function factoryMethod(): DataPersistence
    {
        return new DatabasePersistence();
    }
}
