<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controller\Controllers;
use App\Models\task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks=task::all();
        return response()->json($tasks);
    }

    
    public function store(Request $request)
    {
        $request->validate ([
            'titulo' => 'required',
            'descricao' => 'required',
            'status' => 'required',
        ]);

        $tasks=task::create($request->all());
        return response()->json($tasks);
    
    }


    public function show($id)
    {
        return task::findOrfail($id);
    }

    
    
    
    
    
    public function update(Request $request, string $id)
    {
        $tasks->update($request->all());
        return response()->json($tasks);
    }

    public function destroy(Task $tasks)
    {
        $tasks->delete();
        return response()->json(null, 204);

    }
}
