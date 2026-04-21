<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
use Illuminate\Http\Request;

class MinumanController extends Controller
{
    public function index()
    {
        $minumans = Minuman::all();
        return view('index', compact('minumans'));
    }

    public function store(Request $request)
    {
        Minuman::create($request->all());
        return redirect('/');
    }

    public function destroy($id)
    {
        Minuman::find($id)->delete();
        return redirect('/');
    }

    public function edit($id)
    {
        $minuman = Minuman::find($id);
        return view('edit', compact('minuman'));
    }

    public function update(Request $request, $id)
    {
        $minuman = Minuman::find($id);
        $minuman->update($request->all());

        return redirect('/');
    }
}