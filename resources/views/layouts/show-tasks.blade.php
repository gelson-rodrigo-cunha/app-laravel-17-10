@extends('layouts.master')
@section('title', 'Tarefas cadastradas')
@section('subtitle', 'Tarefas cadastradas')
@section('content')

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tarefas cadastradas</h3>
                               @if (session('message'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" 
               data-dismiss="alert"
               aria-label="close">&times;</a>
            {{ session('message') }}
        </div>
  @endif
              <div class="box-tools">
             
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                   
                <tr>
              
                  <th>Título</th>
                  <th>Descrição</th>
                  <th>Data e hora - início </th>
                  <th>Data e hora - fim </th>
                  <th>Data e hora - início/usuário </th>
                  <th>Data e hora - fim/usuário </th>
                  <th>Usuário </th>
                  <th>Status</th>
                  <th>Ação</th>
                  
                </tr>
                 @foreach($tasks as $task)
                <tr>
            
                  <td>{{$task->titleTask}}</td>
                 <td>{{$task->descriptionTask}}</td>
                  <td>{{$task->startTask}}</td>
                <td>{{$task->endTask}}</td>
                <td>
             @foreach($starttask as $start)
              @if($start->idTask != $task->id)
            
                   <span class="label label-warning">Aguardando execução</span>
                   @else
                  {{$start->created_at}}
                       @endif
                    @endforeach
                    </td>
                    <td>
              @foreach($endtask as $end)
               @if($end->idTask != $task->id)
                         
                <span class="label label-warning">Aguardando execução</span>
                            @else
               {{$end->created_at}}
                 @endif
                 @endforeach 
                   </td>
                   <td>
                @foreach($users as $user)
                  @if ($user->id == $task->idUser )
                {{$user->name}}
                  @endif
           @endforeach
           </td>
           <td>
                @foreach($endtask as $end)
              @if($end->idTask != $task->id)


                        @foreach($starttask as $start)
              @if($start->idTask != $task->id)
          
                <span class="label label-warning">Aguardando execução</span>
                       @else
                       <span class="label label-warning">Executando</span>
                     @endif  
                     @endforeach     
                    @else
                  <span class="label label-success">Tarefa finalizada</span>
                   @endif 
                   @endforeach   
                 </td>


                          <td>
                           <a href="{{route('tasks.edit', $task->id)}}">
                                               <button type="button" class="btn btn-success">Editar</button></a>
                                              
                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                        action="{{route('tasks.destroy', $task->id)}}"
                                                        onsubmit="return confirm('Confirma exclusão?')">
                                                {{method_field('DELETE')}}{{ csrf_field() }}                                                
                                                <button type="submit" class="btn btn-danger btn-flat">
                                                     <a style="color: #fff; text-decoration:none; ">Excluir</a>   

                                                </button></form></td> 
                </tr>
                    @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
 

@endsection
