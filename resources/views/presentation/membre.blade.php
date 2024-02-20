@extends('layouts.app')
@section('title', $pageTitle ?? 'Page non trouvé')
@section('content')
<style type="text/css">
    .error{
  color: #e72121;
  font-size: 12px;
}
</style>
   <!-- page-header -->
   <div class="page-title-wrap typo-white">
                <div class="page-title-wrap-inner section-bg-img" data-bg="{{ asset('public/assets/images/page-title.jpg') }}">
					<span class="theme-overlay"></span>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="page-title-inner">
									<div id="breadcrumb" class="breadcrumb margin-bottom-10">
                                        <a href="{{ url('') }}" class="theme-color">Accueil</a>
                                        <span class="current">A propos de nous</span>
                                    </div>
                                    <h1 class="page-title mb-0">{{$pageTitle}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-header -->
                        <!-- Page Content -->
                        <div class="content-wrapper pad-none">
                <div class="content-inner ">
                    <!-- Sermon Single Section -->
                    <section id="single-sermon" class="pad-bottom-80 blog-single">
                        <div class="container">
                            <div class="blog-info-wrap"> 
                                <!-- Row 2 -->
                                <div class="row">
                                    <!-- Col -->
                                    <div class="col-md-12"> 
                                        <div class="sermons-title-wrap pt-1 margin-top-30">
                                            <div class="blog-content">
                                                <div class="sermons-title pad-none margin-none">
                                                    <h3 class="margin-bottom-15">Vous souhaitez rejoindre Semeur d'Avenir en tant que membre, nous vous invitons officiellement à signifier votre appartenance et nous permettre d'assurer un meilleur suivi spirituel auprès de vous, veuillez remplir ce formulaire. <span class="theme-color"></span></h3>
                                                </div> 
                                                <p>
                                                En devenant membre de Semeur d'Avenir, vous ne rejoignez pas seulement une organisation religieuse ou une église avec beaucoup de dogmes, mais une famille spirituelle ouverte sur le monde. 
                                                </p>
                                                <div class="container mt-5">
        <h1 class="mb-4">Formulaire d'inscription</h1>
        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <div>
                                        @foreach ($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                        @endforeach
                            </div>
                                </div>
                            @endif
			@if(session()->has('error'))
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session()->get('error') }}                   
                </div>
                @endif 
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session()->get('success') }}
                </div>
              
                @endif
        <form id="contactForm" class="contact-form" action="<?php echo route('a-propos-de-nous.store') ?>" method="post">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="prenoms">Prénoms</label>
                        <input type="text" name="prenoms" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date_naissance">Date de naissance</label>
                        <input type="date" name="date_naissance" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ville_residence">Ville de résidence</label>
                        <input type="text" name="ville_residence" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pays">Pays</label>
                        <select name="pays" class="form-control" required>
                            @foreach ($pays as $paysData)
                                <option value="{{ $paysData->id }}">{{ $paysData->nicename }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="numero_whatsapp">Numéro Whatsapp avec l'indicatif du pays</label>
                        <input type="text" name="numero_whatsapp" class="form-control" pattern="^\+\d{1,3}\s?\d{6,}$" title="Veuillez entrer un numéro valide avec l'indicatif du pays (+XXX)" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="adresse_email">Adresse email</label>
                        <input type="email" name="adresse_email" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="profession">Profession</label>
                        <input type="text" name="profession" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="accepte_jesus">Avez-vous déjà accepté Jésus-Christ comme votre sauveur personnel ?</label>
                        <select name="accepte_jesus" class="form-control" onchange="toggleBaptismField(this)">
                        <option value="Non">Non</option>
                            <option value="Oui">Oui</option> 
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div id="baptismField" style="display:none;">
                            <label for="baptise_par_immersion">Etes-vous baptisés par immersion ?</label>
                            <select name="baptise_par_immersion" class="form-control">
                            <option value="Non">Non</option>
                                <option value="Oui">Oui</option> 
                            </select>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="annees_conversion">Combien d'années de conversion détenez-vous ?</label>
                        <input type="number" name="annees_conversion" class="form-control" min="0">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="frequente_eglise">Avez-vous déjà fréquenté une église</label>
                        <select name="frequente_eglise" class="form-control" onchange="toggleFrequenteField(this)">
                        <option value="Non">Non</option>
                            <option value="Oui">Oui</option> 
                        </select>
                    </div>
                </div>

                
            </div>

            <div class="row">
                
            <div class="col-md-12">
                    <div class="form-group" id="frequenteField" style="display:none;">
                        <label for="eglise_frequente">Laquelle</label>
                        <input type="text" name="eglise_frequente" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="besoin_particulier">Avez-vous un besoin particulier ? (Veuillez nous le raconter ici) :</label>
                        <textarea name="besoin_particulier" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <input type="hidden" name="to" value="{{ setting('site.ContactEmail2') }}">
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
        <div class="contact-result"></div>
    </div> 

    <script>
        function toggleBaptismField(selectElement) {
            var baptismField = document.getElementById('baptismField');
            baptismField.style.display = selectElement.value === 'Oui' ? 'block' : 'none';
        }
        function toggleFrequenteField(selectElement) {
            var frequenteField = document.getElementById('frequenteField');
            frequenteField.style.display = selectElement.value === 'Oui' ? 'block' : 'none';
        }
    </script>
                                            </div>
                                        </div>
                                        <!-- sermons-title-wrap -->
                                    </div>
                                     <!-- Col -->                                    
                                </div>
                                <!-- Row 2 -->								
                            </div>
                            <!-- Portfolio Single Wrap -->
                        </div>
                    </section>
                    <!-- Portfolios Section End -->
                </div>
            </div>
            <script type="text/javascript">

$(function () {
    /*==========  Contact Form validation  ==========*/
    var contactForm = $("#contactForm"),
        contactResult = $('.contact-result');
    contactForm.validate({
        rules: {
         
  },
  debug:false,
        submitHandler: function (contactForm) {
            $(contactResult, contactForm).html('<img src="<?php echo url('') ?>/public/img/loading.gif" style="width: 110px;">');
            $.ajax({
                type: "GET",
                url: '<?php echo route('a-propos-de-nous.store') ?>',
                data: $(contactForm).serialize(),
                timeout: 20000,
                success: function (msg) {
                  $(contactForm)[0].reset();
                    $(contactResult, contactForm).html('<div class="alert alert-success" role="alert"><strong>Votre enregistrement a été envoyé avec succès. Nous vous repondrons dans les plus brefs délais.</strong></div>').delay(5000).fadeOut(4000);
                },
                error: $('.thanks').show()
            });
            return false;
        }
    });
  });
 
</script> 
@endsection


 