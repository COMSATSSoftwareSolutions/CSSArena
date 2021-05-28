<?php

namespace App\Http\Controllers;

use App\Models\productcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productcategories = productcategory::all();
        // dd($categories);
        return view('Productcategory.index', compact('productcategories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('success');
        return view('Productcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => ['required', 'unique:productcategories', 'max:55'],
            'category_icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'isActive' => 'required',
        ]);

            $iconName = time().'.'.$request->category_icon->extension();
            $request->category_icon->move(public_path('images/product-icons'), $iconName);

            $productcategory = new productcategory([
                'category_name' => $request->get('category_name'),
                'category_icon' => $iconName,
                'isActive' => $request->get('isActive')
            ]);
            // dd($productcategory);
            $productcategory->save();


        // $iconName = time().'.'.$request->category_icon->extension();
        // $request->category_icon->storeAs('images', $iconName);

        // //    dd($request);
        // productcategory::create($request->all());

        return redirect()->route('cat_Index')
        ->with('success', 'Category added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function show(productcategory $productcategory)
    {

        // dd($productcategory);
        return view('Productcategory.show',compact('productcategory'));
    }

    // public function show($id)
    // {

    //      dd($id);
    //     return view('Productcategory.show',compact('productcategory'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(productcategory $productcategory)
    {
        // $categories = $category;
        // dd($category);
        return view('Productcategory.edit',compact('productcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productcategory $productcategory)
    {
        if ($request->hasFile('category_icon'))
        {
            $request->validate([
                'category_name' => ['required', 'max:55'],
                'category_icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'isActive' => 'required',
            ]);

                $iconName = time().'.'.$request->category_icon->extension();
                $request->category_icon->move(public_path('images'), $iconName);

                $request->merge(['category_icon' => $iconName]);
                // $productcategory = new productcategory([
                //     'category_name' => $request->get('category_name'),
                //     'category_icon' => $iconName,
                //     'isActive' => $request->get('isActive')
                // ]);
                // dd($productcategory);
                // $productcategory->update();
                $productcategory->update($request->all());
        }
        else
        {
            $request->validate([
                'category_name' => ['required', 'max:55'],
                'category_icon' => 'required',
                'isActive' => 'required',
            ]);

            $productcategory->update($request->all());
        }


        return redirect()->route('cat_Index')
                ->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(productcategory $productcategory)
    {
        $productcategory->delete();
        return redirect()->route('cat_Index')
        ->with('success', 'Deleated');
    }
}
