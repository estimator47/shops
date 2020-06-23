<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
//use App\Repositories\ShopRepository;

use App\ {
   Http\Controllers\Controller,
   Repositories\AdminRepository,
   Http\Controllers\Traits\Indexable,
   Http\Requests\CartRequest,
   Models\Product 
};

class AdminController extends Controller
{
     use Indexable;
     /**
     * The Controller instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    //protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    //public function __construct()
    public function __construct(AdminRepository $repository)
    {

        //$this->middleware('auth');
        $this->repository = $repository;
        $this->namespace = 'back';
    }

        /**
     * Create a new view for creating a new product in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */              
    public function create()
    {
       return view('back.products.create');
    }

      /**
     * Upload a new image for creating a new product in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $file = $request->image;         
        $filecontent = $file->openFile()->fread($file->getSize());  
        $filename = date('YmdHis') . $file->getClientOriginalName();  
        $file->move(public_path() . '/img/products/', $filename);      //!!!/img/bg-img/ - custom
        return view('back.products.create', ['image' => $filename]);
    }

     /**
     * Store a newly created product in storage.
     *
     * @param  \App\Http\Requests\CartRequest $request
     * @return \Illuminate\Http\Response
     */      
    public function store(CartRequest $request)
    {
       $this->repository->store($request);

       return redirect(route('products.create'))->with('product-ok', 'New product has been successfully created...');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Requests\CartRequest $request
     * @return \Illuminate\Http\Response
     */      
    public function edit(Product $product)
    {
       return view('back.products.edit', compact('product'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CartRequest $request
     * @return \Illuminate\Http\Response
     */      
    public function update(CartRequest $request, Product $product)
    {
       $this->repository->update($request, $product);

       return redirect(route('dashboard'))->with('product-updated', 'Product has been successfully updated...');
    }

     public function destroy(Request $request, Product $product)
    {
        $product->delete();

        return $this->index($request);
    } 


}
