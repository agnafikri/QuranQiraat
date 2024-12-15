<?php

namespace App\Http\Controllers;

use App\Models\Ayahs;
use App\Models\Surahs;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SurahsController extends Controller
{
    public function index(): View
    {
        // $title = 'Daftar Surah';
        $surahs = Surahs::paginate(10);
        return view('surah_daftar', ['title' => 'Daftar Surah'], compact('surahs'));
    }
    public function show(Surahs $surah): View
    {
        $title = 'Surah ' . $surah;
        $ayahs = Ayahs::where('surah_id', $surah->id)->get();
        return view('surah_detail', compact('surah', 'ayahs'));
    }



}
