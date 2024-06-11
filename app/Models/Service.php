<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Service extends Model {
    use HasFactory;

    protected $guarded = [];

    public function scopeLanguage(Builder $builder): void {
        $builder->where('lang', app()->getLocale());
    }

    public function scopeFeatured(Builder $query): void {
        $query->where('is_featured', 1);
    }

    public function User() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function Parent() {
        return $this->belongsTo(Service::class, 'parent_id');
    }

    public function SubServices() {
        return $this->hasMany(Service::class, 'parent_id');
    }
    public function getImagePathAttribute() {
        return Storage::url('services/' . $this->image);
    }

    public function getLocalTitleAttribute(){
        if (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') {
            $Locale = Service_Local::where('service_id' , $this->id)->where('locale' , 'ar')->first();
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
            $Locale = Service_Local::where('service_id' , $this->id)->where('locale' , 'ar')->first();
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
            $Locale = Service_Local::where('service_id' , $this->id)->where('locale' , 'ar')->first();
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
