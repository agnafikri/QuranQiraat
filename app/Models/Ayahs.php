<?php

namespace App\Models;

// use App\Models\Ayahs;
use App\Models\Surahs;
use App\Models\Qiraats;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ayahs extends Model
{
    use HasFactory;
    protected $fillable = ['surah_id', 'ayah_number', 'arabic_text', 'translation_in', 'translation_en', 'latin_text'];

    protected $table = 'ayahs';

    public function surah(): BelongsTo
    {
        return $this->belongsTo(Surahs::class, 'surah_id');
    }

    public function qiraat(): HasMany
    {
        return $this->hasMany(Qiraats::class, 'ayah_id');
    }

    public function scopeFilter($query, $searchTerm)
    {
        return $query->where('arabic_text', 'like', "%{$searchTerm}%")
                     ->orWhere('translation_id', 'like', "%{$searchTerm}%")
                     ->orWhere('translation_en', 'like', "%{$searchTerm}%")
                     ->orWhere('latin_text', 'like', "%{$searchTerm}%");
    }

    // public function show($id) {
    //     $ayah = Ayahs::findOrFail($id);
    //     $qiraats = Qiraats::where('ayah_id', $id)->get();
    //     return view('perbandingan_qiraah', compact('ayah', 'qiraats'));
    // }
}
