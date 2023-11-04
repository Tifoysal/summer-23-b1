<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Throwable;

class CategoryController extends Controller
{
    public function list()
    {
    //    Cache::forget('categories');
        if(Cache::has('categories'))
        {
            $dataSource="data from Cache";
            $categories=Cache::get('categories');

        }else{
            $dataSource="data from Database";
            $categories=Category::paginate(10);

            Cache::put('categories',$categories);
        }


        return view('backend.pages.category.list',compact('categories','dataSource'));
    }

    public function categoryForm()
    {

        return view('backend.pages.category.create');

    }


    public function categoryStore(Request $request)
    {  

        $request->validate([
            'category_name'=>'required'
        ]);

//        dd($request->all());
        // sql= insert into categories (name,description) values()
        //eloquent ORM
        try{
            Category::create([
                //bam pase table er column name => dan pase input field er nam
                 'name'=>$request->category_name,
                 'description'=>$request->description// nullable
             ]);
     
             return redirect()->route('category.list');
        }catch(Throwable $ex){
            // dd($ex->getMessage());
            Log::debug($ex->getMessage());

            Toastr::error("Something went wrong. try agian.");
            return redirect()->route('category.list');
        }
       



    }
}
