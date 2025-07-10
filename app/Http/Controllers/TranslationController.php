<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Translation;
class TranslationController extends Controller
{
    public function index(Request $request)
{
    $query = Translation::query();

    if ($request->filled('tag')) {
        $query->where('tag', $request->tag);
    }

    if ($request->filled('key')) {
        $query->where('key', 'like', "%{$request->key}%");
    }

    if ($request->filled('content')) {
        $query->where('content', 'like', "%{$request->content}%");
    }

    return response()->json($query->paginate(50));
}

public function store(Request $request) 
{
    $data = $request->validate([
        'key' => 'required|string',
        'locale' => 'required|string',
        'tag' => 'nullable|string',
        'content' => 'required|string',
    ]);

    return Translation::create($data);
}

public function update(Request $request, $id)
{
    $translation = Translation::findOrFail($id);

    $data = $request->validate([
        'key' => 'sometimes|required|string',
        'locale' => 'sometimes|required|string',
        'tag' => 'nullable|string',
        'content' => 'sometimes|required|string',
    ]);

    $translation->update($data);

    return $translation;
}

}
