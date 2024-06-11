<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model {
    use HasFactory;

    protected $guarded = [];

    public function scopeLanguage(Builder $builder): void {
        $builder->where('lang', app()->getLocale());
    }

    public function User() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getImagePathAttribute() {
        return url('storage/blogs/' . $this->image);
    }


    public function getLocalTitleAttribute(){
        if (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') {
            $Locale = Blog_Local::where('blog_id' , $this->id)->where('locale' , 'ar')->first();
            if($Locale){
                return $Locale->title_value;
            }else{
                return $this->title;
            }
        }
        else{
            return $this->title;
        }
    }

    public function getLocalDescriptionAttribute(){
        if (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') {
            $Locale = Blog_Local::where('blog_id' , $this->id)->where('locale' , 'ar')->first();
            if($Locale){
                return $Locale->description_value;
            }else{
                return $this->description;
            }
        }
        else{
            return $this->description;
        }
    }
    public function getLocalContentAttribute(){
        if (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') {
            $Locale = Blog_Local::where('blog_id' , $this->id)->where('locale' , 'ar')->first();
            if($Locale){
                return $Locale->content_value;
            }else{
                return $this->content;
            }
        }
        else{
            return $this->content;
        }
    }
}
