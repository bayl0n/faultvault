<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    // A project belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A project has many faults
    public function project()
    {
        return $this->hasMany(Fault::class);
    }
}
