<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Translation;
use App\Models\User;
use OpenApi\Annotations as OA;


class ExportController extends Controller
{
    public function export($locale)
    {
    $translations = Translation::where('locale', $locale)->get(['key', 'content']);

    $data = $translations->pluck('content', 'key');

    return response()->json($data);
    }

}
