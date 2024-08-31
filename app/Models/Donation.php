<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'donations';
    protected $guarded = [];

    /**
     * Get the user that owns the Donation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(DonationCategory::class, 'category_id', 'id');
    }
}
