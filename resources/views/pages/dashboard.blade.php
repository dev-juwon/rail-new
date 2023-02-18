
<x-app-layout>

    <main>
    
        <div style="padding:20px;margin:20px;color:#fff;font-size:30px">
            <div class="user-name-content">
                <p>Welcome, <span>{{ Auth::user()->firstname }}</span></p>
            </div>
        </div>
    
    
    <p style="color:#fff">
    Dashboard page 
    </p>
    
        <br>
            <br>
    
      
        
        
    </main>
    
    </x-app-layout>