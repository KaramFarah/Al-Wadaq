<?php

namespace App\Models\Admin;

use Spatie\Image\Enums\Fit;
use App\Models\Admin\Category;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Image\Enums\CropPosition;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ['photo'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('home-page')
            ->crop(1280, 730, CropPosition::Center)
            // ->fit(Fit::FillMax, 1280, 730)
            ->nonQueued();

        $this->addMediaConversion('category-page')
            // ->fit(Fit::Fill, 1332, 1644)
            // ->crop(1332, 1644, CropPosition::Center)
            // ->fit(Fit::FillMax, 1332, 1644)
            ->fit(Fit::Contain, 1332, 1644) // Maintain aspect ratio
            // ->crop(CropPosition::Center) // Center crop if needed
            ->nonQueued();
    }

    public function getOriginalImageAttribute(){
        $image = $this->getMedia('products')->last();
        if($image){
            return $image->getUrl();
        }
        return false;
    }
    public function getCategoryPageImageAttribute(){
        $image = $this->getMedia('products')->last();
        if($image){
            return $image->getUrl('category-page');
        }
        return false;
    }
    public function getHomeProductAttribute(){
        $image = $this->getMedia('products')->last();
        if($image){
            return $image->getUrl('home-page');
        }
        return false;
    }
}
