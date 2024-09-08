<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller{
    public function index(Request $request){
        $tasks = Task::where('user_id', '=', Auth::id())->orderBy('is_done', 'ASC')->get();

        $totalDoneTasks = 0;
        $totalPendingTasks = 0;
        foreach($tasks as $t){
            $t->is_done == 1 ? $totalDoneTasks++ : $totalPendingTasks++;
        }

        $data = [
            'tasks' => $tasks,
            'totalTasks' => count($tasks),
            'totalDoneTasks' => $totalDoneTasks,
            'totalPendingTasks' => $totalPendingTasks,
        ];

        return view('home', $data);
    }
}
