<?php

namespace App\Models;

use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, Searchable;

    protected $guarded = [];

    /**
     * Get the name of the index associated with the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'products_index';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected function marge(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => $this->getMarge($attributes)
        );
    }

    private function getMarge($attributes)
    {
        if(empty($attributes['sales_price']) || empty($attributes['price']) || $attributes['price'] < 1) {

            return 0;

        } else {
            
            return ($attributes['sales_price'] / 1.21) / ($attributes['price']);
        }
   
    }
    
    protected function vat(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => (float)($attributes['sales_price'] * 0.21)
        );
    }

    protected function pros(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => json_decode($value, true)
        );
    }

    protected function cons(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => json_decode($value, true)
        );
    }

    protected function features(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => json_decode($value, true)
        );
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";

        if(empty($value)) {  
            $this->attributes[$attribute_name] = "default-product.png";
            return;
        }

        
        // or use your own disk, defined in config/filesystems.php
        $disk = 'local';
        $destination_path = "public/products/";
       
        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (Str::startsWith($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value)->encode('jpg', 70);
            // resize the image to a height of 400 and constrain aspect ratio (auto width)
            $image->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            });

            // 1. Generate a filename.
            $filename = md5($value.time()).'.jpg';

            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());

            // 3. Delete the previous image, if there was one.
            if(!empty($this->{$attribute_name}))
                \Storage::disk($disk)->delete($this->{$attribute_name});

            // 4. Save the public path to the database
            // but first, remove "public/" from the path, since we're pointing to it
            // from the root folder; that way, what gets saved in the db
            // is the public URL (everything that comes after the domain name)
            $public_destination_path = Str::replaceFirst('public/', '', $destination_path);
            $this->attributes[$attribute_name] = $public_destination_path.'/'.$filename;
        }
    }
}
