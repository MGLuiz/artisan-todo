<x-layout pageTitle="Login">

    <x-slot:supBtn>
    <a href="{{route('register')}}">
        <li class="btn btn-primary">Don't have an account? Register</li>
    </a>
    </x-slot>

    Tela de criar uma Task
    <a href={{route('home')}} style="font-variant: small-caps">Go to Home</a>
</x-layout>