<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductFeature;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Util\Json;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class ProductFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featuresList = ProductFeature::latest()->paginate(5);
        // dd($featuresList);
        return view('products/features.index',compact('featuresList'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // Add product Features Ajax
    public function addfeature(Request $request, $id)
    {

        $rules = [];

        foreach ($request->input('featureName') as $key => $value) {
            $rules["featureName.{$key}"] = 'required';
            $rules["featureDescription.{$key}"] = 'required';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $now = Carbon::now();
        foreach ($request->input("featureName") as $key => $value){

            $productFeature = new ProductFeature;
            $productFeature->featureName = $request->get("featureName")[$key];
            $productFeature->featureDescription = $request->get("featureDescription")[$key];
            $productFeature->productId = $id;
            $productFeature->isActive = true;
            $productFeature->created_at = $now;
            $productFeature->updated_at = $now;
            $productFeature->key_feature = 0;

            $productFeature->save();

        }

    return (1);
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('test3');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductFeature  $productFeature
     * @return \Illuminate\Http\Response
     */
    public function show(ProductFeature $productFeature)
    {
        dd('test2');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductFeature  $productFeature
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductFeature $productFeature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductFeature  $productFeature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductFeature $productFeature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductFeature  $productFeature
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductFeature $productFeature)
    {
        //
    }
}
