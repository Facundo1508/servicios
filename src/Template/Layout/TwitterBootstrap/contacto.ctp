<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ar.Servicios</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <?php
        
        echo $this->Html->css('principal/estilos');
        echo $this->Html->css('principal/font');
        ?>
    </head>
    <body>
        <header class="header">
            <div class="contenedor">
                <h1 class="logo">Ar.Servicios</h1>
                <span class="icon-menu" id=btn-menu></span>
                <nav class="nav" id="nav">
                    <ul class="menu">
                        <li class="menu__item"><a class="menu__link" <?= $this->Html->link(__('Inicio'), ['controller' => 'Pages', 'action' => 'display', 'home'], ['class' => 'btn btn-default']) ?></a></li>
                        <li class="menu__item"><a class="menu__link" <?= $this->Html->link(__('Acceder'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'btn btn-default']) ?></a></li>
                        <li class="menu__item"><a class="menu__link" <?= $this->Html->link(__('Registrarse'), ['controller' => 'Users', 'action' => 'registro'], ['class' => 'btn btn-default']) ?></a></li>
                        <li class="menu__item"><a class="menu__link" <?= $this->Html->link(__('Todos los servicios'), ['controller' => 'Userservicios', 'action' => 'todos'], ['class' => 'btn btn-default']) ?></a></li>
                        <li class="menu__item"><a class="menu__link" <?= $this->Html->link(__('Mis Servicios'), ['controller' => 'Userservicios', 'action' => 'index'], ['class' => 'btn btn-default']) ?></a></li>
                        <li class="menu__item"><a class="menu__link select" <?= $this->Html->link(__('Nosotros'), ['controller' => 'Pages', 'action' => 'display', 'contacto'], ['class' => 'btn btn-default']) ?></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="banner">
            <img src="webroot/img/principal/serv.jpg" alt="" class="banner__img">
            <div class="contenedor">
                <div class="h2 banner__titulo">
                    Somos Ar.Servicios una web especializada en servicios</div>
                <p class="banner__txt">Si estás buscando algo nuevo, estás en el lugar correcto. 
                    Nos esforzamos por ser trabajadores e innovadores, ofreciendo a nuestros clientes 
                    lo que desean, colocando sus deseos en la parte superior de nuestra lista de prioridades.</p>
            </div>
        </div>
        
        <main>
            <div>
                <section class="info">
                    <article class="info__columna">
                        <img src="webroot/img/principal/celular.jpg" alt="" class="info__img">
                        <h2 class="info__titulo">Donde quieras</h2>
                        <p class="info__txt" >Trabajamos para que puedas visitarnos en cualquier plataforma</p>
                    </article>
                    <article class="info__columna">
                        <img src="webroot/img/principal/computadora.jpg" alt="" class="info__img">
                        <h2 class="info__titulo">Actualizados</h2>
                        <p class="info__txt">En Ar.Servicios trabajamos para mantenernos con las ultimas tecnologías</p>
                    </article>
                    <article class="info__columna">
                        <img src="webroot/img/principal/trabajando.jpg" alt="" class="info__img">
                        <h2 class="info__titulo">Estudios</h2>
                        <p class="info__txt">Llevamos a cabo estudios para poder mantener lo relevante cuanto antes</p>
                    </article>
                </section>
            </div>
        </main>
        
        <footer class="footer">
            <div class="social">
                <a href="" class="icon-facebook"></a>
                <a href="" class="icon-twitter"></a>
                <a href="" class="icon-instagram"></a>
                <a href="" class="icon-gplus"></a>
            </div>
            <p class="copy">&copy; Ar.Servicios - 2018 - Todos los derechos reservados</p>
        </footer>
        <?php echo $this->Html->script('principal/menu'); ?>
    </body>
</html>