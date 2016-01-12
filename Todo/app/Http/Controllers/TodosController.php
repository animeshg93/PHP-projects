<?php

namespace App\Http\Controllers;


use App\Todos;
use App\Http\Requests\TodosRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class TodosController extends Controller
{

	//shows all the tasks
    public function index(){
    	$todos = Todos::all();

    	return view('todos.index', compact('todos'));
    }

    public function create(){
    	return view('todos.create');
    }

    // stores a created task in the database after validation passes
    public function store(TodosRequest $request){
    	Todos::create($request->all());

    	return redirect('todos');
    }

    //deletes a task
    public function destroy($id){
    	Todos::findorFail($id)->delete();

    	return redirect('todos');
    }

    public function edit($id){
    	$todo = Todos::findorFail($id);

    	return view('todos.edit', compact('todo'));
    }

    public function update($id, TodosRequest $request){
    	Todos::findorFail($id)->update($request->all());

    	return redirect ('todos');
    }
    
}

