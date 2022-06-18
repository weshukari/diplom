<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Library;
use App\Models\CategoryLibrary;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $library = Library::all();
        $categories = CategoryLibrary::all();
        return view('admin.book.index', ['library'=>$library, 'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = new CategoryLibrary();
        
        return view('admin.book.create', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = DB::table('category_libraries')
                            ->where('id',$request->id_category)
                            ->select('name')
                            ->get();
        $folder ="";
        foreach($category as $key => $value){
            $folder = $value;
        }     
        $library = new Library();
        $library->book = $request->book;
        $library->id_category = $request->id_category;
        $library->description = $request->description;
        $library->cover = $_FILES['cover']['name'];
        $library->file = $_FILES['file']['name'];
        
        //добавление в папку обложки
        if(isset($_FILES['cover'])){
            move_uploaded_file(
                $_FILES['cover']['tmp_name'],
                'images/library/'.$folder->name.'/'.$_FILES['cover']['name']
            );
        }
        //добавление в папку файл
        if(isset($_FILES['file'])){
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                'library/'.$folder->name.'/'.$_FILES['file']['name']
            );
        }
        $library->save();
        return Redirect()->back()->withSuccess('Книга добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function show(Library $library)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $library = Library::find($id);
        $categories = CategoryLibrary::all();
        return view('admin.book.edit', ['library'=>$library, 'categories'=>$categories]);
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $library = Library::find($id);
        $library->book = $request->book;
        $library->id_category = $request->id_category;
        $library->description = $request->description;

        //внесение новой обложки
        if($_FILES['cover']['name']!= ''){
            if(file_exists($library->cover)){
            unlink('/images/library/'.$library->category->name.'/'.$library->cover); }
            
            move_uploaded_file(
                $_FILES['cover']['tmp_name'],
                'images/library/'.$library->category->name.'/'.$_FILES['cover']['name']
            );
            $library->cover = $_FILES['cover']['name'];
        }
        //внесение нового файла
        if($_FILES['file']['name'] != ''){
            if(file_exists($library->file)){
            unlink('/images/library/'.$library->category->name.'/'.$library->file); }
            
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                'library/'.$library->category->name.'/'.$_FILES['file']['name']
            );
            $library->file = $_FILES['file']['name'];
        }
        $library->save();
        return Redirect()->route('book.index')->withSuccess('Книга отредактирована');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $library = Library::find($id);
        unlink('library/'.$library->category->name.'/'.$library->file);//удаление файла
        unlink('images/library/'.$library->category->name.'/'.$library->cover);//удаление картинки
        Library::destroy($id);
        return response()->json(['success'=>'Книга удалена']);
    }
}
