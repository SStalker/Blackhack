<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $dates = ['published_at'];
  protected $fillable = ['title', 'content', 'image_path', 'published_at'];

  public function setTitleAttribute($value)
  {
    $this->attributes['title'] = $value;

    if (! $this->exists) {
      $this->attributes['slug'] = str_slug($value);
    }
  }

  public function tags()
  {
    return $this->belongsToMany('App\Tag')->withTimestamps();
  }

  public function getTagListAttribute()
  {
    return $this->tags->pluck('id')->all();
  }
}
