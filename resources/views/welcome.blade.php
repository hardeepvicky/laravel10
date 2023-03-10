<x-main-layout>
    <x-flash />
    @guest    
        <a href="/register">Register</a>
        <a href="/login">Login</a>
    @else 
        WelCome
    @endguest
</x-main-layout>