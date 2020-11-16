<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // Applying auth middleware inside your controller best method
    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Todo::class, 'todo');
    }

    // Todo Logic
    public function index() {
        $todos = auth()->user()->todos->sortBy('completed');
        return view('todos.index', compact('todos'));
    }

    public function show(Todo $todo) {
        return view('todos.show', compact('todo'));
    }

    public function create() {
        return view('todos.create');
    }

    public function edit(Todo $todo) {
        return view('todos.edit', compact('todo'));
    }

    public function store(TodoCreateRequest $request) {
        // Grab the User id of whoever is storing a todo
        $user_id = auth()->user()->id;
        // Store the user id inside an array of request
        $request['user_id'] = $user_id;
        Todo::create($request->all());
        $request->session()->flash('success_message', 'Todo Created Successfully');
        return redirect(route('todo.index'));
    }

    public function update(TodoCreateRequest $request, Todo $todo) {
        $todo->update(['title' => $request->title, 'description' => $request->description]);
        $request->session()->flash('success_message', 'Todo Updated Successfully');
        return redirect(route('todo.index'));
    }

    public function complete(Request $request, Todo $todo) {
        $this->authorize('complete', $todo);
        $todo->update(['completed' => true]);
        $request->session()->flash('success_message', 'Todo marked as Completed!');
        return redirect()->back();
    }

    public function incomplete(Request $request, Todo $todo) {
        $this->authorize('incomplete', $todo);
        $todo->update(['completed'  => false]);
        $request->session()->flash('success_message', 'Todo marked as Incomplete');
        return redirect()->back();
    }

    public function destroy(Request $request, Todo $todo) {
        $todo->delete();
        $request->session()->flash('success_message', 'Todo Deleted!');
        return redirect()->back();
    }
}
