<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $import_status_id
 * @property string  $status
 * @property Carbon  $created_at
 * @property Carbon  $updated_at
 */
class ImportStatus extends Model
{
    const STATUS_TODO = 'todo';

    const STATUS_PREPARING = 'preparing';

    const STATUS_LOADING = 'loading';

    const STATUS_LOADED = 'loaded';

    use HasFactory;

    protected $table = 'import_statuses';

    protected $casts = [
        'import_status_id' => 'integer',
        'status' => 'string',
    ];

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
