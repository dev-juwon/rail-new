<x-app-layout>
    <div class="m-auto text-white text-center">
        <h1 class="text-3xl font-bold">Payment</h1>
        <form action="{{ route('payment.initiate') }}" method="POST">
            @csrf
            <input type="hidden" name="amount" value="{{ $amount }}">
            <input type="hidden" name="email" value="{{ $user->email }}">
            <input type="hidden" name="reference" value="{{ $user->paymentReference }}">
            <input type="hidden" name="metadata" value="{{ json_encode(['custom_fields' => ['name' => $user->fullname() ]]) }}">
            <input type="submit" value="Pay"/>
         </form>
    </div>
    
</x-app-layout>