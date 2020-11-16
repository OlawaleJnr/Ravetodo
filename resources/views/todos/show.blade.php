@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>{{$todo->title}}</div>
                            <a href="{{route('todo.index')}}" class="text-dark" role="button"><span class="action-box large delete-btn" title="Go Back Home"><i class="icon"><i class="icon-back-left"></i></i></span></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="text-danger font-weight-bold">Description</h6>
                        <p>{{$todo->description}}</p>
                        <br>
                        <div class="float-right">Created {{ $todo->created_at->diffForHumans() }}</div>
                        <br>
                        <div class="float-right">Updated Last at {{ $todo->updated_at->diffForHumans() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
