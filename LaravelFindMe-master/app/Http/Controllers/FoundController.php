<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\LostItem;

class FoundController extends Controller
{
    /**
     * Display form for marking item found
     *
     * @return Response
     */
    public function foundView($lostItemID) {
      	try
		{
			// fetch the lost item
		    $lostItem = LostItem::findOrFail($lostItemID);

		    // show form to mark item found
      		return view('found')->with('lostItem', $lostItem);
		}
		catch(ModelNotFoundException $e)
		{
		    return redirect()->action('LostItemController@index');
		}
    }

    /** 
     * Mark the item as found
     *
     * @return Response
     */
    public function markFound($lostItemID) {
    	try
		{
			// fetch the lost item
		    $lostItem = LostItem::findOrFail($lostItemID);
		    $lostItem->is_found = 'Y';
		    $lostItem->save();

		    // show form to mark item found
      		return redirect()->action('LostItemController@index');
		}
		catch(ModelNotFoundException $e)
		{
		    return redirect()->action('LostItemController@index');
		}
    }

}
