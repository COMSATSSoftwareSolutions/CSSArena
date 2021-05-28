<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\productcategory;
use App\Models\ProductFeature;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id','asc')->paginate(15);

        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function brandIndex()
    {
        $products = DB::table('products')->inRandomOrder()->get();
        $latestproducts = Product::orderBy('id', 'desc')->take(6)->get();
        $featured_products = Product::where('isFeatured', '=', true)
        ->latest()->get();
        $mobiles = Product::where('categoryId',1)
        ->latest()->get();
        $cars = Product::where('categoryId',2)
        ->latest()->get();
        $laptops = Product::where('categoryId',5)
        ->latest()->get();
        $electronics = Product::where('categoryId',4)
        ->latest()->get();
        $cats = DB::table('productcategories')->get();
        // dd($featured_products);
        // dd($cats);
        return view('front.welcome',compact('products','featured_products','mobiles','cars','laptops','electronics','latestproducts','cats'));
        // return view('brand/brandIndex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = productcategory::all();
        $userdata = User::all();
        // dd($data);
        return view('products.create', compact('data', 'userdata'));
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
            'name' => 'required',
            'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024|dimensions:min_height=100,max_height=1000,ratio=3/2',
            'price' => 'required',
            'model_no' => 'required',
            'description' => 'required',
            'categoryId' => 'required',
            'isActive' => 'required',
        ],[
            'product_img.dimensions' => 'Image height must be between 100px-1000px, and ratio 3/2.'
        ]);
        $imgName = time().'.'.$request->product_img->extension();
        $request->product_img->move(public_path('images/product-imgs'), $imgName);
            // dd($request);
        $product = new Product([
            'name' => $request->get('name'),
            'product_img' => $imgName,
            'price' => $request->get('price'),
            'model_no' => $request->get('model_no'),
            'description' => $request->get('description'),
            'categoryId' => $request->get('categoryId'),
            'userId' => $request->get('userId'),
            'isActive' => $request->get('isActive'),
        ]);

            $product->save();

        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    public function showbycategory($id)
    {
        $product = Product::where('categoryId' , $id)->get();
        // dd($product);
        $products = $product;
        return view('products.product-bycategory', compact('products'));
    }
    public function productdetail($id)
    {
        $product = Product::findorfail($id);
        // dd($product);
        $product_features = ProductFeature::where('productId', $product->id)->get();

        return view('front.product-detail', compact('product','product_features'));
    }
    public function productview($id)
    {
        $product = Product::findorfail($id);
        // dd($product);
        $product_features = ProductFeature::where('productId', $product->id)->get();

        return view('products.detail', compact('product','product_features'));
    }
    /**
     * Show the form for searching the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function productcompare(Product $product)
    {
        // $comparewith = Product::findorfail($product->id);
        // dd($product2);
        // $products = Product::all();
        if(!empty($product2)){
            return view('front.product-compare', compact('product'));
        }
        else{
            return view('front.product-compare', compact('product'));
        }
    }
    public function search(Request $request)
    {

    if($request->ajax())
    {
    $output='';
    $products=DB::table('products')
    ->where('name','LIKE','%'.$request->search."%")
    ->orWhere('model_no','LIKE','%'.$request->search."%")
    ->get();

    if($products)
    {

        foreach ($products as $key => $product) {

            $output.=
            '<option>'.$product->name.'</option>';
            }
            return Response($output);
    }
    }
    }
    public function allproduct($id)
    {
        $all_products = DB::table('products')->where('categoryId', $id)->get();
        $cats = DB::table('productcategories')->get();
        $latestproducts = Product::orderBy('id', 'desc')->take(6)->get();
        if(!empty($all_products)){

            $heading = "Products in this Category";
            return view('front.all-products', compact('all_products','cats','latestproducts','heading'));
        }
            $all_products = Product::all();
            $heading = "All Products";dd($all_products);


        return view('front.all-products', compact('all_products','cats','latestproducts','heading'));
    }

    /**
     * Get the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function compareresult(Request $request)
    {

    $product2=DB::table('products')
    ->where('name','LIKE','%'.$request->searchitem.'%')
    ->orWhere('model_no','LIKE','%'.$request->searchitem."%")
    ->firstOrFail();
    dd($product2);
    $view = view("front.product-compare",compact('product2'))->render();
    return Response($view);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data = productcategory::all();
        $userdata = User::all();
        // dd($data);
        return view('products.edit', compact('data', 'userdata', 'product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
