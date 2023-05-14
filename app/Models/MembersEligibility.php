<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $member_eligible_id
 * @property integer $member_id
 * @property integer $eligible_month
 * @property integer $address_id
 * @property integer $disease_id
 * @property Carbon  $created_at
 * @property Carbon  $updated_at
 */
class MembersEligibility extends Model
{
    use HasFactory;

    protected $table = 'members_eligibility';

    protected $primaryKey = 'member_eligible_id';

    protected $fillable = [
        'member_id',
        'eligible_month',
        'address_id',
        'disease_id',
    ];

    protected $casts = [
        'member_id' => 'integer',
        'eligible_month' => 'integer',
        'address_id' => 'integer',
        'disease_id' => 'integer',
    ];
}
