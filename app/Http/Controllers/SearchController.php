<?php

namespace App\Http\Controllers;

use App\Models\Ayahs;
use App\Models\Surahs;
use App\Models\Qiraats;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');

        $surahs = Surahs::where('name', 'LIKE', "%$query%")
                    ->orWhere('arabic_name', 'LIKE', "%$query%")
                    ->get();

        $ayahs = Ayahs::where('ayah_number', 'LIKE', "%$query%")
                    ->orWhere('arabic_text', 'LIKE', "%$query%")
                    ->orWhere('translation_id', 'LIKE', "%$query%")
                    ->orWhere('translation_en', 'LIKE', "%$query%")
                    ->get();

        $qiraats = Qiraats::where('qiraat_name', 'LIKE', "%$query%")
                    ->orWhere('qiraat_ayah', 'LIKE', "%$query%")
                    ->get();

        return view('search', compact('surahs', 'ayahs', 'qiraats', 'query'));
    }
}
