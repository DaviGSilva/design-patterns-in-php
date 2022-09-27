<?php

$data = ['field' => 'field_value'];

//$creator = new DatabaseCreator();
$creator = new SQSCreator();

$creator->persist($data);
