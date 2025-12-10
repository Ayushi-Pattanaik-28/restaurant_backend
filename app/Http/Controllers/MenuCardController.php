<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menucard;

class MenuCardController extends Controller
{
    // create
    public function create(Request $request)
    {
        $menuData = $request->validate([
            'item_name' => 'required|string',
            'item_details' => 'required|string',
            'item_price' => 'required|string',
            'item_image' => 'required|string'
        ]);
        $menuCard = menucard::create($menuData);
        return response()->json($menuCard, 201);
    }

    // read
    public function read()
    {
        return response()->json(menucard::all(), 200);
    }

    // update
    public function update(Request $request, $id)
    {
        $menuCard = menucard::findOrFail($id);
        $menuData = $request->validate([
            'item_name' => 'required|string',
            'item_details' => 'required|string',
            'item_price' => 'required|string',
            'item_image' => 'required|string'
        ]);
        $menuCard->update($menuData);
        return response()->json($menuCard, 200);
    }

    // delete
    public function destroy($id)
    {
        menucard::destroy($id);
        return response()->noContent();
    }
}
