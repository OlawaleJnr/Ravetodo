@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>My Todo List</h5>
                    </div>
                    <div class="card-body">
                        <div class="todo">
                            <div class="todo-list-wrapper">
                                <div class="todo-list-container">
                                    <div class="todo-list-body">
                                        <ul id="todo-list">
                                            @forelse($todos as $todo)
                                                <li class="task @if($todo->completed) completed @endif">
                                                    <div class="task-container">
                                                        @if($todo->completed)
                                                            <a style="font-size: 12px;" class="task-label" href="{{route('todo.show', $todo->id)}}">{{$todo->title}}</a>
                                                        @else
                                                            <a style="font-size: 12px;" class="task-label" href="{{route('todo.show', $todo->id)}}">{{$todo->title}}</a>
                                                        @endif
                                                        <span class="task-action-btn">
                                                            <!-- Edit Button -->
                                                            <a class="text-primary" href="{{route('todo.edit', $todo->id)}}" role="button"><span class="action-box large delete-btn" title="Edit Task"><i class="icon"><i class="icon-pencil-alt"></i></i></span></a>

                                                            <!-- Delete Button -->
                                                            <a class="text-danger" id="delete-todo" href="{{route('todo.destroy', $todo->id)}}"
                                                            onclick="event.preventDefault(); deleteTodo(); 
                                                                function deleteTodo(){
                                                                    swal({
                                                                        title: 'Are you sure?',
                                                                        text: 'Once deleted, you will not be able to recover this Todo!',
                                                                        icon: 'warning',
                                                                        buttons: true,
                                                                        dangerMode: true,
                                                                    })
                                                                    .then((willDeleteTodo) => {
                                                                        if (willDeleteTodo) {
                                                                            document.getElementById('form-delete-{{$todo->id}}').submit();
                                                                            swal({
                                                                                text: 'Your Todo has been deleted!',
                                                                                icon: 'success',
                                                                            })
                                                                        } else {
                                                                            swal('Your Todo is kept safe!');
                                                                        }
                                                                    })
                                                                }
                                                            " role="button"><span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span></a>
                                                            <form style="display: none;" action="{{route('todo.destroy', $todo->id)}}" id="form-delete-{{$todo->id}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                            </form>
															
															@if($todo->completed == 0)
																<!-- Complete Button -->
																<span onclick="event.preventDefault(); document.getElementById('form-complete-{{$todo->id}}').submit()" class="action-box large text-success" title="Mark as Complete"><i class="icon"><i class="icon-check"></i></i></span>
																<form style="display: none;" action="{{route('todo.complete', $todo->id)}}" id="form-complete-{{$todo->id}}" method="post">
																	@csrf
																	@method('put')
																</form>
															@else
																<!-- InComplete Button -->
																<span  onclick="event.preventDefault(); document.getElementById('form-incomplete-{{$todo->id}}').submit()" class="action-box large text-danger" title="Mark as Incomplete"><i class="icon"><i class="icon-close"></i></i></span>
																<form style="display: none;" action="{{route('todo.incomplete', $todo->id)}}" id="form-incomplete-{{$todo->id}}" method="post">
																	@csrf
																	@method('put')
																</form>
															@endif
                                                        </span>
                                                    </div>
                                                </li>
                                                @empty
                                                <p>No task available, create one.</p>
                                            @endforelse
                                        </ul>
                                    </div>
                                    <div class="todo-list-footer">
                                        <div class="add-task-btn-wrapper">
                                            <span class="add-task-btn">
                                                <a class="btn btn-primary" href="{{route('todo.create')}}" role="button"><i class="icon-plus pr-2"></i> Add new task</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
