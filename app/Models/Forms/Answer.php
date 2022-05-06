<?php

namespace App\Models\Forms;

use App\Models\Checklist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    
      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['value','comment','checklist_id','question_id'];

      // relationships
      public function question()
      {
        return $this->belongsTo(Question::class);
      }
      
      public function checklist()
      {
        return $this->belongsTo(Checklist::class);
      }
}
