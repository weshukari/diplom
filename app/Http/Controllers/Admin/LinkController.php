<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::all();
        return view('admin.link.index', ['links'=> $links]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $link = new Link();
        $link->name = $request->link_name;
        $link->link = $request->link;
        $link->icon = $_FILES['icon']['name'];

        //добавление в папку иконок
        move_uploaded_file($_FILES['icon']['tmp_name'],
         'images/icon_link/'.$_FILES['icon']['name'] );

        $link->save();
        return Redirect()->back()->withSuccess('Ссылка добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $link = Link::find($id);
        return view('admin.link.edit', ['link'=>$link]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
  
        $link = Link::find($id);
        $link->name = $request->name_link;
        $link->link = $request->link;
        
        //внесение новой иконки
        if(!empty($_FILES['icon']['name'])){
            //удаление старой иконки если она существует
            if(file_exists('images/icon_link/'.$link->icon)){
                unlink('images/icon_link/'.$link->icon);
            }
            //перемещение файла в директорию картинок
            move_uploaded_file(
                $_FILES['icon']['tmp_name'],
                'images/icon_link/'.$_FILES['icon']['name']
            );
            $link->icon = $_FILES['icon']['name'];
        }
        $link->save();
        return Redirect()->route('link.index')->withSuccess('Ссылка отредактирована');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = Link::find($id);
        unlink('images/icon_link/'.$link->icon);
        Link::destroy($id);
        return response()->json(['success'=>'Ссылка удалена']);
    }
}
