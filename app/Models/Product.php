<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    // protected $table = 'productos';
    // protected $primaryKey = 'id';
    // public $timestamps = true;
    // protected $guarded = [];
    protected $fillable = [
        'name',
        'description',
        'unit_value',
        'category_id'
        // Otros campos...
    ];

    // protected $hidden = [
    // ];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    public function scopeByCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    public function getFormattedUnitValueAttribute()
    {
        return number_format($this->unit_value, 2) . ' USD'; // Formateo de valor unitario con dos decimales
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value); // Guardar siempre el nombre en minúsculas
    }
}
