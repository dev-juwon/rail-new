<x-app-layout>
    <div class="m-auto text-white text-center">
        
        <h1 class="text-3xl font-bold">Checkout</h1>
        <h2 class="text-2xl"> For $plan</h2>
       <div>
        <p> You are about to subscribe for {{ $plan }} wth a one-time payment of {{ $amount }}</p>

       </div>
        <a href="{{ route('pay') }}" class="btn flash-button text-white">Proceed to payment</a>
    </div>
    
</x-app-layout>