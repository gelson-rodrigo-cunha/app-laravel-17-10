<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\endTaskUser;

class EndtaskuserController extends Controller
{
       public function store(Request $request)
    {
        $dados = $request->all();
        endTaskUser::create($dados);
        //return redirect()->route('tasks.index')->with('message', 'Tarefa cadastrada com sucesso!');
        return response()->json(
      
    
        );
    }
}
