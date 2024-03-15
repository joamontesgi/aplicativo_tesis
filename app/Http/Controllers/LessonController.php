<?php

namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    
    public function index()
    {

        $imagesInfo = [
            [
                'filename' => 'DoSS.jpg',
                'title' => 'DoSS',
                'description' => 'Un ataque DDoS es una versión más potente del ataque DoS, en el cual múltiples sistemas infectados, a menudo distribuidos globalmente, son utilizados para dirigir tráfico de red o solicitudes a un único sistema objetivo con el fin de sobrecargarlo y hacerlo inaccesible a los usuarios legítimos. A diferencia de los ataques DoS, que generalmente provienen de una única fuente, los ataques DDoS pueden involucrar cientos o incluso miles de direcciones IP únicas, lo que hace que la defensa contra ellos sea mucho más desafiante.'
            ],
            [
                'filename' => 'DosGoldenEye.png',
                'title' => 'DosGoldenEye',
                'description' => 'GoldenEye es una herramienta de ataque DoS que se enfoca específicamente en servidores web mediante el envío de solicitudes maliciosas para sobrecargar el sistema. Funciona de manera similar a otros ataques basados en HTTP, pero se distingue por su capacidad para generar una carga significativa en los recursos del servidor a través de solicitudes GET y POST de forma simultánea. Este ataque busca explotar vulnerabilidades en la gestión de sesiones HTTP para consumir los recursos del servidor hasta que se vuelve inaccesible.'
            ],
            [
                'filename' => 'DosHulk.png',
                'title' => 'DosHulk',
                'description' => 'El ataque Hulk (Http Unbearable Load King) es una herramienta de ataque DoS diseñada para eludir las herramientas de prevención de caché y evitar ser detectada por los sistemas de defensa convencionales. Genera un volumen alto y complejo de tráfico HTTP hacia el objetivo, utilizando solicitudes únicas en cada petición para evitar ser filtrado por herramientas de seguridad. Esto se logra alterando las cabeceras HTTP y las URL de las solicitudes de manera dinámica, lo que dificulta su bloqueo basado en patrones.'
            ],
            [
                'filename' => 'DosSlowloris.png',
                'title' => 'DosSlowloris',
                'description' => 'SlowLoris es un tipo de ataque DoS que permite a una máquina atacante sobrecargar un servidor web o proxy manteniendo abiertas tantas conexiones como sea posible mediante el envío de cabeceras HTTP parciales de forma periódica, pero nunca completando la solicitud. El servidor mantiene cada una de estas conexiones abiertas, esperando la finalización de cada solicitud. Con suficientes conexiones abiertas, el servidor agota sus recursos y deja de responder a nuevas solicitudes, lo que lo hace inaccesible a los usuarios legítimos.'
            ],
            [
                'filename' => 'SlowHTTP.png',
                'title' => 'SlowHTTP',
                'description' => 'SlowHttpTest es una herramienta de ataque DoS que se enfoca en los puntos débiles de la gestión de conexiones HTTP en servidores web. Opera mediante el envío de solicitudes HTTP incompletas o extremadamente lentas, lo que puede agotar los hilos de conexión disponibles en el servidor. Al ocupar estos hilos durante periodos prolongados, el servidor se ve incapaz de atender a usuarios legítimos, lo que efectivamente lo hace inaccesible. Este tipo de ataque es conocido también como Slowloris, aunque difieren en mecanismos específicos.'
            ],
            [
                'filename' => 'CNN.png',
                'title' => 'Red Neuronal Convolucional (CNN)',
                'description' => ' Una red neuronal convulsional es un tipo específico de red neuronal profunda diseñada para procesar datos estructurados en cuadrículas, como imágenes. Las CNN incluyen capas de convolución que aplican filtros a regiones locales de la entrada.'
            ],
            [
                'filename' => 'DNN.png',
                'title' => 'Red Neuronal Profunda (DNN)',
                'description' => 'Una red neuronal profunda es una red neuronal artificial con múltiples capas ocultas entre la capa de entrada y la capa de salida. Puede constar de varias capas, cada una compuesta por múltiples neuronas (nodos) interconectadas.'
            ],
            [
                'filename' => 'CNN-DNN-DIFF.png',
                'title' => 'Aprendizaje supervisado',
                'description' => 'Las CNN son una subclase de DNN diseñada específicamente para tareas de visión por computadora y procesamiento de imágenes, mientras que las DNN son más genéricas y se aplican a una variedad de dominios.'
            ],
            [
                'filename' => 'DifCNN-DNN.png',
                'title' => 'Aprendizaje supervisado',
                'description' => 'Las CNN utilizan capas de convolución para capturar patrones locales en datos bidimensionales, lo que las hace eficaces en el procesamiento de imágenes. Las DNN no tienen estas capas de convolución y se utilizan para tareas más diversas.'
            ],
        ];
    
        return view('educative.lessons.index', compact('imagesInfo'));
    }

    public function test()
    {
        $questions = [
            [
                'question' => ' ¿Cuál es la principal diferencia entre un ataque DoS y un ataque DDoS?',
                'options' => ['Un ataque DoS utiliza múltiples sistemas infectados, mientras que un ataque DDoS solo utiliza uno', 
                    'Un ataque DDoS puede involucrar cientos o incluso miles de direcciones IP únicas, mientras que un ataque DoS generalmente proviene de una única fuente.', 
                    'Un ataque DDoS es menos potente que un ataque DoS.', 
                    'No hay diferencia; ambos términos se usan indistintamente.'
                ],
                    'correct' => 1
            ],
            [
                'question' => '¿Qué método utilizan los ataques DDoS para hacer inaccesible un sistema objetivo a los usuarios legítimos?',
                'options' => ['Infectar el sistema objetivo con malware.', 
                'Sobrecargar el sistema objetivo con un alto volumen de tráfico de red, como solicitudes HTTP, paquetes TCP o UDP.', 
                'Cambiar las contraseñas de usuario del sistema objetivo.', 
                'Desconectar físicamente el sistema objetivo de la red.'
                ],
                    'correct' => 1
            ],
            [
                'question' => '¿Qué caracteriza específicamente a un ataque DosGoldenEye?',
                'options' => ['Es un tipo de malware que roba información de tarjetas de crédito',
                'Es un virus que cifra los archivos del usuario, pidiendo un rescate para desbloquearlos.',
                'Es un software utilizado para mejorar la seguridad de los servidores web.',
                'Es una herramienta de ataque DoS que se enfoca en servidores web mediante el envío de solicitudes maliciosas para sobrecargar el sistema.'
                ],
                    'correct' => 3
            ],

            [
                'question' => '¿Cuál es la característica distintiva del ataque DosHulk en comparación con otros tipos de ataques DDoS?',
                'options' => ['Utiliza millones de dispositivos infectados para lanzar el ataque.', 
                'Enfoca el ataque únicamente a través de solicitudes UDP.', 
                'Mantiene un pequeño número de conexiones HTTP abiertas durante mucho tiempo, agotando los recursos del servidor.', 
                'Se basa en ataques físicos al hardware del servidor.'
                ],
                    'correct' => 2
            ],
            [
                'question' => '¿Cómo opera el ataque DosSlowHttpTest en comparación con otros tipos de ataques DDoS?',
                'options' => ['Generando un gran volumen de tráfico para sobrecargar rápidamente el servidor.', 
                'Utilizando un número limitado de dispositivos para lanzar ataques focalizados.', 
                'Manteniendo múltiples conexiones abiertas a un servidor de manera lenta y persistente para agotar los recursos.', 
                'Atacando exclusivamente a través de la red Tor para anonimizar sus acciones.'
                ],
                    'correct' => 2
            ],
            [
                'question' => '¿Cuál es el método utilizado por DosSlowLoris para sobrecargar y hacer inaccesible un servidor web?',
                'options' => ['Envía un volumen extremadamente alto de solicitudes legítimas en un corto período de tiempo para consumir el ancho de banda del servidor.', 
                'Infiltra el servidor con malware para interrumpir directamente su funcionamiento.', 
                'Mantiene abiertas tantas conexiones como sea posible mediante el envío periódico de cabeceras HTTP parciales, sin completar nunca la solicitud.', 
                'Corrompe archivos críticos del sistema operativo del servidor a través de vulnerabilidades de seguridad.'
                ],
                    'correct' => 2
            ],
            [
                'question' => '¿Cuál de las siguientes opciones describe mejor el proceso de aprendizaje en una Red Neuronal Profunda (DNN)?',
                'options' => ['El aprendizaje ocurre a través de un proceso manual donde los expertos ajustan los pesos de las conexiones entre neuronas basándose en su experiencia.', 
                'Las neuronas en una capa se conectan aleatoriamente a las neuronas en la capa siguiente sin ajustes durante el entrenamiento.', 
                'El entrenamiento de una DNN se basa en el uso exclusivo de datos de entrada sin necesidad de ajustar los pesos de las conexiones entre neuronas.', 
                'El aprendizaje implica ajustar los pesos de las conexiones entre neuronas a través del descenso de gradiente y la retropropagación del error para minimizar una función de pérdida.'
                ],
                    'correct' => 3
            ],
            [
                'question' => '¿Cuál es el principal beneficio de utilizar capas de convolución en una Red Neuronal Convolucional (CNN) para el procesamiento de imágenes?',
                'options' => ['Permite que la red procese imágenes más rápidamente al reducir su resolución antes del entrenamiento.', 
                'Facilita el entrenamiento de la red al requerir menos datos de entrada para el aprendizaje efectivo.', 
                'Las capas de convolución aplican operaciones de convolución a la entrada, lo que permite a la red detectar características locales como bordes, texturas y patrones en imágenes.', 
                'Elimina la necesidad de capas de agrupación (pooling), simplificando así la arquitectura de la red.'
                ],
                    'correct' => 2
            ],
            [
                'question' => '¿Cuál de las siguientes afirmaciones describe mejor la diferencia fundamental entre las CNN y las DNN?',
                'options' => ['Las CNN solo pueden procesar datos de texto, mientras que las DNN están diseñadas exclusivamente para imágenes y vídeos.', 
                'Las CNN y las DNN son idénticas en términos de arquitectura y aplicación, diferenciándose solo en el nombre.', 
                'Las CNN utilizan capas de convolución y agrupación para procesar eficazmente patrones locales en datos bidimensionales, como imágenes, haciéndolas ideales para tareas de visión por computadora. Las DNN, siendo más generales, se aplican a una variedad más amplia de dominios sin capas de convolución específicas.', 
                'Las DNN son incapaces de aprender de los datos, mientras que las CNN están equipadas con inteligencia artificial avanzada que les permite autoaprender sin intervención humana.'
                ],
                    'correct' => 2
            ],
            [
                'question' => '¿Cuál de las siguientes opciones NO es una razón común por la cual se llevan a cabo ataques de denegación de servicio (DDoS)?',
                'options' => ['Para probar la resistencia y seguridad de los propios sistemas informáticos del atacante.', 
                'Extorsión, amenazando con lanzar un ataque DDoS a menos que la víctima pague un rescate.', 
                'Competencia o rivalidad empresarial, donde una empresa ataca a otra para interrumpir sus servicios en línea y obtener una ventaja competitiva.', 
                'Activismo, donde grupos o individuos lanzan ataques DDoS como forma de protesta contra sitios web o servicios en línea con los que no están de acuerdo.'
                ],
                    'correct' => 0
            ]
        ];

        return view('educative.lessons.test',compact('questions'));
    }

    public function submitTest(Request $request)
    {
        dd($request->all());
        $answers = $request->input('answers'); 

        return back()->with('success', 'Test enviado correctamente.'); // Redirige de vuelta con un mensaje de éxito
    }

}
