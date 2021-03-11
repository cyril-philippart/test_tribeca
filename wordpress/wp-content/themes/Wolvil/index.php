<?php
get_header();
?>
<div class="container">
    <div class="itemTitle">
        <h2>
            <span id="title">Découvrer notre</span>
            <div class="traitVertical"></div>
            <p id="partner">Partenaire</p>
        </h2>
    </div>
    <div class="presentationLoeb">
        <div class="text">
            <h1>Hi,<br> i'm Sebastien Loeb</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In quam quisquam recusandae, odit, commodi repudiandae assumenda ad molestiae ab iusto labore esse architecto temporibus, praesentium aspernatur corrupti eius beatae eveniet.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas laudantium, nobis dolorem error, praesentium optio quam debitis ut at doloribus expedita aperiam enim. Libero, architecto nulla. Quasi tempora consequuntur aperiam?</p>
        </div>
        <div class="containerLoeb">
            <img id="imgLoeb" class="img-fluid" src="wp-content/themes/Wolvil/images/SebLoeb.png" alt="">
        </div>
        <div class="togglerAnimation">
            <i id="togglerIcon" class="fas fa-play" onclick="play()"></i>
        </div>
    </div>
    <div class="moteur">
        <div class="asideMoteur">
            <h1>Moteur</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid maxime deserunt fugit. Tempore aperiam odio quasi exercitationem atque nobis cumque dolore quos amet? Eligendi deserunt odit rerum nemo facere quaerat.</p>
        </div>
        <div class="imgMoteur">
            <img class="img-fluid" src="wp-content/themes/Wolvil/images/moteur 1.png" alt="">
            <img id="imgCenter" class="img-fluid" id="centerImg" src="wp-content/themes/Wolvil/images/moteur 2.png" alt="">
            <img class="img-fluid" src="wp-content/themes/Wolvil/images/moteur 3.png" alt="">
        </div>
        <div class="asideMoteur">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum molestiae atque hic molestias minima, ratione reprehenderit nostrum vel perferendis corporis! Cum in eos recusandae quisquam quae rem voluptatibus facilis tenetur!.</p>
        </div>
    </div>
    <div class="trait"></div>
    <div class="contact">
        <div class="adress">
            <h5>Devenez partenaire</h5>
            <div class="iconContact">
                <i class="fas fa-map-marker-alt"></i>
                <p>1 boulevard d'Alsace</p>
            </div>
            <div class="iconContact">
                <i class="far fa-envelope"></i>
                <p>loeb@gmail.com</p>
            </div>
            <div class="iconContact">
                <i class="fas fa-phone"></i>   
                <p>+33 6 22 00 11 00</p>
            </div>
        </div>
        <form action="#">
            <div class="firstInformation">
                <div>
                    <label for="">Nom</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">Adresse mail</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">Téléphone</label>
                    <input type="text">
                </div>
                <div>
            </div>
                <label for="">Votre message</label>
                <textarea rows="5"></textarea>
                <button type="button" class="btn btn-dark">Envoyer</button>
            </div>
        </form>
    </div>
    <div class="itemReturn">
        <a href="#top">
            <h2>
                <span id="returntitle">Retour en</span>
                <div class="traitVertical"></div>
                <p id="returnPatern">Haut</p>
            </h2>
        </a>
    </div>
</div>
<?php
get_footer();