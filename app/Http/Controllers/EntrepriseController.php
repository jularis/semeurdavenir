<?php

namespace App\Http\Controllers;

use App\Models\AProposDeNou;
use App\Models\Category;
use App\Models\Equipe;
use App\Models\Membre;
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
        // Validez les données du formulaire si nécessaire
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenoms' => 'required|string',
            'date_naissance' => 'required|date',
            'ville_residence' => 'required|string',
            'pays' => 'required|string', 
            'adresse_email' => 'required|email',
            'profession' => 'required|string',  
        ]);
        $member = new Membre();

        // Attribuez manuellement les valeurs des champs
        $member->nom = $request->nom;
        $member->prenoms = $request->prenoms;
        $member->date_naissance = $request->date_naissance;
        $member->ville_residence = $request->ville_residence;
        $member->pays_id = $request->pays;
        $member->numero_whatsapp = $request->numero_whatsapp;
        $member->adresse_email = $request->adresse_email;
        $member->profession = $request->profession;
        $member->accepte_jesus = $request->accepte_jesus;
        $member->baptise_par_immersion = $request->baptise_par_immersion;
        $member->annees_conversion = $request->annees_conversion;
        $member->frequente_eglise = $request->frequente_eglise;
        $member->eglise_frequente = $request->eglise_frequente;
        $member->besoin_particulier = $request->besoin_particulier;

        // Enregistrez les données dans la base de données
        $member->save();

        $message = $this->sendMail($_POST);
        if($message=='success'){
            $alert = ['success','Votre enregistrement a été envoyé avec succès. Nous vous repondrons dans les plus brefs délais.']; 
        }
        else{
            $alert = ['error','Impossible d\'enregistrer votre inscription.Veuillez reessayer plus tard.']; 
        } 
     

        return back()->with($alert);
    }
    protected function sendMail($data)
      {
          $nom=$data['nom'].' '.$data['prenoms']; 
     $email=$data['adresse_email'];
     $objet="Enregistrement d'un nouveau Membre";
    
     if($nom && $email && $objet)
     {
         $dest=$data['to']; 
         $pays=Pays::where('id',$data->pays_id)->first();
             $exp="$nom <$email>"; 
      $headers="Content-type:text/html\nFrom:$exp\r\nReply-To:$exp"; 
      
      $texte='<html>
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
      </head>
      <body>
          <table style="width: 100%; border-collapse: collapse;">
              <tr>
                  <td colspan="2" style="background-color: #f2f2f2; padding: 10px; text-align: left;">Nouvelle Inscription sur le Site Web</td>
              </tr>
              <tr>
                  <td colspan="2" style="width: 30%; padding: 10px; text-align: left;">Cher Administrateur,</td> 
              </tr>
              <tr>
                  <td colspan="2" style="width: 30%; padding: 10px; text-align: left;">J\'espère que ce message vous trouve bien. Je voulais vous informer qu\'un nouveau membre vient de s\'inscrire sur le site web. Voici les détails de l\'inscription :</td> 
              </tr>
              <tr>
                  <td style="width: 30%; padding: 10px; text-align: left;">Nom du Membre</td>
                  <td style="padding: 10px; text-align: left;">'.$data->nom.' '.$data->prenoms.'</td>
              </tr>
              <tr>
                  <td style="width: 30%; padding: 10px; text-align: left;">Date de naissance</td>
                  <td style="padding: 10px; text-align: left;">'.date('d-m-Y', strtotime($data->date_naissance)).'</td>
              </tr>
              <tr>
                  <td style="width: 30%; padding: 10px; text-align: left;">Ville de résidence</td>
                  <td style="padding: 10px; text-align: left;">'.$data->ville_residence.'</td>
              </tr>
              <tr>
                  <td style="width: 30%; padding: 10px; text-align: left;">Pays</td>
                  <td style="padding: 10px; text-align: left;">'.$pays->nicename.'</td>
              </tr>
              <tr>
                  <td style="width: 30%; padding: 10px; text-align: left;">Numéro Whatsapp</td>
                  <td style="padding: 10px; text-align: left;">'.$data->numero_whatsapp.'</td>
              </tr>
              <tr>
                  <td style="width: 30%; padding: 10px; text-align: left;">Adresse e-mail</td>
                  <td style="padding: 10px; text-align: left;">'.$data->adresse_email.'</td>
              </tr>
              <tr>
                  <td style="width: 30%; padding: 10px; text-align: left;">Profession</td>
                  <td style="padding: 10px; text-align: left;">'.$data->profession.'</td>
              </tr>
              <tr>
                  <td style="width: 30%; padding: 10px; text-align: left;">Avez-vous déjà accepté Jésus-Christ comme votre sauveur personnel ?</td>
                  <td style="padding: 10px; text-align: left;">'.$data->accepte_jesus.'</td>
              </tr>
              <tr>
                  <td style="width: 30%; padding: 10px; text-align: left;">Combien d’années de conversion détenez-vous ?</td>
                  <td style="padding: 10px; text-align: left;">'.$data->annees_conversion.'</td>
              </tr>
              <tr>
                  <td style="width: 30%; padding: 10px; text-align: left;">Avez-vous déjà fréquenté une église ?</td>
                  <td style="padding: 10px; text-align: left;">'.$data->frequente_eglise.'</td>
              </tr>
              <tr>
                  <td style="width: 30%; padding: 10px; text-align: left;">Laquelle si oui</td>
                  <td style="padding: 10px; text-align: left;">'.$data->eglise_frequente.'</td>
              </tr>
              <tr>
                  <td style="width: 30%; padding: 10px; text-align: left;">Êtes-vous baptisés par immersion ?</td>
                  <td style="padding: 10px; text-align: left;">'.$data->baptise_par_immersion.'</td>
              </tr>
              <tr>
                  <td style="width: 30%; padding: 10px; text-align: left;">Avez-vous un besoin particulier ?</td>
                  <td style="padding: 10px; text-align: left;">'.$data->besoin_particulier.'</td>
              </tr> 
          </table>
      </body>
      </html>
      ';
              if(mail($dest,$objet,$texte,$headers))
              {
                 $reponse='success';  
              }
              else
              {
                 $reponse='error'; 
              }
          }
          else
          {
              $reponse='error';
          }
     return $reponse;
      
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
