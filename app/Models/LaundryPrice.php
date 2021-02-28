<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaundryPrice extends Model
{
    use HasFactory;

    protected $guarded = []; //SEKALIAN UNTUK MODULE BERIKUTNYA

    public function type()
    {
        return $this->belongsTo(LaundryType::class, 'laundry_type_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
