 <x-guest-layout>
    


    <form class="form" method="POST" action="{{ route('login') }}">
    	     @csrf
        <p>Welcome Back!</p>
        
        <input type="email" class="@error('email') is-invalid @enderror" id="lname" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email"  ><br>
        	@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                             @enderror
        <input type="password" id="lname" placeholder="Passwrord"  class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        	  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
        <div>
            <input type="checkbox" id="lname" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><p class="agreed">   {{ __('Remember Me') }}</p>
        </div>
        <div class="sign-up-button">
            <input type="submit" value="{{ __('Login') }}">
            	     @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
            
        </div >
        <div class="dont-container">
            <p>Don't have an account?</p><a href=""{{ route('register') }}">Sign up here</a>
        </div>
        
    </form>

    <form class="form1" method="POST" action="{{ route('login') }}">
        @csrf
   <p>Welcome Back!</p>
   
   <input type="email" class="@error('email') is-invalid @enderror" id="lname" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email"  ><br>
       @error('email')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                        @enderror
   <input type="password" id="lname" placeholder="Passwrord"  class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
         @error('password')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                           
   <div>
       <input type="checkbox" id="lname" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><p class="agreed">   {{ __('Remember Me') }}</p>
   </div>
   <div class="sign-up-button1">
       <input type="submit" value="{{ __('Login') }}">
                @if (Route::has('password.request'))
                               <a href="{{ route('password.request') }}">
                                   {{ __('Forgot Your Password?') }}
                               </a>
                           @endif
       
   </div >
   <div class="dont-container1">
       <p>Don't have an account?</p><a href=""{{ route('register') }}">Sign up here</a>
   </div>
   
</form>
</x-guest-layout>