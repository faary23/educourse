<?php

namespace App\Http\Controllers;

use App\Models\Bimbel;
use Illuminate\Http\Request;

class BimbelController extends Controller
{
    public function getBimbel() {
        // Limit the results to 4
        $result = Bimbel::limit(4)->get();
        return $result;      
    }

    public function getDetail($id) {
        return Bimbel::find($id);
    }

    public function getOnlineBimbel() {
        // Mendapatkan data dengan status 'online'
        $result = Bimbel::where('status', 'online')->limit(8)->get();
        return $result;
    }

    public function getOfflineBimbel() {
        // Mendapatkan data dengan status 'offline'
        $result = Bimbel::where('status', 'offline')->limit(8)->get();
        return $result;
    }

    // New search method
    public function search(Request $request) {
        $query = $request->input('query');
        $results = Bimbel::where('title', 'LIKE', "%$query%")->get();
        return view('searchresults', ['data' => $results]);
    }
}
