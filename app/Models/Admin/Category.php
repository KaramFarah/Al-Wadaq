<?php

namespace App\Models\Admin;


use Spatie\Image\Enums\Fit;
use App\Models\Admin\Product;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Image\Enums\CropPosition;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\Conversions\Manipulations;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Category extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ['photo'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('squer')
            ->fit(Fit::FillMax, 800, 800)
            ->nonQueued();
    }

    public function getOriginalImageAttribute(){
        $image = $this->getMedia('categories')->last();
        if($image){
            return $image->getUrl();
        }
        return false;
    }
    public function getSquerImageAttribute(){
        $image = $this->getMedia('categories')->last();
        if($image){
            return $image->getUrl('squer');
        }
        return false;
    }
}