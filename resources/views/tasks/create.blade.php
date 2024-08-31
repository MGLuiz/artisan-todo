<x-layout pageTitle="Login">

    <x-slot:supBtn>
    <a href="{{route('register')}}">
        <li class="btn btn-primary">Don't have an account? Register</li>
    </a>
    </x-slot>

    <section id="create-task-section">
        <h2>Create Task</h2>
        <form action="{{route("task.store")}}" method="POST">
            @csrf

            <x-form.text_input name="title" label="Task Title:" required="true"/>
            
            <x-form.text_input name="due_date" label="Date:" type="date" required="true"/>
            
            <x-form.select_input name="category_id" required="true">
                <x-slot:label>Category:</x-slot>

                @foreach ($categories as $c)
                    <option value="{{$c->id}}">{{$c->title}}</option>
                @endforeach
            </x-form.select_input>
            
            <x-form.textarea_input
                label="Description:"
                name="description"
                place="Enter the task description"
            />

            <x-form.button type="submit">Create Task</x-form.button>

        </form>
    </section>
</x-layout>