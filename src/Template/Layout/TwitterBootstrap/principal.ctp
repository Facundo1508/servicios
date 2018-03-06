<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ar.Servicios</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <?php
        //Estaban mal referenciados los assets. Explicación en el correo
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
                        <li class="menu__item"><a class="menu__link select" href="">Inicio</a></li>
                        <li class="menu__item"><a class="menu__link" <?= $this->Html->link(__('Acceder'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'btn btn-default']) ?></a></li>
                        <li class="menu__item"><a class="menu__link" <?= $this->Html->link(__('Registrarse'), ['controller' => 'Users', 'action' => 'registro'], ['class' => 'btn btn-default']) ?></a></li>
                        <li class="menu__item"><a class="menu__link" <?= $this->Html->link(__('Todos los servicios'), ['controller' => 'Userservicios', 'action' => 'todos'], ['class' => 'btn btn-default']) ?></a></li>
                        <li class="menu__item"><a class="menu__link" <?= $this->Html->link(__('Mis Servicios'), ['controller' => 'Userservicios', 'action' => 'index'], ['class' => 'btn btn-default']) ?></a></li>
                        <li class="menu__item"><a class="menu__link" <?= $this->Html->link(__('Contacto'), ['controller' => 'Pages', 'action' => 'display', 'contacto'], ['class' => 'btn btn-default']) ?></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="banner">
            <img src="webroot/img/principal/serv.jpg" alt="" class="banner__img">
            <div class="contenedor">
                <div class="h2 banner__titulo">
                    Todos los servicios que siempre buscaste</div>
                <p class="banner__txt">Buscá, Encontrá, Contratá</p>
            </div>
        </div>
        <main>
            <div>
                <section class="info">
                    <article class="info__columna">
                        <img src="webroot/img/principal/corona.jpg" alt="" class="info__img">
                        <h2 class="info__titulo">Hazte notar</h2>
                        <p class="info__txt">¡Conviértete en premium para salir en este apartado!</p>
                    </article>
                    <article class="info__columna">
                        <img src="webroot/img/principal/corona.jpg" alt="" class="info__img">
                        <h2 class="info__titulo">Mantente aquí</h2>
                        <p class="info__txt">Con el servicio premium captaras las miradas de todos</p>
                    </article>
                    <article class="info__columna">
                        <img src="webroot/img/principal/corona.jpg" alt="" class="info__img">
                        <h2 class="info__titulo">Renuévate</h2>
                        <p class="info__txt">¡Manten tu servicio todos los meses, sé el mas visto!</p>
                    </article>
                </section>
                <section class="destacados">
                    <h2 class="section__titulo">Destacados del mes</h2>
                    <div class="destacados__columna">
                        <img src="webroot/img/principal/motor.jpg" alt="" class="destacados__img">
                        <div class="destacados__descripcion">
                            <h3 class="destacados__titulo">AUTOMOTOR</h3>
                            <p class="destacados__txt">¡Tu taller podria estar aquí!.</p>
                        </div>
                    </div>
                    <div class="destacados__columna">
                        <img src="webroot/img/principal/restaurante.jpg" alt="" class="destacados__img">
                        <div class="destacados__descripcion">
                            <h3 class="destacados__titulo">GASTRONOMIA</h3>
                            <p class="destacados__txt">Demuestra porqué sales aquí</p>
                        </div>
                    </div>
                    <div class="destacados__columna">
                        <img src="webroot/img/principal/cine.jpg" alt="" class="destacados__img">
                        <div class="destacados__descripcion">
                            <h3 class="destacados__titulo">ENTRETENIMIENTO</h3>
                            <p class="destacados__txt">¡Mirá que hay de nuevo!</p>
                        </div>
                    </div>
                    <div class="destacados__columna">
                        <img src="webroot/img/principal/deportes.jpg" alt="" class="destacados__img">
                        <div class="destacados__descripcion">
                            <h3 class="destacados__titulo">DEPORTES</h3>
                            <p class="destacados__txt">Es tu oportunidad de practicar lo que siempre quisiste</p>
                        </div>
                    </div>
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