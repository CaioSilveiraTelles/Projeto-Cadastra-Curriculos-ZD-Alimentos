<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Skill;
use App\Career;
use App\Education;

class Resume extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'email', 'birth', 'name', 'nationality', 'phone', 'cover_letter'
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function careers()
    {
        return $this->hasMany(Career::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }
}
