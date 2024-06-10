<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model {
    use HasFactory;

    protected $guarded = [];

    public function getImagePathAttribute() {
        return url('storage/projects_gallery/' . $this->image);
    }
}
