<!DOCTYPE html>

<html lang="{{ app() -> getLocale() }}">
    @include("layouts.head", ["title" => __("app.about_us")])

    <body>
        @include("layouts.header")

        <main class="block w-full p-4">
            <div class="max-w-screen-xl mx-auto">
                <h1 class="block my-8 text-4xl sm:text-6xl font-black">{{ mb_strtoupper(__("app.about_us")) }}</h1>

                <hr>

                <div class="my-8">
                    <img class="block w-full rounded-lg" src="{{ asset("storage/images/banners/Banner1.jpg") }}" alt="Operator's Cup Banner">

                    <p class="block my-8 text-justify text-lg font-bold">
                        Somos una liga amateur de Rainbow Six Siege con tres años de experiencia detrás. Desde nuestro inicio, nuestro objetivo principal ha sido brindar un
                        espacio competitivo y emocionante para jugadores apasionados del juego. Nos enorgullece crear una comunidad vibrante donde los jugadores pueden desarrollar
                        sus habilidades, establecer conexiones duraderas y disfrutar de una experiencia de juego gratificante. En nuestra liga, valoramos la diversión, el
                        compañerismo y la competencia justa en un entorno amigable.
                    </p>
                </div>

                <div class="mt-16 mb-8">
                    <h2 class="block my-8 text-2xl sm:text-4xl font-black">Nuestra Historia</h2>

                    <div class="my-8">
                        <h3 class="block mt-8 mb-4 text-xl sm:text-2xl font-black">Comienzo</h3>

                        <p class="block my-4 text-justify text-lg">
                            Todo comenzó con la idea de crear una liga amateur en conjunto con el equipo Night Knight, esta surgió como respuesta a la creciente demanda de un
                            espacio competitivo para los jugadores de Rainbow Six Siege. Nos dimos cuenta de que había una gran cantidad de jugadores talentosos y entusiastas que
                            buscaban un lugar donde mostrar sus habilidades y disfrutar del juego en un ambiente amigable y equitativo. Así nació nuestra liga, con la misión de
                            proporcionar un entorno competitivo y emocionante para jugadores de todos los niveles.
                        </p>
                    </div>

                    <div class="my-8">
                        <h3 class="block mt-8 mb-4 text-xl sm:text-2xl font-black">Season 1 (2021)</h3>

                        <p class="block my-4 text-justify text-lg">
                            En nuestro primer año, organizamos la temporada inaugural de nuestra liga con la colaboración del equipo Night Knight. Fue un hito emocionante para
                            nosotros, ya que nos dimos cuenta de que estábamos cumpliendo nuestro propósito de brindar una plataforma de competencia para los jugadores amateurs.
                            Durante esta temporada, contamos con el patrocinio de la empresa Sica Games, quienes nos brindaron su apoyo y confiaron en nuestro proyecto. A través
                            de esta alianza, pudimos llevar a cabo una competencia memorable que fortaleció nuestra comunidad y nos animó a continuar con nuestro empeño, a pesar
                            de que Sica Games se desfragmentó al poco tiempo después de la finalización de la liga, guardamos gratitud por su valioso patrocinio.
                        </p>
                    </div>

                    <div class="my-8">
                        <h3 class="block mt-8 mb-4 text-xl sm:text-2xl font-black">Season 2 (2022)</h3>

                        <p class="block my-4 text-justify text-lg">
                            En nuestra segunda temporada, nos enfrentamos a nuevos desafíos con el respaldo de nuevo del equipo de Night Knight, aunque en menor medida,
                            tuvimos cambios en la administración. Durante esta temporada, contamos con la ayuda de dos equipos: BlackHole y ZeroPain. Inicialmente, BlackHole se
                            unió como socio para ayudarnos a organizar y llevar la liga. Sin embargo, debido a varias razones administrativas, BlackHole y lo poco que qedaba de
                            Night Knight tuvierón que abandonar la administración de la liga en mitad de la temporada. Afortunadamente, ZeroPain se sumó a nuestra causa y nos brindó
                            su apoyo para asegurar la continuidad de la competencia. Aunque no encontramos sponsors para esta temporada, no permitimos que eso afectara nuestra
                            determinación y perseveramos en nuestra misión de proporcionar una experiencia gratificante para los jugadores de Rainbow Six Siege.
                        </p>
                    </div>

                    <div class="my-8">
                        <h3 class="block mt-8 mb-4 text-xl sm:text-2xl font-black">Season 3 (Actual)</h3>

                        <p class="block my-4 text-justify text-lg">
                            Actualmente nos encontramos en la tercera temporada de nuestra liga, y estamos emocionados por las oportunidades y desafíos que nos aguardan. Para esta
                            temporada, nos hemos fijado metas ambiciosas que deseamos alcanzar antes de su conclusión. Nuestro principal objetivo es brindar una experiencia agradable
                            y emocionante para todos los públicos involucrados. Queremos que cada jugador que participe en nuestra liga se sienta valorado y disfrute de un entorno
                            competitivo justo y enriquecedor.
                        </p>

                        <p class="block my-4 text-justify text-lg">
                            A medida que avancemos en esta temporada, nos esforzaremos por crear un ambiente inclusivo y respetuoso, donde los jugadores puedan desarrollar sus
                            habilidades y formar conexiones duraderas con otros entusiastas de Rainbow Six Siege. Estamos comprometidos con el compañerismo y el fair play, y nos
                            aseguramos de que todas las interacciones entre los participantes se basen en el respeto mutuo y la deportividad.
                        </p>

                        <p class="block my-4 text-justify text-lg">
                            Además, hemos establecido objetivos específicos que nos gustaría cumplir antes de finalizar la temporada. Estos pueden incluir mejorar la organización de
                            los partidos, ofrecer una experiencia de transmisión de alta calidad para aquellos que deseen seguir los enfrentamientos en línea y trabajar en estrecha
                            colaboración con la comunidad para implementar sus sugerencias y comentarios en futuras temporadas.
                        </p>

                        <p class="block my-4 text-justify text-lg">
                            En resumen, en esta tercera temporada de nuestra liga, nos esforzamos por superar las expectativas y brindar a los jugadores una experiencia inolvidable.
                            Valoramos el apoyo y la participación de nuestra comunidad, y nos complace compartir este emocionante viaje con todos los amantes de Rainbow Six Siege.
                        </p>

                        <p class="block my-4 text-justify text-lg">
                            ¡Únete a nosotros y sé parte de esta emocionante temporada de competencia y diversión!
                        </p>
                    </div>
                </div>
            </div>
        </main>

        @include("layouts.footer", ["isIndex" => false])
    </body>
</html>
