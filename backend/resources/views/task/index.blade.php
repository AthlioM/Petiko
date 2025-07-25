@extends('layouts.admin')

@section('content')
    <div class="card mb-4 mb-4 border-ligth shadow">
        <div class="card-header hstack gap-2">
            
            <span>
                Lista de Tarefas
            </span>

        </div>
        
        
        <div class="cad-body">
            
            <x-alert />
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tarefas</th>
                        <th scope="col" class="text-center">Ações</th>
                    
                    </tr>
                </thead>
                <tbody>

                    @forelse ($task as $tas)

                        <tr>
                            <th>{{$tas->id}}</th>
                            <td>{{$tas->task}}</td>
                            <td class="text-center">
                                <a href="{{ route('task.show', ['task' => $tas->id]) }}"
                                    class="btn btn-outline-primary btn-sm">Visualizar</a>
                                <a href="{{ route('task.edit', ['task' => $tas->id]) }}"
                                    class="btn btn-outline-warning btn-sm">Editar</a>
                                <form method="POST" action="{{ route('task.destroy', ['task' => $tas->id])}}" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-success btn-sm"
                                        onclick="return confirm('A tarefa foi realmente concluida?') "> Concluir 
                                    </button>
                                </form>
                            </td>
                            
                        </tr>
                        
                        
                        

                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
    

