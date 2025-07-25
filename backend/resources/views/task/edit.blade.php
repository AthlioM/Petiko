@extends('layouts.admin')

@section('content')

    <div class="card mb-4 mb-4 border-ligth shadow ">
            <div class="card-header hstack gap-2">
                
                <span>
                    Editar Tarefa
                
                </span>
            

                <span class="ms-auto">
                    <a href="{{ route('task.show', ['task' => $task->id]) }}">Visualizar</a>
                </span>

            </div>
            
        
        <div class="cad-body">
                
            <x-alert />
    

           

            <form action="{{ route('task.update', ['task' => $task->id]) }}" method= 'POST'>
                @csrf
                @method('PUT')
                <div class="col-mid-6 ms-3">
                    <label for="formGroupExampleInput" class="form-label">Tarefa: </label>
                    <input type="text" name="task" class="form-control" placeholder="Nome da Tarefa" value="{{ old('task', $task->task) }}">
                </div>

                <div class="mb-3 ms-3">
                    <label for="formGroupExampleInput2" class="form-label">Observação:</label>
                    <input type="text" name="obs" class="form-control" placeholder="Descrição" value="{{ old('obs', $task->obs) }}">
                </div>


                <button type="submit" class="btn btn-success btn-sm mb-3 ms-3">Salvar</button>

            </form>
        </div>
    </div>

@endsection