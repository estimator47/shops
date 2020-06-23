<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
//use App\Repositories\ShopRepository;

use App\ {
   Http\Controllers\Controller,
   Repositories\ShopRepository,
   Models\Product,
   Models\Cart,
   Http\Requests\CartRequest,
   Http\Requests\SubscribeRequest,
   Http\Controllers\Traits\Indexable
};

class ShopController extends Controller
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
    public function __construct(ShopRepository $repository)
    {

        //$this->middleware('auth');
        
        $this->repository = $repository;
        $this->namespace = 'front';
    }

    /**
     * Show the application home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //public function index(Request $request, ShopRepository $repository)
    /*public function index(Request $request)
    {
        $products = $this->repository->funcSelect($request);
        //$products = $repository->funcSelect($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view("front.brick-standard", ['products' => $products])->render(),
            ]);
        } 

        //submit
        return view('front.index', ['products' => $products]);
    } */

    /**
     * Show the application product page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function product($id, Product $model_product)
    {
         //$product = $this->repository->funcSelectOne($id);
           $product = $model_product->find($id);

        return view('front.product', compact('product'));
    }

    /**
     * cart page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cart(Request $request)
    {   $carts = $this->repository->fromCart();
        // Ajax response
        if ($request->ajax()) {
            return response()->json([
                'table' => view("front.cart-standard", ['carts' => $carts])->render(),
            ]);
        } 
        return view('front.cart', compact('carts'));
    }


    /**
     * store data tocart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tocart(CartRequest $request)
    {
        $this->repository->store($request);

        return redirect(url('/cart'));
    }

     /**
     * Remove all from cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clearall(Request $request, Cart $model_cart)
    {
        $model_cart->truncate();
         // Ajax response
        if ($request->ajax()) {
            return response()->json();
               }
        return redirect(url('/cart'));
    }


    /**
     * Remove one from cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clearone(Request $request, Cart $cart)
    {
        $cart->find($request->id)->delete();
    }

     /**
     * Mailer of sending message.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */ 
    public function mailer(SubscribeRequest $request)
    {   
        if(isset($request->validator) && $request->validator->fails()) //if you need validator->errors() in Controller
        {
            return json_encode($request->validator->errors());
        } 
        else{
           $rec = $this->repository->checksubscribe($request);
           // return json_encode(count($rec));
           if(count($rec) == 0){
                  return $this->repository->mailer($request);
                   }
           else {
                return json_encode('You have already subscribed');
                }
            } 
        
    }
    
     /**
     * register page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function register()
    {
       return view('auth.register');
    }
}
