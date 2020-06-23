<?php

namespace App\Repositories;

use App\Models\ {
    Product,
    Cart,
    Subscribe
};
use Illuminate\Support\Facades\DB;
class ShopRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model_product;
    protected $model_cart;
    protected $model_subscribe;


    /**
     * Create a new ProductRepository instance.
     *
     * @param  \App\Models\Product $product
     */
    public function __construct(Product $product, Cart $cart, Subscribe $subscribe)
    //public function __construct()
    {
        $this->model_product = $product;
        $this->model_cart = $cart;
        $this->model_subscribe = $subscribe;
    }

    /**
     * Create a query for Product.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcSelect($request, $parameters)
    {
        $query = $this->model_product
            ->select('id', 'name', 'price', 'image')
            //->where('top9', '=', 1);
            //->where('top9', 1);
            ->orderBy($parameters['order'], $parameters['direction']);
        if(isset($request->search)) $query->where('name', 'like', '%' . $request->search . '%');
        else if(isset($request->top9) && $request->top9 == 1) $query->where('top9', $request->top9);
        else $query->where('top9', 0);
        return $query->get();
    }



/**
     * Create a query for Product.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcSelectOne($id)
    {      
             $query = $this->model_product
            ->select('id', 'name', 'price', 'image')
            ->where('id', $id);
            return $query->get();
    }

    /**
     * store data tocart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store($request)
    {
        //Cart::create($request->all());
        //$this->model_cart->user_id = 1;
        $this->model_cart->user_id = auth()->user()->id; //!!!auth()->user()->id
        $this->model_cart->name = $request->name;
        $this->model_cart->price = $request->price;
        $this->model_cart->image = $request->image;
        $this->model_cart->save();
    }

      /**
     * Create a query for Cart.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function fromCart()
    {      
             $query = $this->model_cart
            ->select('id', 'user_id', 'name', 'price', 'image')
            ->where('user_id', auth()->user()->id); //!!!auth()->user()->id
             return $query->get();
    }

      /**
     * Mailer of sending message.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */ 
    public function mailer($request)
    {    
        $this->model_subscribe->email = $request->email;
        $this->model_subscribe->save();
        //Subscribe::create($request->all());

        $title = 'Message of your registration - ' . date('d-m-Y H:i:s');
        $message = 'You has been successfully registred!';
        $client = new \GuzzleHttp\Client([
           'headers' => [
               //'Authorization' => '9267585bb333341dc049321d4e74398f',
               //'Content-Type' => 'application/json',
            ]
        ]);
        $response = $client->request('GET', 'http://api.25one.com.ua/api_mail.php?email_to=' . $request->email . '&title=' . $title . '&message=' . $message,
         [
            //...
         ]);    
        //return json_decode($response->getBody()->getContents());  
        return response()->json([
                'answer' => $response->getBody()->getContents(),
            ]);
    } 

         /**
     * Checking existence of Email.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function checksubscribe($request)
    {      
        // return $request->email;
             $query = $this->model_subscribe
            ->select('email');
             return $query->where('email',$request->email)->get();
        
    }
}
