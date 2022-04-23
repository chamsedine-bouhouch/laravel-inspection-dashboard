<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class checklist extends Model
{
    use Notifiable ;
    protected $table='checklist';
    protected $fillable =[
        'titel' ,
        'date_inspection ',
        ' rapport_pdf ' , 
        'stiker_png' 
    ];
}
