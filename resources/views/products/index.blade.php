<x-app-layout>
    
    
    
    <div style="margin:10px;padding:10px;background:#f3f5f8;">
        <a style="font-color:#fff" href="{{ route('products.create') }}"> Add Product </a>
    </div>
    <main class="mobile-product-container">
        <div class="we-meant-container-mobile">
            
            <p>The best value for your money all we listed here</p>
            <div></div>
        </div>
        @foreach ($products as $product)

        
   
        <div class="product-home-container">
            <div class="product-container">
                        
               <img src="{{ Storage::url($product->image); }}"  class="product-image" height="200" alt="{{ $product->name }}">
              <div class="product-body">
               <a href="{{ route('products.show', $product->id ) }}"> {{ $product->name }} </a> 
               <br>
                {{ $product->description }} <br>
                {{ $product->content }} <br>
            </div>
                    

                
            </div>
            
        </div>
        @endforeach
    </main>

    <main>

        <div class="we-meant-container">
            <div></div>
            <p>The best value for your money all we listed here</p>
            <div></div>
        </div>

        <div class="outer-container-for-product">
            <div class="desktop-product-container">

                @foreach ($products as $product)

                <div class="desktop-product-home-container">

                    <div class="product-container-d">

                        
                            <img src="{{ Storage::url($product->image); }}"  class="product-image" height="200" alt="{{ $product->name }}">
                           <div class="product-body">
                            <a href="{{ route('products.show', $product->id ) }}"> {{ $product->name }} </a> 
                            <br>
                             {{ $product->description }} <br>
                             {{ $product->content }} <br>
                         </div>
                             
                    </div>
                
                </div>
                @endforeach

           
            
            
        </div>
    </main>



</x-app-layout>