<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class EspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
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
        ->where(function($query) use ($id) {
            $query->orwhere('posts.slug', $id)
                  ->orwhere('c.slug', $id)
                  ->where('posts.status','PUBLISHED');
        }) 
        ->orderby('posts.id','desc') 
        ->get();

        if(!empty($data['res']) && count($data['res']) >1){
            $data['pageTitle'] = $data['res'][0]->name; 
            
                return view('services.index',$data);
        }else{

            if(count($data['res'])==0){ 
                $data['res'] = '';  $data['pageTitle'] = 'Nos services';
            }
            else {$data['detail'] = $data['res'][0];
            $data['pageTitle'] = $data['detail']->title;}

            return view('services.show',$data);
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
