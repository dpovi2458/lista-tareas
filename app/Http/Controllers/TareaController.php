<?php
namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::all();
        return view('tareas.index', compact('tareas'));
    }

    public function store(Request $request)
    {
        $request->validate(['descripcion' => 'required']);
        Tarea::create($request->all());
        return redirect('/');
    }

    public function update(Tarea $tarea)
    {
        $tarea->update(['completada' => true]);
        return redirect('/');
    }
}