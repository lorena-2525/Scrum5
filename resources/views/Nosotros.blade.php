@extends('layouts.app')

@section('title','Nosotros')

@section('meta-description','Nosotros meta description')



@section('content')
<div class="background-container">
        <img src="interfaz/Inicio.jpg" alt="imgmap" usemap="#map" class="background-imagel-fondo">
    </div>
    <map name="map">

        <area shape="rect" coords="245,404,498,581" href="<?= route('Inicio')?>" alt="logo">
        <area shape="rect" coords="163,700,351,753" href="<?= route('Services')?>" alt="Servicios">
        <area shape="rect" coords="407,700,607,750" href="<?= route('Agend')?>" alt="Agendas">
        <area shape="rect" coords="662,703,874,746" href="<?= route('Accesoris')?>" alt="Accesorios">
        <area shape="rect" coords="937,701,1118,746" href="<?= route('News')?>" alt="Noticias">
        <area shape="rect" coords="1175,701,1362,748" href="<?= route('Contact')?>" alt="Contacto" >
        <area shape="poly" coords="1542,676,1624,631,1712,583,1722,619,1560,715" href="<?= route('We')?>" alt="nosotros">

        <area shape="circle" coords="599,184,33" href="https://www.facebook.com/groups/peluqueriacaninacolombia" alt="facebock" target="_blank">
        <area shape="circle" coords="714,189,33" href="https://www.facebook.com/groups/peluqueriacaninacolombia" alt="instagram" target="_blank">
        <area shape="circle" coords="819,189,38" href="https://www.facebook.com/groups/peluqueriacaninacolombia" alt="twiter" target="_blank">
        <area shape="circle" coords="927,190,32" href="https://www.facebook.com/groups/peluqueriacaninacolombia" alt="Whatsapp" target="_blank">

        <area shape="circle" coords="1604,361,50" href="<?= route('InicioDark')?>" alt="modo_oscuro">
        <area shape="poly" coords="370,2758,353,2737,340,2713,340,2682,358,2668,380,2668,400,2680,405,2703,393,2732" href="<?= route('Inicio')?>" alt="loguito">
    
        <area shape="rect" coords="632,488,729,521"     href="#" alt="login"       class="areaButton" data-modal="modalLogin">
        <area shape="circle" coords="1387,566,46"       href="#" alt="Sing_up"     class="areaButton" data-modal="modalSingUp">
        <area shape="rect" coords="1311,2354,1447,2428" href="#" alt="Suscribete"  class="areaButton" data-modal="modalSuscribete">
        <area shape="poly" coords="1685,2258,1684,2364,1797,2425,1792,2308" href="#" alt="Telefono" class="areaButton" data-modal="modalTelefono">
    </map>



    <div class="search-container">
        <form action="/buscar" method="get">
            <input type="text" name="query" placeholder="Buscar...">


            <button type="submit">
                <img src="imagenes/print_15854479.png" alt="Buscar">
            </button>
        </form>
    </div>


    
    <div id="modalLogin" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="form-container">
                <form action="submit_form.php" method="post">
                    <h2>Formulario de LOGIN</h2>
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
        
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
        
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
        
                    <button type="submit">Enviar</button>
                </form>
            </div>   
        </div>
    </div>

    <div id="modalSingUp" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="form-container">
                <form action="submit_form.php" method="post">
                    <h2>Formulario SING UP</h2>
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
        
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
        
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
        
                    <button type="submit">Enviar</button>
                </form>
            </div>       
        </div>
    </div>

    <div id="modalSuscribete" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="form-container">
                <form action="submit_form.php" method="post">
                    <h2>Formulario de SUSCRIBETE</h2>
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
        
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
        
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
        
                    <button type="submit">Enviar</button>
                </form>
            </div>   
        </div>
    </div>

    <div id="modalTelefono" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="form-container">
                <form action="submit_form.php" method="post">
                    <h2>Formulario de TELEFONO</h2>
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
        
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
        
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
        
                    <button type="submit">Enviar</button>
                </form>
            </div>   
        </div>
    </div>
    


    <div class="slider-container">
    <div class="slider">
        <div class="slides">
            <div class="slide">
                <img src="imagenes/baño.png" alt="Slide 1">
            </div>
            <div class="slide">
                <img src="imagenes/perro-lodo.jpg" alt="Slide 2">
            </div>
            <div class="slide">
                <img src="imagenes/peluqueria.png" alt="Slide 3">
            </div>
            <div class="slide">
                <img src="imagenes/peluqueria.png" alt="Slide 4">
            </div>
        </div>
    </div>
    <div class="nav">
        <button class="active"></button>
        <button></button>
        <button></button>
        <button></button>
        
    </div>

</div>

    
    <div class="elementos-container">
        <div class="calendar-catalogo-container">
            <div class="calendar-container">

            <div class="calendar">

<div class="calendar-header">
    <button id="prevMonth">&lt;</button>
    <div id="monthAndYear"></div>
    <button id="nextMonth">&gt;</button>
</div>






<div class="calend">
    @foreach(['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'] as $day)
    <div class="day">
    <h3>{{ $day }}</h3>
    <div class="time-slot">09:00 - 10:00</div>
    <div class="time-slot">10:00 - 11:00</div>
    <div class="time-slot">11:00 - 12:00</div>
</div>
    @endforeach
</div>

            <div class="catalogo-container">
                <img src="imagenes/basenji.jpg" alt="" class="background-image-catalogo">

                <div class="buttom-catalogo">
                
                <button id="buttom">MI MASCOTA</button>
                <button id="buttom">SERVICIOS</button>
                <button id="buttom">ACCESORIOS</button>
                <button id="buttom">SHAMPOOS</button>
                <button id="buttom">COSMETICOS</button>

                </div>

        


            </div>
        </div>
        
        <div class="news-container">
            <div class="new1-container">

                <div class="new-picture">
                    <img src="imagenes/cachorro.jpeg" alt="">
                </div>
                
                <div class="new-text">
                    <h1>dbd</h1>
                    <p>"rytjrtyjr"</p>
                </div>
            </div>
        
            <div class="new2-container">

                <div class="new-text">
                    <h1>dbd</h1>
                    <p>"fyjtyjtyjughert"</p>
                </div>

                <div class="new-picture">
                    <img src="imagenes/oido.jpeg" alt="">
                </div>
            </div>

            <div class="new3-container">
                <div class="new-picture">
                    <img src="imagenes/baño.png" alt="n3">
                </div>
                <div class="new-text">
                    <h1>dbd</h1>
                    <p>"gjvyvtrjgytgv"</p>
                </div>

            </div>
            <div class="new4-container">
                <div class="new-text">
                    <h1>dbd</h1>

                    



                </div>
                <div class="new-picture">
                    <img src="imagenes/oido.jpeg" alt="">

                </div>

            </div>
        </div>
    </div>
    
    <div class="mapa-container">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.916823247255!2d-74.17031352418661!3d4.608909942444767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ef4d4bca3e9%3A0x160a71363b2d4e58!2sCl.%2051a%20Sur%20%2377t11%2C%20Kennedy%2C%20Bogot%C3%A1%2C%20Cundinamarca!5e0!3m2!1ses-419!2sco!4v1721074934981!5m2!1ses-419!2sco" 
        width="748" 
        height="345" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
        </iframe>


    </div>
    

@endsection
