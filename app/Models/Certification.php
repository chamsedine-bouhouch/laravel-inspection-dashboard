<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'date_of_examination', 
        'date_of_report', 
        'cerificate_number', 
        'client_name', 
        'location', 
        'report_pdf', 
        'checklist_id'
    ];


    // relationships
    public function checklist()
    {
        return $this->belongsTo(Checklist::class);
    }
}
