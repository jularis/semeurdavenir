<?php

namespace App\Http\Controllers;

use App\Models\Espace;
use App\Models\Event;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['res'] = Event::where([
            ['status','PUBLISHED']
            ]) 
        ->orderby('date_debut','desc')
        ->paginate(10);
        $data['pageTitle'] = 'Nos évènements'; 
        return view('event.index',$data);
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
        $data['res'] = Event::where([['slug', $id],['status','PUBLISHED']])->orderby('date_debut','desc')->paginate(10);

        if(!empty($data['res']) && count($data['res']) >1){
            $data['pageTitle'] = $data['res'][0]->name; 
            
                return view('event.index',$data);
        }else{

            if(count($data['res'])==0){ 
                $data['res'] = '';  $data['pageTitle'] = 'Nos actualites';
            }
            else {$data['detail'] = $data['res'][0];
            $data['pageTitle'] = $data['detail']->Titre;}

            return view('event.show',$data);
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
