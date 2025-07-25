<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {

        $tasksv = Task::orderbyDesc('id')->get();

        return view('task.index', ['task' => $tasksv]);
    }

    public function show(Task $task)
    {
        return view('task.show', ['task' => $task]);
        
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(TaskRequest $request)
    {
        $request->validated();

        Task::create([
            'task' => $request->task,
            'obs' => $request->obs,
        ]);

        return redirect()->route('task.index')->with('success','Nova Tarefa Adicionada');
    }

    public function edit(Task $task)
    {
        return view('task.edit',['task' => $task]);
    }

    public function update(TaskRequest $request, Task $task)
    {
        $request->validated();

        $task->update([
            'task' => $request->task,
            'obs' => $request->obs,
        ]);

        return redirect()->route('task.show', ['task'=>$task])->with('success','Tarefa Atualizada');

    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('task.index')->with('success','Tarefa concluida');
    }
    
}
