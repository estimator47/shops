<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;

use App\ {
   Http\Controllers\Controller,
   Repositories\AdminRepository,
   Http\Requests\ApiRequest 
   

};

class ApiController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AdminRepository $repository)
    {
        
       
        $this->repository = $repository;
    }

   
    /**
     * Store a new message.
     *
     * @return void
     */
    //public function store(ApiRequest $request)
    public function store(ApiRequest $request)
    {
        if(isset($request->validator) && $request->validator->fails()) //if you need validator->errors() for ApiRequest $request + see in ApiRequest
        {
            return $request->validator->errors(); //{"message":["The message field is required."]}
        }

        return json_encode($this->repository->storeapi($request));

    }  
              

}
