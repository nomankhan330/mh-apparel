<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use mysql_xdevapi\Exception;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\CategoryRequest;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File As FileObj;
class AdminController extends Controller
{
    public function index()
    {
        /*$user = Auth::user()->email;
        print_r($user);*/

        //$user = Auth::user();
        return view('admin.pages.dashboard');
    }

    #region Category
    public function categories(Request $request)
    {
        if ($request->ajax()) {

            $data = Categories::get();

            return Datatables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editData">Edit</a>';
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteData">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.pages.categories');
    }

    public function categories_save(CategoryRequest $request)
    {

        try {

            $input = $request->all();
            $data = [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'detail' => $request->detail,
                'active' => 1
            ];
            //dd($data);

            if ($request->hasFile('image')){
                $input['image'] = time().'.'.$request->image->extension();
                $request->image->move(public_path('assets/web/images/categories'), $input['image']);
                $data['image']=$input['image'];
            }

            Categories::updateOrCreate([
                'id' => $request->category_id
            ],$data );

            return response()->json(['code' => '200', 'message' => 'Data successfully added', 'status' => 'success']);

            /*if ($validator->passes()) {
            } else {
                return response()->json(['code' => '419', 'message'=>$validator->errors()->all(), 'status' => 'fail']);
            }*/

        }
        catch (\Exception $e) {
            return response()->json(['code' => '500', 'message' => 'Something went Wrong! ' . $e->getMessage(), 'status' => 'error']);
        }
    }

    public function categories_edit(Request $request)
    {
        $categories = Categories::find($request->category_id);
        return response()->json($categories);
    }

    public function categories_delete(Request $request)
    {

        Categories::find($request->category_id)->delete();

        return response()->json(['code' => '200', 'message' => 'Data deleted successfully', 'status' => 'success']);
    }
    #endregion Category

    #region Product

    public function product(Request $request)
    {
        if ($request->ajax()) {

            $data = Product::with('category')->get();

            return Datatables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editData">Edit</a>';
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteData">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $categories = Categories::get();

        return view('admin.pages.product', compact('categories'));
    }

    public function product_save(ProductRequest $request)
    {

        try {

            $input = $request->all();
            $data = [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'price' => 0,
                'category_id' => $request->category,
                'description' => $request->description,
                'active' => 1
            ];
            //dd($data);


            /*if ($request->hasFile('image')){
                $input['image'] = time().'.'.$request->image->extension();
                $request->image->move(public_path('assets/web/images/categories'), $input['image']);
                $data['image']=$input['image'];
            }*/

            $product=Product::updateOrCreate([
                'id' => $request->product_id
            ],$data );

            if($request->product_id == '')
            {
                try {
                    $imageArr=explode(',', $request->image);
                }
                catch (\Exception $e)
                {
                    ProductImage::create([
                        'product_id'=>$product->id,
                        'image_url'=>$imageArr,
                    ]);
                }
                $imageArr=explode(',', $request->image);

                for ($i=0; $i < count($imageArr); $i++)
                {
                    ProductImage::create([
                        'product_id'=>$product->id,
                        'image_url'=>$imageArr[$i],
                    ]);
                }
            }


            return response()->json(['code' => '200', 'message' => 'Data successfully added', 'status' => 'success']);

            /*if ($validator->passes()) {
            } else {
                return response()->json(['code' => '419', 'message'=>$validator->errors()->all(), 'status' => 'fail']);
            }*/

        }
        catch (\Exception $e) {
            return response()->json(['code' => '500', 'message' => 'Something went Wrong! ' . $e->getMessage(), 'status' => 'error']);
        }
    }

    public function product_edit(Request $request)
    {
        $product = Product::find($request->product_id);
        return response()->json($product);
    }

    public function product_delete(Request $request)
    {

        Product::find($request->product_id)->delete();

        return response()->json(['code' => '200', 'message' => 'Data deleted successfully', 'status' => 'success']);
    }

    #endregion Product

    #region Product Image
    public function productImage(Request $request)
    {
        if ($request->hasFile('file')) {
            //  FileObj::delete($accountHolder->image);
            $destinationPath = base_path('public/assets/web/images/products');
            $file = $request->file('file');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $size = $file->getSize();
            $file->move($destinationPath, $filename);
            $path = "assets/web/images/products/" . $filename;

            if($request->product_id != '')
            {
                ProductImage::create([
                    'product_id'=>$request->product_id,
                    'image_url'=>$path,
                ]);
            }
            return response()->json(['path' => $path]);
        }
    }

    public function productAdd()
    {
        $categories = Categories::get();
        return view('admin.pages.product_add',compact('categories'));
    }

    public function productEdit(Request $request)
    {
        $categories = Categories::get();
        $product=product::find($request->product_id);
        $addsImage =ProductImage::where('product_id',$request->product_id)->get();
        for ($i = 0; $i < count($addsImage); $i++) {
            $addsImage[$i]->image_url = asset($addsImage[$i]->image_url);
        }
        $addsImage = json_encode($addsImage);
        return view('admin.pages.product_add',compact('categories','product','addsImage'));
    }

    public function deleteImage(Request $request)
    {
        try
        {
            $imageId = $request->imageId;
            $data=ProductImage::where('id', $imageId)->get();
            File::delete($data[0]->image_url);
            ProductImage::where('id', $imageId)->delete();
        }
        catch (\Exception $e)
        {
            return true;
        }
        return true;

    }
    #endregion Product Image
}
