<?php

namespace App\Http\Controllers;

use App\Models\ListaTarea;
use Illuminate\Http\Request;

class ListaTareasController extends Controller
{

    public function index()
    {
        $tareas = ListaTarea::all();
        return view('lista.index',compact('tareas'));
    }

    public function create()
    {
        return view('lista.create');
    }

    public function store(Request $request)
    {
        $tareas = ListaTarea::all();

        ListaTarea::create($request->all());

        return redirect()->route('index.tareas');

    }

    public function edit(Request $request, $id)
    {
        $tarea = ListaTarea::findOrFail($id);
        return view('lista.edit',compact('tarea'));
    }

    public function save(Request $request, $id)
    {
        $tarea = ListaTarea::findOrFail($id);
        $tarea->update($request->all());

        return redirect()->route('index.tareas');
    }

    public function deleted($id)
    {
        $tarea = ListaTarea::findOrFail($id);
        $tarea->delete();

        return redirect()->back();
    }


}
