<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Priority;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('is_admin');
        // $this->middleware('verified');
    }

    public function index(Request $request) {
        if($request->search) {
            $tasks= Task::where('activity', 'LIKE', "%$request->search%")
            ->paginate();

            return $tasks;
        }

        $priority = Priority::all();
        $tasks = Task::paginate(5);
        return view('task.index', compact('tasks', 'priority'));
    }

    public function create() {

        $priority = Priority::all();
        return view('task.create', compact('priority'));
    }

    public function store(TaskRequest $request) {
        // $this->taskList[$request->label] = $request->task;

        Task::create([
            'prioritas_id' => $request->prioritas_id,
            'name' => $request->name,
            'activity' => $request->activity,
        ]);

        return redirect('/tasks');
    }

    public function show($id) {
        $tampil = Task::where('id', $id)->first();

        return $tampil;
    }

    public function edit($id) {

        $priority = Priority::all();
        $task = Task::where('id', $id)->first();
        return view('task.edit', compact('task', 'priority'));
    }

    public function update(TaskRequest $request, $id) {

        Task::where('id', $id)->update([
            'prioritas_id' => $request->prioritas_id,
            'name' => $request->name,
            'activity' => $request->activity
        ]);
        return redirect('/tasks');
    }

    public function destroy($id) {

        Task::where('id', $id)->delete();
        return redirect('/tasks');
    }


    public function search(Request $request) {
        $keyword = $request->search;
        $cari = Task::where('activity', 'LIKE', "%$keyword%")->get();

        return view('task.cari', compact('cari'));
    }
}
