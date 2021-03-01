<?php

namespace App\Domain\Document\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentType extends Model
{
    use HasFactory;
    use MultiTenable;

    protected $fillable = ['name'];

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
