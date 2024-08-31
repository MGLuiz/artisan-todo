<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the tasks.
     */
    public function index()
    {
        //
    }

    public function create(){
        $data['categories'] = Category::all();

        return view('tasks.create', $data);
    }

    public function store(Request $request){
        $task = $request->only(['title', 'description', 'due_date', 'category_id']);
        $task['user_id'] = 1;
        Task::create($task);

        return redirect(route('home'));
    }

    /**
     * Display the specified task.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified task.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified task in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified task from storage.
     */
    public function destroy(/*string $id*/){
        sleep(1);

        // Deleta e redireiciona para home
        return redirect(route('home'));
    }
}
