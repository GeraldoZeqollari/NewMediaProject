<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailsData extends Model
{

    use HasFactory;

    use SoftDeletes;
    protected $table = 'details_data';
    protected $dates = ['deleted_at'];
    public $timestamps = false;


    protected $fillable = [
        'cedi',
        'childWeightFrom',
        'childWeightTo',
        'color_code',
        'color_description',
        'countryImages',
        'defaultSku',
        'preferredEan',
        'sapAssortmentLevel',
        'sapPrice',
        'season',
        'showOnLineSku',
        'size_code',
        'size_description',
        'skuID',
        'skuName',
        'stateOfArticle',
        'umSAPprice',
        'volume',
        'weight'

    ];
}
