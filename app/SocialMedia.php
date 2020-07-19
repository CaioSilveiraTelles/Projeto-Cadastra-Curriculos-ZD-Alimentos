<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Resume;

class SocialMedia extends Model
{
    use SoftDeletes;

    public $table = 'social_medias';
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'resume_id', 'link', 'description', 'icon',
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }

    public function getLinkAttribute($value){
        return str_replace('www.', '', str_replace('//', '', str_replace('http:', '', str_replace('https:', '', $value))));
    }

}
