<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsData extends Model
{

    use HasFactory;


    public $timestamps = false;

    // protected $primaryKey = 'id';
    // protected $table = 'xml_data';
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
