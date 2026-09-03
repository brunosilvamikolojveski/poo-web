<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
use App\Http\Requests\CustomerUpdateRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Customer::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerStoreRequest $request)
    {
        $data = $request->validated();

        $customer = Customer::create($data);

        return $customer;
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return $customer;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Customer $customer, CustomerUpdateRequest $request)
    {
        $data = $request->validated();
        $customer->update($data);

        return $customer;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return response()->json(null,204);
    }
}
