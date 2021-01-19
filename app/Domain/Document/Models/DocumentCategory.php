<?php

namespace App\Domain\Document\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Document\Models\DocumentCategory
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Domain\Document\Models\Document $categories
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory whereUpdatedAt($value)
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
