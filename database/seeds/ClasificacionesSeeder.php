<?php

use Illuminate\Database\Seeder;

/*
    Aquí están las aptitudes y los intereses
*/

class ClasificacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //
        DB::table('clasificaciones')->insert([
            'id' => 1,
            'name' => "Abstracta o cientifica",
            'image' => "abstracta o cientifica.png",
            'descrip' => "Tienes una gran capacidad para utilizar el pensamiento y razonamiento de forma analítica, para la comprensión y resolución objetiva de cualquier situación, o incluso su predicción, basado en la posibilidad de observar el panorama, procesar la información obtenida,  puedes llegar a conclusiones sustentadas en estos procesos. Entiendes fundamentos, teorías, estructuras y relaciones para el manejo de la información con una amplia gama de aplicaciones. Puedes prepararte y desarrollarte en profesiones de las áreas  de las ciencias de la salud, leyes de la naturaleza, ciencias químicas, biológicas, entre otras.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 2,
            'name' => "Artitisco-plastico",
            'image' => "artistico plastico.png",
            'descrip' => "Tienes gusto por la transmisión de ideas, mensajes, posturas o ideologías, a través de la transformación estética de diversos materiales.  disfrutas del manejo de técnicas y herramientas de dibujo, escultura, pintura, decoración o artesanías, tanto como de la apreciación, crítica y promoción de este arte. Entre las carreras que aplican para esta inclinación, encontramos las licenciaturas en artes, arquitectura, diseño gráfico, decoración o paisajismo.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 3,
            'name' => "Coordinacion visomotriz",
            'image' => "coordinacion visomotriz.png",
            'descrip' => "Tienes una habilidad visomotriz con una gran coordinación entre tu vista y tu cuerpo, particularmente con las manos y los dedos, ya que eres capaz de controlar con mucha precisión o de forma milimétrica los movimientos que tu vista aguda te indica ejecutar/realizar. El tipo de movimientos pueden ser tanto rápidos, como largos y sostenidos, pero siempre se ejecutan de manera paciente y exacta. Una habilidad así te permite dominar el manejo de herramienta diminuta, cortar, pegar, coser, decorar, pintar, colocar puntos o gotas en espacios reducidos, utilizar, armar y desarmar objetos pequeños de forma sencilla, limpia y ordenada. Podrás prepararte y desarrollarte en profesiones como: cirujano dentista, técnico dental, especialista en electrónica, médico cirujano, o especialista en diferentes ramas del arte, como pintor, dibujante o escultor, entre otros.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 4,
            'name' => "Directiva",
            'image' => "directiva.png",
            'descrip' => "Posees una alta capacidad para dirigir equipos de trabajo hacia el cumplimiento de metas, utilizando la habilidad para planear y evaluar la labor realizada. Ser un líder, coordinar, organizar, motivar y supervisar a los equipos de trabajo son tareas que se sienten muy naturales, ya que tu pensamiento está centrado en analizar y generar estrategias. Avanzas con iniciativa, seguridad y confianza, y tomas decisiones en pro del bienestar, desarrollo y crecimiento del equipo de trabajo que lideres. Puedes prepararte y desarrollarte para profesiones como la administración pública, tributaria o fiscal, economía, contabilidad, comunicación, mercadotecnia, logística/operaciones, comercio, entre otros.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 5,
            'name' => "Espacial",
            'image' => "espacial.png",
            'descrip' => "Eres capaz de representar y visualizar en tu mente una gran cantidad de formas, volúmenes y figuras, para orientarlas, complementarlas y situarlas en un espacio de la forma más adecuada, según sea requerido por la tarea en cuestión. La suma de tus habilidades para imaginar, calcular, ubicarte, organizar y transformar, así como de tu memoria visual, te permiten crear y completar en tu mente diversas opciones para optimizar acomodos, espacios, áreas y dimensiones. Puedes prepararte y desarrollarte para profesiones como diseño industrial, gráfico, arquitectura, ingeniería civil, geodesia, topografía o mecánica, pilotos aviadores, entre otros.",]);
        DB::table('clasificaciones')->insert([
            'id' => 6,
            'name' => "Mecánica o artefactual",
            'image' => "mecanica o artefactual.png",
            'descrip' => "Cuentas con una comprensión amplia acerca de los principios mecánicos y físicos relacionados con el movimiento, funcionamiento y uso práctico de máquinas y aparatos, y eres capaz de aplicarlos en la resolución de problemas. Esta capacidad te permite aprender rápidamente a utilizar diversos tipos de herramientas, tanto para la fabricación o creación de máquinas u objetos funcionales, como para su diagnóstico o reparación. Entiendes cómo interactúan las piezas en una máquina y la manera de transformar la energía para convertirla en algo útil. Puedes prepararte y desarrollarte en profesiones como ingeniero mecánico, eléctrico o electrónico, técnico especialista en máquinas y herramientas, automotriz, técnico dental u ortodoncista.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 7,
            'name' => "Social",
            'image' => "social.png",
            'descrip' => "Cuentas con habilidades que te facilitan el relacionarte de forma adecuada con los demás, gracias a tu capacidad de comprender de una manera profunda y empática las emociones, sentimientos, normas, ideologías o creencias de las personas o grupos sociales, sin importar si son afines con los tuyos o no. Comunicas de manera asertiva con una actitud mediadora y objetiva, tienes facilidad para escuchar e interpretar lo que proviene de los demás, así como una intención generalizada de búsqueda del bien común. Puedes prepararte y desarrollarte en profesiones como la psicología, relaciones públicas, sacerdocio, trabajo social, terapia familiar, entre otros.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 8,
            'name' => "Directiva",
            'image' => "directiva.png",
            'descrip' => "Posees una alta capacidad para dirigir equipos de trabajo hacia el cumplimiento de metas, utilizando la habilidad para planear y evaluar la labor realizada. Ser un líder, coordinar, organizar, motivar y supervisar a los equipos de trabajo son tareas que se sienten muy naturales, ya que tu pensamiento está centrado en analizar y generar estrategias. Avanzas con iniciativa, seguridad y confianza, y tomas decisiones en pro del bienestar, desarrollo y crecimiento del equipo de trabajo que lideres. Puedes prepararte y desarrollarte para profesiones como la administración pública, tributaria o fiscal, economía, contabilidad, comunicación, mercadotecnia, logística/operaciones, comercio, entre otros."]);
        DB::table('clasificaciones')->insert([
            'id' => 9,
            'name' => "Organización",
            'image' => "organizacion.png",
            'descrip' => "Tienes la capacidad para visualizar, comprender y manejar información.  Se te facilita generar estrategias, estandarizar y automatizar herramientas para organizarla, de tal forma que aquello con lo que trabajas, sea lo mejor aprovechado posible. Eres capaz de analizar, catalogar, ordenar, indexar, identificar, ubicar,  cruzar, agrupar, tabular o manipular todo tipo de datos y objetos, pasando desde las formas tradicionales de hacerlo, hasta las más avanzadas que implican el uso de tecnología innovadora.  Puedes prepararte y desarrollarte para profesiones como licenciaturas o ingenierías en sistemas computacionales, estadista, administración de empresas, bibliotecario, museógrafo, contador, notario o archivista.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 10,
            'name' => "Musical",
            'image' => "musical.png",
            'descrip' => "Tienes la habilidad de entender y comunicarte a través de la música, el sonido y el canto. Tu memoria y sensibilidad auditivas son predominantes, por lo tanto se te facilita identificar notas, ritmos, armonías y tiempos, alcanzando una mayor capacidad en el aprendizaje y dominio de uno o varios instrumentos musicales. Logras transmitir emociones, sentimientos, estados de ánimo, intenciones e incluso puedes contar historias a través de distintas estructuras musicales. Con esta habilidad, puedes  desarrollarte en profesiones como licenciatura en música, canto, o en cualquier instrumento en particular, músico de sesión, director de orquesta, compositor, productor musical, entre otras.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 11,
            'name' => "Artístico-plástico",
            'image' => "artistico plastico.png",
            'descrip' => "Tienes gusto por la transmisión de ideas, mensajes, posturas o ideologías, a través de la transformación estética de diversos materiales.  disfrutas del manejo de técnicas y herramientas de dibujo, escultura, pintura, decoración o artesanías, tanto como de la apreciación, crítica y promoción de este arte. Entre las carreras que aplican para esta inclinación, encontramos las licenciaturas en artes, arquitectura, diseño gráfico, decoración o paisajismo.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 12,
            'name' => "Espacial",
            'image' => "espacial.png",
            'descrip' => "Eres capaz de representar y visualizar en tu mente una gran cantidad de formas, volúmenes y figuras, para orientarlas, complementarlas y situarlas en un espacio de la forma más adecuada, según sea requerido por la tarea en cuestión. La suma de tus habilidades para imaginar, calcular, ubicarte, organizar y transformar, así como de tu memoria visual, te permiten crear y completar en tu mente diversas opciones para optimizar acomodos, espacios, áreas y dimensiones. Puedes prepararte y desarrollarte para profesiones como diseño industrial, gráfico, arquitectura, ingeniería civil, geodesia, topografía o mecánica, pilotos aviadores, entre otros.",
        ]);

        //13 al 25 son intereses ocupacionales

        DB::table('clasificaciones')->insert([
            'id' => 13,
            'name' => "Biológico",
            'image' => "biologico.png",
            'descrip' => "Te apasiona la vida en todas sus formas. Te gusta conocer a detalle sobre la anatomía y funcionamiento de los organismos, así como las leyes y principios que rigen la existencia de la vida como la conocemos. Te gusta enfocarte en el cuidado de las especies, de la naturaleza, los ecosistemas, y fomentar estas prácticas con la finalidad de prevenir daños, enfermedades o deterioros. Te interesa seguir investigando y aprendiendo los avances científicos de las diferentes ramas de la biología, muestras facilidad y gusto por la materia. Entre las carreras que aplican para esta inclinación, encontramos al ingeniero agrónomo, ambiental, zootecnista, forestal, biólogo, biólogo marino, licenciatura en enfermería, medicina general, odontología, por mencionar algunas.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 14,
            'name' => "Mecánico o artefactual",
            'image' => "mecanico o artefactual.png",
            'descrip' => "Tienes gusto por comprender y dominar la operación, instalación, mantenimiento y optimización de maquinaria simple o compleja, sistemas electrónicos o eléctricos y artefactos en general. (Además de ) Posees(r) la facilidad para aplicar las leyes y principios que aplican al movimiento en general, (la persona) cuentas con las habilidades técnicas para producir objetos y artefactos útiles e innovadores, siendo la parte de la creación y diseño otro de (s)tus fuertes. (Así, desde que alguien) Disfrutas armar, desarmar, transformar o mejorar aparatos o juguetes simples(, demuestra fuertemente esta inclinación). Entre la gama de carreras que aplican para esta inclinación, encontramos al ingeniero mecánico, electricista, físico, industrial, máquinas y herramientas, diseño industrial, por mencionar algunas.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 15,
            'name' => "Campestre",
            'image' => "campestre.png",
            'descrip' => "Te inspiras y alcanzas una mayor comodidad y productividad al desempeñarte en espacios naturales. Te atrae la idea de estar conectado con la naturaleza al dedicarte a tu trabajo; de convivir con el campo, montañas, bosques o mares, y los seres vivos de dicho hábitat. Entre las carreras que aplican para esta inclinación, encontramos al médico veterinario zootecnista, ingeniero agrónomo, horticultor, silvícola, forestal, minería, incluso aplican algunas licenciaturas en administración u organización en el área agrícola.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 16,
            'name' => "Geofísico",
            'image' => "geofisico.png",
            'descrip' => "Te atrae el conocimiento de los diferentes fenómenos que presenta la Tierra, así como toda su evolución, su estructura, su conformación y transformaciones.  Utilizar instrumental y equipo especializado para explicar fenómenos como movimientos telúricos, maremotos, magnetismo, tsunamis, formación de volcanes o las capas de la corteza terrestre y sus cambios de temperatura, por mencionar algunos, es de tu interés.  De tal manera que trabajar explorando, estudiando, o extrayendo rocas, minerales o petróleo, o cualquier actividad complementaria relacionada con las anteriores, se convierte en tu pasión.  Entre las carreras que aplican para esta inclinación, encontramos a la ingeniería petrolera, geológica, geodesia, ciencia ambiental, ciencias del mar, o minería.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 17,
            'name' => "Servicio Social",
            'image' => "servicio social.png",
            'descrip' => "Te inclinas por el servicio social, estas comprometido con el bienestar y la calidad de vida de tu entorno, cuidando el relacionarte apropiadamente y ser guía para el crecimiento, desarrollo y orientación adecuada para quien así lo necesite.  Te satisface participar como apoyo y soporte en los procesos de desarrollo humano, con pilares importantes como la justicia, la empatía social, la armonía y el servicio al prójimo. Entre las carreras que aplican para esta inclinación, encontramos las licenciaturas en psicología, servicio social, derecho, teología, educación o pedagogía, terapeutas, orientadores familiares, entre otros.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 18,
            'name' => "Literario",
            'image' => "literario.png",
            'descrip' => "Te apasiona la literatura en sus diferentes formas.  Te interesa adentrarte en diversas técnicas y estilos de escritura, puede ser tanto en su creación como en su revisión, edición o enseñanza. Te gustan actividades relacionadas con la producción escrita, la lectura, la transmisión o comunicación de ideas, el conocimiento de las diferentes corrientes o escuelas literarias, el uso correcto del lenguaje, y la promoción de todas estas actividades en distintos entornos. Entre las carreras que aplican para esta inclinación, encontramos las licenciaturas en letras, periodismo, lengua y literatura, guionismo, psicolingüistica o comunicación.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 19,
            'name' => "Organización",
            'image' => "organizacion.png",
            'descrip' => "Tienes la capacidad para visualizar, comprender y manejar información.  Se te facilita generar estrategias, estandarizar y automatizar herramientas para organizarla, de tal forma que aquello con lo que trabajas, sea lo mejor aprovechado posible. Eres capaz de analizar, catalogar, ordenar, indexar, identificar, ubicar,  cruzar, agrupar, tabular o manipular todo tipo de datos y objetos, pasando desde las formas tradicionales de hacerlo, hasta las más avanzadas que implican el uso de tecnología innovadora.  Puedes prepararte y desarrollarte para profesiones como licenciaturas o ingenierías en sistemas computacionales, estadista, administración de empresas, bibliotecario, museógrafo, contador, notario o archivista.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 20,
            'name' => "Persuasivo",
            'image' => "persuasivo.png",
            'descrip' => "Te inclinas por actividades que tengan que ver con expresar o intercambiar puntos de vista, con la finalidad de persuadir a los demás de lo que te parece correcto o conveniente de acuerdo con tus convicciones personales u objetivos laborales. Tienes la facilidad para identificar ya sea ventajas o desventajas de lo que se esté argumentando y utilizas diversas ideas y estrategias de comunicación hábilmente para buscar el dominio en la interacción con los demás. Tu mayor satisfacción viene cuando logras impulsar acciones o cambios de perspectiva de las personas. Entre las carreras que aplican para esta inclinación, encontramos licenciaturas en derecho, mercadotecnia, ciencias políticas, relaciones internacionales, administración de empresas, comunicación, especialistas en cierres de venta, o incluso teólogos.", 
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 21,
            'name' => "Cálculo",
            'image' => "calculo.png",
            'descrip' => "Te inclinas por actividades, tareas y retos de todo tipo, que requiera el uso de fórmulas, razonamiento, cálculo y matemáticas. Tienes alta inteligencia numérica, lo cual te facilita aprender y resolver las situaciones visualizándolas de forma objetiva y esquematizada. Te gusta el orden, la lógica y encontrar explicaciones matemáticas en todo.  Entre las carreras que aplican para esta inclinación, encontramos las ingenierías industrial, civil, mecánica, minera, fisicomatemático, licenciaturas en matemáticas aplicadas, administración, contabilidad o economía.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 22,
            'name' => "Contabilidad",
            'image' => "contabilidad.png",
            'descrip' => "Sientes satisfacción por el orden, la claridad, y el buen uso de los recursos económicos y financieros de entornos como empresas, cooperativas, franquicias o incluso el hogar. Tienes facilidad para llevar un registro ordenado de ingresos, egresos y todo cálculo relacionado con el manejo de finanzas. Eres capaz de trabajar individualmente o en equipo, te agrada el ambiente de oficina. Entre las carreras que aplican para esta inclinación, encontramos las licenciaturas en contabilidad pública y privada, administración financiera, economía, o auditoría.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 23,
            'name' => "Musical",
            'image' => "musical.png",
            'descrip' => "Tienes un interés por el mundo de la música. Cuentas con la capacidad de percibir, diferenciar, transformar y expresar las formas musicales, incluyendo la sensibilidad al ritmo, al tono y al timbre. Entre las carreras que aplican para esta inclinación, encontramos las licenciaturas en música, canto, danza, composición, educación musical, dirección de orquestas, dirección coral, producción musical, entre otras.", 
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 24,
            'name' => "Artístico-Plástico",
            'image' => "artistico plastico.png",
            'descrip' => "Tienes gusto por la transmisión de ideas, mensajes, posturas o ideologías, a través de la transformación estética de diversos materiales.  disfrutas del manejo de técnicas y herramientas de dibujo, escultura, pintura, decoración o artesanías, tanto como de la apreciación, crítica y promoción de este arte. Entre las carreras que aplican para esta inclinación, encontramos las licenciaturas en artes, arquitectura, diseño gráfico, decoración o paisajismo.",
        ]);
        DB::table('clasificaciones')->insert([
            'id' => 25,
            'name' => "Científico",
            'image' => "cientifico.png",
            'descrip' => "Tienes inclinación hacia el área científica, particularmente a las áreas química o biológica, te caracteriza tu gusto por investigar, experimentar, comprobar y dar a conocer explicaciones, mejorarando o refutando los conocimientos de tus áreas de interés.  Te gusta lo ordenado, sistemático y riguroso, pones un mayor esfuerzo para innovar en las formas de recolección, observación y procesamiento de datos.  Comprobar nuevas teorías o resolver cuestionamientos es de gran satisfacción para ti. Entre las carreras que aplican para esta inclinación, encontramos licenciaturas en ciencias químicas, medicina, biología, farmacología, ingenierías en bioquímica, bioprocesos industriales, entre otras.",
        ]);
    }
}
