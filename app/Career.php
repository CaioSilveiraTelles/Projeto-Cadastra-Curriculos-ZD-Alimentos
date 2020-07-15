<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Resume;

class Career extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'resume_id', 'company', 'begin', 'end', 'role' ,'responsabilities', 'city', 'country', 'state' /*RS - RJ...*/
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }

    public function getBeginAttribute($value){
        return substr($value, 3);
    }

    public function getEndAttribute($value){
        return substr($value ?? '123'.__('resume.current'), 3);
    }
}
