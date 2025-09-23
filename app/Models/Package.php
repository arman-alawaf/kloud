<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'type', 
        'plan', 
        'name', 
        'price', 
        'feature',
        'created_by', 
        'updated_by', 
        'deleted_by'
    ];

    public function creator() {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function editor() {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function deleter() {
        return $this->belongsTo(User::class, 'deleted_by');
    }
}
