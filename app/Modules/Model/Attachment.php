<?php

namespace App\Modules\Model;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    //
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
