<?php

namespace Database\Seeders;

use App\Models\Indicator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndicatorsSeeder extends Seeder
{
    public function run(): void
    {
        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'El estudiante es capaz de tratar con sus compañeros de manera correcta',
            'subject_id' => 1,
        ]);

        Indicator::create([
            'type' => 'Saber ser',
            'description' => 'El estudiante es capaz de tratar con sus compañeros de manera correcta',
            'subject_id' => 1,
        ]);

        Indicator::create([
            'type' => 'Saber hacer',
            'description' => 'El estudiante es capaz de tratar con sus compañeros de manera correcta',
            'subject_id' => 1,
        ]);

        Indicator::create([
            'type' => 'Saber ser',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 2,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 2,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 2,
        ]);

        Indicator::create([
            'type' => 'Saber ser',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 3,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 3,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'El sabe hacer la tarea de manera correcta juntos a sus compañeros',
            'subject_id' => 3,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'Reconocimiento de saludos y despedidas.',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'Identificación de los miembros de la familia.',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'Reconocimiento del vocabulario de las frutas y sus colores',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'Distinción de los números del 1 al 15.',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'Reconocimiento del vocabulario relacionado con mascotas y juguetes',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'Identificación de las letras del alfabeto.',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'Reconocimiento de los colores en inglés.',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber hacer',
            'description' => 'Escritura de palabras que comprende y que usa con frecuencia en el salón de clase.',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber hacer',
            'description' => 'Distinción del vocabulario de mascotas y juguetes',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber hacer',
            'description' => 'Escritura de los números 1 al 15',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber hacer',
            'description' => 'Distinción de vocabulario sobre objetos, juguetes y lugares de su escuela.',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber hacer',
            'description' => 'Aplicación de expresiones cotidianas para expresar sus necesidades en el aula.',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber ser',
            'description' => 'Respeto por sus compañeros cuando participan en clase.',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber ser',
            'description' => 'Sensibilización ante la importancia del inglés.',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber ser',
            'description' => 'Demostración de interés por los temas trabajados en clase.',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber ser',
            'description' => 'Realización con responsabilidad las actividades que se le asignen.',
            'subject_id' => 4,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'Identificación de la letra o grupo de letras que corresponden con un sonido al momento de pronunciar las palabras escritas.',
            'subject_id' => 5,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'Representación de objetos, personas y lugares mediante imágenes.',
            'subject_id' => 5,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'Identificación del propósito comunicativo diversos portadores de texto y deducción del sentido de los diferentes discursos para el reconocimiento de las reglas de uso del lenguaje.',
            'subject_id' => 5,
        ]);

        Indicator::create([
            'type' => 'Saber conocer',
            'description' => 'Descripción de imágenes y situaciones acorde con sus capacidades e intereses.',
            'subject_id' => 5,
        ]);

        Indicator::create([
            'type' => 'Saber ser',
            'description' => 'Respeto los roles que cumplen quienes producen e interpretan los discursos en situaciones comunicativas cotidianas.',
            'subject_id' => 5,
        ]);

        Indicator::create([
            'type' => 'Saber ser',
            'description' => 'Participación en las actividades propuestas en clase.',
            'subject_id' => 5,
        ]);

        Indicator::create([
            'type' => 'Saber ser',
            'description' => 'Manifestación de responsabilidad en las actividades propuestas en clase',
            'subject_id' => 5,
        ]);

        Indicator::create([
            'type' => 'Saber hacer',
            'description' => 'Expresión de ideas en torno a una sola temática a partir del vocabulario que conoce.',
            'subject_id' => 5,
        ]);

        Indicator::create([
            'type' => 'Saber hacer',
            'description' => 'Expresión de sus opiniones e impresiones a través de dibujos, caricaturas, canciones, y los comparte con sus compañeros',
            'subject_id' => 5,
        ]);

        Indicator::create([
            'type' => 'Saber hacer',
            'description' => 'Interacción con compañeros en dinámicas grupales que incluyen: declamación, canto, música y recitales, teniendo en cuenta los sonidos y juegos de palabras.',
            'subject_id' => 5,
        ]);

        Indicator::create([
            'type' => 'Saber hacer',
            'description' => 'Elaboración de listas de palabras parecidas y reconoce las diferencias que guardan entre sí, relacionando los sonidos de la lengua con sus diferentes grafemas.',
            'subject_id' => 5,
        ]);

        Indicator::create([
            'type' => 'Saber hacer',
            'description' => 'Expresión de opiniones e impresiones a través de dibujos, caricaturas, canciones, y los comparte con sus compañeros.',
            'subject_id' => 5,
        ]);

        Indicator::create([
            'type' => 'Saber hacer',
            'description' => 'Escucha y lectura de adivinanzas, anagramas, retahílas, pregones y acrósticos que hacen parte de su entorno cultural.',
            'subject_id' => 5,
        ]);
    }
}
