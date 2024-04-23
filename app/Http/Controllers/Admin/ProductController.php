<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Productproperty\Ram;
use App\Http\Controllers\Controller;
use App\Models\Productproperty\Size;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductFormRequest;
use App\Models\Productproperty\Processor;
use App\Models\Productproperty\Storage as ProductStorage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user ??= Auth::user()->id;
        $products = Product::where('user_id',$user)->orderBy('created_at','desc')->paginate(15);

        return view('admin.product.index',[
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product;

        return view('admin.product.edit-create',[
            'product' => $product,
            'processors' => Processor::pluck('name','id'),
            'rams' => Ram::pluck('capacity','id'),
            'sizes' => Size::pluck('length','id'),
            'storages' => ProductStorage::pluck('capacity','id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFormRequest $request)
    {
        $product = new Product;
        $product = Product::create($this->handleData($product,$request));

        return to_route('admin.product.index')->with('success','Le produit a bien été créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit-create',[
            'product' => $product,
            'processors' => Processor::pluck('name','id'),
            'rams' => Ram::pluck('capacity','id'),
            'sizes' => Size::pluck('length','id'),
            'storages' => ProductStorage::pluck('capacity','id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductFormRequest $request, Product $product)
    {
        $data = $this->handleData($product,$request);
        $product->update($data);

        return to_route('admin.product.index')->with('success','Le produit a bien été modifier');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if($product->image){
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return to_route('admin.product.index')->with('success','Le produit a bien été supprimer');

    }

    private function handleData(Product $product, ProductFormRequest $request): array
    {
        $data = $request->validated();

        /**
         * @var UploadedFile|null $image
         */
        $image = $request->validated('image');
        if($image === null || $image->getError()){
            return $data;
        }
        if($product->image){
            Storage::disk('public')->delete($product->image);
        }
        $data['image'] = $image->store('product','public');
        return $data;
    }
}
