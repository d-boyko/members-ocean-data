<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $member_medicare_id
 * @property integer $member_id
 * @property string  $medicare_id
 */
class MembersMedicareIds extends Model
{
    use HasFactory;

    protected $table = 'members_medicare_ids';

    protected $primaryKey = 'member_medicare_id';

    protected $fillable = [
        'member_id',
        'medicare_id',
    ];

    protected $casts = [
        'member_id' => 'integer',
        'medicare_id' => 'string',
    ];
}
