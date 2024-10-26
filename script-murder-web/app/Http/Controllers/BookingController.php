<?php

namespace App\Http\Controllers;

use App\Models\ScriptItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index()
    {
        // Fetch all script items from the database
        $scriptItems = DB::connection('mariadb')->table('script_item')
            ->select('id', 'scriptname', 'location', 'event_date', 'price', 'picture') // Select specific columns
            ->orderBy('event_date', 'asc') // Sort by event date in ascending order
            ->limit(10) // Limit results to 10
            ->get();

        $scriptItemCount = $scriptItems->count();

        return view('booking', [
            'scriptItems' => $scriptItems,
            'scriptItemCount' => $scriptItemCount
        ]);    
    }
}


