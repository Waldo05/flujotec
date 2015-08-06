<?= $tpl_content; ?>
<div id="map_canvas"></div>
<section id="contacto">
    <div id="carta">
        <img src="imagenes/contacto.png">
    </div>
    <h3>Contactanos y Cotiza</h3>
    <!--formulario de contacto-->
    <form action="hosting/../" method="post" onSubmit="MM_validateForm('Nombre','','R','Mail','','RisEmail','Telefono','','R','consulta','','R');return document.MM_returnValue;return document.MM_returnValue">
        <input name="Nombre" type="text" class="input" id="Nombre" placeholder="Nombre"/>
        <input name="Mail" type="text" class="input" id="Mail" placeholder="E-mail"/>
        <input name="Telefono" type="text" class="input" id="Telefono" placeholder="Teléfono"/>  
        <textarea name="consulta" id="consulta" class="mensaje" placeholder="Mensaje"></textarea>
        <input class="enviar" name="Enviar" type="submit" value="Enviar" />
    </form>
    <!--formulario de contacto-->
</section>
<footer>
    <div id="footer">
        <a href="https://www.facebook.com/rinohost" target="new" class="facebook"></a>
        <a href="https://twitter.com/rinohost" target="new" class="twitter"></a>
        <a href="https://www.linkedin.com/pub/rinohost-chile/a9/926/100?domainCountryName=&csrfToken=ajax%3A3334404176210081577" target="new" class="linkedin"></a>
        <a href="https://plus.google.com/u/0/118195595677921828719/posts" target="new" class="google"></a>
        
        <a href="http://www.youtube.com/emagenicltda" target="new" class="youtube"></a>
        <a href="skype:emagenicltda?call" target="new" class="skype"></a>
    </div>
    <p>Teléfonos: 72-2532645 - 
    Mail: ventas@rinohost.com  -
    Dirección: Italia 746 Rancagua Norte - Chile</p>
    <div id="logo_footer">
        <img src="imagenes/logo_footer.png">
    </div>
    <div class="servicios_pie">
        <div class="serviciopie">
            <h4>Hosting</h4>
            <li>Centos 6.5</li>
            <li>Cpanel</li>
            <li>Webmail</li>
            <li>FTP, MySQL</li>
        </div>
        <div class="serviciopie">
            <h4>Reseller</h4>
            <li>Crea tus planes</li>
            <li>Cpanel y WHM</li>
            <li>Revende hosting</li>
            <li>y aloja tus cuentas</li>
        </div>
        <div class="serviciopie">
            <h4>Cloud</h4>
            <li>Datos centralizados</li>
            <li>Respaldo automatico</li>
            <li>Acceso desde internet</li>
            <li>Celulares y computadoras</li>
        </div>
        <div class="serviciopie">
            <h4>VPS</h4>
            <li>Cpanel/Whm</li>
            <li>Crea tus reseller</li>
            <li>Crea tus hosting</li>
            <li>Arma tu negocio</li>
        </div>
        <div class="serviciopie">
            <h4>Portal clientes</h4>
            <li>Contrala tus clientes </li>
            <li>Notificación automatica</li>
            <li>Control de gastos</li>
            <li>Gestión simple</li>
        </div>
    </div>
</footer>
<div id="tarjetas">
    <img src="imagenes/tarjetas.png">
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"
type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(function(){

     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;

            }

       }

   });

});

</script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.min.js"></script>
<!--efecto 3D-->
  <script>
    $(function() {
        $.fn.parallax = function(options){
            var $$ = $(this);
            offset = $$.offset();
            var defaults = {
                "start": 0,
                "stop": offset.top + $$.height(),
                "coeff": -0.2
            };
            var opts = $.extend(defaults, options);
            return this.each(function(){
                $(window).bind('scroll', function() {
                    windowTop = $(window).scrollTop();  
                    if((windowTop >= opts.start) && (windowTop <= opts.stop)) {
                        newCoord = windowTop * opts.coeff;
                         
                        $$.css({
                            "background-position": "0 "+ newCoord + "px"
                        });
                    } 
                });
            });
        };
        $('#nosotros').parallax({ "coeff":-0.2 });
    })
</script>
<!--efecto 3D-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(function() {

        var btn_movil = $('#nav-mobile'),
            menu = $('#menu').find('ul');

        btn_movil.on('click', function (e) {
            e.preventDefault();

            var el = $(this);

            el.toggleClass('nav-active');
            menu.toggleClass('open-menu');
        })

    });
</script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript">
    function initialize() {
        var latlng = new google.maps.LatLng(-34.16121,-70.74341);
        var settings = {
            zoom: 18,
            center: latlng,
            mapTypeControl: true,
            scrollwheel: false,
            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
            navigationControl: true,
            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
            mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
    var companyLogo = new google.maps.MarkerImage('../imagenes/logo_mapa.png',
        new google.maps.Size(100,50),
        new google.maps.Point(0,0),
        new google.maps.Point(50,50)
    );
    var companyShadow = new google.maps.MarkerImage('../images/logo_shadow.png',
        new google.maps.Size(130,50),
        new google.maps.Point(0,0),
        new google.maps.Point(65, 50)
    );
    var companyPos = new google.maps.LatLng(-34.16121,-70.74341);
    var companyMarker = new google.maps.Marker({
    position: companyPos,
    map: map,
    icon: companyLogo,
    shadow: companyShadow,
    title:"Emagenic Ltda"
    });
  
    var contentString = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h2  class="titulomango">Rinohost</h2>'+
    '<div id="bodyContent">'+
    '<p style="color:#000;">Desde Alameda tome Av España dirección norte a mano derecha encontrará una calle llama Italia, siga por ella en el segundo pasaje encontrará nuestra oficina</p>'+
    '</div>'+
    '</div>';
 
    var infowindow = new google.maps.InfoWindow({
    content: contentString
    });
  
    google.maps.event.addListener(companyMarker, 'click', function() {
    infowindow.open(map,companyMarker);
    })  
  
    }
</script>
</body>
</html>