<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Qiraats extends Model
{
    use HasFactory;
    protected $fillable = ['ayah_id', 'qiraat_name', 'riwayah', 'qiraat_ayah', 'audio_path', 'penjelasan'];
    protected $table = 'qiraats';

    public function ayah(): BelongsTo
    {
        return $this->belongsTo(Ayahs::class);
    }

    public function scopeFilter($query, $searchTerm)
    {
        return $query->where('qiraat_name', 'like', "%{$searchTerm}%")
        ->orWhere('riwayah', 'like', "%{$searchTerm}%");
    }
}
