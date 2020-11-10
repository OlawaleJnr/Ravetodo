@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>{{ __('Add New Todo') }}</div>
                            <a href="{{route('todo.index')}}" class="text-dark" role="button"><span class="action-box large delete-btn" title="Go Back Home"><i class="icon"><i class="icon-back-left"></i></i></span></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('todo.store')}}" class="" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">{{ __('Todo Name') }}</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                                @error('title')
                                    <span class="invalid-feedback">
                                        <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">{{ __('Description') }}</label>
                                <textarea name="description" cols="30" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="form-group ml-md-2">
                                <input type="submit" value="Create New Todo" class="btn btn-block btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
