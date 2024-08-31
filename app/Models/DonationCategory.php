<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class DonationCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categories';
    protected $guarded = [];

    /**
     * Get all of the comments for the DonationCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function donation()
    {
        return $this->hasMany(Donation::class, 'category_id', 'id');
    }
}
