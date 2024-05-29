<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Employee extends Model
{
    use HasFactory;


    public function assigned_message(): HasMany
    {
        return $this->hasMany(Message::class)->where('status', 'assigned');
    }
    public function solved_message(): HasMany
    {
        return $this->hasMany(Message::class)->where('status', 'solved');
    }

}
