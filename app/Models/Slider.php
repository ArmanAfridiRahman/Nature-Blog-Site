<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    private static $slider, $image, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        self::$image = $request->file('slider_image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "assets/img/upload/slider/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$directory.self::$imageName;
    }

    public static function newSlider($request)
    {
        self::$imageUrl = self::uploadImage($request);
        self::$slider = new Slider();
        self::$slider->slider_heading = $request->slider_heading;
        self::$slider->slider_image = self::$imageUrl;
        self::$slider->slider_description = $request->slider_description;
        self::$slider->save();
    }
}
