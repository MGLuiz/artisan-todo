<x-layout pageTitle="Login">

    <x-slot:supBtn>
    <a href="{{route('register')}}">
        <li class="btn btn-primary">Don't have an account? Register</li>
    </a>
    </x-slot>

    <section id="create-task-section">
        <h2>Create Task</h2>
        <form action="" method="">
            <div class="input-area">
                <label for="title">Task Title:</label>
                <input type="text" name="title" placeholder="Enter the task title" required>
            </div>

            <div class="input-area">
                <label for="due_date">Date:</label>
                <input type="date" name="due_date" id="due_date" required>
            </div>
            
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
        </form>

    </section>
</x-layout>