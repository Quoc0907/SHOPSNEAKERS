<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['user_id', 'name', 'phone', 'position'];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
