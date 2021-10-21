<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'products';
    protected $dates = ['deleted_at'];
    public $timestamps = false;
    protected $fillable = [
        'bleachingCode',
        'defaultLanguage',
        'dryCleaningCode',
        'dryingCode',
        'fasteningTypeCode',
        'ironingCode',
        'productID',
        'pulloutTypeCode',
        'sapPacket',
        'updateImages',
        'waistlineCode',
        'washabilityCode'

    ];
}
