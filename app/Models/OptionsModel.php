<?php
namespace App\Models;

class OptionsModel extends BaseModel
{
    protected $table = 'options'; // NO prefix here!
    protected $primaryKey = 'option_id';
    public $timestamps = false;

    protected $fillable = [
        'option_id',
        'option_name',
        'option_value',
        'autoload',
    ];
}
