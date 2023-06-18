<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction_info extends Model
{
    use HasFactory;

    public function documents() {
        return $this->hasMany(Document::class, 'transaction_info_id');
    }
}
