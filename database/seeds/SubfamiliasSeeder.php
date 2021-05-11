<?php

use Illuminate\Database\Seeder;

class SubfamiliasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('subfamilias')->insert([
        		'id' => 1,
	            'idFamilia' => 5,
	            'code' => 'H-Hm',
	            'name' => 'Hombre mismo',
	            'descrip' => 'Esta familia busca conocer al ser humano desde un punto de vista filosófico, es decir, por medio de preguntas de tipo existencial, sentido de la vida, relación del hombre con su alrededor y el origen del conocimiento, para alcanzar una verdadera comprensión de sí mismo y estar en armonía con la sociedad.',
	            'image' => "/familias/humanidades/hombre mismo.png"
	        ]);
        DB::table('subfamilias')->insert([
        		'id' => 2,
	            'idFamilia' => 5,
	            'code' => 'H-Seo',
	            'name' => 'Su expresión oral',
	            'descrip' => 'Esta familia se enfoca en actividades que esten relacionadas directamente con el desarrollo y aplicación de la expresión oral para fines artísticos como cine o teatro. Desarrolla competencias comunicativas, sociales, expresivas y creativas mediante el uso de las técnicas y destrezas de las artes escénicas. Tener algo qué decir, un motivo para hacerlo, y saber cómo transmitirlo, dirigirlo y promocionarlo para lograr un objetivo particular, lo es todo para aquellos interesados en esta rama.',
	            'image' => "/familias/humanidades/su expresion oral.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 3,
	            'idFamilia' => 5,
	            'code' => 'H-See',
	            'name' => 'Su expresión escrita',
	            'descrip' => 'Esta familia tiene como principal forma de expresión la escritura y creación literaria, esto implica un talento particular por elaborar y dejar registro formal tanto de sucesos de la vida cotidiana, como de opiniones, emociones, sentimientos, ideologías o conocimiento general como un legado a la humanidad.  La elaboración de textos de tinte periodístico, la creación o edición de libros, la participación en concursos literarios de diferentes géneros, o incluso la promoción misma de la actividad literaria en la sociedad, forman parte de las tareas esenciales que disfruta hacer.',
	            'image' => "/familias/humanidades/su expresion escrita.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 4,
	            'idFamilia' => 5,
	            'code' => 'H-Sep',
	            'name' => 'Su expresión plástica',
	            'descrip' => 'Esta familia tiene como principal forma de expresión la producción de piezas de arte (escultura, pintura, grabado, litografía, fotografía, modelado, entre otros). Estas pueden ser desde lo más sencillo hasta lo más complejo, asímismo, la elección de las técnicas y materiales, que pueden apegarse a lo tradicional, como adentrarse en formas experimentales de creación o combinaciones que les parezcan apegadas a la estética con la que deseen transmitir su visión o interpretación de la realidad.',
	            'image' => "/familias/humanidades/su expresion plastica.png"
	        ]);
        DB::table('subfamilias')->insert([
        		'id' => 5,
	            'idFamilia' => 5,
	            'code' => 'H-Sec',
	            'name' => 'Su expresión corporal',
	            'descrip' => 'Esta familia emplea el cuerpo y el movimiento como principal vía de expresión y lenguaje. Transmiten historias, ideologías, emociones y sentimientos a través de diferentes estilos de baile, danza o expresiones corporales. Además de manifestarse a través del cuerpo, quienes se interesan por esta rama, pueden dedicarse a dirigir,  promocionar y transmitir sus conocimientos y pasión por esta forma de expresión.',
	            'image' => "/familias/humanidades/su expresion corporal.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 6,
	            'idFamilia' => 5,
	            'code' => 'H-Sea',
	            'name' => 'Su expresión auditiva',
	            'descrip' => 'Esta familia utiliza como principal medio de expresión a la música, el canto y al sonido. Desarrolla habilidades y talentos superiores, ya sea, para ejecutar instrumentos y estilos particulares de música, interpretaciones vocales, o bien dirigir a otros. Así que, ya se trate de cantar o tocar en individual o en grupo, se da mucho valor a la apreciación y promoción musical como patrimonio cultural, al mismo tiempo que se considera como un lenguaje universal capaz de influir en la sociedad.',
	            'image' => "/familias/humanidades/su expesion auditiva.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 7,
	            'idFamilia' => 5,
	            'code' => 'H-Sc',
	            'name' => 'Su complementación',
	            'descrip' => 'Esta familia abarca todas las posibilidades de la comunicación y las integra para crear, coordinar o producir diferentes tipos de contenidos, cuyo objetivo principal sea la transmisión efectiva de un mensaje, producto, información particular o proyecto. Se desempeñan en, o para, medios como la industria del entretenimiento (televisión, publicidad, cine, videojuegos), periodismo, educación, telecomunicaciones o incluso propósitos sociales, pudiendo abarcar desde la concepción del producto en si, hasta la operación del equipo técnico especializado necesario para producirlo.',
	            'image' => "/familias/humanidades/su complementacion.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 8,
	            'idFamilia' => 5,
	            'code' => 'H-I',
	            'name' => 'Idiomas',
	            'descrip' => 'Esta familia se adentra en los conocimientos acerca del origen, desarrollo y variaciones de una o más lenguas extranjeras, dominando su habla, escritura, gramática, terminología técnica específica de alguna profesión, u ortografía, para aplicarlos en tareas como la docencia, la traducción, interpretación, adentrarse en la literatura extranjera, o laborar para editoriales o empresas internacionales.',
	            'image' => "/familias/humanidades/idiomas.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 9,
	            'idFamilia' => 5,
	            'code' => 'H-C',
	            'name' => 'Su combinación',
	            'descrip' => 'Esta familia estudia el estilo de vida de las personas, las manifestaciones sociales y culturales, así como, las normas tanto al interior de un grupo, como su relación con otros. Descubre y enriquece conocimientos que se tienen acerca de la generación de identidad de los grupos humanos desde el inicio de su existencia, analizando su folklore, vestigios, jerarquías sociales, artesanías, sistemas de gobierno, entre otros. Se desempeña buscando, preservando o restaurando bienes culturales considerados patrimonio de la historia de la humanidad.',
	            'image' => "/familias/humanidades/su combinacion.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 10,
	            'idFamilia' => 5,
	            'code' => 'H-Cc',
	            'name' => 'Cuidado cultural',
	            'descrip' => 'Esta familia se enfoca en las capacidades de administración, manejo, clasificación, preservación, organización, diagnóstico y cuidado de una colección literaria y documental, utilizando desde los métodos físicos y tradicionales, hasta sistemas modernos para su realización. Estas tareas aplican tanto en bibliotecas tradicionales, colecciones privadas de libros y documentos, como centros de información o archivos históricos o de la Nación, facilitando además el servicio que éstos ofrecen a sus usuarios, así como promoviendo su preservación, manejo adecuado y modernización.',
	            'image' => "/familias/humanidades/cuidado cultural.png"]);

        DB::table('subfamilias')->insert([
        		'id' => 11,
	            'idFamilia' => 3,
	            'code' => 'Q-P',
	            'name' => 'Puras',
	            'descrip' => 'Esta familia se encarga de estudiar y mantener vigentes o mejorar los aspectos teóricos de los fundamentos, grandes descubrimientos y aplicaciones de la química en general.  Su fuerte es la investigación, planteamiento de hipótesis, experimentación y comprobación o refutación de las teorías en el campo de la química, desarrollandose principalmente en laboratorios o ambientes controlados, teniendo como objetivo el estar a la vanguardia en la generación de conocimiento del área.',
	            'image' => "/familias/quimicas/puras.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 12,
	            'idFamilia' => 3,
	            'code' => 'Q-A-I',
	            'name' => 'Aplicadas',
	            'descrip' => 'Esta familia estudia de manera integral la formación, composición, estructura y reacciones químicas de todos aquellos elementos que no contengan carbono e hidrógeno, es decir, los inorgánicos.  Aunque requiere de la comprensión general de los procesos y reacciones químicas, la familia inorgánica es tendiente a enfocarse en el trabajo mas del tipo industrial, como en las áreas de la siderurgia, agroquímicos, porcelana, cerámica, aleaciones particulares, fibra óptica, catalizadores, metales específicos para algunos chips de dispositivos electronicos, o el LCD de las pantallas, entre otros.',
	            'image' => "/familias/quimicas/aplicadas.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 13,
	            'idFamilia' => 3,
	            'code' => 'Q-Obqa',
	            'name' => 'Inorgánicas',
	            'descrip' => 'Esta familia estudia la composición y transformaciones que ocurren en las biomoléculas presentes en los alimentos desde sus procesos químicos de elaboración, hasta su consumo, tomando en cuenta su origen (vegetal o animal), la calidad de las materias primas, las reacciones metabólicas, sus técnicas de conservación y finalmente el valor nutricional que aportan al organismo en relación a su calidad general.',
	            'image' => "/familias/quimicas/inorganicas.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 14,
	            'idFamilia' => 3,
	            'code' => 'Q-Obqa',
	            'name' => 'Orgánico bioquímicas alimentos',
	            'descrip' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
	            'image' => "/familias/quimicas/organico bioquimico alimentos.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 15,
	            'idFamilia' => 3,
	            'code' => 'Q-Obqc',
	            'name' => 'Orgánico bioquímico clínico',
	            'descrip' => 'Esta familia dirige sus conocimientos de la bioquímica, aplicándolos particularmente en el campo de la salud y ciencias médicas. Se centra en la utilización de métodos químicos y bioquímicos para la realización de análisis en laboratorios o centros especializados, que permitan generar con alta precisión diagnósticos, monitoreo de enfermedades o condiciones de salud, determinar tratamientos, métodos de prevención, e incluso investigación que aporte información valiosa a la ciencia médica para mejorar la atención y manejo en temas de la salud.',
	            'image' => "/familias/quimicas/organico bioquimico clinico.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 16,
	            'idFamilia' => 3,
	            'code' => 'Q-Obqf',
	            'name' => 'Orgánico bioquímico farmacología',
	            'descrip' => 'Esta familia se especializa en investigación e innovación en la producción de diferentes líneas de fármacos y medicamentos para mejorar la salud y calidad de vida, bajo un estricto control de producción y apego a altos estándares de calidad y ética en laboratorios químicos, normas sanitarias, conocimiento general de efectos o riesgos secundarios, y su impacto en la salud pública.',
	            'image' => "/familias/quimicas/organico bioquimico farmacologia.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 17,
	            'idFamilia' => 3,
	            'code' => 'Q-Qag',
	            'name' => 'Químicas agrícolas',
	            'descrip' => 'Esta familia combina conocimientos y aplicaciones de la química orgánica e inorgánica, con la finalidad de apoyar en el sector agrícola, estudiando todos los efectos y reacciones bioquímicas que se presentan en éstos campos. Se planean, implementan y monitorean las diversas técnicas y productos o insumos utilizados para el crecimiento sano de plantas y animales, que garanticen tanto su calidad para el consumidor final, como para el uso respetuoso del suelo o los recursos empleados en su producción.',
	            'image' => "/familias/quimicas/quimicas agricolas.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 18,
	            'idFamilia' => 3,
	            'code' => 'Q-Opi',
	            'name' => 'Orgánico petroquímico industrial',
	            'descrip' => 'Esta familia se encarga principalmente de implementar y mejorar técnicas empleadas en el uso, aprovechamiento y transformación de los derivados del petróleo y gas natural, por medio de la investigación constante y rigurosa, así como el apego a la regulación de la explotación racional de dichos recursos, permitiendo la elaboración de materiales como la goma, hule o caucho para diversos fines, así como de energéticos necesarios para la vida moderna.',
	            'image' => "/familias/quimicas/organico petroquimico industrial.png"]);

        DB::table('subfamilias')->insert([
        		'id' => 19,
	            'idFamilia' => 4,
	            'code' => 'S-P',
	            'name' => 'Principios y leyes de la relación humana',
	            'descrip' => 'Esta familia estudia el comportamiento de los grupos sociales en general, sus características, autopercepción, principios, valores o reglas formales o informales.  Aporta claridad a la evolución de las formas de interacción o relaciones sociales, y profundiza en las circunstancias que permiten el desarrollo de la sociedad en términos colectivos.',
	            'image' => "/familias/sociales/principios y leyes de la relacion humana.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 20,
	            'idFamilia' => 4,
	            'code' => 'S-Cra',
	            'name' => 'Calidad de la relación asistencial',
	            'descrip' => 'Esta familia asiste, ayuda y guía preferentemente a personas o grupos que se encuentran en alguna situación que les impide ser autosuficientes, independientes o se encuentran en estado de desventaja o vulnerabilidad. Brinda apoyo para garantizar una buena calidad de vida, crecimiento personal e integración social en medios como hospitales, instituciones de asistencia social, centros penitenciarios o correccionales, asilos, casas cuna o comunidades en general donde habiten personas con las características descritas.',
	            'image' => "/familias/sociales/calidad de la relacion asistencial.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 21,
	            'idFamilia' => 4,
	            'code' => 'S-Crex',
	            'name' => 'Calidad de la relación existencial',
	            'descrip' => 'Esta familia estudia el comportamiento de los individuos, la formación de su personalidad, y los conceptos que construye alrededor de la comprensión de su propia existencia y su propósito en el mundo, influyendo directamente en el estilo de relaciones interpersonales que sostiene, así como en su calidad de vida en general. Se encarga de comprender, evaluar, diagnosticar, orientar, clarificar y motivar a individuos o grupos en su búsqueda de desarrollo humano, pertenencia y sentido de vida.',
	            'image' => "/familias/sociales/calidad de la relacion existencial.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 22,
	            'idFamilia' => 4,
	            'code' => 'S-Crl',
	            'name' => 'Calidad de la relación legal',
	            'descrip' => 'Esta familia se enfoca en el estudio de los elementos jurídicos que rigen la convivencia entre las personas, los grupos u organizaciones sociales y las naciones. Dentro de sus objetivos están planear, diseñar, interpretar, evaluar y aplicar las normas y leyes buscando la resolución de los problemas o situaciones que impliquen la intervención e impartición de justicia entre los involucrados en cualquier conflicto ya sea del orden jurídico o diplomático.',
	            'image' => "/familias/sociales/calidad de la relacion legal.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 23,
	            'idFamilia' => 4,
	            'code' => 'S-Cred',
	            'name' => 'Calidad de la relación educacional',
	            'descrip' => 'Esta familia se enfoca hacia el mejoramiento de las condiciones generales de la educación como medio para brindar mejor calidad de vida a las personas a través de la cultura, aptitudes, habilidades, desarrollo integral y difusión del conocimiento. Para ello, generan estrategias y programas educacionales adaptados a los diferentes sectores de la sociedad, implementan y supervisan que impacten exitosamente de manera directa o indirecta en los entornos con los que se relacionan como educadores.',
	            'image' => "/familias/sociales/calidad de la relacion educacional.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 24,
	            'idFamilia' => 4,
	            'code' => 'S-Cri',
	            'name' => 'Calidad de la relación interhumana',
	            'descrip' => 'Esta familia se especializa en el análisis del comportamiento, estilo de vida, calidad de comunicación y adaptación de las personas relacionándose con otras personas en diferentes contextos. Detecta lo que los une, lo que los aleja, lo que crea afinidad, lo que crea pertenencia, lealtad, compromiso y crecimiento colectivo, y lo utiliza para diversos fines que pueden ir desde la intención misma de mejorar la armonía y comunicación en ciertas comunidades, hasta para otros fines muy distintos, como análisis comerciales, creación de debates, consultas de grupos convergentes o divergentes, u otros estudios especializados. ',
	            'image' => "/familias/sociales/calidad de la relacion interhumana.png"]);

        DB::table('subfamilias')->insert([
        		'id' => 28,
	            'idFamilia' => 2,
	            'code' => 'B-P',
	            'name' => 'Biológicas puras',
	            'descrip' => 'La inclinación por las ciencias biológicas puras, define un campo de estudio dedicado a la comprensión de la vida y de todos sus procesos en general.  La ocupación profesional ronda entre tareas que lleven a conocer sobre el origen, la evolución, preservación o extinción, similitudes, particularidades o composición de todo organismo vivo, sin tener la intención de la aplicación inmediata de esos descubrimientos, sino más bien, enfocado en hacer crecer el conocimiento teórico de todos los fenómenos biológicos de su estudio. Esta familia se enfoca en la comprensión de la vida y de todos sus procesos en general. La ocupación profesional realiza tareas que lleven a conocer sobre el origen, la evolución, preservación o extinción, similitudes, particularidades o composición de todo organismo vivo, sin tener la intención de la aplicación inmediata de esos descubrimientos, sino más bien, enfocado en hacer crecer el conocimiento teórico de todos los fenómenos biológicos de su estudio.',
	            'image' => "/familias/biologicas/biologicas puras.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 29,
	            'idFamilia' => 2,
	            'code' => 'B-A-Sh',
	            'name' => 'Salud Humana',
	            'descrip' => 'Esta familia se enfoca en la comprensión, cuidado y promoción de la salud humana. Encuentra una gran satisfacción en utilizar técnicas, análisis e instrumentos que permitan mantener a las personas en condiciones ideales de salud.  El cuerpo humano es uno de los sistemas naturales más complejos que existe; conocer, intervenir y poder guiar a las personas para tener una buena calidad de vida a través de su estado de salud se convierte en su principal objetivo.',
	            'image' => "/familias/biologicas/salud humana.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 30,
	            'idFamilia' => 2,
	            'code' => 'B-A-Sa',
	            'name' => 'Salud animal',
	            'descrip' => 'Esta familia se especializa en el área de la biología, se enfoca en el conocimiento, cuidado y salud exclusiva de los animales, tanto domésticos como silvestres. Es posible que exista el gusto por alguna especie de animales en particular y aplicar estos conocimientos en campos de trabajo donde habiten o haya crianza de dicha especie. Busca conocer técnicas, diferentes procedimientos de intervención, diagnosticar y tratar padecimientos, enfermedades, lesiones y situaciones específicas relacionadas con la salud de los animales.',
	            'image' => "/familias/biologicas/salud animal.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 31,
	            'idFamilia' => 2,
	            'code' => 'B-A-T',
	            'name' => 'Terrestre',
	            'descrip' => 'Esta familia busca desarrollar el conocimiento de ciencias biológicas utilizandolo para el aprovechamiento, explotación y conservación de los recursos agropecuarios. Se especializa en temas de su uso racional para garantizar que los sistemas de producción sean suficientes, éticos, sustentables y se logren avances científicos del área.',
	            'image' => "/familias/biologicas/terrestre.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 32,
	            'idFamilia' => 2,
	            'code' => 'B-A-S',
	            'name' => 'Silvícola',
	            'descrip' => 'Esta familia se enfoca en el estudio de los bosques, así como en la producción, cuidado racional, aprovechamiento y comercialización de los recursos naturales que éstos brindan.  Supervisa que los procesos de industrialización y explotación en lugares como aserraderos, bosques, selvas y demás, se lleven a cabo de acuerdo con las normas para el cuidado del medio ambiente, se adapten o prevengan efectos negativos del cambio climático y respeten los ciclos de vida que aseguran la sustentabilidad y la preservación de las especies y ecosistemas del entorno.',
	            'image' => "/familias/biologicas/silvicola.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 33,
	            'idFamilia' => 2,
	            'code' => 'B-A-A',
	            'name' => 'Ambientalista',
	            'descrip' => 'Esta familia promueve la conciencia colectiva respecto al cuidado del medio ambiente, buscando un equilibrio entre la preservación de todos los elementos medioambientales, y la satisfacción de las necesidades para la subsistencia de las personas. Así, se involucra en tareas desde la creación de programas educativos y de divulgación científica, hasta la defensa de causas ambientales, o la asesoría y el cumplimiento normativo de las industrias en materia de ecología y sustentabilidad. Tiene como tareas fundamentales resolver los problemas de la contaminación del aire, la tierra y el agua, la viabilidad para usar ciertos terrenos o espacios para diferentes industrias, determinar si las construcciones agreden al entorno, el uso adecuado de los combustibles o la promoción de los diferentes tipos de energéticos alternativos, entre otros.',
	            'image' => "/familias/biologicas/ambientalista.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 34,
	            'idFamilia' => 2,
	            'code' => 'B-A-M',
	            'name' => 'Marítima',
	            'descrip' => 'Esta familia se desempeña profesionalmente en los océanos, lagos o ríos, teniendo como actividad fundamental el estudio, preservación y reproducción de las especies que habitan en ellos. Verifica que la explotación de los recursos o animales marinos se lleve a cabo desde una perspectiva sustentable y respetuosa, para garantizar el cuidado de la biodiversidad, a la vez que el aprovechamiento de sus bondades para los diferentes propósitos que éstos tienen en la industria, como lo son la alimentación, la ciencia, actividades deportivas o económicas.',
	            'image' => "/familias/biologicas/maritima.png"]);

        DB::table('subfamilias')->insert([
        		'id' => 35,
	            'idFamilia' => 6,
	            'code' => 'A-Ri',
	            'name' => 'Recursos instrumentales',
	            'descrip' => 'Esta familia enfoca las habilidades administrativas en trabajar con grandes contenidos de datos e información, con la finalidad de facilitar su análisis, y por ende, la toma de decisiones.  Estas tareas son llevadas a cabo con el apoyo de tecnología y software, de tal manera que actividades como el registro, procesamiento, almacenamiento, edición o transferencia de información para su uso en almacenes, inventarios, call centers, centros de monitoreo, distribución o manejo estadístico, entre otros, sean claras, útiles y suficientes en la administración.',
	            'image' => "/familias/administrativas/recursos instrumentales.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 36,
	            'idFamilia' => 6,
	            'code' => 'A-Rf',
	            'name' => 'Recursos financieros',
	            'descrip' => 'Esta familia se especializa en cuidar, asesorar y optimizar los aspectos financieros de las organizaciones, sugiriendo qué hacer, y cómo manejar el capital económico y patrimonial, manteniendo al mismo tiempo la salud y transparencia en cifras y trámites ante las autoridades. Se utiliza la habilidad para interpretar los movimientos financieros globales, y poder anticiparse como empresa, controlando y eligiendo acertadamente los recursos y las inversiones, con el fin de garantizar su rentabilidad y permanencia como empresa o institución.',
	            'image' => "/familias/administrativas/recursos financieros.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 37,
	            'idFamilia' => 6,
	            'code' => 'A-Rh',
	            'name' => 'Recursos humanos',
	            'descrip' => 'se lleve a cabo en cumplimiento tanto con las necesidades, valores y principios de la empresa, así como con todo lo que compete a la legalidad, seguridad y objetivos económicos de la misma. Es así que se aplican habilidades para la creación de perfiles, descripciones de puesto, evaluaciones personales, medición de ambiente de trabajo, diseño de paquetes de beneficios laborales, y administración eficiente de toda esta información, buscando garantizar relaciones laborales sanas que impacten positivamente en la productividad de la organización.',
	            'image' => "/familias/administrativas/recursos humanos.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 38,
	            'idFamilia' => 6,
	            'code' => 'A-Rc',
	            'name' => 'Recursos comerciales',
	            'descrip' => 'Esta familia busca generar las estrategias para establecer relaciones exitosas con los clientes, crear proyecciones de venta y lograr cierres para generar ingresos. Se desarrollan capacidades para dirigir, asesorar, planificar, ejecutar, evaluar y controlar los procesos comerciales en empresas públicas y privadas de manera profesional. Se deben conocer a fondo los productos y servicios que ofrece una empresa o institución para crear objetivos de oferta y demanda ambiciosos, y llegar a las metas a través de procesos de comunicación, siendo la persuasión y la negociación factores esenciales en esta especialidad de la administración.',
	            'image' => "/familias/administrativas/recursos comerciales.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 39,
	            'idFamilia' => 6,
	            'code' => 'A-Rt',
	            'name' => 'Recursos turísticos',
	            'descrip' => 'Esta familia utiliza los conocimientos generales de la administración en los recursos turísticos, recreativos y de entretenimiento, promoviendo su máximo aprovechamiento y crecimiento económico.  Desempeñando actividades como la gestión, marketing, operación, mejoramiento o dirección de instituciones, empresas o proyectos turísticos, fortaleciendo o ampliando la oferta y servicios de una manera creativa y ordenada.',
	            'image' => "/familias/administrativas/recursos turisticos.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 40,
	            'idFamilia' => 6,
	            'code' => 'A-Rp',
	            'name' => 'Recursos públicos',
	            'descrip' => 'Esta familia se encarga particularmente de planear, coordinar la optimización y hacer un buen uso de los recursos asignados a los diferentes niveles de gobierno y sus tareas operativas y de políticas públicas. Se enfoca en formular, planificar, diseñar, implantar y evaluar políticas públicas que permitan el fortalecimiento de un sistema de administración público eficiente, eficaz y transparente.',
	            'image' => "/familias/administrativas/recursos publicos.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 41,
	            'idFamilia' => 6,
	            'code' => 'A-Re',
	            'name' => 'Recursos educativos',
	            'descrip' => 'Esta familia utiliza habilidades como la planeación, organización, dirección, control y gestión adecuada de los diversos recursos, las cuales son aplicadas específicamente en entornos educativos de todos los niveles, visualizando a la escuela como una empresa y lo que esto conlleva en términos administrativos.  Tiene como particularidad el buscar que los servicios educativos sean rentables y de calidad (hablando tanto de recursos físicos como humanos), para garantizar que la parte patrimonial y económica brinden el sustento que se requiere para operarla eficientemente.',
	            'image' => "/familias/administrativas/recursos educativos.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 42,
	            'idFamilia' => 6,
	            'code' => 'A-Ra',
	            'name' => 'Recursos agrícolas',
	            'descrip' => 'Esta familia dirige sus tareas esenciales hacia las empresas o instituciones cuyo giro sea el de la producción y comercialización agrícola, ganadera, pecuaria, piscícola, forestal o medioambiental, por medio de habilidades como la planeación, organización, dirección, control y gestión adecuada de sus recursos. Se enfoca en brindar valor agregado a los bienes y servicios que ofrece, buscando el aprovechamiento sustentable de los recursos naturales.',
	            'image' => "/familias/administrativas/recursos agricolas.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 43,
	            'idFamilia' => 6,
	            'code' => 'A-Rm',
	            'name' => 'Recursos mineros',
	            'descrip' => 'Esta familia aplica los conceptos básicos de la administración en empresas, instituciones o proyectos, los cuales son la planeación, organización, dirección, control, gestión y explotación de los recursos mineros. Estos conceptos se adaptan para lograr diseños, procesos productivos y promoción en la ejecución de sistemas de administración eficientes, optimizando y utilizando adecuadamente los recursos propios de la empresa, que permitan que dicha industria tan valiosa obtenga sus mejores resultados.',
	            'image' => "/familias/administrativas/recursos mineros.png"]);

        DB::table('subfamilias')->insert([
        		'id' => 44,
	            'idFamilia' => 1,
	            'code' => 'Fm-A-A',
	            'name' => 'Aplicadas-Artefactos',
	            'descrip' => 'Esta familia tiene como objetivo la creación, diseño, operación, mantenimiento y perfeccionamiento continuo de artefactos, máquinas o herramientas de todo tipo, que sirvan para facilitar y mejorar la vida en general, a través de los conocimientos adquiridos en las ciencias físicas y matemáticas. Estos artefactos van desde las herramientas sencillas, como un martillo o un desarmador, hasta las más complejas, como computadoras o herramientas robóticas.',
	            'image' => "/familias/fisicomatematicas/artefactos.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 45,
	            'idFamilia' => 1,
	            'code' => 'Fm-P',
	            'name' => 'Puras',
	            'descrip' => 'Esta familia tiene interés predominante en el estudio, experimentación y comprobación de las teorías, modelos y principios físicos y matemáticos puros, más allá del propio objeto en el que se aplican. Generan conocimiento que enriquece a la ciencia en general, y suma al avance de tecnologías para mejorar al mundo, gracias a la variedad de las aplicaciones que sus descubrimientos o comprobaciones pueden tener. Por último, busca comprender la forma en la que funciona el universo y sus fenómenos naturales.',
	            'image' => "/familias/fisicomatematicas/puras.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 46,
	            'idFamilia' => 1,
	            'code' => 'Fm-A-N',
	            'name' => 'Naturales',
	            'descrip' => 'Esta familia utiliza los conocimientos de las ciencias físicas y matemáticas para comprender los fenómenos naturales; estudia las propiedades, formación, estructura y composición de la Tierra, con un enfoque en la geofísica y la naturaleza misma.',
	            'image' => "/familias/fisicomatematicas/naturaleza.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 47,
	            'idFamilia' => 1,
	            'code' => 'Fm-A-I',
	            'name' => 'Industrial',
	            'descrip' => 'Esta familia aplica las ciencias físicas y matemáticas que se enfocan al sector industrial, desarrollando actividades como el diseño, la supervisión, el mejoramiento y la propia operación de líneas además de modelos de producción, maquinaria industrial especializada o la misma logística interna de departamentos o proyectos.',
	            'image' => "/familias/fisicomatematicas/industria.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 48,
	            'idFamilia' => 1,
	            'code' => 'Fm-A-C',
	            'name' => 'Construcción',
	            'descrip' => 'Esta familia utiliza conocimientos sobre la construcción y la creación de estructuras y obras arquitectónicas; complementandose con la física y el cálculo matemático aplicado en las dimensiones, materiales o resistencia que se requieran para construirse y mantenerse firmes ante las diferentes condiciones físicas o ambientales del entorno.',
	            'image' => "/familias/fisicomatematicas/construccion.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 49,
	            'idFamilia' => 1,
	            'code' => 'Fm-A-Md',
	            'name' => 'Manejo de datos',
	            'descrip' => 'Esta familia se caracteriza por su enfoque en el manejo de datos, a través de conocimientos matemáticos. Su análisis permite realizar tareas como prospectación, organización y manejo estadístico de información con gran detalle, de acuerdo con los objetivos del entorno laboral en el que se aplique, por ejemplo, el diseño de modelos matemáticos para pronosticar el crecimiento poblacional de un país, o el uso de datos estadísticos para la toma de decisiones en las empresas y organizaciones.','image' => "/familias/fisicomatematicas/manejo de datos.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 50,
	            'idFamilia' => 1,
	            'code' => 'Fm-A-Mg',
	            'name' => 'Medición geodésica',
	            'descrip' => 'Esta familia se especializa en la utilización de la geometría, física y matemáticas, con la finalidad de aplicarla en la medición, reconocimiento y registro de diversos proyectos geográficos. Es de suma utilidad para tareas como el cálculo de áreas simples o terrenos de superficie accidentada, creación de planos, croquis, o incluso de solución de problemas de fines residenciales, como para proyectos que requieran la adaptación de figuras geométricas en su solución: niveles, profundidad de minas, yacimientos o montañas.','image' => "/familias/fisicomatematicas/medicion geodesica.png"]);
        DB::table('subfamilias')->insert([
        		'id' => 51,
	            'idFamilia' => 1,
	            'code' => 'Fm-A-D',
	            'name' => 'Diseño',
	            'descrip' => 'Esta familia se enfoca en las aplicaciones finas o estéticas de los conocimientos en geometría, física y matemáticas, representados a través del estudio, conceptualización y creación de diversas herramientas o artefactos de diseño industrial para diferentes propósitos.  Se aplican las habilidades como el dibujo lineal, patrones, simetría, secuencias o planeación de las dimensiones y acabados, para lograr que además del uso funcional, el objeto o artefacto sea visualmente apropiado.','image' => "/familias/fisicomatematicas/diseño.png"]);
    }
}
