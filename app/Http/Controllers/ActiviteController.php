<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\AProposDeNou;
use App\Models\Category;
use App\Models\Equipe;
use App\Models\Pays;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class ActiviteController extends Controller
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

    public function getRessource(Request $request)
    {
        $data['res'] = Post::select('posts.*','name','c.slug as slugcat','parent_id')
        ->join('categories as c','posts.category_id','=','c.id')
        ->where([
            ['posts.status','PUBLISHED'],
            ['c.parent_id','19']
            ])
        ->inRandomOrder()
        ->orderby('posts.id','desc')
        ->get();
        $data['pageTitle'] = 'Qui sommes-nous?'; 
        return view('presentation.index',$data);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
         
        $data['res'] = Activite::join('categories as c','activites.category_id','=','c.id')
        ->select('activites.*','name','c.slug as slugcat','parent_id','c.id as idcat')
        ->where(function($query) use ($id) {
            $query->orwhere('activites.slug', $id)
                  ->orwhere('c.slug', $id)
                  ->where('activites.status','PUBLISHED');
        }) 
        ->orderby('activites.id','desc') 
        ->get();
        
        if(!empty($data['res']) && count($data['res']) >1){
            return redirect('/'); 
        }else{

            if(count($data['res'])==0){ $data['res'] = '';  $data['pageTitle'] = 'Activités';}
            else {$data['detail'] = $data['res'][0];
            $data['pageTitle'] = $data['detail']->titre;}

            return view('activite.show',$data);
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
