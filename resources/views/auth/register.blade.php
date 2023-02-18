
<x-guest-layout>
    <form class="form" method="POST" action="{{ route('register') }}">
    	      @csrf
        <p>You are a step away from achieving that 7 digits income</p>
        
        <input type="text" id="firstname" placeholder="First Name" class=" @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}"><br>
        	
        <input type="text" id="middlename" placeholder="Middle-name" class=" @error('middlename') is-invalid @enderror" name="middlename" value="{{ old('middllename') }}"><br>
        	
        <input type="text" id="surname" placeholder="Surname" class=" @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}"><br>
        	
        <input type="email" id="email" placeholder="Email Address" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"><br>
        	
        <input type="number" id="phone" placeholder="Phone Number" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" ><br>
        	 
        <input type="password" id="password" placeholder="Password" class=" @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"><br>
        	
        <input type="password" id="confirm-pass" placeholder="Confirm Password" name="confirm-password" required autocomplete="confirm-password" >
        <div>
            <input type="checkbox" id="check"><p class="agreed">I have read and agreed to the Privacy Policy and Terms & Conditions on this platform</p>
        </div>
        <div class="sign-up-button">
            <input type="submit" value="{{ __('Register') }}">
            <p>Already a Member</p>
            <a href="/sign-in.html">Login Instead</a>
        </div>
        
    </form>

    <form class="form1" method="POST" action="{{ route('register') }}">
     	      @csrf
        <p>You are a step away from achieving that 7 digits income</p>
        
        <input type="text" id="firstname" placeholder="First Name" class=" @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}"><br>
        	
        <input type="text" id="middlename" placeholder="Middle-name" class=" @error('middlename') is-invalid @enderror" name="middlename" value="{{ old('middllename') }}"><br>
        	
        <input type="text" id="surname" placeholder="Surname" class=" @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}"><br>
        	
        <input type="email" id="email" placeholder="Email Address" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"><br>
        	
        <input type="number" id="phone" placeholder="Phone Number" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"><br>
        	
        <input type="password" id="password" placeholder="Password" class=" @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"><br>
        	
        <input type="password" id="confirm-pass" placeholder="Confirm Password" name="confirm-password" required autocomplete="confirm-password" >
        <div>
            <input type="checkbox" id="check"><p class="agreed">I have read and agreed to the Privacy Policy and Terms & Conditions on this platform</p>
        </div>
        <div class="sign-up-button1">
            <input type="submit" value="{{ __('Register') }}">
            <p>Already a Member</p>
            <a href="/sign-in.html">Login Instead</a>
        </div>
        
    </form>

</x-guest-layout>