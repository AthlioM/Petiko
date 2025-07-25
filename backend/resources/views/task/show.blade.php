@extends('layouts.admin')

@section('content')
     <div class="card mb-4 mb-4 border-ligth shadow">
        <div class="card-header hstack gap-2">
            
            <span>
                Detalhes da Tarefa: 
               
            </span>
            <span class='text-center'>
                {{$task->task}}<br>
               
            </span>
             

            <span class="ms-auto">
                ID: {{$task->id}}
                <a href="{{ route('task.edit', ['task' => $task->id]) }}" class="btn btn-outline-warning btn-sm">Editar</a>
                <form method="POST" action="{{ route('task.destroy', ['task' => $task->id])}}"class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" onclick="return confirm('A tarefa foi realmente concluida?') " class="btn btn-outline-success btn-sm"> Concluir </button>
                </form>
            </span>

        </div>
        
        
        <div class="cad-body ms-3">
            
            <x-alert />

            
            
            Detalhes: {{$task->obs}}<br><br>
            
            Criada em: {{ \Carbon\Carbon::parse($task->created_at)->format('d/m/Y H:i:s')}}<br><br>
            Atualizada em: {{ \Carbon\Carbon::parse($task->updated_at)->format('d/m/Y H:i:s')}}
               
            </div>
        </div>
     </div>
@endsection