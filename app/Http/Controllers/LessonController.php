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

}
