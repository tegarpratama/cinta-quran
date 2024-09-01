<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class KajianCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'kajian_categories';
    protected $guarded = [];

    /**
     * Get all of the comments for the DonationCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kajian()
    {
        return $this->hasMany(Kajian::class, 'kajian_category_id', 'id');
    }
}
