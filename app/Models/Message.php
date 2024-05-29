<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Message extends Model
{
    use HasFactory;
    protected $fillable = ['status'];
    
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function message_category(): BelongsTo
    {
        return $this->belongsTo(MessageCategory::class);
    }
}
