<?php



namespace App\Http\Controllers;

use App\Models\Matelas;
use Illuminate\Http\Request;

class MatelasController extends Controller
{
    public function index()
    {
        $matelas = Matelas::all();
        return view('welcome', compact('matelas'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Matelas::create($request->all());
        return redirect()->route('matelas.index');
    }

    public function show($id)
    {
        $matelas = Matelas::find($id);

        if (!$matelas) {
            return abort(404);
        }

        return view('matelas.show', compact('matelas'));
    }

 

public function edit($id)
{
    $matelas = Matelas::find($id);

    if (!$matelas) {
        return abort(404);
    }

    return view('edit', compact('matelas'));
}



public function update(Request $request, $id)
{
    $matelas = Matelas::find($id);

    if (!$matelas) {
        return abort(404);
    }

    $matelas->update($request->all());

    return redirect()->route('matelas.index')->with('success', 'Matelas mis à jour avec succès!');
}






 

    public function destroy($id)
    {
        $matelas = Matelas::find($id);

        if (!$matelas) {
            return abort(404);
        }

        $matelas->delete();

  
        return redirect()->route('matelas.index')->with('success', 'Matelas supprimé avec succès!');
    }
}


