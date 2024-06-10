<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function SubServices() {
        return $this->hasMany(SubService::class, 'service_id');
    }

    public function getImagePathAttribute() {
        return url('storage/services/' . $this->image);
    }
}
