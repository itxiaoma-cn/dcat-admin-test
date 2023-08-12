<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'location',
        'address',
        'column_id'
    ];

    public function column()
    {
        return $this->belongsTo(Column::class);
    }
}