<?php

namespace App\Domain\Document\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentCategory extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo('App\Domain\Document\Models\Document', 'id', 'document_category_id');
    }
}
