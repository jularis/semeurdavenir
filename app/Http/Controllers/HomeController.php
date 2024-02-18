<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Equipe;
use App\Models\Espace;
use App\Models\Event;
use App\Models\Formation;
use App\Models\News;
use App\Models\Partenaire;
use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array();
        $data['pageTitle'] = 'Bienvenue sur notre site web'; 
        
        $data['slide'] = DB::table('sliders')->where('status','PUBLISHED')->orderby('id','desc')->get();
        $data['entreprise'] = Post::select('posts.*','name','c.slug as slugcat','c.id as idcat')
                                ->join('categories as c','posts.category_id','=','c.id')
                                ->where([
                                    ['posts.status','PUBLISHED'],
                                    ['posts.id','5']
                                    ])  
                                    ->orderby('id','asc') 
                                    ->first();
$data['mission'] = Post::select('posts.*','name','c.slug as slugcat','c.id as idcat')
                                ->join('categories as c','posts.category_id','=','c.id')
                                ->where([
                                    ['posts.status','PUBLISHED'],
                                    ['posts.id','12']
                                    ])  
                                    ->orderby('id','asc') 
                                    ->first();
$data['equipe'] = Post::select('posts.*','name','c.slug as slugcat','c.id as idcat')
                                ->join('categories as c','posts.category_id','=','c.id')
                                ->where([
                                    ['posts.status','PUBLISHED'],
                                    ['posts.id','13']
                                    ])  
                                    ->orderby('id','asc') 
                                    ->first();    
     $data['activites'] = Activite::join('categories as c','activites.category_id','=','c.id')
                                        ->where([['status','PUBLISHED']])
                                        ->select('activites.*','name','c.slug as slugcat','c.id as idcat')
                                        ->limit(6)
                                        ->get();   
     $data['events'] = Event::where([['status','PUBLISHED'],['date_fin','>=', gmdate('Y-m-d')]])->orderby('date_debut','asc')->take(4)->get();   
     $data['event'] = Event::where([['status','PUBLISHED'],['date_fin','>=', gmdate('Y-m-d')]])->orderby('date_debut','asc')->take(1)->first();   
    
     $data['equipes'] = Equipe::join('categories as c','equipes.category_id','=','c.id')
                                        ->where([['status','PUBLISHED']])
                                        ->select('equipes.*','name','c.slug as slugcat','c.id as idcat')
                                        ->limit(6)
                                        ->get(); 
    $data['predications'] = Espace::join('categories as c','espaces.category_id','=','c.id')
                                        ->where([['status','PUBLISHED'],['category_id','28']])
                                        ->select('espaces.*','name','c.slug as slugcat','c.id as idcat')
                                        ->limit(6)
                                        ->orderby('id','desc')
                                        ->get(); 

    $data['actus'] = News::join('categories as c','news.category_id','=','c.id')
                                        ->where([
                                            ['news.status','PUBLISHED'],
                                            ['category_id','30']
                                            ])
                                        ->select('news.*','name','c.slug as slugcat','c.id as idcat')
                                        ->limit(6)
                                        ->orderby('id','desc')
                                        ->get(); 
                                        
        return view('home', $data);
    }


    public function sitemap()
    {
          
         
        $sitemap_file_path =  base_path('sitemap.xml'); 
        if (file_exists($sitemap_file_path))
        {
            unlink($sitemap_file_path);
        }
        

        $donnees ='<?xml version="1.0" encoding="UTF-8"?>
                <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
 
$articles = Post::select('posts.*','name','c.slug as slugcat','c.id as idcat','c.parent_id')
->join('categories as c','posts.category_id','=','c.id')
->where([
    ['posts.status','PUBLISHED']
    ])
->orderby('id','desc') 
->get();
 
        foreach ($articles as $row) {
            if($row->parent_id !=NULL) {
                 
                $categorie = $this->findContentParent($row->parent_id);
            }
            else {
                $categorie = $row->slugcat;
            }

            $donnees .='
            <url>
      <loc>' . url($categorie.'/'.$row->slugcat). '</loc>
      <changefreq>daily</changefreq> 
      <priority>0.1</priority>
            </url>';
            }

$catego = Category::select('categories.*') ->whereNull(['parent_id'])->get();
foreach ($catego as $row) {
   

    $donnees .='
    <url>
<loc>' . url($row->slug). '</loc>
<changefreq>daily</changefreq> 
<priority>0.1</priority>
    </url>';
    }
        $donnees .='</urlset>';
        // Ecriture du fichier XML du sitemap 
        file_put_contents($sitemap_file_path, $donnees);
    }

    static public function findContent($id){
        $categ = Category::select('name','id','slug')
                       ->where('id',$id)
                       ->first();
        
    return $categ->name;
    }

    static public function findContentParent($id){
        $categ = Category::select('name','id','slug')
                       ->where('id',$id)
                       ->first();
        
    return $categ->slug;
    }
}
