<?php

namespace App\Domain\Document\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->hasMany('App\Domain\Document\Models\DocumentCategory', 'id', 'document_category_id');
    }

    public function documentable()
    {
        return $this->morphTo();
    }
}
