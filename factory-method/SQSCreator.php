<?php

class SQSCreator extends PersistenceCreator
{
    public function factoryMethod(): DataPersistence
    {
        return new SQSPersistence();
    }
}
