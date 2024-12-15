<?php

namespace App\Http\Controllers;

use App\Models\Ayahs;
use App\Models\Surahs;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Qiraats;

class AyahsController extends Controller
{
    public function list($surah_id): View
    {
        $surah = Surahs::findOrFail($surah_id);
        $ayahs = Ayahs::where('surah_id', $surah_id)->paginate(10);
        return view('ayahs', compact('surah', 'ayahs'));
    }

    public function qiraat($ayah_id): View
    {
        $title = 'Perbandingan Qiraat';
        $ayah = Ayahs::findOrFail($ayah_id);
        // $qiraat = Qiraats::where('ayah_id', $ayah_id)->paginate(10);
        $qiraat = $ayah->qiraat;
        // $qiraat = Qiraats::with('ayah')->get();
        // $ayah->dd();
        // $qiraat->dd();
        return view('perbandingan_qiraah', compact('ayah', 'qiraat'));
    }

}
