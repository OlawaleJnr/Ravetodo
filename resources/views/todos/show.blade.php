@extends('layouts.app')

@section('content')
    <div class="pb-4">
        <div class="d-flex justify-content-center pb-4 border-bottom border-darken-1">
            <h3 class="text-dark mt-2">{{$todo->title}}</h3>
            <a class="btn text-primary btn-lg ml-3 text-right" href="{{route('todo.index')}}" role="button"><span class="fas fa-arrow-left"></span></a>
        </div>
        <div class="pt-3">
            <h5 class="text-danger font-weight-bold">Description</h5>
            <p>{{$todo->description}}</p>
        </div>
    </div>
@endsection
