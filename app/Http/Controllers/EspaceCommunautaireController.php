<?php

namespace App\Http\Controllers;

use App\Models\Espace;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class EspaceCommunautaireController extends Controller
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
        $data['res'] = Espace::join('categories as c','espaces.category_id','=','c.id')
        ->select('espaces.*','name','c.slug as slugcat','parent_id','c.id as idcat')
        ->where(function($query) use ($id) {
            $query->orwhere('espaces.slug', $id)
                  ->orwhere('c.slug', $id)
                  ->where('espaces.status','PUBLISHED');
        }) 
        ->orderby('espaces.id','desc') 
        ->paginate(10);

        if(!empty($data['res']) && count($data['res']) >1){
            $data['pageTitle'] = $data['res'][0]->name; 
            
                return view('espace.index',$data);
        }else{

            if(count($data['res'])==0){ 
                $data['res'] = '';  $data['pageTitle'] = 'Nos espace';
            }
            else {$data['detail'] = $data['res'][0];
            $data['pageTitle'] = $data['detail']->Titre;}

            return view('espace.show',$data);
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
