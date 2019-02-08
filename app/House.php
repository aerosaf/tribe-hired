<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    // Default filter values
    const RATING = 10;
    const PRICE_MAX = 99999;
    const PRICE_MIN = 0;
    const QUALITY = 10;

    protected $rating;
    protected $ratingDirect;
    protected $priceMin;
    protected $priceMax;
    protected $quality;
    protected $qualityDirect;


    public function getRequest($request){
        // Set default value if request is empty
        $this->rating = $request->input('rating', self::RATING);
        $this->ratingDirect = $request->input('rating') === null ? '<=' : '=';
        $this->priceMin = $request->input('price_min', self::PRICE_MIN);
        $this->priceMax = $request->input('price_max', self::PRICE_MAX);
        $this->quality = $request->input('quality', self::QUALITY);
        $this->qualityDirect = $request->input('quality') === null ? '<=' : '=';

        return $this;
    }

    public function getHouses(){
        // Query filtered houses
        $houses = self::where('rating', $this->ratingDirect, $this->rating)
                    ->where('price', '<', $this->priceMax)
                    ->where('price', '>', $this->priceMin)
                    ->where('quality', $this->qualityDirect, $this->quality)
                    ->get();

        return $houses;
    }

    public static function search($request) {
        return (new static)->getRequest($request)->getHouses();
    }
}
