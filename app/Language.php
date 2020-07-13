<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Resume;

class Language extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'description'
    ];

    public function resumes()
    {
        return $this->belongsToMany(Resume::class);
    }
}
