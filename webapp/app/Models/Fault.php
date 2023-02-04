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
        'status',
        'priority'
    ];

    protected $dispatchesEvents = [
        'created' => FaultCreated::class,
    ];

    // A user can author many faults
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Many faults can belong to a project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
