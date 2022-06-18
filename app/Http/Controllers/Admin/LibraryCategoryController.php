<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryLibrary;
use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LibraryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryLibrary::all();
        return view('admin.libraryCategory.index', ['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.libraryCategory.create');
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
           'name'=>[ 'string', 'unique:category_libraries,name'],
       ]);
       $category = new CategoryLibrary();
       $category->name = $request->name;
       //создание в папке директории
       chdir('library');
            mkdir($request->name);
       chdir('../images/library');
            mkdir($request->name);
       //
       $category->save();
       return Redirect()->back()->withSuccess('Категория добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryLibrary  $categoryLibrary
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryLibrary $categoryLibrary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryLibrary  $categoryLibrary
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryLibrary $categoryLibrary)
    {    
        return view('admin.libraryCategory.edit', ['categoryLibrary'=>$categoryLibrary]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryLibrary  $categoryLibrary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryLibrary $categoryLibrary)
    {
        rename('images/library/'.$categoryLibrary->name, 'images/library/'.$request->name_category);//переименнование в папке с картинками
        rename('./library/'.$categoryLibrary->name, './library/'.$request->name_category);//переименование в папке library
        $categoryLibrary->name = $request->name_category;
        $categoryLibrary->save();
        return redirect()->route('categoryLibrary.index')->withSuccess('Категория отредактирована');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryLibrary  $categoryLibrary
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryLibrary $categoryLibrary)
    {
        if($categoryLibrary->book->count()){
            return response()->json(['error'=>'Вы не можете удалить категорию с книгами. Для начала удалите книгу']);
        }
        else{
            rmdir('images/library/'.$categoryLibrary->name);
            rmdir('library/'.$categoryLibrary->name);
            $categoryLibrary->delete();
            return response()->json(['success'=>'Категория удалена']);
        }
       
    }
}
