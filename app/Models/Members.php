<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property integer $member_id
 * @property string  $first_name
 * @property string  $last_name
 * @property Carbon  $date_of_birth
 * @property string  $gender
 * @property string  $email
 * @property Carbon  $created_at
 * @property Carbon  $updated_at
 */
class Members extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $primaryKey = 'member_id';

    protected $fillable = [
        'member_id',
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'email',
    ];

    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'date_of_birth' => 'date',
        'gender' => 'string',
        'email' => 'email',
    ];
}
