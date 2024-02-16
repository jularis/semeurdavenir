<?php

namespace App\Http\Controllers;

use App\Models\AProposDeNou;
use App\Models\Category;
use App\Models\Equipe;
use App\Models\Pays;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class EntrepriseController extends Controller
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
        
        $data['liste'] = '';
        if($id=='notre-equipe'){
            // $data['liste'] = Equipe::join('categories as c','equipes.category_id','=','c.id')
            //                     ->select('equipes.*','name','c.slug as slugcat','parent_id','c.id as idcat')
            //                     ->where('equipes.status','PUBLISHED')
            //                     ->get();
            $data['liste'] = Category::equipecategories()->get();
             
        if(count($data['liste'])){
            $data['pageTitle'] = "Notre équipe"; 
            
            return view('presentation.equipe',$data);
            
        }else{ 
            return redirect('/');
        }
         
        }
 
        if($id=='devenir-membre')
        {
            $data['pageTitle'] = "Dévenir Membre"; 
            $data['pays'] = Pays::select('id', 'nicename')->get();
             
            return view('presentation.membre',$data); 
        }

        $data['res'] = AProposDeNou::join('categories as c','a_propos_de_nous.category_id','=','c.id')
        ->select('a_propos_de_nous.*','name','c.slug as slugcat','parent_id','c.id as idcat')
        ->where(function($query) use ($id) {
            $query->orwhere('a_propos_de_nous.slug', $id)
                  ->orwhere('c.slug', $id)
                  ->where('a_propos_de_nous.status','PUBLISHED');
        }) 
        ->orderby('a_propos_de_nous.id','desc') 
        ->get();
        
        if(!empty($data['res']) && count($data['res']) >1){
            return redirect('/'); 
        }else{

            if(count($data['res'])==0){ $data['res'] = '';  $data['pageTitle'] = 'A propos de nous';}
            else {$data['detail'] = $data['res'][0];
            $data['pageTitle'] = $data['detail']->titre;}

            return view('presentation.show',$data);
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
