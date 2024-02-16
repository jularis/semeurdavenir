<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageTitle'] = "Contactez-nous"; 
        return view('contacts',$data);
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
        $request->validate([
            'email' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'nom' => 'required|max:255',
            'objet' => 'required|max:255', 
            'message' => 'required',
        ]); 
    
        $message = $this->sendMail($_POST);
        if($message=='success'){
            $alert = ['success','Votre message a été envoyé avec succès. Nous vous repondrons dans les plus brefs délais.']; 
        }
        else{
            $alert = ['error','Impossible d\'envoyer votre message.Veuillez reessayer plus tard.']; 
        } 
     

        return redirect('contactez-nous')->with($alert);
    }

    protected function sendMail($data)
      {
          $nom=$data['nom']; 
     $email=$data['email'];
     $objet=$data['objet'];
     $message=$data['message'];
     if($nom && $email && $objet && $message)
     {
         $dest=$data['to']; 
             $exp="$nom <$email>"; 
      $headers="Content-type:text/html\nFrom:$exp\r\nReply-To:$exp"; 
      
      $texte='<html><head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
      </head><body> 
      <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0">
          <tr> <td style="font-size:20px; font-family: Garamond;">'.$message.'</td> </tr>
         </table>
         </body></html>';
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
