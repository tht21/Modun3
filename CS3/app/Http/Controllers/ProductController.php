<?php

namespace App\Http\Controllers;

use App\Components\Recusive;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductTag;
use App\Models\Tag;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use mysql_xdevapi\Exception;


class ProductController extends Controller
{
    use StorageImageTrait;

    private $category;
    private $product;
    private $productImage;
    private $productTag;
    private $tag;

    public function __construct(Category $category, Product $product, ProductImage $productImage, ProductTag $productTag, Tag $tag)
    {
        $this->category = $category;
        $this->product = $product;
        $this->productImage = $productImage;
        $this->productTag = $productTag;
        $this->tag = $tag;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = $this->product->latest()->paginate(5);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->getCategory($parentId = '');
        $data = $this->product->get();

        return view('admin.products.create', compact('data', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataProductCreate = [
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'user_id' => Auth::id(),
                'category_id' => $request->category_id,
                'status' => $request->status,
            ];
            $dataUploadImage = $this->storageUpload($request, 'image_path', 'product');

//        $fileName = $request->image_path->getClientOriginalName();
//        $path = $request->file('image_path')->storeAs('public/product',$fileName);
            if (!empty($dataUploadImage)) {
                $dataProductCreate['image_name'] = $dataUploadImage['file_name'];
                $dataProductCreate['image_path'] = $dataUploadImage['file_path'];
            }

            $product = $this->product->create($dataProductCreate);

            // Insert data to product_images
            if ($request->hasFile('image_path_detail')) {
                foreach ($request->image_path_detail as $fileItem) {
                    $dataProductImageDetail = $this->storageUploadDetail($fileItem, 'product');
                    $dataProductImageDetailCreate = [
                        'image_path' => $dataProductImageDetail['file_path'],
                        'image_name' => $dataProductImageDetail['file_name']
                    ];
                    //imageDetail trung gian
                    $product->imageDetail()->create($dataProductImageDetailCreate);
                }
            }

            // Insert tags for product
            foreach ($request->tags as $tagItem) {
                $tagInstance = $this->tag->firstOrCreate(['name' => $tagItem]);
                $tagIds[] = $tagInstance->id;
            }

            $product->tags()->attach($tagIds);
            DB::commit();
            return redirect()->route('products.index');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Message: ' . $e->getMessage() . ' --- Line : ' . $e->getLine());
        }
        // dd($request->tags);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = $this->product->find($id);
        $categories = $this->getCategory($products->category_id);
        return view('admin.products.edit', compact('categories', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $dataProductCreate = [
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'user_id' => Auth::id(),
                'category_id' => $request->category_id,
                'status' => $request->status,
            ];
            $dataUploadImage = $this->storageUpload($request, 'image_path', 'product');

//        $fileName = $request->image_path->getClientOriginalName();
//        $path = $request->file('image_path')->storeAs('public/product',$fileName);
            if (!empty($dataUploadImage)) {
                $dataProductCreate['image_name'] = $dataUploadImage['file_name'];
                $dataProductCreate['image_path'] = $dataUploadImage['file_path'];
            }

            $this->product->find($id)->update($dataProductCreate);
            $product = $this->product->find($id);
            // Insert data to product_images
            if ($request->hasFile('image_path_detail')) {
                $this->productImage->where('product_id', $id)->delete();
                foreach ($request->image_path_detail as $fileItem) {
                    $dataProductImageDetail = $this->storageUploadDetail($fileItem, 'product');
                    $dataProductImageDetailCreate = [
                        'image_path' => $dataProductImageDetail['file_path'],
                        'image_name' => $dataProductImageDetail['file_name']
                    ];
                    //imageDetail trung gian
                    $product->imageDetail()->create($dataProductImageDetailCreate);
                }
            }

            // Insert tags for product
            foreach ($request->tags as $tagItem) {
                $tagInstance = $this->tag->firstOrCreate(['name' => $tagItem]);
                $tagIds[] = $tagInstance->id;
            }

            $product->tags()->sync($tagIds);
            DB::commit();
            return redirect()->route('products.index');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Message: ' . $e->getMessage() . ' --- Line : ' . $e->getLine());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->product->findOrFail($id)->delete();
        return redirect()->route('products.index');
    }

    public function getCategory($parentId)
    {
        $data = $this->category->get();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->showCategories($parentId);
        return $htmlOption;
    }

}
