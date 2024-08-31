<x-layout pageTitle="Login">

    <x-slot:supBtn>
        <a href="{{route("home")}}">
            <li class="btn btn-primary">Return to home</li>
        </a>
    </x-slot>

    <section id="task-section">
        <h2>Edit Task</h2>
        <form action="{{route("task.update").'?id='.$task->id}}" method="POST">
            @csrf

            <x-form.text_input name="title" label="Task Title:" required="true" :value="$task->title"/>
            
            <x-form.text_input
            name="due_date" 
            label="Date:" 
            type="datetime-local" 
            :value="$task->due_date" 
            required="true"
            />
            
            <x-form.select_input name="category_id" required="true">
                <x-slot:label>Category:</x-slot>

                @foreach ($categories as $c)
                    <option value={{$c->id}} {{$c->id == $task->category_id ? "selected" : "  "}}>
                        {{$c->title}}
                    </option>
                @endforeach

            </x-form.select_input>
            
            <x-form.textarea_input
                label="Description:"
                name="description"
                place="Enter the task description"
                value="{{$task->description}}"
            />

            <x-form.button type="submit">Edit Task</x-form.button>

        </form>
    </section>

</x-layout>