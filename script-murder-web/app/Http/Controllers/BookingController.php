<?php

namespace App\Http\Controllers;

use App\Models\ScriptItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index(Request $request)
    {
<<<<<<< Updated upstream
        // Fetch all script items from the database
        $scriptItems = DB::connection('mariadb')->table('script_item')
            ->select('id', 'scriptname', 'location', 'event_date', 'price', 'picture', 'description') // Select specific columns
            ->orderBy('event_date', 'asc') // Sort by event date in ascending order
            ->limit(10) // Limit results to 10
            ->get();
=======
        // Start building the query for script items
        $query = DB::connection('mariadb')->table('script_item')
            ->select('id', 'scriptname', 'location', 'event_date', 'price', 'picture', 'description', 'tag', 'length', 'person') // Select specific columns
            ->orderBy('event_date', 'asc'); // Sort by event date in ascending order
>>>>>>> Stashed changes

        // Apply filters based on the request input
        if ($request->filled('length')) {
            $query->where('length', $request->input('length'));
        }

        if ($request->filled('tag')) {
            $query->where('tag', $request->input('tag'));
        }

        if ($request->filled('person')) {
            $query->where('person', $request->input('person'));
        }

        // Limit results to 10 as in the original code
        $scriptItems = $query->limit(10)->get();

        // Count the total items after filtering
        $scriptItemCount = $scriptItems->count();

        // Pass the filtered script items and count to the view
        return view('booking', [
            'scriptItems' => $scriptItems,
            'scriptItemCount' => $scriptItemCount
        ]);    
    }
}
