<?php

namespace App\Domain\Document\Models;

use App\Traits\MultiTenable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Document\Models\Document
 *
 * @property int $id
 * @property string $path
 * @property int $document_type_id
 * @property string $documentable_type
 * @property int $documentable_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $documentable
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\Document\Models\DocumentType[] $types
 * @property-read int|null $types_count
 * @method static \Illuminate\Database\Eloquent\Builder|Document newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document query()
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDocumentTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDocumentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereDocumentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Document whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
