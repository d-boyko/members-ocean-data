<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $member_status_id
 * @property integer $member_id
 * @property bool    $is_active
 */
class MembersStatuses extends Model
{
    use HasFactory;

    protected $primaryKey = 'member_status_id';

    protected $fillable = [
        'member_id',
        'eligible_month',
        'is_active',
    ];

    protected $casts = [
        'member_id' => 'integer',
        'eligible_month' => 'integer',
        'is_active' => 'bool'
    ];
}
