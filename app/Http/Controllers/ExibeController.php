<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class ExibeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    /*    $posts = Post::all();
         $total = Post::all()->count();
        return view('layouts.show-posts', compact('posts', 'total'));
       
     */
     //Retorno para o aplicativo
       return Task::all();
    //   tem que comentar o use App\noticias
        
    }
        public function show($id)
   {
        //$tasks = Task::findOrFail($id);
       //   return Task::findOrFail($id)->get();
           return  Task::where('idUser', $id) -> get();
    
    }
       public function startTask(Request $request, $id)
    {
        $dados = $request->all();
        $id = Task::findOrFail($id);
        $id->update($dados);
       // return back()->with(["message_edit" => 'Tarefa editada com sucesso']);
    }

   
}
