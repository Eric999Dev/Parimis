
    <footer>
      <div id="footer-left">
        <h2> Plan du site :</h2>
        <div class="plan-site">
          <ul>
            <li><a href="pages/reservation.html">Reservation</a></li>
            <li><a href="pages/hotel.html">Hotel</a></li>
            <li><a href="pages/chambres.html">Chambres</a></li>
            <li><a href="pages/restaurant.html">Restaurant</a></li>
            <li><a href="pages/spa.html">Spa</a></li>
            <li><a href="pages/evenements.html">Evenements</a></li>
          </ul>
          <ul>
            <li><a href="pages/recrutement.html">Recrutement</a></li>
            <li><a href="pages/acces.html">Acces</a></li>
            <li><a href="pages/avis.html">Avis</a></li>
            <li><a href="pages/presse.html">Presse</a></li>
            <li><a href="pages/contact.html">Contact</a></li>
          </ul>
        </div>
      </div>

      <div id="footer-center">
        <h2> Partager :</h2>
        <ul>
          <li><a href="https://www.facebook.com/"><img src="imgs/icones/facebook.svg" alt="facebook.svg"></a></li>
          <li><a href="https://twitter.com/"><img src="imgs/icones/twitter.svg" alt="twitter.svg"></a></li>
          <li><a href="https://www.pinterest.fr/"><img src="imgs/icones/pinterest.svg" alt="pinterest.svg"></a></li>
          <li><a href="https://www.youtube.com/"><img src="imgs/icones/youtube.svg" alt="youtube.svg"></a></li>
          <li><a href="https://www.instagram.com/?hl=fr"><img src="imgs/icones/instagram.svg" alt="instagram.svg"></a></li>
        </ul>
      </div>

      <div id="footer-right">
        <h2> S'inscrire :</h2>
        <form>
          <input type="text" value="" placeholder="Votre adresse mail" />
          <button type="submit" onclick="alert('Votre inscription a bien été validé!')">S'inscrire</button>
        </form>

        <ul>
          <li><a href="javascript:window.print()">Imprimer</a></li>
          <li><a href="pages/mentions-legales.html">Mentions Légales</a></li>
          <li><a href="pages/cgv.html">C.G.V</a></li>
          <li>&copy; 2018 Parimis Hotel
          </li>
        </ul>

      </div>


    </footer>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
  </script>
  <script src="http://cdn.jsdelivr.net/jquery.sidr/2.2.1/jquery.sidr.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <script>
    $(function() {
      $("#sticker").sticky({
        topSpacing: 0
      });


      $('#responsive-menu-button').sidr({
        name: 'sidr-main',
        source: '#navigation'
      });


      $(".rslides").responsiveSlides({ // Debut du Slider
        auto: true, // Boolean: Animate automatically, true or false
        speed: 500, // Integer: Speed of the transition, in milliseconds
        timeout: 4000, // Integer: Time between slide transitions, in milliseconds
        pager: false, // Boolean: Show pager, true or false
        nav: false, // Boolean: Show navigation, true or false
        random: false, // Boolean: Randomize the order of the slides, true or false
        pause: false, // Boolean: Pause on hover, true or false
        pauseControls: true, // Boolean: Pause when hovering controls, true or false
        prevText: " ", // String: Text for the "previous" button
        nextText: " ", // String: Text for the "next" button
        maxwidth: "", // Integer: Max-width of the slideshow, in pixels
        navContainer: "", // Selector: Where controls should be appended to, default is after the 'ul'
        manualControls: "", // Selector: Declare custom pager navigation
        namespace: "rslides", // String: Change the default namespace used
        before: function() {}, // Function: Before callback
        after: function() {} // Function: After callback
      }); // Fin du slider

    });

    $(document).on("click", function() {
      $.sidr('close', 'sidr-main');
    });

 var _gaq=[['_setAccount','UA-11278966-1'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));

 $(document).ready(function(){
      $(".main").tiltedpage_scroll({
        angle: 20
      });
    });
  </script>

</body>

</html>
