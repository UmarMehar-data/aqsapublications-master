<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'purchase_price',
        'sale_price',
        'discount',
        'net_price',
        'status',
    ];


    /**
     * Get the book that owns the BookPrice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}
