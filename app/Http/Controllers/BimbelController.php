<?php

namespace App\Http\Controllers;

use App\Models\Bimbel;
use Illuminate\Http\Request;

class BimbelController extends Controller
{
    public function getBimbel()
    {
        return Bimbel::all();
    }

    public function getOnlineBimbel()
    {
        return Bimbel::where('status', 'Online')->limit(8)->get();
    }

    public function getOfflineBimbel()
    {
        return Bimbel::where('status', 'Offline')->limit(8)->get();
    }

    public function getDetail($id)
    {
        return Bimbel::findOrFail($id);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Bimbel::where('title', 'LIKE', "%$query%")
            ->orWhere('description', 'LIKE', "%$query%")
            ->get();
        return view('search_results', compact('results'));
    }
}
