<?php

namespace App\Domain\Document\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;
    use MultiTenable;

    protected $fillable = ['path', 'document_type_id', 'documentable_id', 'documentable_type', 'company_id'];

    public function documentable()
    {
        return $this->morphTo();
    }

    public function types()
    {
        return $this->hasMany(DocumentType::class);
    }
}
