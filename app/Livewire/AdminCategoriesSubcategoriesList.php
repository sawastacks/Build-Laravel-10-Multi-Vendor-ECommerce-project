<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\File;
use Livewire\WithPagination;

class AdminCategoriesSubcategoriesList extends Component
{
    use WithPagination;

    public $categoriesPerPage = 5;
    public $subcategoriesPerPage = 3;
    
    protected $listeners = [
        'updateCategoriesOrdering',
        'deleteCategory',
        'updateSubCategoriesOrdering',
        'updateChildSubCategoriesOrdering',
        'deleteSubCategory'
    ];

    public function updateCategoriesOrdering($positions){
        foreach($positions as $position){
            $index = $position[0];
            $newPosition = $position[1];
            Category::where('id',$index)->update([
                'ordering'=>$newPosition
            ]);

            $this->showToastr('success','Categories ordering have been successfully updated.');
        }
    }

    public function updateSubCategoriesOrdering($positions){
        foreach( $positions as $position ){
            $index = $position[0];
            $newPosition = $position[1];
            SubCategory::where('id',$index)->update([
                'ordering'=>$newPosition
            ]);
            $this->showToastr('success','Sub Categories ordering have been successfully updated.');
        }
    }

    public function updateChildSubCategoriesOrdering($positions){
        foreach( $positions as $position ){
            $index = $position[0];
            $newPosition = $position[1];
            SubCategory::where('id',$index)->update([
                'ordering'=>$newPosition
            ]);
            $this->showToastr('success','Child Sub Categories ordering have been successfully updated.');
        }
    }

    public function deleteCategory($category_id){
        $category = Category::findOrFail($category_id);
        $path = 'images/categories/';
        $category_image = $category->category_image;

        //CHECK IF THIS CATEGORY HAS SUBCATEGORIES
        if( $category->subcategories->count() > 0 ){
            //Check if on of these subcategories has related product(s)

            //Delete sub categories
            foreach( $category->subcategories as $subcategory ){
                $subcategory = SubCategory::findOrFail($subcategory->id);
                $subcategory->delete();
            }
        }

        //DELETE CATEGORY IMAGE
        if( File::exists(public_path($path.$category_image)) ){
            File::delete($path.$category_image);
        }

        //DELETE CATEGORY FROM DB
        $delete = $category->delete();

        if( $delete ){
            $this->showToastr('success','Category has been successfully deleted.');
        }else{
            $this->showToastr('error','Something went wrong.');
        }
    }

    public function deleteSubCategory($subcategory_id){
       $subcategory = SubCategory::findOrFail($subcategory_id);

       //When this sub category has child sub categories
       if( $subcategory->children->count() > 0 ){
          //Check if there is/are product(s) related to one of child sub categories

          //If no product(s) related to child sub categories, delete them
          foreach( $subcategory->children as $child ){
             SubCategory::where('id',$child->id)->delete();
          }

          //Delete Sub Category
          $subcategory->delete();
          $this->showToastr('success','Sub Category has been successfully deleted.');

       }else{
           //Check if this sub category has product(s) related to it
           

           //Delete sub category
           $subcategory->delete();
           $this->showToastr('success','Sub category has been successfully deleted.');
       }
    }

    public function showToastr($type,$message){
        return $this->dispatch('showToastr',[
            'type'=>$type,
            'message'=>$message
        ]);
    }

    public function render()
    {
        return view('livewire.admin-categories-subcategories-list',[
            'categories'=>Category::orderBy('ordering','asc')->paginate($this->categoriesPerPage,['*'],'categoriesPage'),
            'subcategories'=>SubCategory::where('is_child_of',0)->orderBy('ordering','asc')->paginate($this->subcategoriesPerPage,['*'],'subcategoriesPage')
        ]);
    }
}
