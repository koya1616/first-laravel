<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
// use Illuminate\Support\Facades\DB;

class EntriesController extends Controller
{
    //
    public function index () {
        $entries = Entry::all();
        var_dump($entries);
        // $entries = DB::select("SELECT * FROM entries");
        // var_dump($entries);
    }
}
