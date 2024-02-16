<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request; 

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['res'] = Formation::select('formations.*','name','c.slug as slugcat','parent_id')
        ->join('categories as c','formations.category_id','=','c.id')
        ->where([
            ['formations.status','PUBLISHED']
            ])
        ->inRandomOrder()
        ->orderby('formations.id','desc')
        ->paginate(10);
        $data['pageTitle'] = 'Nos formations'; 
        return view('formations.index',$data);
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
        $data['res'] = Formation::join('categories as c','formations.category_id','=','c.id')
        ->select('formations.*','name','c.slug as slugcat','parent_id','c.id as idcat')
        ->where(function($query) use ($id) {
            $query->orwhere('formations.slug', $id)
                  ->orwhere('c.slug', $id)
                  ->where('formations.status','PUBLISHED');
        }) 
        ->orderby('formations.id','desc') 
        ->get();

        if(!empty($data['res']) && count($data['res']) >1){
            $data['pageTitle'] = $data['res'][0]->name; 
            
                return view('formations.index',$data);
        }else{

            if(count($data['res'])==0){ 
                $data['res'] = '';  $data['pageTitle'] = 'Nos formations';
            }
            else {$data['detail'] = $data['res'][0];
            $data['pageTitle'] = $data['detail']->titre;}

            return view('formations.show',$data);
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
