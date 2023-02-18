<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('planauth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {  
        
        //$products = Product::all();
        $products = Product::with(['images','author'])->filter(['product_category' => $request->input('product_category')] ?? [])->latest()->get();
        return view('products.index', compact('products'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request)
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Retrieve the validated input data...
         $data = $request->all();
        
        
         if ($request->has('image')) {
            $data['image'] = $this->handleImage($request);
        }


         $data['creator_id'] = auth()->user()->merchant->id;
        
         $data['uuid'] = Uuid::generate(4);
         $product = Product::create($data);
         
        
         $this->handleCategories($request, $product);
         alert()->success('Product Created Sucessfully');
         return redirect()->route('products.index');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        if ($request->has('product_reward')){
            if ($request->input('product_reward') !== $product->productReward){
                $product->productRewards()->create([
                    'percentage' => $request->input('product_reward')
                ]);
            }
        }
        
        $product->update($request->all());
        alert()->success('Product Updated Sucessfully');
        return redirect()->back();
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
         $request->delete();
         alert()->success('Product Deleted Sucessfully');
         return redirect()->back();
  
    }

      /**
     * @param Request $request
     * @param Post $post
     * @return void
     */
    private function handleCategories(Request $request, Product $product): void
    {
        $categories = [];

        if ($request->has('categories')) {
            foreach ($request->categories as $category) {
                $categories[] = Category::firstOrCreate(['name' => $category], ['name' => $category, 'user_id' => 2])['id'];
            }
        }

        $product->categories()->sync($categories);
    }

       /**
     * @param Request $request
     * @param Post $post
     * @return void
     */
    private function handleMultipleImages(Request $request, Product $product): void
    {
        $categories = [];

        if ($request->has('categories')) {
            foreach ($request->categories as $category) {
                $categories[] = Category::firstOrCreate(['name' => $category], ['name' => $category])['id'];
            }
        }

        $product->categories()->sync($categories);
    }


    /**
     * @param \App\Http\Requests\PostRequest $request
     * @return string
     */
    private function handleImage(Request $request): string
    {
        return $request->file('image')->store('products', 'public');
    }

}
