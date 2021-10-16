<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
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
