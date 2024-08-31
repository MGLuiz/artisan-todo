<x-layout pageTitle="Login">

    <x-slot:supBtn>
    <a href="{{route('register')}}">
        <li class="btn btn-primary">Don't have an account? Register</li>
    </a>
    </x-slot>

    <section id="create-task-section">
        <h2>Create Task</h2>
        <form action="" method="">
            
            <x-form.text_input name="title" label="Task Title:" required="true"/>
            
            <x-form.text_input name="due_date" label="Date:" type="date" required="true"/>
            
            <x-form.select_input label="Category:" required="true">
                <x-slot:name>category</x-slot>

                <option value="1">Category 1</option>
                <option value="2">Category 2</option>
                <option value="3">Category 3</option>
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