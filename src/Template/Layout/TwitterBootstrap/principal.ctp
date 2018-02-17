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
                        <li class="menu__item"><a class="menu__link" href="">Acceder</a></li>
                        <li class="menu__item"><a class="menu__link" href="">Registrarse</a></li>
                        <li class="menu__item"><a class="menu__link" href="">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="banner">
            <img src="webroot/img/principal/banner.jpg" alt="" class="banner__img">
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
                        <img src="webroot/img/principal/img1.jpg" alt="" class="info__img">
                        <h2 class="info__titulo">Título 1</h2>
                        <p class="info__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ea, reiciendis voluptates, dolorem alias veniam?</p>
                    </article>
                    <article class="info__columna">
                        <img src="webroot/img/principal/img1.jpg" alt="" class="info__img">
                        <h2 class="info__titulo">Título 2</h2>
                        <p class="info__txt">Quam architecto ad laboriosam, reiciendis cum qui neque facilis, necessitatibus culpa, nisi fuga? A, aperiam?</p>
                    </article>
                    <article class="info__columna">
                        <img src="webroot/img/principal/img1.jpg" alt="" class="info__img">
                        <h2 class="info__titulo">Título 3</h2>
                        <p class="info__txt">Quaerat et dolores dolorum, eligendi officia provident tenetur veritatis, eius recusandae officiis sit, at praesentium?</p>
                    </article>
                </section>
                <section class="destacados">
                    <h2 class="section__titulo">Destacados del mes</h2>
                    <div class="destacados__columna">
                        <img src="webroot/img/principal/img2.jpg" alt="" class="destacados__img">
                        <div class="destacados__descripcion">
                            <h3 class="destacados__titulo">VARIOS</h3>
                            <p class="destacados__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, rem.</p>
                        </div>
                    </div>
                    <div class="destacados__columna">
                        <img src="webroot/img/principal/img2.jpg" alt="" class="destacados__img">
                        <div class="destacados__descripcion">
                            <h3 class="destacados__titulo">AUTOMOTOR</h3>
                            <p class="destacados__txt">Ex voluptatum, ullam animi minima non deleniti eos dolorem impedit.</p>
                        </div>
                    </div>
                    <div class="destacados__columna">
                        <img src="webroot/img/principal/img2.jpg" alt="" class="destacados__img">
                        <div class="destacados__descripcion">
                            <h3 class="destacados__titulo">ENTRETENIMIENTO</h3>
                            <p class="destacados__txt">Eius suscipit tempora, dicta optio nisi ex minus ipsa rem!</p>
                        </div>
                    </div>
                    <div class="destacados__columna">
                        <img src="webroot/img/principal/img2.jpg" alt="" class="destacados__img">
                        <div class="destacados__descripcion">
                            <h3 class="destacados__titulo">DEPORTES</h3>
                            <p class="destacados__txt">Ipsum hic cum earum sint repellat itaque, omnis laudantium nostrum!</p>
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