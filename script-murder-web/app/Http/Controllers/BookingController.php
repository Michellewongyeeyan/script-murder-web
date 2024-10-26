<?php

namespace App\Http\Controllers;

use App\Models\ScriptItem;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        // Fetch all script items from the database
        $scriptItems = ScriptItem::all();

        // Return the data as a JSON response
        return view('booking', compact('scriptItems'));
    }
}


