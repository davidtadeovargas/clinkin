<?php

use Illuminate\Database\Seeder;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         DB::table('areas')->insert([
            'id' => 1,
            'name' => "Fisicomatemáticas",
            'descrip' => "Es un área con un alto requerimiento de pensamiento lógico-analítico, de administración de tiempo y recursos, y de una constante búsqueda por impactar en los avances de la ciencia y la tecnología, ya sea en modalidad pura o aplicada. El enfoque de esta área es la búsqueda de explicación para los fenómenos y leyes del universo y el espacio, la experimentación con modelos matemáticos y físicos, que gracias a los procesos de observación, análisis y síntesis, puedan llevar a la solución de problemas tanto en lo académico como en lo profesional.",
            'image' => "/areas/fisicomatematicas.png" 
        ]);
         DB::table('areas')->insert([
            'id' => 2,
            'name' => "Biológicas",
            'descrip' => "Esta área se dedica al estudio, investigación y pasión por la naturaleza, el origen y clasificación de los seres vivos, así como en los procesos y ciclos generales de la vida misma. Se enfoca en el cuidado del medio ambiente, de la salud y calidad de vida de los seres vivos.",
            'image' => "/areas/biologicas.png"
        ]);
         DB::table('areas')->insert([
            'id' => 3,
            'name' => "Químicas",
            'descrip' => "Esta área se centra en la comprensión y aplicación de procesos químicos y biológicos, desde el análisis, transformación o intervención de la materia y los organismos, para satisfacer necesidades de todo tipo para la humanidad, la naturaleza y la industria (alimentos, fármacos, diagnósticos, textiles, materias primas, energía, comunicaciones, etc).  Se apoya en el uso de herramientas e instrumentos propios de un laboratorio científico.",
            'image' => "/areas/quimicas.png"
        ]);
         DB::table('areas')->insert([
            'id' => 4,
            'name' => "Sociales",
            'descrip' => "Esta área engloba a todas aquellas profesiones íntimamente ligadas con las relaciones sociales y las formas de comunicación que existen entre los individuos y las comunidades. Predominan las actividades que buscan bienestar social, políticas públicas y avances como comunidad en general. Al desempeñarte en está área llevarás a cabo la ejecución de diversas técnicas de comunicación, conciliación, negociación, persuasión e incluso dirección, con la finalidad de que en el ejercicio de tu profesión, contribuya al mejoramiento y evolución de la sociedad.",
            'image' => "/areas/sociales.png"
        ]);
         DB::table('areas')->insert([
            'id' => 5,
            'name' => "Humanidades",
            'descrip' => "Esta área se enfoca al estudio del comportamiento y expresión humana. Busca comprender, preservar y potenciar las manifestaciones artísticas, ideológicas y culturales tanto históricas como actuales, ya sea produciendo, o transmitiendo sus conocimientos y descubrimientos. Al desempeñarte en esta área, tienes oportunidad de expresar emociones, sentimientos e información en general, y convertirlos en literatura, danza, diseños, pintura, escultura, o incluso nuevas formas de comunicación o enseñanza de lo que comprende como la esencia del ser humano.",
            'image' => "/areas/humanidades.png"
        ]);
         DB::table('areas')->insert([
            'id' => 6,
            'name' => "Administrativas",
            'descrip' => "Esta área se enfoca en gestionar los recursos que produce de una empresa o particulares. A través de la planeación, organización, dirección y control, que guían a los diferentes departamentos o áreas de las que se conforma una organización (operaciones, capital humano, mercadotecnia, finanzas, etcétera). Una buena administración, permite el crecimiento sano, legal y productivo, y para ello, se requiere llevar a cabo tareas que optimicen el entorno laboral, el cumplimiento de metas y presupuestos de las áreas y visión emprendedora.",
            'image' => "/areas/administrativas.png"
        ]);
    }
}
