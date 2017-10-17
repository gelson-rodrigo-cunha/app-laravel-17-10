<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\startTaskUser;
class StarttaskuserController extends Controller
{
       public function store(Request $request)
    {
        $dados = $request->all();
        startTaskUser::create($dados);
        //return redirect()->route('tasks.index')->with('message', 'Tarefa cadastrada com sucesso!');
        return response()->json(
      
    
        );
    }
}
