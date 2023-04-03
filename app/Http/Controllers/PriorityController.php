<?php

namespace App\Http\Controllers;

use App\Models\Priority;
use Illuminate\Http\Request;

class PriorityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }

    public function index() {

        $priority = Priority::all();
        return view('priority.index', compact('priority'));
    }

    public function create() {
        return view('priority.create');
    }

    public function store(Request $request) {

        Priority::create([
            'prioritas' => $request->prioritas,
        ]);

        return redirect()->route('priority.index');
    }

    public function edit($id) {

        $priority = Priority::where('id', $id)->first();
        return view('priority.edit', compact('priority'));
    }

    public function update(Request $request, $id) {

        Priority::where('id', $id)->update([
            'prioritas' => $request->prioritas,
        ]);
        return redirect()->route('priority.index');
    }

    public function destroy($id) {

        Priority::where('id', $id)->delete();
        return redirect()->route('priority.index');
    }
}
