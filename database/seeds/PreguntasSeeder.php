<?php

use Illuminate\Database\Seeder;

class PreguntasSeeder extends Seeder
{
    /**
     * Este archivo va ligado con el de ClasificacionesSeeder.php
    *
     * @return void
     */
    public function run()
    {
        //
        DB::table('preguntas')->insert([
            'idClasificacion' => 1,
            'name' => "Comprender a la perfección la tabla periódica de los elementos, desde sus primeras versiones y su evolución, hasta el número atómico, electrones, propiedades químicas, combinaciones y reacciones  de cada uno de los elementos químicos."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 1,
            'name' => "Utilizar métodos científicos para descubrir un nuevo elemento químico que impacte en el área de la salud a nivel global."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 1,
            'name' => "Comprender con suma facilidad la lectura de publicaciones, investigaciones o libros acerca del cambio climático y las razones por las cuales algunas áreas del planeta tienen menos afectación que otras."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 1,
            'name' => "Exponer con lujo de detalle y  desde una perspectiva totalmente científica, la forma en la que están constituidas las vacunas, su creación, su evolución y desarrollo,  su función en los organismos, y las ventajas o desventajas que se puedan presentar."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 1,
            'name' => "Comprender la relación directa que tiene en las personas la ingesta de nutrientes específicos, y la manera en la que su cuerpo se desempeña física y mentalmente, contemplando las posibilidades de que su organismo acepte o rechace dichos nutrientes, y que conozca las razones por las que esto sucedería. "
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 1,
            'name' => "Conocer y comprender todos los pasos del método científico que implica desarrollar de forma segura una vacuna nueva para tratar una enfermedad humana que no es nueva, pero que ha mutado con el tiempo."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 1,
            'name' => "Poder explicar de una forma muy sencilla la manera en la que se comportan los diferentes líquidos de uso cotidiano, explicando por ejemplo, qué productos de limpieza del hogar se pueden mezclar y cuáles implicarían un riesgo o inefectividad."
        ]);

        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 2,
            'name' => "Diseñar los elementos visuales para una empresa nueva: su paleta de colores, su logotipo, su papelería institucional y demás."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 2,
            'name' => "Aprender a crear y dibujar mandalas, utilizando diferentes estilos o técnicas, para lograr plasmarlas tanto en dibujos sencillos a lápiz, como con acuarelas, bricollage, óleo, entre otras."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 2,
            'name' => "Adquirir las técnicas y la destreza para decorar a mano, pero con mucho detalle, precisión y creatividad, pasteles personalizados que impliquen un gran reto."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 2,
            'name' => "Decorar y ambientar espacios de una forma creativa y agradable, ya sea para hogares u oficinas, o para proyectos específicos como aparadores de tiendas, showrooms o eventos especiales."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 2,
            'name' => " Entender y poder apreciar por igual el valor que tienen los diferentes géneros de creaciones cinematográficas, tomando en cuenta aspectos como su fotografía, actuaciones, guión, efectos o vestuario, considerando las distintas épocas en las que fueron creadas."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 2,
            'name' => "Aprender a armar o construir sets de figuras de legos, paisajes, dioramas o maquetas a escala."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 2,
            'name' => "Elaborar velas y lámparas artesanales, complementando su decoración con diferentes materiales como cristal, yeso, madera, cemento, flores o pintura."
        ]);

        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 3,
            'name' => "Poder escribir una palabra en un grano de arroz, o pintar un retrato a partir de una foto, en la superficie de una moneda."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 3,
            'name' => "Pintar una pared de dos colores, dividiéndola justo a la mitad, dibujando una linea recta de extremo a extremo con un lápiz y sin ninguna otra herramienta de medición o precisión."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 3,
            'name' => "Tener una precisión envidiable para extraer astillas de la piel con pequeñas pinzas, o jugar al \"operando\" sin que tengas rival digno."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 3,
            'name' => "Soldar con muy buen nivel de detalle piezas pequeñas y delicadas, como los circuitos de un chip electrónico o memoria interna, siendo muy limpio y no tocando ni salpicando con soldadura o pegamento al resto de los componentes."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 3,
            'name' => "Jugar ping pong de mesa nivel experto, que sea muy raro que falles los tiros o que no respondas acertadamente los de tu oponente."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 3,
            'name' => "Desarmar un aparato electrónico muy pequeño para cambiarle una batería interna con la ayuda de pinzas muy pequeñas, y rearmarlo correctamente tras ponerle la batería, es decir, que vuelva a funcionar."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 3,
            'name' => "Utilizar una lupa para trabajar con detalle y precisión en la decoración de una corona de pedrería, con piezas de tamaño muy pequeño y bordes irregulares."
        ]);

        //

        DB::table('preguntas')->insert([
           	'idClasificacion' => 4,
            'name' => "Planear y designar las funciones y tareas a un equipo de colaboradores de manera equitativa, logrando que todos queden satisfechos con la asignación de las cargas de trabajo."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 4,
            'name' => "Tener la facilidad de detectar o anticiparte a un error importante que se pueda estar cometiendo en un plan de trabajo que no fue elaborado por ti, pero que te corresponde dirigir."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 4,
            'name' => "Ser quien toma la decisión de mantener o separar a alguien de un equipo deportivo, tras analizar y comparar una falta que le acusan de haber cometido, y el reglamento al que se apegan."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 4,
            'name' => "Pensar, decidir y analizar el impacto (positivo o negativo) que tiene cada una de las decisiones que tomas cuando estás jugando ajedrez."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 4,
            'name' => "Detectar la desmotivación de un equipo de trabajo, analizar y poner en práctica las diferentes estrategias que se te ocurren para que su ánimo y productividad se recuperen."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 4,
            'name' => "Lograr inspirar a un grupo de colaboradores de una fábrica de zapatos elaborados a mano, para que implementen con gusto y optimismo una nueva modalidad de producción con equipo automatizado, sin que se sientan desplazados o amenazados. "
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 4,
            'name' => "Reconocer hábilmente los talentos y fortalezas de un grupo de trabajo con la finalidad de asignarles las tareas, metas o responsabilidades más adecuadas de acuerdo con su perfil."
        ]);

        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 5,
            'name' => "Crear figuras de origami de un gran nivel de complejidad, viendo un tutorial para su elaboración en una sola ocasión."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 5,
            'name' => "Diseñar plantillas detalladas para elaborar máscaras u otros objetos ensamblables tridimensionales o con variedad de perspectivas."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 5,
            'name' => "Jugar por primera vez un videojuego con laberintos, cuyos gráficos incluyan varias dimensiones y perspectivas, y lograr avanzar de niveles sin mayor dificultad."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 5,
            'name' => "Hacer sugerencias atinadas acerca de la forma óptima de utilizar los espacios para aprovechar lo mejor posible el terreno para construir edificio de departamentos."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 5,
            'name' => "Visitar un parque de atracciones de grandes dimensiones por segunda vez, y no necesitar el mapa para saber cómo llegar a los lugares que te interesan."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 5,
            'name' => "Detectar con tan solo un vistazo si el acomodo de los muebles de un lugar que te es muy familiar, ha sido cambiado."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 5,
            'name' => "Encontrar la zona del estadio en la que se ubican tus asientos sin ayuda, tomando como referencia la numeración del primer asiento que viste al ingresar."
        ]);

        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 6,
            'name' => "Aprender a armar todas las partes y hacer funcionar una pista de carreras para coches miniatura de colección."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 6,
            'name' => "Manejar y poder dar mantenimiento a equipo de construcción, como retroexcavadoras o aplanadoras."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 6,
            'name' => "Construir y hacerle mejoras a una bicicleta completamente desarmada, viendo tutoriales en internet."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 6,
            'name' => "Comprender con facilidad y disfrutar la lectura de artículos, publicaciones o sitios web sobre temas de motores o novedades de la ingeniería mecánica moderna."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 6,
            'name' => "Adquirir los conocimientos necesarios en electricidad, plomería o mecánica, para hacer trabajos, reparar, o dar mantenimiento a diferentes aparatos caseros, máquinas o herramientas de uso común (boilers, estufas, licuadoras, llaves de paso, etc.)"
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 6,
            'name' => "Inventar pequeñas máquinas para diversas tareas caseras que utilicen motores eléctricos, como parte de las actividades de un club o taller de aficionados."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 6,
            'name' => "Comprender a través de un curso y  sin problema la forma en la que se combinan conocimientos de electrónica, mecánica, electricidad y tecnología en general para la fabricación de automóviles y vehículos."
        ]);

        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 7,
            'name' => "Conocer sobre la historia y orígenes de los distintos estilos musicales que predominan en las diferentes partes del mundo."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 7,
            'name' => "Tomar clases para aprender a tocar un instrumento que te guste, y a partir de ello, aplicar dichos conocimientos para dominar por ti mismo la ejecución de otros instrumentos diferentes."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 7,
            'name' => "Lograr que una canción suene coordinada, armónica y todo haga buen complemento, aunque la estén tocando con instrumentos diferentes a los de la versión original, o incluso hasta hayan modificado el estilo."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 7,
            'name' => "Adquirir los conocimientos necesarios para poder leer y escribir música, así como también crear composiciones musicales con todas sus notas, tiempos, cambios y letras escritas adecuadamente."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 7,
            'name' => "Ser capaz de escuchar una melodía, identificar las notas de oído y poder transcribirlas en partituras."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 7,
            'name' => "Ser el líder o frontman de una banda musical que interprete canciones propias."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 7,
            'name' => "Identificar con mucha rapidez el título e intérprete de las canciones que escuchas mientras ves una película o show."
        ]);

        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 8,
            'name' => "Orientar a alguien que desarrolla apps para dispositivos electrónicos, para lograr que diseñe un juego atractivo que implique razonamiento numérico, o que para ganar, deban resolver secuencias lógicas o cálculos mentales."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 8,
            'name' => "Diseñar las pistas que se utilizarán en una feria de tu escuela, para la actividad de \"Bùsqueda del tesoro\", donde los equipos deban resolver ecuaciones y problemas geométricos para ubicar el lugar donde se encuentra el premio."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 8,
            'name' => "Que las clases de matemáticas, álgebra, geometría, cáculo y trigonometría sean tus favoritas."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 8,
            'name' => "Lograr que tu salón se gane muy seguido el premio grupal de matemáticas, gracias al apoyo extra que les brindas al ayudarles a comprender las lecciones que no entienden."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 8,
            'name' => "Saber seleccionar fórmulas y procedimentos de manera muy acertada para solucionar problemas que tengan una aplicación práctica, por ejemplo, las finanzas del hogar."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 8,
            'name' => "Identificar sin mayor problema cuando alguien ha elegido incorrectamente la fórmula o está aplicando de manera incorrecta un procedimiento para resolver un problema en una tarea de matemáticas."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 8,
            'name' => "Apoyar a un amigo que es maestro de primaria, para que sus alumnos entiendan la practicidad y el sinfín de aplicaciones que tienen las matemáticas, y por ende, obtengan mejores notas académicas."
        ]);

        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 9,
            'name' => "Aprender a utilizar los sistemas electrónicos comerciales para llevar de forma correcta y ordenada el inventario del almacén de una distribuidora de productos de abarrotes."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 9,
            'name' => "Enlistar y organizar todos requerimientos, proveedores, precios, condiciones y tendencias para eventos sociales (bodas, aniversarios, conferencias, etc.), y mostrarlas a los posibles clientes de manera que le sea sencillo hacer comparativos y tomar decisiones para llevar a cabo su evento."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 9,
            'name' => "Lograr que tiendas pequeñas de artesanías y regalos organicen y administren su inventario, su catálogo de productos y entregas a domicilio, con un método muy práctico diseñado por ti."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 9,
            'name' => "Sugerir acertadamente modificaciones en la logística de los departamentos de atención al cliente, para que las filas de un centro de cobro de servicios no hagan esperar demasiado tiempo a los usuarios."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 9,
            'name' => "Planear un club de lectura en tu escuela, que se lleve a cabo de forma sistematizada, permitiendo saber con claridad los títulos que ya han sido analizados, qué libro ha leído y entregado (o debe)  cada alumno, así como el cumplimiento de entrega de reportes y clasificación de sugerencias."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 9,
            'name' => "Perfeccionar el proceso que se utiliza en un centro de salud para la asignación de citas, manejo de expedientes, registro de vacunación, y seguimiento de pacientes, logrando que todo sea mas rápido, eficiente y sencillo."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 9,
            'name' => "Entender cómo registrar, administrar, planear y operar con la información contable/financiera de un corporativo (por ejemplo, ingresos, egresos, inventarios, nóminas, etc.)."
        ]);

        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 10,
            'name' => "Ser parte de un equipo que tiene como tarea introducir y posicionar en el mercado un nueva cadena de abarrotes local, a través de redes sociales y medios locales, brindando ideas y sugerencias valiosas."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 10,
            'name' => "Aparecer en transmisiones por redes sociales o medios electrónicos, explicando los pros y los contras de las diferentes escuelas públicas y privadas que ofrecen una misma carrera, orientándolos a tener preferencia por alguna en particular."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 10,
            'name' => "Hablar y hacer una conexión muy emotiva con tus compañeros de generación, para convencerlos de realizar alguna acción en pro de la sociedad de manera voluntaria y lograr que todos se involucren activamente."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 10,
            'name' => "Estar debidamente preparado para debatir o argumentar sobre alguna causa que te apasione, y sostenerla frente a personas o grupos de personas que sepas que no comprenden bien la situación, o que  opinan lo contrario."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 10,
            'name' => "Conocer a profundidad a tus compañeros de grupo, como para ayudar a algún maestro de tu escuela con sugerencias para que se conecte mejor con ellos en su clase."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 10,
            'name' => "Apoyar a algún grupo que esté discutiendo un tema, a considerar información, revisar puntos faltantes o a ampliar su información haciéndoles ver que si lo toman en cuenta, sus puntos de vista podrían cambiar."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 10,
            'name' => "Tener la facilidad para obtener y mantener la atención de las personas gracias a tu diálogo, presencia y seguridad que demuestras, imitando el comportamiento y etiqueta de grandes personajes reales o ficticios a los que admiras."
        ]);

        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 11,
            'name' => "Escuchar atenta y activamente a alguien, permitirle que se explaye y desahogue, sin emitir juicios, o sentir la necesidad de decirle qué hacer, cómo ser, o en qué se equivocó."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 11,
            'name' => "Ser capaz de reconocer cuando otra persona tiene la razón o argumentos mejores con los que tendrías que aceptar que te has equivocado, o que está frente a ti la oportunidad de aprender algo nuevo y desde otra perspectiva."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 11,
            'name' => "Distinguir las fortalezas, virtudes, logros y aciertos de alguna persona, aunque sea completamente diferente a tus estándares, creencias o talentos."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 11,
            'name' => "Actuar como mediador de un conflicto en que que no tienes nada que ver, logrando la conciliación de los involucrados siendo completamente objetivo y neutral, es decir, sin engancharte emocionalmente o generar un sesgo."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 11,
            'name' => "Tener la facilidad para concebir que personas cercanas a ti, tengan interiorizadas diferentes formas de comprender y ver la vida y al mundo, así como la posibilidad de comprender que así como su visión, sus sentimientos, esperanzas y objetivos personales pueden ser muy particulares y personales, parecidos, o completamente distintos a los tuyos."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 11,
            'name' => "Funcionar como si tuvieras un sensor para detectar cuando una persona está pasando por alguna crisis o mal momento en su vida, aunque aparentemente no exprese nada, o hasta trate de ocultarlo."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 11,
            'name' => "Confiar en tu intuición y tener la capacidad para detectar los mejores momentos para intervenir dando algún consejo, iniciar una charla, o cuestionar a alguien sobre algún tema complicado, sin que se sienta como inoportuno, genere presión o incomodidad."
        ]);
        
        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 12,
            'name' => "Tener bien identificados a los profesores, conferencistas o conductores de programas que se preparan profundamente para hablar de algún tema, que se nota su pasión, su orden, el conocimiento del tema y la claridad con la que te presenta sus ideas."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 12,
            'name' => "Ver una película o leer un libro, y comprender sin mayor complicación a sus personajes, los roles, la relación entre ellos, o los sucesos acontecidos, poder explicar todo eso de forma resumida a alguien más y que te comprenda."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 12,
            'name' => "Leer un periódico, artículo o redacción cualquiera, y tener la facilidad para detectar de forma inmediata algún error de redacción, ortográfico, o falla en la secuencia de los párrafos."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 12,
            'name' => "Apoyar al jefe de grupo en la redacción y edición de un comunicado grupal que debe presentar frente a la sociedad de alumnos."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 12,
            'name' => "Asistir a una reunión escolar informativa donde les explicarán los nuevos requisitos de inscripción y los métodos de evaluación, y poder explicarle con tus propias palabras y mucha claridad los temas revisados a tus padres o a los compañeros que no pudieron asistir."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 12,
            'name' => "Comprender claramente y sin ninguna dificultad las instrucciones y preguntas de un test o encuesta."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 12,
            'name' => "Poner orden con suma facilidad a rompecabezas escritos o de texto, identificando sin mayor problema las oraciones, los elementos de un párrafo, título o subtítulos.  O tener mucha facilidad para resolver sopas de letras o crucigramas."
        ]);

        // INTERÉSES

        DB::table('preguntas')->insert([
            'idClasificacion' => 13,
            'name' => "Asesorar a un grupo de teatro en el diseño y elaboración de la escenografía para una obra con la que van a concursar."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 13,
            'name' => "Asistir a tus museos favoritos cada vez que se monta una nueva exposición de arte, sin importar el estilo, la técnica o los artistas que se expongan."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 13,
            'name' => "Adquirir técnicas y tips para elaborar artículos artesanales con materiales como latón, piel, vidrio, cerámica, etcétera, intentando adaptar los estilos de creación tradicionales para obtener piezas innovadoras."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 13,
            'name' => "Participar en un intercambio estudiantil para trabajar durante un verano en una galería famosa, como asistente de algún pintor al que admires."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 13,
            'name' => "Conocer acerca de estilos de arquitectura, pintura o escultura a través de lecturas, tours virtuales, videos documentales, o incluso programas de simulación que te permitan crear obras virtuales."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 13,
            'name' => "Volverte experto en utilizar paquetería o programas y aplicaciones dedicadas a facilitar el diseño de planos arquitectónicos, renders o diseños digitales como logotipos."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 13,
            'name' => "Trabajar con un grupo de personas que se dediquen a impartir talleres de pintura o manualidades a jóvenes que viven en comunidades alejadas, inseguras o complicadas."
        ]);

        //

         DB::table('preguntas')->insert([
            'idClasificacion' => 14,
            'name' => "Estar actualizado sobre los descubrimientos más recientes acerca del comportamiento de los virus o las enfermedades autoinmunes, asistiendo a conferencias, seminarios o webinars."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 14,
            'name' => "Desempeñarte junto a biólogos expertos en una reserva marina, con el objetivo de mantener bien cuidadas a las especies que ahí habitan, así como asistir sus procesos de reproducción y promover su protección en los ambientes naturales en los que habitan originalmente."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 14,
            'name' => "Entender la forma en la que se reproducen las bacterias, sus diferencias y similitudes con los virus, y las aplicaciones médicas que pueden tener en pro de la salud de los organismos."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 14,
            'name' => "Conocer sobre los inicios, experimentación, desarrollo, aciertos, errores y modernización de las cirugías e intervenciones quirúrgicas a través de la historia de la humanidad."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 14,
            'name' => "Encontrar sumamente agradables y sentir mucha curiosidad en las clases de biología, ciencias naturales, anatomía o ecología. "
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 14,
            'name' => "Comprender los métodos de prevención, contención, manejo y tratamiento de distintos tipos de epidemias."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 14,
            'name' => "Investigar sobre los efectos que tiene en los organismos el consumo excesivo de plantas, frutos o hierbas, así como el impacto que el uso excesivo de esos recursos naturales tiene en los ecosistemas."
        ]);

         //

         DB::table('preguntas')->insert([
            'idClasificacion' => 15,
            'name' => "Adentrarte en el conocimiento de todas las ramas de las matemáticas, dominarlas y saber explicarlas a los demás como todo un experto."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 15,
            'name' => "Saber emplear las fórmulas, métodos y modelos matemáticos para resolver situaciones tanto de la vida ordinaria, como asuntos complejos en construcciones, proyecciones estadísticas, o algoritmos para programación de sistemas de cómputo."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 15,
            'name' => "Crear sudokus, problemas o retos numéricos para ser utilizados en una aplicación de pasatiempos matemáticos para dispositivos electrónicos."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 15,
            'name' => "Entender las implicaciones que tiene para un profesional en ingeniería, hidráulica o arquitectura el realizar de manera adecuada la aplicación de cálculos y prospectaciones en la construcción de sus obras y proyectos."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 15,
            'name' => "Fundar un club o grupo escolar supervisado por el profesor de matemáticas, donde puedas alentar, orientar y enseñar a tus compañeros que van retrasados en la materia, demostrándoles la parte divertida y práctica de la misma."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 15,
            'name' => "Ganar un concurso escolar donde las matemáticas se apliquen en la resolución de retos numéricos, sudokus, o acertijos en tiempo récord."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 15,
            'name' => "Utilizar sitios web, plataformas o aplicaciones que sirvan para jugar o realizar actividades utilizando de forma implícita las matemáticas.  "
        ]);

         //

         DB::table('preguntas')->insert([
            'idClasificacion' => 16,
            'name' => "Vivir en zonas agrícolas, pueblos o rancherías, disfrutando de realizar labores propias del lugar, como cuidar y alimentar ganado, supervisar el crecimiento de alguna plantación o verificar la calidad de alguna cosecha."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 16,
            'name' => "Explorar en equipo zonas boscosas, rocosas o aquellas en las que haya evidencia de que se puedan encontrar minas, mantos petroleros o brotes de agua."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 16,
            'name' => "Formar un club de senderismo, o grupo de personas a las que les apasiona la exploración de parajes y lugares naturales, como bosques, montañas, desiertos, o la vida del campo, y asegurarse de que dichos lugares no sean intervenidos o contaminados por los visitantes."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 16,
            'name' => "Que tu trabajo implique recorrer a pie grandes regiones rurales, con la finalidad de verificar que las obligaciones básicas del gobierno se estén cumpliendo, tanto para las personas como con el entorno medioambiental en general."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 16,
            'name' => "Ser miembro activo en campañas de reforestación, rescate de parques y jardines en colonias o asentamientos rurales, o de limpieza de zonas desatendidas."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 16,
            'name' => "Visitar e investigar islas desiertas, remotas o buscar algunas desconocidas en el océano."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 16,
            'name' => "Pasar una temporada en un barco pesquero en altamar, apoyando en la investigación del comportamiento y alimentación de ciertas especies marinas."
        ]);

         //

         DB::table('preguntas')->insert([
            'idClasificacion' => 17,
            'name' => "Pertenecer a grupos de voluntarios interprofesionales, colaborando en la observación y  recolección de datos y estadísticas, para publicar investigaciones y hacer conciencia sobre la imperante necesidad de cuidar al planeta."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 17,
            'name' => "Aplicar todos los métodos de análisis, experiementación y estrictos procedimientos científicos que se llevan a cabo para elaborar un medicamento eficaz contra la gastritis u otros problemas del sistema digestivo."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 17,
            'name' => "Investigar en artículos y publicaciones sobre las conclusiones a las que han llegado profesionales acerca del uso irresponsable o desmedido de la automedicación, y los efectos que esta tiene en los seres vivos."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 17,
            'name' => "Participar junto a un grupo de científicos que se dedican a observar, analizar e informar acerca de los índices de contaminación en ciudades pequeñas que cuentan con industria agrícola muy cercana, y las consecuencias o efectos secundarios de tales datos."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 17,
            'name' => "Ir al lanzamiento o exposición donde puedas apreciar novedades en aparatos electrónicos, máquinas y herramientas con inteligencia artificial, que tengan un uso importante en labores de investigación de ciencias como la médica, química o biológica."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 17,
            'name' => "Aprender sobre métodos de investigación alternativos o no tradicionales aplicados a las ciencias naturales."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 17,
            'name' => "Conocer cómo la tecnología, la inteligencia artificial o robótica pueden ser utilizadas en la investigación y desarrollo de tratamientos para padecimientos del sistema nervioso o motriz de las personas."
        ]);

         //

         DB::table('preguntas')->insert([
            'idClasificacion' => 18,
            'name' => "Conocer el procedimiento para realizar de forma correcta todos los trámites que una persona física o moral debe hacer para darse de alta, suspensión o baja en el SAT (Hacienda)."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 18,
            'name' => "Conocer los conceptos, saber leer, analizar e interpretar las noticias y publicaciones acerca del comportamiento de los mercados financieros nacionales y mundiales, así como las posibilidades de invertir en acciones de la bolsa de valores."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 18,
            'name' => "Hacer cálculos para costear la inversión necesaria y calcular las ganancias de una venta de kermess de la sociedad de alumnos, cuya finalidad sea recaudar fondos para la graduación."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 18,
            'name' => "Elaborar los informes o balances de la situación financiera de una empresa de organización de eventos sociales como bodas, bautizos o graduaciones."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 18,
            'name' => "Ayudar en casa para establecer un presupuesto de gastos familiares, con la finalidad de ahorrar para unas vacaciones en el extranjero, y llevar estricto control con todos los involucrados, para asegurarte de que tanto los gastos como los ahorros correspondan a lo planeado."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 18,
            'name' => "Cursar un taller, actualización o sesiones prácticas para comprender las leyes y regulaciones fiscales (impuestos) que han ido cambiando,  con la finalidad de aplicarlo en las empresas a las que les apoyas con su contabilidad."
        ]);
         DB::table('preguntas')->insert([
            'idClasificacion' => 18,
            'name' => "Estar enterado y comprender temas generales de economía, como la inflación, la deuda externa o los tratados de libre comercio, gracias a la participación en conferencias o actualizaciones virtuales."
        ]);

         //

		DB::table('preguntas')->insert([
            'idClasificacion' => 19,
            'name' => "Conocer las grutas, cuevas, cenotes o ríos subterrános más famosos del mundo, al igual que visitar las exposiciones más importantes de rocas y fragmentos de cuerpos provenientes del espacio,o del fondo del mar."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 19,
            'name' => "Atender una conferencia o cátedra cuyo tema sea la explicación de las causas por las que se forman el subsuelo, los cerros o las cordilleras, las características de la corteza terrestre, y las predicciones sobre los próximos fenómenos geofísicos que se esperan para el planeta."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 19,
            'name' => "Conocer sobre las causas, tipos y posibles consecuencias de los terremotos, ya sea a través de la lectura, ver documentales, o revisar sitios web."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 19,
            'name' => "Ver un programa de concursos en la televisión, y acertar a todas las preguntas que tengan que ver con los descubrimientos científicos sobre la composición, función y comportamiento del núcleo interior de la Tierra."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 19,
            'name' => "Estar en una exposición de diferentes tipos de fósiles, y saber diferenciar sin problema los marinos de los terrestres, o los reales de las falsificaciones."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 19,
            'name' => "Comprender la forma en la han sucedido y siguen sucediendo los fenómenos de erosión de la tierra, específicamente en las zonas marítimas y sus costas."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 19,
            'name' => "Dedicarte de manera profesional a la localización de vetas importantes, yacimientos minerales, petróleo o piedras preciosas."
        ]);

        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 20,
            'name' => "Conocer a fondo la vida, obra e inspiración de grandes escritores o personajes famosos de la literatura, ya sea a través de sus biografías oficiales, o de películas y documentales."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 20,
            'name' => "Apoyar como corrector o editor de estilo, ortografía o redacción de contenido para redes sociales y página web de noticias."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 20,
            'name' => "Ser parte del jurado calificador que eligirá los mejores guiones para producirlos en un cortometraje."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 20,
            'name' => "Ser un reconocido guionista para la industria del cine y teatro."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 20,
            'name' => "Fundar un club de lectura en el área donde vives, con la finalidad de acercar a los niños y jóvenes al hábito de leer y comenzar a escribir cuentos cortos."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 20,
            'name' => "Participar en concursos de ortografía y redacción y poesía a nivel nacional."
        ]);         
        DB::table('preguntas')->insert([
            'idClasificacion' => 20,
            'name' => "Ser parte del equipo de escritores, como columnista, en una revista nacional de gran tradición, con tiraje impreso y digital."
        ]);

        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 21,
            'name' => "Saber sobre la creación de los primeros motores, y el nivel de evolución y variantes que han tenido a través de la historia, hasta llegar a los mas modernos y novedosos, o a las versiones híbridas o eléctricas."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 21,
            'name' => "Ver el lanzamiento de una línea nueva de maquinas y herramientas de última tecnología para realizar creaciones y reparaciones de carpintería creativa."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 21,
            'name' => "Poder desarmar una motocicleta para comprender su funcionamiento, y volverla a armar sin ningún inconveniente."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 21,
            'name' => "Comprender los principios básicos con los que funcionan los diferentes aparatos electrodomésticos, para hacerte hábil en darles mantenimiento o efectuarles alguna reparación."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 21,
            'name' => "Asistir a un curso-taller para aprender a utilizar herramientas novedosas para diagnosticar por computadora fallas automotrices ya sean mecánicas o eléctricas, y poder realizar las reparaciones, modificaciones o mejoras correspondientes."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 21,
            'name' => "Leer para aprender los principios de la aerodinámica, y comprender por ende la manera en la que funcionan los instrumentos de aeronavegación."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 21,
            'name' => "Artillería militar  Observar diversos aparatos, artillería militar, maquinaria o herramienta de gran nivel, y comprender los principios mecánicos que están implícitos en su diseño."
        ]);

        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 22,
            'name' => "Ser parte de un conjunto o proyecto musical, cuyo propósito sea el rescate y reconocimiento de música indie o alternativa."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 22,
            'name' => "Audicionar entre amigos para formar una banda que comparta, además de la ejecución de piezas de diversos géneros, el estudio particular de la música en sí, y experimentar hasta encontrar un sonido propio como banda."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 22,
            'name' => "Investigar sobre las diferentes corrientes de escuelas musicales, maestros, o metodologías de enseñanza musical a nivel nacional, para elegir aquella escuela que te parezca más efectiva de acuerdo con tus  objetivos de desarrollo musical y el instrumento de tu agrado."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 22,
            'name' => "Producir un programa con temas como la historia de la música, sus principales representantes, su historia y evolución, para ser transmitido a través de redes sociales y segmentos musicales en programas de televisión."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 22,
            'name' => "Disfrutar el ir a todo tipo de conciertos, charlas o presentaciones de músicos tanto clásicos como actuales, de tal manera que te emocione por igual presenciar a una sinfónica, que a un grupo de música popular."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 22,
            'name' => "Saber cómo utilizar los avances tecnológicos y electrónicos en la producción musical actual, así como las principales plataformas digitales para su distribución y difusión."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 22,
            'name' => "Desempeñarte en alguna empresa que se dedique a la distribución  y venta de contenidos y producciones musicales, logrando explicar a los posibles compradores el valor artístico que tiene cada género y cada producción, así como buscando artistas que necesiten apoyo para realizar sus producciones."
        ]);

        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 23,
            'name' => "Ser parte de un comité electoral, que proponga sistemas novedosos para la captura, cómputo, manejo de información y reporte de los resultados de los votos con rapidez y alta confiabilidad."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 23,
            'name' => "Colaborar en el diseño de una aplicación para celulares, con la finalidad de que las amas de casa logren llevar orden y control en cuanto al pago de las cuentas del hogar, planeación de las comidas, y cruzarlo con el inventario de despensa para saber con lo que cuentan, lo que hay que resurtir, o sustituir."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 23,
            'name' => "Saber y comprender la forma en la que se recolecta, maneja, organiza y utiliza la información obtenida en un censo de población o encuesta nacional.  "
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 23,
            'name' => "Conocer la manera en la que un gran corporativo internacional maneja y organiza toda la información importante referente a sus colaboradores: sus expedientes generales, sus planes de capacitación, su cumplimiento, la administración de sus prestaciones, el pago de sus nóminas y su seguimiento general."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 23,
            'name' => "Brindar ayuda en un consultorio, diseñando un sistema que permita tener mejor organizados los expedientes médicos de los pacientes, así como llevar fácilmente el control de citas y su seguimiento."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 23,
            'name' => "Concursar, con altas posibilidades de ganar, en una competencia que premie a la mejor actualización del diseño de un sistema para organizar eficientemente los registros de nacimiento y defunción de toda la población a nivel nacional."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 23,
            'name' => "Catalogar, costear, actualizar y reubicar físicamente los productos que se venden en la cooperativa escolar, con la finalidad tanto de que se aproveche mejor el espacio, como de evitar las mermas por falta de flujo."
        ]);

        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 24,
            'name' => "Desempeñarte como conductor de un podcast o programa de radio deportivo que cuenta con patrocinadores, por lo tanto, parte de tu trabajo es hacer recomendaciones positivas sobre los productos de tu patrocinadores."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 24,
            'name' => "Ser el representante y vocero de la sociedad de vecinos del lugar donde vives, para realizar gestiones con las autoridades y mantener informados e involucrados a los habitantes de la colonia."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 24,
            'name' => "Ser parte de grupos cuya finalidad sea el prepararse y adiestrarse en el desarrollo y dominio de técnicas y talentos que les permitan participar en debates, mesas de análisis, discusiones o polémicas."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 24,
            'name' => "Hacerte cargo de labores de mercadeo, publicidad y venta de tickets para el festival de fin de cursos de una academia de danza."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 24,
            'name' => "Trabajar dirigiendo a un grupo de personas que brindan servicio al cliente, instruyéndolas acerca de las mejores formas de lograr un cierre de ventas importante."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 24,
            'name' => "Estar al tanto de técnicas y estrategias para captar la atención de las personas, y lograr persuadirlas para que elijan inscribir a sus hijos en un colegio en lugar de otro."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 24,
            'name' => "Saber cómo encontrar el punto con el que la gente se emociona cuando les estás invitando a formar parte de algo, y que se unan con gusto y motivación."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 24,
            'name' => ""
        ]);

        //

        DB::table('preguntas')->insert([
            'idClasificacion' => 25,
            'name' => "Realizar actividades para la recaudación de fondos en tu ciudad, y que éstos sean utilizados en pro de personas viviendo en albergues."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 25,
            'name' => "Participar con un equipo que brinda apoyo y orientación a jóvenes que están recluídos por haber cometido algún delito, buscando readaptarlos armónica y productivamente a la sociedad una vez cumplida su condena."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 25,
            'name' => "Organizar a los vecinos de tu colonia, para gestionar entre todos el mejoramiento de los parques y canchas locales, con la finalidad de conseguir que el lugar se mantenga limpio, seguro y alumbrado, y que ahí se realicen actividades comunales, como clases para ejercitarse o deporte para los niños."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 25,
            'name' => "Conocer las razones por las cuáles una persona que estimas está pasando por un mal momento, y hacer todo lo que está en tus posibilidades para alentarlo."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 25,
            'name' => "Formar parte o ayudar de manera voluntaria a establecer en tu comunidad grupos de apoyo o autoayuda en temas como el abuso de alcohol, drogas, otras adicciones, o maltrato familiar."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 25,
            'name' => "Atender y orientar a personas que están pasando por una situación de divorcio, con la finalidad de que tengan claros los procesos legales que deben seguir, así como brindar apoyo con el manejo del divorcio con los hijos."
        ]);
        DB::table('preguntas')->insert([
            'idClasificacion' => 25,
            'name' => "Abogar por las comunidades de trabajadores temporales del campo, para que gocen de sus derechos y reciban apoyo y beneficios para el estudio de sus hijos."
        ]);

        //
    }
}
