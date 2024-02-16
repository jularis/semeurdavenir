<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['res'] = Post::select('posts.*','name','c.slug as slugcat','parent_id')
        ->join('categories as c','posts.category_id','=','c.id')
        ->where([
            ['posts.status','PUBLISHED'],
            ['c.id','5']
            ])
        ->inRandomOrder()
        ->orderby('posts.id','desc')
        ->paginate(10);
        $data['pageTitle'] = 'Nos pojets réalisés'; 
        return view('projets.index',$data);
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
        $data['res'] = Post::join('categories as c','posts.category_id','=','c.id')
        ->select('posts.*','name','c.slug as slugcat','parent_id','c.id as idcat')
        ->Where(function($query) use ($id) {
            $query->orwhere('posts.slug', $id)
                  ->orwhere('c.slug', $id)
                  ->where('posts.status','PUBLISHED');
        })  
        ->orderby('posts.id','desc') 
        ->get();
        

        if(!empty($data['res']) && count($data['res']) >1){
            $data['pageTitle'] = $data['res'][0]->name; 
             
                return view('projets.index',$data);
              
        }else{

            if(count($data['res'])==0){ $data['res'] = '';  $data['pageTitle'] = 'Nos projets réalisés';}
            else {$data['detail'] = $data['res'][0];
            $data['pageTitle'] = $data['detail']->title;}

            return view('projets.show',$data);
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
