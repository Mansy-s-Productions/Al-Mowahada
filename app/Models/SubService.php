<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class SubService extends Model {
    use HasFactory;

    protected $guarded = [];

    public function scopeLanguage(Builder $builder): void {
        $builder->where('lang', app()->getLocale());
    }

    public function User() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Service() {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function getImagePathAttribute() {
        return url('storage/sub-services/' . $this->image);
    }
}
