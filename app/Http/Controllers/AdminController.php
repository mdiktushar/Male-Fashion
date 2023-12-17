<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Services\ImageBBService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pages.admin.dashboard');
    }

    /**
     * Display a listing of the resource.
     */
    public function adminProduct()
    {
        //
        return view('pages.admin.products');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addProductView()
    {
        //
        return view('pages.admin.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeProduct(AddProductRequest $request)
    {
        //
        $data = $request->all();
        $apiKey = env('IMAGEBB_API_KEY');
        $imageBBService = new ImageBBService($apiKey);
        $response = $imageBBService->uploadImage($request->picture);

        $data['picture'] = $response['data']['display_url'];
        auth()->user()->products()->create($data);
        session()->flash('product_added', 'Product Has Been Added');
        return redirect()->route('homePage');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
