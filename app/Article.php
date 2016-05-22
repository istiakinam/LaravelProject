<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [   //only these can be mass assigned
        'title',
        'body',
        'published_at'
    ]; 
    
    protected $dates= ['published_at']; //timestamps as Carbon instance
    
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }
    
    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>=', Carbon::now());
    }
    
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date); //
    }
    
}
