<?php

namespace App\Http\Controllers;

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

    /**
     * Show the form for creating a new task.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created task in storage.
     */
    public function store(Request $request)
    {
        //
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
