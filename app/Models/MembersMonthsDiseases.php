<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $member_month_disease_id
 * @property integer $member_id
 * @property integer $eligible_month
 * @property integer $disease_code
 * @property string  $disease_name
 * @property string  $disease_description
 * @property Carbon  $created_at
 * @property Carbon  $updated_at
 */
class MembersMonthsDiseases extends Model
{
    use HasFactory;

    protected $table = 'members_months_diseases';

    protected $primaryKey = 'member_month_disease_id';

    protected $fillable = [
        'disease_id',
        'member_id',
        'eligible_month',
        'disease_code',
        'disease',
        'disease_description',
    ];

    protected $casts = [
        'member_id' => 'integer',
        'eligible_month' => 'integer',
        'disease_code' => 'integer',
        'disease' => 'string',
        'disease_description' => 'string',
    ];
}
