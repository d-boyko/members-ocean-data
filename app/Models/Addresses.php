<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $address_id
 * @property integer $member_id
 * @property integer $eligible_month
 * @property string  $street
 * @property string  $region
 * @property integer $index
 */
class Addresses extends Model
{
    use HasFactory;

    protected $table = 'addresses';

    protected $primaryKey = 'address_id';

    protected $fillable = [
        'address_id',
        'member_id',
        'eligible_month',
        'street',
        'region',
        'index',
    ];

    protected $casts = [
        'address_id' => 'integer',
        'member_id' => 'integer',
        'eligible_month' => 'integer',
        'street' => 'string',
        'region' => 'string',
        'index' => 'string',
    ];
}
