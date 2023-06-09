<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
       
        $categories=Category::paginate(5);

        return view('backend.pages.category.list',compact('categories'));
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
        Category::create([
           //bam pase table er column name => dan pase input field er nam
            'name'=>$request->category_name,
            'description'=>$request->description// nullable
        ]);

        return redirect()->route('category.list');



    }
}
