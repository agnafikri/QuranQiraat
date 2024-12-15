<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surahs extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'arabic_name', 'description', 'total_ayah', 'category',];
    protected $table = 'surahs';

    public function ayahs(): HasMany{
        return $this->hasMany(Ayahs::class);
    }


    public function scopeFilter($query, $searchTerm)
    {
        return $query->where('name', 'like', "%{$searchTerm}%");
    }

}
