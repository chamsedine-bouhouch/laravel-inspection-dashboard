<?php

namespace App\Models;

use App\Models\Forms\Answer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'date_inspection',
        'rapport_pdf',
        'stiker_png',
        'image',
        'owner',
        'manufacturer',
        'manufacturer_number',
        'derricking',
        'user_id'
    ];
   
    // relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function certification()
    {
        return $this->hasOne(Certification::class);
    }

    public function equipments()
    {
        return $this->hasMany(Equipment::class);
    }
    
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
