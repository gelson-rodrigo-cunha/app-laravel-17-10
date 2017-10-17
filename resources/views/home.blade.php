@extends('layouts.master')
@section('title', '')
@section('subtitle', 'Home')
@section('content')
    <div class="container">
              @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  
                    <br><br>
           

              
              
               <br>  Usuários
                  <li><a href="<?php echo url('/api/user/create'); ?>"> Criar Usuário</a></li>
                       <li><a href="<?php echo url('/api/user'); ?>"> Listar Usuários</a></li>
                 
                  <br>Tarefas
                 <li><a href="<?php echo url('/api/tasks/create'); ?>"> Cadastrar Tarefa</a></li>
                       <li><a href="<?php echo url('/api/tasks/'); ?>"> Listar Tarefas</a></li>     
                </div>
 <br> 
            </div>
        </div>
    </div>
        
@endsection