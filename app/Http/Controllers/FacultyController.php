<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // <-- add this line

class FacultyController extends Controller
{
    // public function index(Request $request)
    // {
    //     $language = $request->get('lang', 'en');

    //     $faculties = Faculty::where('language', $language)->get();

    //     return view('faculty.index', compact('faculties', 'language'));
    // }

    // public function index(Request $request)
    // {
    //     $language = $request->get('lang', 'en');

    //     $faculties = Faculty::where('language', $language)
    //         ->orderBy('id')
    //         ->get();

    //     return view('faculty.index', compact('faculties', 'language'));
    // }


    public function index(Request $request)
    {
        // Optionally filter by language
        $language = $request->get('lang', 'en');

        $faculties = DB::table('faculties')
            ->where('language', $language)
            ->orderBy('id')
            ->get();

        return view('faculty.index', [
            'faculties' => $faculties,
            'language' => $language,
        ]);
    }


    public function profile($lang, $faculty)
    {
        $facultyData = Faculty::where('language', $lang)
            ->where('code', $faculty)
            ->firstOrFail();

        return view('faculty.profile', [
            'lang'    => $lang,
            'faculty' => $facultyData,
        ]);
    }
}
