<?php
namespace App\Models;

class TransactionModel extends BaseModel
{
    protected $table = 'mytemp_transactions'; // NO prefix here!
    protected $primaryKey = 'transaction_id';
    public $timestamps = false;

    protected $fillable = [
        'transaction_id',
        'object_id',
        'transaction_object_type',
        'transaction_type',
        'amount',
        'status',
        'charge_id',
        'notes',
        'created_datetime',
    ];

}
