<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholar;
use App\Rules\ValidSuffix; // Import the custom validation rule

class ScholarController extends Controller
{
    public function index(){
        return view('scholar.index');
    }

    public function fetchPaginate(Request $request) {
        $searchValue = $request->input('search.value');
        $start = $request->input('start');
        $length = $request->input('length');
        $page = $request->input('draw');

        $query = Scholar::query()
            ->when($searchValue, function ($query, $searchValue) {
                // Lagay mo dito brad kung ano gusto mo ilagay na mga isesearch pa na columns
                return $query->where('Scholar_Code', 'like', "%{$searchValue}%")
                            ->orWhere('Institution', 'like', "%{$searchValue}%")
                            ->orWhere('Unit', 'like', "%{$searchValue}%")
                            ->orWhere('Area', 'like', "%{$searchValue}%")
                            ->orWhere('fullname', 'like', "%{$searchValue}%")
                            ->orWhere('batch', 'like', "%{$searchValue}%")
                            ->orWhere('name_of_member', 'like', "%{$searchValue}%")
                            ->orWhere('Year_level', 'like', "%{$searchValue}%")
                            ->orWhere('course', 'like', "%{$searchValue}%");
            });

        if($searchValue) {
            $page = 1;
        }

        $data = $query->paginate($length, ['*'], 'page', $page);

        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => $data->total(),
            'recordsFiltered' => $data->total(), // Consider updating for accurate filtering count
            'data' => $data->items(),
        ]);
    }
    
    public function create(){
        return view('scholar.create');
    }
    public function show($id)
    {
        $scholar = Scholar::findOrFail($id);
        return view('scholar.info', ['scholar' => $scholar]);
    }
    
    public function edit($id)
{
    $scholar = Scholar::findOrFail($id);
    return view('scholar.edit', ['scholar' => $scholar]);
}


public function update(Request $request, $id)
{
    $scholar = Scholar::findOrFail($id);
    $scholar->update($request->all());

    return redirect()->route('scholar.index')->with('success', 'Scholar updated successfully');
}

}