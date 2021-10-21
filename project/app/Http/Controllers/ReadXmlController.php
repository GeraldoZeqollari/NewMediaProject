<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\XmlData;
use App\Models\HeaderData;
use App\Models\DetailsData;
use App\Http\Controllers\Controller;

class ReadXmlController extends Controller
{
    public function index()
    {
        return view("xml-data");
    }

    
    public function store()
    {

        $xmlObject = simplexml_load_file('test.xml');
        $names = $xmlObject->xpath('/product');
        $names1 = $xmlObject->xpath('/product/definitions/detailsData');
        $names2 = $xmlObject->xpath('/product/definitions/headerData');


        $xml = new DetailsData;
        $xml1 = new HeaderData;
        $xml3 = new Products;


        foreach ($names1 as $data) {


            $xml->cedi = $data->cedi;
            $xml->childWeightFrom = $data->childWeightFrom;
            $xml->childWeightTo = $data->childWeightTo;
            $xml->color_code = $data->color_code;
            $xml->color_description = $data->color_description;
            $xml->countryImages = $data->countryImages;
            $xml->defaultSku = $data->defaultSku;
            $xml->preferredEan = $data->preferredEan;
            $xml->sapAssortmentLevel = $data->sapAssortmentLevel;
            $xml->sapPrice = $data->sapPrice;
            $xml->season = $data->season;
            $xml->showOnLineSku = $data->showOnLineSku;
            $xml->size_code = $data->size_code;
            $xml->size_description = $data->size_description;
            $xml->skuID = $data->skuID;
            $xml->skuName = $data->skuName;
            $xml->stateOfArticle = $data->stateOfArticle;
            $xml->umSAPprice = $data->umSAPprice;
            $xml->volume = $data->volume;
            $xml->weight = $data->weight;
        }

        // foreach ($names as $data) {
        //     $xml3->bleachingCode = $data->bleachingCode;
        //     $xml3->defaultLanguage = $data->defaultLanguage;
        //     $xml3->dryCleaningCode = $data->dryCleaningCode;
        //     $xml3->dryingCode = $data->dryingCode;
        //     $xml3->fasteningTypeCode = $data->fasteningTypeCode;
        //     $xml3->ironingCode = $data->ironingCode;
        //     $xml3->productID = $data->productID;
        //     $xml3->pulloutTypeCode = $data->pulloutTypeCode;
        //     $xml3->sapPacket = $data->sapPacket;
        //     $xml3->updateImages = $data->updateImages;
        //     $xml3->waistlineCode = $data->waistlineCode;
        //     $xml3->washabilityCode = $data->washabilityCode;
        // }

        // foreach ($names2 as $data) {
       
        // $xml1->bag = $data->bag;
        // $xml1->bleachingDescription = $data->bleachingDescription;
        // $xml1->brand = $data->brand;
        // $xml1->brandCode = $data->brandCode;
        // $xml1->catalog = $data->catalog;
        // $xml1->composition = $data->composition;
        // $xml1->creationDateInDatabase = $data->creationDateInDatabase;
        // $xml1->custom1 = $data->custom1;
        // $xml1->custom2 = $data->custom2;
        // $xml1->custom3 = $data->custom3;
        // $xml1->drinkHolder = $data->drinkHolder;
        // $xml1->dryCleaningDescription = $data->dryCleaningDescription;
        // $xml1->dryingDescription = $data->dryingDescription;
        // $xml1->EShopDisplayName = $data->EShopDisplayName;
        // $xml1->EShopLongDescription = $data->EShopLongDescription;
        // $xml1->ergonomicSeat = $data->ergonomicSeat;
        // $xml1->fasteningTypeDescription = $data->fasteningTypeDescription;
        // $xml1->fasteningTypeTextile = $data->fasteningTypeTextile;
        // $xml1->freeDelivery = $data->freeDelivery;
        // $xml1->gender = $data->gender;
        // $xml1->indicatorOfItHasToBeAssembled = $data->indicatorOfItHasToBeAssembled;
        // $xml1->ironingDescription = $data->ironingDescription;
        // $xml1->lastDateChanged = $data->lastDateChanged;
        // $xml1->lastUserChanged = $data->lastUserChanged;
        // $xml1->productFeatures = $data->productFeatures;
        // $xml1->productFeatures = $data->productFeatures;
        // $xml1->productMissingFeatures = $data->productMissingFeatures;
        // $xml1->productMissingFeatures = $data->productMissingFeatures;
        // $xml1->productStatus = $data->productStatus;
        // $xml1->pulloutType = $data->pulloutType;
        // $xml1->pulloutTypeDescription = $data->pulloutTypeDescription;
        // $xml1->punnet = $data->punnet;
        // $xml1->sapCategoryID = $data->sapCategoryID;
        // $xml1->sapCategoryName = $data->sapCategoryName;
        // $xml1->sapDivisionID = $data->sapDivisionID;
        // $xml1->sapDivisionName = $data->sapDivisionName;
        // $xml1->sapFamilyDescription = $data->sapFamilyDescription;
        // $xml1->sapFamilyID = $data->sapFamilyID;
        // $xml1->sapFamilyName = $data->sapFamilyName;
        // $xml1->sapMacrocategoryID = $data->sapMacrocategoryID;
        // $xml1->sapMacrocategoryName = $data->sapMacrocategoryName;
        // $xml1->sapName = $data->sapName;
        // $xml1->sapUniverseID = $data->sapUniverseID;
        // $xml1->sapUniverseName = $data->sapUniverseName;
        // $xml1->showOnLine = $data->showOnLine;
        // $xml1->sizeGuide = $data->sizeGuide;
        // $xml1->sourceID = $data->sourceID;
        // $xml1->userOfCreation = $data->userOfCreation;
        // $xml1->waistlineDescription = $data->waistlineDescription;
        // $xml1->washability = $data->washability;
        // $xml1->washabilityDescription = $data->washabilityDescription;
        // $xml1->zipStopper = $data->zipStopper;
        // }

       // $xml3->save();
        // $xml1->save();
        $xml->save();

            
        return back()->with('success', 'Data saved successfully!');
    }
}
