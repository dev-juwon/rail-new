<x-app-layout>
    
    <main class="mobile-product-container">
        <div class="we-meant-container-mobile">
            <div></div>
            <p>The best value for your money all we listed here</p>
            <div></div>
        </div>
        
            
    
        <div class="product-home-container">
            <div class="product-container">
                <img src="{{ Storage::url($product->image); }}"  class="product-image" height="200" alt="{{ $product->name }}">
             
               {{ $product->name }}

               
        @foreach ($product->images as $image)

           {{ $image->file_name }}  
        @endforeach
        <p>
               {{ $product->description }}
               {{ $product->content }}
            </p>
            </div>
            
        </div>
    </main>

    <main>

        <div class="we-meant-container">
            <div></div>
            <p>The best value for your money all we listed here</p>
            <div></div>
        </div>

        <div class="outer-container-for-product">
            <div class="desktop-product-container">
                <div class="desktop-product-home-container">
                    <div class="product-container-d"></div>

                    
                    @foreach ($product->images as $image)

                    {{ $image->file_name }}  
                   @endforeach
                    
                    {{ $product->name }}
                    {{ $product->description }}
                    {{ $product->content }}
                </div>
              
    
                
            
            </div>
    
            <div class="desktop-product-container">
                <div class="desktop-product-home-container">
                    <div class="product-container-d">
                        @foreach ($product->images as $image)

                    {{ $image->file_name }}  
                   @endforeach
                    
                        {{ $product->name }}
                        {{ $product->description }}
                        {{ $product->content }}
                    </div>
                
                </div>
    
            
            </div>
    
          
            
        </div>
    </main>



</x-app-layout>