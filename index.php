<?php get_header(); ?>
    <div class="ancla_descuento">
        <p class="HeartWarming texto_oferta">¡APROVECHA! SOLO POR HOY UN 30% DE DESCUENTO ANTES QUE TERMINE LA OFERTA: </p>&nbsp<p class="HeartWarming texto_oferta" id="countdown"></p>
    </div>
    <script>
        let totalSeconds = localStorage.getItem('remainingTime') ? parseInt(localStorage.getItem('remainingTime')) : 2 * 60 * 60; // 2 horas en segundos
        let endTime = Date.now() + totalSeconds * 1000;

        function updateRemainingTime() {
            const now = Date.now();
            totalSeconds = Math.max(0, Math.floor((endTime - now) / 1000));
            localStorage.setItem('remainingTime', totalSeconds);

            if (totalSeconds === 0) {
                clearInterval(interval);
                totalSeconds = 2 * 60 * 60; // Reinicia el contador
                endTime = Date.now() + totalSeconds * 1000;
                localStorage.removeItem('remainingTime'); // Elimina el tiempo restante
            }
        }

        function startCountdown() {
            const countdownElement = document.getElementById('countdown');

            const interval = setInterval(() => {
                updateRemainingTime();

                const hours = Math.floor(totalSeconds / 3600);
                const minutes = Math.floor((totalSeconds % 3600) / 60);
                const seconds = totalSeconds % 60;

                countdownElement.textContent = 
                    String(hours).padStart(2, '0') + ":" + 
                    String(minutes).padStart(2, '0') + ":" + 
                    String(seconds).padStart(2, '0');

                if (totalSeconds === 0) {
                    clearInterval(interval);
                    startCountdown(); // Reinicia la cuenta regresiva
                }
            }, 1000);
        }

        startCountdown();
    </script>
    <header class="ancla">
        <div class="ancla_opciones_2">
            <a href="index.html">
                <img src="assets/img/logo.png" alt="a" title="a" class="imagen_2">
            </a>
        </div>
        <div class="ancla_opciones grid_100">
            <a href="https://www.instagram.com/fabulosas.nailcare?igsh=N3dhOTdzOHM5bnhh" class="enlace_universal_2" target="_blank">
                <i class="fa-brands fa-square-instagram"></i>
            </a>
            <a href="https://www.tiktok.com/@fabulosas.nail.care?_t=8pt8O0wdgzl&_r=1" class="enlace_universal_2" target="_blank">
                <i class="fa-brands fa-tiktok"></i>
            </a>
            <a href="https://www.facebook.com/FabulosasNailCare?mibextid=LQQJ4d" class="enlace_universal_2" target="_blank">
                <i class="fa-brands fa-facebook"></i>
            </a>
        </div>
        <div class="ancla_opciones">
            <p class="p_5 belleza-regular font_size_grande">
                <a href="https://api.whatsapp.com/send?phone=573001925477&text=%C2%A1Hola!%20Me%20gustar%C3%ADa%20reservar%20una%20cita%20para%20hacerme%20unas%20u%C3%B1as%20Fabulosas.%20%F0%9F%92%9C%F0%9F%8C%9F" class="enlace_universal_2">CONTACTO</a>
            </p>
        </div>
    </header>
    <main class="main">
        <section class="contenedor_universal_2 fondo_blanco">
            <div class="contenedor_universal_seccion_1">
                <video class="video_2" autoplay loop muted>
                    <source src="assets/videos/video_bienvenida.mp4" type="video/mp4">
                    Tu navegador no soporta la etiqueta de video.
                </video>     
            </div>
            <div class="contenedor_universal_seccion_2">
                <h2 class="h2_1 belleza-regular text_aling_start font_size_muy_grande width_1" style="font-weight: 200;">DESCUBRE EL CUIDADO DE UÑAS QUE MERECES</h2>
                <p class="p_1 quicksand text_aling_start width_1">Únete a nuestras membresías exclusivas y disfruta de servicios ilimitados, descuentos especiales y mucho más</p>
                <div class="contenedor_boton width_1" style="justify-content: start;">
                    <div class="boton_1 boton_animado">
                        <p class="p_2 HeartWarming text_aling_start font_size_grande">
                            <a href="#membresias" class="enlace_universal_3">Escoge tu Membresía</a>
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <section class="contenedor_universal" id="membresias">
            <h2 class="h2_1 belleza-regular text_aling_center">ELIGE LA MEMBRESÍA QUE MEJOR SE ADAPTE A TI</h2>
            <p class="p_2 quicksand text_aling_center">30 días de garantía</p>
            <div class="contenedor_membresias">
                <div class="tarjeta_membresias" data-aos="fade-up">
                    <div class="pestana">
                        <p class="p_4 quicksand font-weight-600 font_size_pequena">MEJOR PRECIO</p>
                    </div>
                    <p class="p_2 quicksand text_aling_center font-weight-600 font_size_grande">Membresía #1 Tradicionales Ilimitados</p>
                    <p class="p_3 quicksand text_aling_center font-weight-600 font_size_grande"><s>$160.000 COP</s>, Ahora: 112.000 COP</p>
                    <div class="contenedor_boton">
                        <div class="boton_1 HeartWarming papitar">
                            <a href="https://pay.hotmart.com/X95534873L?bid=1726869536917" class="enlace_universal_3"><p>ESCOGER MEMBRESIA</p></a>
                        </div>
                    </div>
                    <div class="contenedor_parrafos_tarjeta_membresias">
                        <ul class="ul_1">
                            <li class="li_1 quicksand text_aling_start">INCLUYE: </li>
                            <li class="li_1 quicksand text_aling_start">Manicures y pedicures tradicionales ilimitados (Waterless para cuidar el medio ambiente)</li>
                            <li class="li_1 quicksand text_aling_start">Solo 1 tono o French</li>
                            <li class="li_1 quicksand text_aling_start">Vela terapia ilimitada</li>
                            <li class="li_1 quicksand text_aling_start">Acceso VIP a eventos exclusivos</li>
                            <li class="li_1 quicksand text_aling_start">Acceso a la Comunidad VIP Fabulosas</li>
                            <li class="li_1 quicksand text_aling_start">Acceso a la plataforma de cursos de belleza y autocuidado de manos y pies</li>
                            <li class="li_1 quicksand text_aling_start">Descuento de 5% en productos adicionales</li>
                        </ul>
                    </div>
                    <div class="contenedor_boton_2" style="grid-gap: 0px 35px;">
                        <img src="assets/img/waterless.png" title="a" alt="a" class="imagen_6">
                        <img src="assets/img/30_dias.png" title="a" alt="a" class="imagen_6">
                    </div>
                </div>
                <div class="tarjeta_membresias" data-aos="fade-down">
                    <div class="pestana">
                        <p class="p_4 quicksand font-weight-600 font_size_pequena">MEJOR PRECIO</p>
                    </div>
                    <p class="p_2 quicksand text_aling_center font-weight-600 font_size_grande">Membresía #2 Press-On Ilimitadas</p>
                    <p class="p_3 quicksand text_aling_center font-weight-600 font_size_grande"><s>$225.000 COP</s>, Ahora: 157.500 COP</p>
                    <div class="contenedor_boton">
                        <div class="boton_1 HeartWarming papitar">
                            <a href="https://go.hotmart.com/P95536672A?dp=1" class="enlace_universal_3"><p>ESCOGER MEMBRESIA</p></a>
                        </div>
                    </div>
                    <div class="contenedor_parrafos_tarjeta_membresias">
                        <ul class="ul_1">
                            <li class="li_1 quicksand text_aling_start">Incluye todo lo de la Membresía Tradicionales Ilimitados</li>
                            <p class="li_1 quicksand text_aling_start" style="margin-top: 15px;">Más:</p>
                            <li class="li_1 quicksand text_aling_start">Extensiones Soft Gel (Press-On) ilimitadas</li>
                            <li class="li_1 quicksand text_aling_start">Incluye retoques y retiros</li>
                            <li class="li_1 quicksand text_aling_start">Descuento de 10% en productos adicionales</li>
                            <li class="li_1 quicksand text_aling_start">¡Luce manos perfectas todos los días del año, cuidando el planeta</li>
                        </ul>
                    </div>
                    <div class="contenedor_boton_2" style="grid-gap: 0px 35px;">
                        <img src="assets/img/waterless.png" title="a" alt="a" class="imagen_6">
                        <img src="assets/img/30_dias.png" title="a" alt="a" class="imagen_6">
                    </div>
                </div>
                <div class="tarjeta_membresias" data-aos="fade-up">
                    <div class="pestana">
                        <p class="p_4 quicksand font-weight-600 font_size_pequena">MEJOR PRECIO</p>
                    </div>
                    <p class="p_2 quicksand text_aling_center font-weight-600 font_size_grande">Membresía #3 Semipermanente Ilimitados</p>
                    <p class="p_3 quicksand text_aling_center font-weight-600 font_size_grande"><s>$250.000 COP</s>, Ahora: 175.000 COP</p>
                    <div class="contenedor_boton">
                        <div class="boton_1 HeartWarming papitar">
                            <a href="https://go.hotmart.com/X95535995D?dp=1" class="enlace_universal_3"><p>ESCOGER MEMBRESIA</p></a>
                        </div>
                    </div>
                    <div class="contenedor_parrafos_tarjeta_membresias">
                        <ul class="ul_1">
                            <li class="li_1 quicksand text_aling_start">Incluye todo lo de la Membresía Press-On Ilimitadas</li>
                            <p class="li_1 quicksand text_aling_start" style="margin-top: 15px;">Más:</p>
                            <li class="li_1 quicksand text_aling_start">Manicures y pedicures semipermanentes ilimitados (tono liso o French) (Waterless para cuidar el medio ambiente)</li>
                            <li class="li_1 quicksand text_aling_start">Retiros</li>
                            <li class="li_1 quicksand text_aling_start">Descuento de 15% en productos adicionales</li>
                            <li class="li_1 quicksand text_aling_start">¡No dejes pasar la oportunidad de tener uñas perfectas y ecológicas siempre!</li>
                        </ul>
                    </div>
                    <div class="contenedor_boton_2" style="grid-gap: 0px 35px;">
                        <img src="assets/img/waterless.png" title="a" alt="a" class="imagen_6">
                        <img src="assets/img/30_dias.png" title="a" alt="a" class="imagen_6">
                    </div>
                </div>
                <div class="tarjeta_membresias" data-aos="fade-down">
                    <div class="pestana">
                        <p class="p_4 quicksand font-weight-600 font_size_pequena">MEJOR PRECIO</p>
                    </div>
                    <p class="p_2 quicksand text_aling_center font-weight-600 font_size_grande">Membresía #4 Premium Jelly Spa</p>
                    <p class="p_3 quicksand text_aling_center font-weight-600 font_size_grande"><s>$300.000 COP</s>, Ahora: 210.000 COP</p>
                    <div class="contenedor_boton">
                        <div class="boton_1 HeartWarming papitar">
                            <a href="https://go.hotmart.com/A95537224O?dp=1" class="enlace_universal_3"><p>ESCOGER MEMBRESIA</p></a>
                        </div>
                    </div>
                    <div class="contenedor_parrafos_tarjeta_membresias">
                        <ul class="ul_1">
                            <li class="li_1 quicksand text_aling_start">Incluye todo lo de la Membresía Semipermanente Ilimitados.</li>
                            <p class="li_1 quicksand text_aling_start" style="margin-top: 15px;">Más:</p>
                            <li class="li_1 quicksand text_aling_start">Extensiones acrílicas ilimitadas Hasta # 3 (tip o esculpidas) </li>
                            <li class="li_1 quicksand text_aling_start">Incluye retoques y retiros</li>
                            <li class="li_1 quicksand text_aling_start">Descuento de 20% en productos adicionales</li>
                            <li class="li_1 quicksand text_aling_start">¡La belleza ilimitada y sostenible es tuya si actúas ahora!</li>
                            <li class="li_1 quicksand text_aling_start">Tiene menú contextual</li>
                        </ul>
                    </div>
                    <div class="contenedor_boton_2" style="grid-gap: 0px 35px;">
                        <img src="assets/img/waterless.png" title="a" alt="a" class="imagen_6">
                        <img src="assets/img/30_dias.png" title="a" alt="a" class="imagen_6">
                    </div>
                </div>
                <p class="p_3 HeartWarming text_aling_center font-weight-200" style="cursor: pointer;">
                    <a href="files/terminos_y_condiciones.html" class="enlace_universal_2">
                        Ver términos y condiciones
                    </a>
                </p>
            </div>
        </section>
        <div class="separador_universal fondo_1">
            <section class="contenedor_universal padding_section" id="testimonios">
                <h2 class="h2_1 belleza-regular text_aling_center">LO QUE DICEN NUESTRAS CLIENTES</h2>
                <div class="contenedor_tarjeta_clientes">
                    <div class="tarjeta_clientes" data-aos="flip-left">
                        <div class="clientes_foto_de_perfil">
                            <img src="assets/img/perfil_1.png" alt="Cindy  De Los Rios" title="Cindy  De Los Rios" class="imagen_3">
                        </div>
                        <div class="clientes_frase_de_perfil">
                            <p class="p_2 belleza-regular text_aling_center font_size_mas_grande">Cindy  De Los Rios</p>
                        </div>
                        <div class="clientes_nombre_de_perfil">
                            <p class="p_1 quicksand font-weight-600 text_aling_center font_size_semi_pequena">¡Increíble!</p>
                        </div>
                        <div class="clientes_descripcion_de_perfil">
                            <p class="p_1 quicksand font-weight-200 text_aling_center font_size_semi_pequena">Visité FABULOSAS por primera vez, no puedo ir a ningún otro lugar. El ambiente es relajante, las técnicas son de primera y las chicas siempre están muy atentas.</p>
                        </div>
                        <div class="clientes_frase_de_perfil">
                            <p class="p_1 quicksand font-weight-600 text_aling_center font_size_semi_pequena">¡Amo ir a FABULOSAS, la mejor CALIDAD!</p>
                        </div>
                    </div>

                    <div class="tarjeta_clientes" data-aos="flip-left">
                        <div class="clientes_foto_de_perfil">
                            <img src="assets/img/perfil_2.png" alt="Mónica Fonseca" title="Mónica Fonseca" class="imagen_3">
                        </div>
                        <div class="clientes_frase_de_perfil">
                            <p class="p_2 belleza-regular text_aling_center font_size_mas_grande">Mónica Fonseca</p>
                        </div>
                        <div class="clientes_nombre_de_perfil">
                            <p class="p_1 quicksand font-weight-600 text_aling_center font_size_semi_pequena"></p>
                        </div>
                        <div class="clientes_descripcion_de_perfil">
                            <p class="p_1 quicksand font-weight-200 text_aling_center font_size_semi_pequena">Fui a hacerme las uñas y quedaron tan bellas que mi novio me pidió matrimonio. Amo este lugar, matriculada para siempre con FABULOSAS.</p>
                        </div>
                        <div class="clientes_frase_de_perfil">
                            <p class="p_1 quicksand font-weight-600 text_aling_center font_size_semi_pequena">5 Estrellas.</p>
                        </div>
                    </div>

                    <div class="tarjeta_clientes" data-aos="flip-left">
                        <div class="clientes_foto_de_perfil">
                            <img src="assets/img/perfil_3.png" alt="Danna Figueroa" title="Danna Figueroa" class="imagen_3">
                        </div>
                        <div class="clientes_frase_de_perfil">
                            <p class="p_2 belleza-regular text_aling_center font_size_mas_grande">Danna Figueroa</p>
                        </div>
                        <div class="clientes_nombre_de_perfil">
                            <p class="p_1 quicksand font-weight-600 text_aling_center font_size_semi_pequena">Ir FABULOSAS es una experiencia increíble</p>
                        </div>
                        <div class="clientes_descripcion_de_perfil">
                            <p class="p_1 quicksand font-weight-200 text_aling_center font_size_semi_pequena">Las manicuristas son MUY profesionales, atentas y siempre saben exactamente lo que quiero. Hacen diseños espectaculares.</p>
                        </div>
                        <div class="clientes_frase_de_perfil">
                            <p class="p_1 quicksand font-weight-600 text_aling_center font_size_semi_pequena">Son artistas.</p>
                        </div>
                    </div>

                    <div class="tarjeta_clientes" data-aos="flip-left">
                        <div class="clientes_foto_de_perfil">
                            <img src="assets/img/perfil_4.png" alt="María Gomes" title="María Gomes" class="imagen_3">
                        </div>
                        <div class="clientes_frase_de_perfil">
                            <p class="p_2 belleza-regular text_aling_center font_size_mas_grande">María Gomes</p>
                        </div>
                        <div class="clientes_nombre_de_perfil">
                            <p class="p_1 quicksand font-weight-600 text_aling_center font_size_semi_pequena"></p>
                        </div>
                        <div class="clientes_descripcion_de_perfil">
                            <p class="p_1 quicksand font-weight-200 text_aling_center font_size_semi_pequena">Me encanta cómo cuidan cada detalle en FABULOSAS. Desde la atención personalizada hasta los productos que usan, todo es de alta calidad.</p>
                        </div>
                        <div class="clientes_frase_de_perfil" id="galerias">
                            <p class="p_1 quicksand font-weight-600 text_aling_center font_size_semi_pequena">Mis uñas siempre se ven fabulosas.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contenedor_universal_3">
                <h2 class="h2_1 belleza-regular text_aling_center">EXPLORA NUESTROS RESULTADOS</h2>

                <div class="contenedor_carrusel fondo_2">
                    <div class="carrusel">
                        <video class="video_1" autoplay loop muted playsinline style="height: 90%;">
                            <source src="assets/img/trabajos_muestra.mp4" type="video/mp4" style="height: 90%;">
                            Tu navegador no soporta la etiqueta de video.
                        </video>  
                    </div>
                </div>
            </section>
            <section class="contenedor_universal">
                <h2 class="h2_1 belleza-regular text_aling_center">EMBAJADORAS FABULOSAS</h2>
                <div class="contenedor_tarjeta_embajadoras">
                    <div class="contenedor_tarjeta_embajadoras_separador">
                        <div class="tarjeta_embajadoras">
                            <video class="video_1" autoplay loop muted>
                                <source src="assets/videos/video_1.mp4" type="video/mp4">
                                Tu navegador no soporta la etiqueta de video.
                            </video>                        
                        </div>
                        <div class="tarjeta_embajadoras">
                            <video class="video_1" autoplay loop muted>
                                <source src="assets/videos/video_2.mp4" type="video/mp4">
                                Tu navegador no soporta la etiqueta de video.
                            </video>                        
                        </div>
                        <div class="tarjeta_embajadoras">
                            <video class="video_1" autoplay loop muted>
                                <source src="assets/videos/video_3.mp4" type="video/mp4">
                                Tu navegador no soporta la etiqueta de video.
                            </video>                        
                        </div>
                    </div>

                    <div class="contenedor_tarjeta_embajadoras_separador">
                        <div class="tarjeta_embajadoras">
                            <video class="video_1" autoplay loop muted>
                                <source src="assets/videos/video_4.mp4" type="video/mp4">
                                Tu navegador no soporta la etiqueta de video.
                            </video>                        
                        </div>
                        <div class="tarjeta_embajadoras">
                            <video class="video_1" autoplay loop muted>
                                <source src="assets/videos/video_5.mp4" type="video/mp4">
                                Tu navegador no soporta la etiqueta de video.
                            </video>                        
                        </div>
                        <div class="tarjeta_embajadoras">
                            <video class="video_1" autoplay loop muted>
                                <source src="assets/videos/video_6.mp4" type="video/mp4">
                                Tu navegador no soporta la etiqueta de video.
                            </video>                        
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="barra_inferior">
            <div class="barra_inferior_secciones">
                <img src="assets/img/logo.png" alt="a" title="a" class="imagen_5">
            </div>
            <div class="barra_inferior_secciones">
                <p class="p_2 quicksand font_size_grande text_aling_center" style="margin-bottom: 10px;">LANDING</p>
                <p class="p_1 quicksand font_size_15 text_aling_center">
                    <a href="#" class="enlace_universal">INICIO</a>
                </p>
                <p class="p_1 quicksand font_size_15 text_aling_center">
                    <a href="#membresias" class="enlace_universal">MEMBRESÍAS</a>
                </p>
                <p class="p_1 quicksand font_size_15 text_aling_center">
                    <a href="#testimonios" class="enlace_universal">TESTIMONIOS</a>
                </p>
                <p class="p_1 quicksand font_size_15 text_aling_center">
                    <a href="#galerias" class="enlace_universal">GALERÍA</a>
                </p>
            </div>
            <div class="barra_inferior_secciones">
                <p class="p_2 quicksand font_size_grande text_aling_center" style="margin-bottom: 10px;">CONTACTO</p>
                <p class="p_1 quicksand font_size_15 text_aling_center">+57 300 1925477</p>
                <p class="p_1 quicksand font_size_15 text_aling_center">Medellín, Colombia</p>
            </div>
            <p class="p_1 inter font_size_15 text_aling_center" style="margin-top: 50px;">2024 ©FABULOSAS  All Rights Reserved</p>
        </div>


        <div class="boton_fixed">
            <a href="https://api.whatsapp.com/send?phone=573001925477&text=%C2%A1Hola!%20Me%20gustar%C3%ADa%20reservar%20una%20cita%20para%20hacerme%20unas%20u%C3%B1as%20Fabulosas.%20%F0%9F%92%9C%F0%9F%8C%9F">
                <i class="fa-brands fa-whatsapp" style="color: #ffffff; font-size: 35px;"></i>
            </a>
        </div>

        <div class="boton_fixed_2">
            <div class="contenedor_imagen_7">
                <img src="assets/img/perfil_1.png" alt="" title="" class="imagen_7" id="imagen_1">
            </div>
            <p class="p_6 quicksand" id="texto_1">Camila Rodríguez: <b class="p_compro">&nbspCOMPRÓ</b></p>
        </div>
        
        <div class="boton_fixed_3">
            <div class="contenedor_imagen_7">
                <img src="assets/img/perfil_2.png" alt="" title="" class="imagen_7" id="imagen_2">
            </div>
            <p class="p_6 quicksand" id="texto_2">Valeria Martínez: <b class="p_compro">&nbspCOMPRÓ</b></p>
        </div>        

    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const video = document.querySelector('.video_1');
            video.muted = true; // Asegura que esté silenciado
            video.play();       // Intenta reproducirlo manualmente si no lo hace
        });
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/scripts/main.js"></script>

<?php get_footer(); ?>
