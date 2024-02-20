<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Espace;
use App\Models\Category;
use App\Models\Equipe;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['liste'] = Category::equipecategories()->get();
             
        if(count($data['liste'])){
            $data['pageTitle'] = "Notre équipe"; 
            
            return view('equipe.index',$data);
            
        }else{ 
            return redirect('/');
        } 
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
        $data['res'] = Equipe::join('categories as c','equipes.category_id','=','c.id')
        ->select('equipes.*','name','c.slug as slugcat','parent_id','c.id as idcat')
        ->where(function($query) use ($id) {
            $query->orwhere('equipes.slug', $id)
                  ->orwhere('c.slug', $id)
                  ->where('equipes.status','PUBLISHED');
        }) 
        ->orderby('equipes.id','desc') 
        ->paginate(10);

        if(!empty($data['res']) && count($data['res']) >1){
            $data['pageTitle'] = $data['res'][0]->name; 
            
                return view('equipe.index',$data);
        }else{

            if(count($data['res'])==0){ 
                $data['res'] = '';  $data['pageTitle'] = 'Notre équipe';
            }
            else {$data['detail'] = $data['res'][0];
            $data['pageTitle'] = $data['detail']->Titre;}

            return view('equipe.show',$data);
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
