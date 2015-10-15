<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\LostItem;
use App\Models\ItemCategory;
use App\Models\ItemType;

class LostItemController extends Controller
{
    /**
     * Fetch all item types
     *
     * @return Response
     */
    public function index() {
        // fetch items that aren't marked found
        $lostItems = LostItem::where('is_found', 'N')
            ->get();

        // if items found, load name relationship
        if($lostItems->count()) {
            $lostItems->load('itemType.category');   
        }

        // return view 
        return view('index')->with('lostItems', $lostItems);
    }

    /**
     * Show form for creating lost item record
     *
     * @return Response
     */
    public function create() {
        return view('report')->with('itemTypes', ItemType::all());
    }

    /**
     * Create a record for a lost item
     *
     * @return Response
     */
    public function store(Request $request) {
        // set validation rules
        $this->validate($request, [
            'item_type'   => 'required|numeric',
            'description' => 'required',
            'location'    => 'required'
        ]);

        // create new record
        LostItem::create([
            'item_type_id' => $request->input('item_type'),
            'description'  => $request->input('description'),
            'location'     => $request->input('location'),
            'is_found'     => 'N'
        ]);

        return redirect()->action('LostItemController@index');
    }

}
