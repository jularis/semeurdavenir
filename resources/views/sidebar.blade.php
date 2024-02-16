<?php 
use TCG\Voyager\Models\Post;  
?>
 <div class="sidebar-service wow fadeInLeft" data-wow-delay="0.8s">
 {{ menu('footer-menu','menu-sidebar') }} 
                </div>
                <div class="bosluk3"></div>
                <div class="callbackform wow fadeInUp" data-wow-delay="0.7s">
                    <h2 class="h2-baslik-popup h-yazi-margin-kucuk"> 
                        Laissez vos contacts 
                    </h2>
                    <p class="paragraf-popup">
                        Nous vous contacterons sous peu!
                    </p> 
                        <form action="<?php echo route('contactez-nous.store') ?>" class="form-popup" method="post">
                            <div class="form-popup__grup">
                                <input type="text" class="form-popup__input" placeholder="Votre nom & prénoms..." id="nom" name="nom" required>
                                <label for="ad2" class="form-popup__label">Votre nom & prénoms...</label>
                            </div>
                            <div class="form-popup__grup">
                                <input type="email" class="form-popup__input" placeholder="Votre adresse Email..." id="email" name="email" required>
                                <label for="email2" class="form-popup__label">Votre adresse Email...</label>
                            </div>
                            <div class="form-popup__grup">
                                <input type="text" class="form-popup__input" placeholder="Numéro de Téléphone" id="objet" name="objet" required>
                                <label for="telefon2" class="form-popup__label">Numéro de Téléphone</label>
                            </div>
                            <input type="hidden" name="to" value="{{ setting('site.ContactEmail') }}">
                            <input type="hidden" name="message" value="Veuillez trouver mes coordonnées">
                            <div class="form-popup__grup">
                                <button class="custom-button" id="btn_Gonder">Envoyer</button>
                            </div><br>
                        </form>
                </div>
