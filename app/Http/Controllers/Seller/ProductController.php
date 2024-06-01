<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\ProductImage;
use App\Rules\ValidatePrice;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function addProduct(Request $request){
       $data = [
          'pageTitle'=>'Add Product',
          'categories'=>Category::orderBy('category_name','asc')->get()
       ];
       return view('back.pages.seller.add-product',$data);
    } //End Method

    public function getProductCategory(Request $request){
        $category_id = $request->category_id;
        $category = Category::findOrFail($category_id);
        $subcategories = SubCategory::where('category_id',$category_id)
                                    ->where('is_child_of',0)
                                    ->orderBy('subcategory_name','asc')
                                    ->get();

        $html = '';
        foreach( $subcategories as $item ){
            $html.='<option value="'.$item->id.'">'.$item->subcategory_name.'</option>';
            if( count($item->children) > 0 ){
                foreach( $item->children as $child ){
                    $html.='<option value="'.$child->id.'">-- '.$child->subcategory_name.'</option>';
                }
            }
        }
        return response()->json(['status'=>1,'data'=>$html]);
    } //End Method

    public function createProduct(Request $request){
        /**
         * VALIDATE THE FORM
         * -----------------
         */
        $request->validate([
            'name'=>'required|unique:products,name',
            'summary'=>'required|min:100',
            'product_image'=>'required|mimes:png,jpg,jpeg|max:1024',
            'category'=>'required|exists:categories,id',
            'subcategory'=>'required|exists:sub_categories,id',
            'price'=>['required',new ValidatePrice],
            'compare_price'=>['nullable',new ValidatePrice],
        ],[
            'name.required'=>'Enter product name',
            'name.unique'=>'This product name is already taken.',
            'summary.required'=>'Write summary for this product',
            'product_image.required'=>'Choose product image',
            'category.required'=>'Select product category',
            'subcategory.required'=>'Select product sub category',
            'price.required'=>'Enter product price'
        ]);

        $product_image = null;
        if( $request->hasFile('product_image') ){
            $path = 'images/products/';
            $file = $request->file('product_image');
            $filename = 'PIMG_'.time().uniqid().'.'.$file->getClientOriginalExtension();

            // $upload = $file->move(public_path($path), $filename);
            $maxWidth = 1080;
            $maxHeight = 1080;
            $full_path = $path.$filename;
            $image = Image::make($file->path());
    
            $image->height() > $image->width() ? $maxWidth = null : $maxHeight = null;
            $image->fit($maxWidth, $maxHeight, function($constraint){
                  $constraint->upsize();
            });
            $upload = $image->save($full_path);

            if( $upload ){
                $product_image = $filename;
            }
        }

        //SAVE PRODUCT DETAILS
        $product = new Product();
        $product->user_type = 'seller';
        $product->seller_id = auth('seller')->id();
        $product->name = $request->name;
        $product->summary = $request->summary;
        $product->category = $request->category;
        $product->subcategory = $request->subcategory;
        $product->price = $request->price;
        $product->compare_price = $request->compare_price;
        $product->visibility = $request->visibility;
        $product->product_image = $product_image;
        $saved = $product->save();

        if( $saved ){
            return response()->json(['status'=>1,'msg'=>'New product has been successfully created.']);
        }else{
            return response()->json(['status'=>0,'msg'=>'Something went wrong.']);
        }
    } //End Method

    public function allProducts(Request $request){
        $data = [
            'pageTitle'=>'My Products'
        ];
        return view('back.pages.seller.products',$data);
    } //End Method

    public function editProduct(Request $request){
       $product = Product::findOrFail($request->id);
       $categories = Category::orderBy('category_name','asc')->get();
       $subcategories = SubCategory::where('category_id',$product->category)
                                   ->where('is_child_of',0)
                                   ->orderBy('subcategory_name','asc')
                                   ->get();
        $data = [
            'pageTitle'=>'Edit Product',
            'categories'=>$categories,
            'subcategories'=>$subcategories,
            'product'=>$product
        ];
        return view('back.pages.seller.edit-product',$data);
    } //End Method

    public function updateProduct(Request $request){
        $product = Product::findOrFail($request->product_id);
        $product_image = $product->product_image;

        /**
         * VALIDATE THE FORM
         * -----------------
         */

         $request->validate([
            'name'=>'required|unique:products,name,'.$product->id,
            'summary'=>'required|min:100',
            'product_image'=>'nullable|mimes:png,jpg,jpeg|max:1024',
            'subcategory'=>'required|exists:sub_categories,id',
            'price'=>['required', new ValidatePrice],
            'compare_price'=>['nullable', new ValidatePrice],
         ],[
            'name.required'=>'Enter product name',
            'name.unique'=>'This product name is already taken',
            'summary.required'=>'Write product summary',
            'subcategory.required'=>'Select product sub category',
            'price.required'=>'Enter product price'
         ]);

         //Upload product image
         if( $request->hasFile('product_image') ){
            $path = 'images/products/';
            $file = $request->file('product_image');
            $filename = 'PIMG_'.time().uniqid().'.'.$file->getClientOriginalExtension();
            $old_product_image = $product->product_image;

            // $upload = $file->move(public_path($path),$filename);
            $maxWidth = 1080;
            $maxHeight = 1080;
            $full_path = $path.$filename;
            $image = Image::make($file->path());
    
            $image->height() > $image->width() ? $maxWidth = null : $maxHeight = null;
            $image->fit($maxWidth, $maxHeight, function($constraint){
                  $constraint->upsize();
            });
            $upload = $image->save($full_path);

            if( $upload ){
                //Delete old product image
                if( File::exists(public_path($path.$old_product_image)) ){
                    File::delete(public_path($path.$old_product_image));
                }

                $product_image = $filename;
            }
         }

         //UPDATE PRODUCT
         $product->name = $request->name;
         $product->slug = null;
         $product->summary = $request->summary;
         $product->category = $request->category;
         $product->subcategory = $request->subcategory;
         $product->price = $request->price;
         $product->compare_price = $request->compare_price;
         $product->visibility = $request->visibility;
         $product->product_image = $product_image;
         $updated = $product->save();

         if( $updated ){
            return response()->json(['status'=>1,'msg'=>'Product has been successfully updated.']);
         }else{
            return response()->json(['status'=>0,'msg'=>'Something went wrong.']);
         }
    } // End Method

    public function uploadProductImages(Request $request){
        $product = Product::findOrFail($request->product_id);
        $path = "images/products/additionals/";
        $file = $request->file('file');
        $filename = 'APIMG_'.$product->id.time().uniqid().'.'.$file->getClientOriginalExtension();

        //Upload image(s)
        // $file->move(public_path($path), $filename);
        $maxWidth = 1080;
        $maxHeight = 1080;
        $full_path = $path.$filename;
        $image = Image::make($file->path());

        $image->height() > $image->width() ? $maxWidth = null : $maxHeight = null;
        $image->fit($maxWidth, $maxHeight, function($constraint){
              $constraint->upsize();
        });
        $image->save($full_path);

        //Save image(s) path/name
        $pimage = new ProductImage();
        $pimage->product_id = $product->id;
        $pimage->image = $filename;
        $pimage->save();
    } // End Method

    public function getProductImages(Request $request){
        $product = Product::with('images')->findOrFail($request->product_id);
        $path = "images/products/additionals/";
        $html = "";
        if( $product->images->count() > 0 ){
            foreach( $product->images as $item ){
                $html.='<div class="box">
                   <img src="/'.$path.$item->image.'">
                   <a href="javascript:;" data-image="'.$item->id.'" class="btn btn-danger btn-sm" id="deleteProductImageBtn"><i class="fa fa-trash"></i></a>
                </div>';
            }
        }else{
            $html = '<span class="text-danger">No image(s)</span>';
        }

        return response()->json(['status'=>1,'data'=>$html]);
    } // End Method

    public function deleteProductImage(Request $request){
        $product_image = ProductImage::findOrFail($request->image_id);
        $path = "images/products/additionals/";

        if( $product_image->image != null && File::exists(public_path($path.$product_image->image)) ){
            File::delete(public_path($path.$product_image->image));
        }
        $delete = $product_image->delete();

        if( $delete ){
            return response()->json(['status'=>1,'msg'=>'Product image has been successfully deleted.']);
        }else{
            return response()->json(['status'=>0,'msg'=>'Something went wrong.']);
        }
    } //End Method

    public function deleteProduct(Request $request){
        $product = Product::with('images')->findOrFail($request->product_id);

        //First, check if this product has additionals image(s) and delete them
        if( $product->images->count() > 1 ){
            $images_path = 'images/products/additionals/';
            foreach( $product->images as $item ){
                if( $item->image != null && File::exists(public_path($images_path.$item->image)) ){
                    File::delete(public_path($images_path.$item->image));
                }
                $pimage = ProductImage::findOrFail($item->id);
                $pimage->delete();
            }
        }

        //Delete actual product
        $path = 'images/products/';
        $product_image = $product->product_image;
        if( $product_image != null && File::exists(public_path($path.$product_image)) ){
            File::delete(public_path($path.$product_image));
        }
        $delete = $product->delete();

        if( $delete ){
            return response()->json(['status'=>1,'msg'=>'Product has been successfully deleted.']);
        }else{
            return response()->json(['status'=>0,'msg'=>'Something went wrong.']);
        }
    }
}
