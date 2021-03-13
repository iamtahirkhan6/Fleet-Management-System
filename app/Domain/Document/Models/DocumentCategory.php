<?php

namespace App\Domain\Document\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Document\Models\DocumentCategory
 *
 * @property-read \App\Domain\Document\Models\Document $categories
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory query()
 * @mixin \Eloquent
 */
class DocumentCategory extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo('App\Domain\Document\Models\Document', 'id', 'document_category_id');
    }
}
