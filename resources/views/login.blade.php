<x-layout pageTitle="TODO | Login">
    <x-slot:supBtn>
    <a href="{{route('register')}}">
        <li class="btn btn-primary">Register</li>
    </a>
    </x-slot>

    <section id="task-section">
        <h2>Login</h2>

        @if ($errors->any())
        <ul class="alert alert-error">
            @foreach ($errors->all() as $error)
                <li style="color: red">{{$error}}</li>                
            @endforeach
        </ul>
        @endif

        <form action="{{route('loginAuth')}}" method="POST">
            @csrf
            
            <x-form.text_input name="email" label="Email:" type="email" required="true"/>

            <x-form.text_input name="password" label="Password:" type="password" required="true"/>

            <x-form.button type="submit">Login</x-form.button>

        </form>
    </section>
</x-layout>