<x-layout pageTitle="TODO App">
    
    <x-slot:supBtn>
        <a href={{route('task.create')}}>
            <li class="btn btn-primary">Create Task</li>
        </a>
    </x-slot>

    <section class="graph">
        <div class="graph-header">
            <h2>Daily Progress</h2>
            <hr>
            <div class="graph-header-date">
                < August 24th >
            </div>
        </div>

        <div class="graph-header-subtitle">Tasks: <b>X/Y</b></div>

        <div class="graph-placeholder">
            <div class="progress-bar">
                <span class="progress-bar-percentage">55%</span>
            </div>
        </div> <!-- graph-placeholder -->

        <p class="tasks-left">There are Y-X tasks left to complete</p>
    </section> <!-- graph -->

    <section class="list">

        <div class="list-header">
            <select name="" class="list-header-select">
                <option value="all">All</option>
                <option value="completed">Completed</option>
                <option value="incomplete">Incomplete</option>
            </select>
        </div>

        <div class="task-list">
            @php
                $tasks = [
                    ['done' => false, 'title' => "My First Task", 'category' => "Cateofria dfd", 'delLink' => '#', 'edit'],
                    ['done' => true, 'title' => "My Second Task", 'category' => "Cateofria dfd2"],
                    ['done' => false, 'title' => "My Terthy Task", 'category' => "Cateofria dfd"],
                ]
            @endphp

            <x-task :data=$tasks[0] />
            <x-task :data=$tasks[1] />
            <x-task :data=$tasks[2] />
        </div>
    </section> <!-- list -->
</x-layout>