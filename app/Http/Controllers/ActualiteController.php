<?php

namespace App\Http\Controllers;

use App\Models\Espace;
use App\Models\News;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['res'] = News::select('news.*','name','c.slug as slugcat','parent_id')
        ->join('categories as c','news.category_id','=','c.id')
        ->where([
            ['news.status','PUBLISHED'],
            ['category_id','30']
            ]) 
        ->orderby('news.id','desc')
        ->paginate(10);
        $data['pageTitle'] = 'Nos actualités'; 
        return view('actualite.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['res'] = '';
        $data['res'] = News::join('categories as c','news.category_id','=','c.id')
        ->select('news.*','name','c.slug as slugcat','parent_id','c.id as idcat')
        ->where(function($query) use ($id) {
            $query->orwhere('news.slug', $id)
                  ->orwhere('c.slug', $id)
                  ->where('news.status','PUBLISHED');
        }) 
        ->orderby('news.id','desc') 
        ->paginate(10);

        if(!empty($data['res']) && count($data['res']) >1){
            $data['pageTitle'] = $data['res'][0]->name; 
            
                return view('actualite.index',$data);
        }else{

            if(count($data['res'])==0){ 
                $data['res'] = '';  $data['pageTitle'] = 'Nos actualites';
            }
            else {$data['detail'] = $data['res'][0];
            $data['pageTitle'] = $data['detail']->Titre;}

            return view('actualite.show',$data);
        } 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
