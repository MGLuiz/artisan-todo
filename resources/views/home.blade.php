<x-layout pageTitle="TODO App">
    
    <x-slot:supBtn>
        <a href={{route('task.create')}}>
            <li class="btn btn-primary">Create Task</li>
        </a>
        <a href={{route('logout')}}>
            <li class="btn btn-primary">Logout</li>
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

            @foreach ($tasks as $t)
            <x-task :data=$t/>
            @endforeach

        </div>
    </section> <!-- list -->
</x-layout>