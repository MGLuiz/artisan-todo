<x-layout pageTitle="Register">
    <x-slot:supBtn>
    <a href="{{route('login')}}">
        <li class="btn btn-primary">Already have an account? Login</li>
    </a>
    </x-slot>

    <section id="task-section">
        <h2>Register</h2>

        @if ($errors->any())
        <ul class="alert alert-error">
            @foreach ($errors->all() as $error)
                <li style="color: red">{{$error}}</li>                
            @endforeach
        </ul>
        @endif

        <form action="{{route("storeUser")}}" method="POST">
            @csrf

            <x-form.text_input name="name" label="Username" required="true"/>
            
            <x-form.text_input name="email" label="Email:" type="email" required="true"/>

            <x-form.text_input name="password" label="Password:" type="password" required="true"/>
            <x-form.text_input name="password_confirmation" label="Password Confirmation:" type="password" required="true"/>

            <x-form.button type="submit">Register</x-form.button>

        </form>
    </section>
</x-layout>