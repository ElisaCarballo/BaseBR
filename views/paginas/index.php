<main class="contenedor seccion">
    <h2>Más Sobre Nosotros</h2>

    <?php include 'iconos.php'; ?>
</main>

<section class="seccion contenedor">
    <h2>Casas y lotes en Venta</h2>
    <?php
        include 'listado.php';
    ?>

    <div class="alinear-derecha">
        <a href="/propiedades" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2 >Encuentra el lugar exclusivo que siempre has soñado</h2>
    <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
    <a href="/contacto" class="boton-amarillo">Contactános</a>
</section>

<div  class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="/entrada">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>10/11/2022</span> por: <span>Admin</span> </p>

                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="/entrada">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>11/11/2022</span> por: <span>Admin</span> </p>

                    <p>
                        Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Opiniones</h3>

        <div class="testimonial">
            <blockquote>
                El personal fue muy amable y proactivo, me ofrecieron varias propiedades de acuerdo a mi búsqueda.
            </blockquote>
            <p>- Elisa Carballo </p>
        </div>
    </section>
</div>