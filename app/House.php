<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    public static function search($request) {
        
        // Set default value if request is empty
        $rating = isset($request['rating']) ? $request['rating'] : '10';
        $ratingDirect = isset($request['rating']) ? '=' : '<=';
        $price_min = isset($request['price_min']) ? $request['price_min'] : '0';
        $price_max = isset($request['price_max']) ? $request['price_max'] : '99999';
        $quality = isset($request['quality']) ? $request['quality'] : '10';
        $qualityDirect = isset($request['quality']) ? '=' : '<=';

        $houses = self::where('rating', $ratingDirect, $rating)
                    ->where('price', '<', $price_max)
                    ->where('price', '>', $price_min)
                    ->where('quality', $qualityDirect, $quality)
                    ->get();
                    
        return $houses;
    }
}
