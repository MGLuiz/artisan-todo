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
            
            <div class="input-area">
                <label for="category">Category:</label>
                <select name="category" id="">
                    <option selected disabled value="">Select a category</option>
                    <option value="">Category 1</option>
                    <option value="">Category 2</option>
                    <option value="">Category 3</option>
                </select>
            </div>
            
            <div class="input-area">
                <label for="description">Description:</label>
                <textarea name="description" id="description" placeholder="Enter the task description"></textarea>
            </div>

            <div class="input-area">
                <button type="submit" class="btn btn-primary btn-submit">Criar Tarefa</button>
            </div>

        </form>
    </section>
</x-layout>