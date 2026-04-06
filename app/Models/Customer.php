<?php

require_once "app/models/Core/table.php";

class models_Customer extends models_Core_Table
{
    public $tableName = 'customers';
    public $primaryKey = 'customer_id';
}