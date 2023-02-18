
<x-app-layout>
    <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('products.store') }}">
    	      @csrf
        <p> Add Products here, Products are subjected to approval</p>

       <input type="text" id="name" placeholder="Products Name"  name="name" value="{{ old('name') }}" ><br>
       <input type="text" id="category" placeholder="Search categories" name="categories[]" value="{{ old('category') }}" required autocomplete="category" ><br>
        
        <textarea id="description" rows="3" placeholder="Enter discription"  name="description" value="{{ old('description') }}"></textarea><br>
       		
        <textarea id="content" rows="5" placeholder="Brief Content"  name="content" value="{{ old('content') }}"></textarea><br>
       
        <input type="file" id="file multiple" placeholder="Upload Images"  name="image" value="{{ old('image') }}" ><br>
       
        <div class="sign-up-button">
            <input type="submit" value=" {{ __('Create Product') }}">
          
        </div>
        
    </form>

    <form class="form1" method="POST" action="{{ route('products.store') }}">
        @csrf
        <p> Add Products here, Products are subjected to approval</p>

        <input type="text" id="name" placeholder="Products Name"  name="name" value="{{ old('name') }}" ><br>
        <input type="text" id="category" placeholder="Search categories" name="categories[]" value="{{ old('category') }}" required autocomplete="category" ><br>
         
         <textarea id="description" rows="3" placeholder="Enter discription"  name="description" value="{{ old('description') }}"></textarea><br>
                
         <textarea id="content" rows="5" placeholder="Brief Content"  name="content" value="{{ old('content') }}"></textarea><br>
        
         <input type="file" id="file multiple" placeholder="Upload Images"  name="image" value="{{ old('image') }}" ><br>
         
        <div class="sign-up-button1">
            <input type="submit" value=" {{ __('Create Product') }}">
          
        </div>
        
    </form>

</x-app-layout>