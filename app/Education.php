<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Resume;

class Education extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'resume_id', 'school', 'begin', 'end', 'course' ,'local',
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}
