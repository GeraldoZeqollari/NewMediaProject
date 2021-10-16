<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderData extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'bag',
        'bleachingDescription',
        'brand',
        'brandCode',
        'catalog',
        'composition',
        'creationDateInDatabase',
        'custom1',
        'custom2',
        'custom3',
        'drinkHolder',
        'dryCleaningDescription',
        'dryingDescription',
        'EShopDisplayName',
        'EShopLongDescription',
        'ergonomicSeat',
        'fasteningTypeDescription',
        'fasteningTypeTextile',
        'flat',
        'freeDelivery',
        'gender',
        'indicatorOfItHasToBeAssembled',
        'ironingDescription',
        'lastDateChanged',
        'lastUserChanged',
        'productFeatures',
        'productFeatures1',
        'productMissingFeatures',
        'productMissingFeatures1',
        'productStatus',
        'pulloutType',
        'pulloutTypeDescription',
        'punnet',
        'sapCategoryID',
        'sapCategoryName',
        'sapDivisionID',
        'sapDivisionName',
        'sapFamilyDescription',
        'sapFamilyID',
        'sapFamilyName',
        'sapMacrocategoryID',
        'sapMacrocategoryName',
        'sapName',
        'sapUniverseID',
        'sapUniverseName',
        'showOnLine',
        'sizeGuide',
        'sourceID',
        'userOfCreation',
        'waistlineDescription',
        'washability',
        'washabilityDescription',
        'zipStopper',
        'locale'
    ];
}
