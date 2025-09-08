<?php
namespace App\Models;

class TransactionModel extends BaseModel
{
    protected $table = 'mytemp_transactions'; // NO prefix here!
    protected $primaryKey = 'transaction_id';
    public $timestamps = false;

}
