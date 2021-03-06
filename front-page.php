<?php get_header(); ?>
    <main>
    <header>
    <?php
    echo do_shortcode('[smartslider3 slider="2"]');
    ?> 
    </header>
        <section id="video-presentation">
            <iframe width="1280" height="720" src="https://www.youtube.com/embed/uffH8izex6w"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </section>
        <section id="news">
            <div class="news__title">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <h2>Noticias</h2>
                </div>
                <hr>
            </div>
            <article class="news__card">
                <div class="news__card-image"></div>
                <div class="news__card-content">
                    <h3>Title</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ut, error cupiditate placeat
                        dolorum laborum autem?</p>
                    <a href="#">Leer más</a>
                </div>
            </article>
            <article class="news__card">
                <div class="news__card-image"></div>
                <div class="news__card-content">
                    <h3>Title</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ut, error cupiditate placeat
                        dolorum laborum autem?</p>
                    <a href="#">Leer más</a>
                </div>
            </article>
            <article class="news__card">
                <div class="news__card-image"></div>
                <div class="news__card-content">
                    <h3>Title</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ut, error cupiditate placeat
                        dolorum laborum autem?</p>
                    <a href="#">Leer más</a>
                </div>
            </article>
            <div class="news__link">
                <a href="#">Ver más Noticias</a>
            </div>
        </section>
        <section id="contact">
            <div class="contact__card">
                <div class="contact__title">
                    <h2>Contacto</h2>
                </div>
                <div class="contact__details">
                    <div class="contact__image"> 
                        <img src="/assets/images/image 1.png" alt="dasdsa">
                    </div>
                    <div class="contact__content">
                        <h3>Coordinador de carrera</h3>
                        <p>Ing.Andrés Beltrán</p>
                        <h3>Número de teléfono</h3>
                        <p>593(03) 2998-200 Ext</p>
                        <h3>Correo electrónico</h3>
                        <p>igambiental@espoch.edu.ec</p>
                        <h3>Dirección</h3>
                        <p>Panamericana Sur Km 1 1/2, Riobamba - Ecuador</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="ubication">
            <iframe class="contact__map" 
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9485.499743692848!2d-78.67493558570193!3d-1.6513206584385598!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe12e5a03f277fc67!2sFacultad%20de%20Ciencias%20-%20ESPOCH!5e0!3m2!1ses-419!2sec!4v1650497154005!5m2!1ses-419!2sec" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>
        <section id="accesos-directos">
            <div class="accesos-directos_title">
                <h2>Accesos Directos</h2>
            </div>
            <div class="accesos-directos_container">
                <ul id="menu-accesos-directos">
                    <li><a href="https://www.espoch.edu.ec/index.php/calendario.html" target="_blank"><i class="fa-solid fa-calendar-days accesso-directo_link"></i>Cronograma</a></li>
                    <li><a href="http://biblioteca.espoch.edu.ec" target="_blank"><i class="fa-solid fa-book-open-cover accesso-directo_link"></i>Biblioteca</a></li>
                    <li><a href="https://elearning.espoch.edu.ec" target="_blank"><i class="fa-solid fa-desktop accesso-directo_link"></i></i>Aula Virtual</a></li>
                    <li><a href="https://loginsai.espoch.edu.ec" target="_blank"><i class="fa-solid fa-graduation-cap accesso-directo_link"></i>Sistema Académico</a></li>
                </ul>
            </div>
        </section>
    </main>
<?php get_footer(); ?>