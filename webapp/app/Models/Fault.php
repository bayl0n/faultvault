<?php

namespace App\Models;

use App\Events\FaultCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fault extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    protected $dispatchesEvents = [
        'created' => FaultCreated::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
