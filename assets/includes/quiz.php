<?php
header('Content-Type: application/json');

$titulo = $_POST['titulo'] ?? '';

$preguntas = [
    // Códigos de estado HTTP
    'respuestas-informativas' => [
        'pregunta' => '¿Qué indican los códigos de estado HTTP 1xx?',
        'opciones' => [
            'A) Errores del servidor',
            'B) Redirecciones temporales',
            'C) Que la solicitud fue recibida y está en proceso',
            'D) Que la respuesta fue exitosa',
        ],
        'respuesta_correcta' => 'C) Que la solicitud fue recibida y está en proceso'
    ],

    'peticiones-correctas' => [
        'pregunta' => '¿Qué indica el código de estado HTTP 201 (Created)?',
        'opciones' => [
            'A) Que la solicitud fue aceptada pero aún no procesada',
            'B) Que el recurso fue encontrado pero no modificado',
            'C) Que se creó un nuevo recurso como resultado de la solicitud',
            'D) Que hubo un error del servidor al procesar la solicitud',
        ],
        'respuesta_correcta' => 'C) Que se creó un nuevo recurso como resultado de la solicitud'
    ],

    'redirecciones' => [
        'pregunta' => '¿Qué indica el código de estado HTTP 301 (Moved Permanently)?',
        'opciones' => [
            'A) Que el recurso está temporalmente en otra ubicación',
            'B) Que el recurso se ha movido de forma permanente a una nueva URL',
            'C) Que la solicitud debe repetirse usando el método GET',
            'D) Que el recurso no ha sido modificado desde la última solicitud',
        ],
        'respuesta_correcta' => 'B) Que el recurso se ha movido de forma permanente a una nueva URL'
    ],

    'errores-del-cliente' => [
        'pregunta' => '¿Qué indica el código de estado HTTP 403 (Forbidden)?',
        'opciones' => [
            'A) Que la autenticación es requerida y no fue proporcionada',
            'B) Que el servidor no permite el acceso al recurso, incluso si el cliente está autenticado',
            'C) Que el recurso solicitado no existe en el servidor',
            'D) Que el método HTTP usado no es compatible con el recurso',
        ],
        'respuesta_correcta' => 'B) Que el servidor no permite el acceso al recurso, incluso si el cliente está autenticado'
    ],

    'errores-del-servidor' => [
        'pregunta' => '¿Qué indica el código de estado HTTP 503 (Service Unavailable)?',
        'opciones' => [
            'A) El servidor encontró un error genérico',
            'B) El servidor no soporta la funcionalidad solicitada',
            'C) El servidor está temporalmente fuera de servicio, por mantenimiento o sobrecarga',
            'D) El servidor no tiene suficiente espacio para completar la solicitud',
        ],
        'respuesta_correcta' => 'C) El servidor está temporalmente fuera de servicio, por mantenimiento o sobrecarga'
    ],
    // Códigos de estado HTTP

    // Organizaciones relacionadas con Internet
    'network-information-center-chile-nic-chile' => [
        'pregunta' => '¿Cuál es la función principal de NIC Chile en Internet?',
        'opciones' => [
            'A) Gestionar el registro y administración de dominios bajo el ccTLD .CL',
            'B) Controlar el tráfico de datos internacional hacia Chile',
            'C) Proveer servicios de hosting y almacenamiento web en Chile',
            'D) Regular el acceso a Internet para usuarios en Chile',
        ],
        'respuesta_correcta' => 'A) Gestionar el registro y administración de dominios bajo el ccTLD .CL'
    ],

    'internet-corporation-for-assigned-names-and-numbers-icann' => [
        'pregunta' => '¿Cuál es una de las funciones principales de ICANN en Internet?',
        'opciones' => [
            'A) Controlar el contenido y acceso a los sitios web',
            'B) Administrar el sistema de nombres de dominio (DNS) y coordinar direcciones IP',
            'C) Proveer servicios de alojamiento web a nivel global',
            'D) Regular la velocidad de conexión a Internet en cada país',
        ],
        'respuesta_correcta' => 'B) Administrar el sistema de nombres de dominio (DNS) y coordinar direcciones IP'
    ],

    'internet-assigned-numbers-authority-iana' => [
        'pregunta' => '¿Cuál es una función principal de la Internet Assigned Numbers Authority (IANA)?',
        'opciones' => [
            'A) Proveer servicios de hosting para sitios web',
            'B) Gestionar la zona raíz del DNS y asignar direcciones IP a nivel mundial',
            'C) Controlar el contenido publicado en Internet',
            'D) Desarrollar navegadores web para usuarios finales',
        ],
        'respuesta_correcta' => 'B) Gestionar la zona raíz del DNS y asignar direcciones IP a nivel mundial'
    ],

    'world-wide-web-consortium-w3c' => [
        'pregunta' => '¿Cuál es una función principal del World Wide Web Consortium (W3C)?',
        'opciones' => [
            'A) Desarrollar y publicar estándares abiertos para la web, como HTML y CSS',
            'B) Proveer servicios de alojamiento web para empresas',
            'C) Controlar el acceso a Internet en diferentes países',
            'D) Supervisar la asignación de direcciones IP a nivel mundial',
        ],
        'respuesta_correcta' => 'A) Desarrollar y publicar estándares abiertos para la web, como HTML y CSS'
    ],

    'free-software-foundation-fsf' => [
        'pregunta' => '¿Cuál es la misión principal de la Free Software Foundation (FSF)?',
        'opciones' => [
            'A) Promover la venta de software propietario y licenciado',
            'B) Defender la libertad de los usuarios para usar, estudiar, modificar y compartir software',
            'C) Desarrollar sistemas operativos cerrados para empresas',
            'D) Proveer soporte técnico para software comercial',
        ],
        'respuesta_correcta' => 'B) Defender la libertad de los usuarios para usar, estudiar, modificar y compartir software'
    ],

    'brigada-del-ciber-crimen-de-la-policia-de-investigacion-pdi' => [
        'pregunta' => '¿Cuál es una función principal de la Brigada del Cibercrimen de la PDI en Chile?',
        'opciones' => [
            'A) Investigar y combatir delitos cometidos a través de medios informáticos y digitales',
            'B) Desarrollar software para la policía chilena',
            'C) Regular el acceso a Internet en Chile',
            'D) Proveer servicios de seguridad para empresas privadas',
        ],
        'respuesta_correcta' => 'A) Investigar y combatir delitos cometidos a través de medios informáticos y digitales'
    ],

    'internet-engineering-task-force-ietf' => [
        'pregunta' => '¿Cuál es una función principal de la Internet Engineering Task Force (IETF)?',
        'opciones' => [
            'A) Desarrollar y promover estándares técnicos abiertos para los protocolos de Internet',
            'B) Supervisar la asignación de direcciones IP a nivel mundial',
            'C) Gestionar el registro de dominios geográficos como .cl',
            'D) Proveer servicios de alojamiento para páginas web',
        ],
        'respuesta_correcta' => 'A) Desarrollar y promover estándares técnicos abiertos para los protocolos de Internet'
    ],
    // Organizaciones relacionadas con Internet

    // Términos relacionadas con Internet
    'tcp-ip' => [
        'pregunta' => '¿Cuál es la función principal del protocolo TCP dentro del conjunto TCP/IP?',
        'opciones' => [
            'A) Dirigir y enrutar los paquetes de datos entre dispositivos',
            'B) Garantizar que los datos lleguen completos, en orden y sin errores',
            'C) Asignar direcciones IP únicas a cada dispositivo',
            'D) Dividir la información en capas para facilitar su transmisión',
        ],
        'respuesta_correcta' => 'B) Garantizar que los datos lleguen completos, en orden y sin errores'
    ],

    'bandwidth' => [
        'pregunta' => '¿Qué representa el ancho de banda (bandwidth) en redes e Internet?',
        'opciones' => [
            'A) La cantidad máxima de datos que pueden transmitirse en un periodo de tiempo',
            'B) La velocidad real a la que se reciben los datos en un dispositivo',
            'C) La calidad de la señal de la conexión inalámbrica',
            'D) El tamaño físico de la conexión de red',
        ],
        'respuesta_correcta' => 'A) La cantidad máxima de datos que pueden transmitirse en un periodo de tiempo'
    ],

    'cloud-computing' => [
        'pregunta' => '¿Cuál es una ventaja principal del cloud computing (computación en la nube)?',
        'opciones' => [
            'A) Requiere que los usuarios tengan infraestructura física propia',
            'B) Permite escalar recursos según la demanda y pagar solo por lo usado',
            'C) Limita el acceso a aplicaciones solo desde una computadora local',
            'D) No ofrece respaldo automático de datos',
        ],
        'respuesta_correcta' => 'B) Permite escalar recursos según la demanda y pagar solo por lo usado'
    ],

    'webapps' => [
        'pregunta' => '¿Qué característica distingue principalmente a una WebApp respecto a una aplicación tradicional instalada?',
        'opciones' => [
            'A) Se ejecuta directamente en un navegador y no requiere instalación en el dispositivo',
            'B) Solo funciona en sistemas operativos específicos',
            'C) No puede comunicarse con servidores remotos',
            'D) Siempre funciona sin conexión a Internet',
        ],
        'respuesta_correcta' => 'A) Se ejecuta directamente en un navegador y no requiere instalación en el dispositivo'
    ],

    'phishing' => [
        'pregunta' => '¿Qué es el phishing en el contexto de la seguridad informática?',
        'opciones' => [
            'A) Un método para mejorar la velocidad de conexión a Internet',
            'B) Un tipo de ciberataque que busca engañar a las personas para robar información confidencial',
            'C) Un protocolo para encriptar datos en redes inalámbricas',
            'D) Una técnica para optimizar el almacenamiento en la nube',
        ],
        'respuesta_correcta' => 'B) Un tipo de ciberataque que busca engañar a las personas para robar información confidencial'
    ],

    'https' => [
        'pregunta' => '¿Cuál es la principal diferencia entre HTTP y HTTPS?',
        'opciones' => [
            'A) HTTPS permite transmitir datos en texto plano sin cifrado',
            'B) HTTPS cifra la información para proteger los datos entre navegador y servidor',
            'C) HTTP usa certificados digitales mientras que HTTPS no',
            'D) HTTP es más seguro que HTTPS para transmitir información sensible',
        ],
        'respuesta_correcta' => 'B) HTTPS cifra la información para proteger los datos entre navegador y servidor'
    ],

    'saas' => [
        'pregunta' => '¿Qué caracteriza al modelo de software SaaS (Software as a Service)?',
        'opciones' => [
            'A) El software se instala localmente en cada dispositivo y se compra con licencia permanente',
            'B) El software se ofrece a través de Internet, accesible desde cualquier dispositivo sin instalación local',
            'C) El usuario debe mantener y actualizar el software manualmente',
            'D) Solo está disponible para uso en una única plataforma específica',
        ],
        'respuesta_correcta' => 'B) El software se ofrece a través de Internet, accesible desde cualquier dispositivo sin instalación local'
    ],
    // Términos relacionadas con Internet

    // Términos y siglas relacionadas con Internet y el medio
    'cybersquatting' => [
        'pregunta' => '¿Qué es el cybersquatting o ciberocupación en Internet?',
        'opciones' => [
            'A) Registrar nombres de dominio similares a marcas reconocidas sin derechos legítimos para obtener beneficios ilícitos',
            'B) Proveer servicios gratuitos de registro de dominios',
            'C) Crear sitios web legítimos para empresas nuevas',
            'D) Desarrollar software para la gestión de dominios web',
        ],
        'respuesta_correcta' => 'A) Registrar nombres de dominio similares a marcas reconocidas sin derechos legítimos para obtener beneficios ilícitos'
    ],

    'rtfm' => [
        'pregunta' => '¿Qué significa la sigla RTFM en ambientes tecnológicos?',
        'opciones' => [
            'A) Read The Friendly Manual, que invita a leer documentación amigable',
            'B) Read The F*ing Manual, una expresión que sugiere leer el manual antes de preguntar',
            'C) Run The File Manager, que indica ejecutar el gestor de archivos',
            'D) Reset The Firmware Manager, que refiere a reiniciar el firmware',
        ],
        'respuesta_correcta' => 'B) Read The F*ing Manual, una expresión que sugiere leer el manual antes de preguntar'
    ],

    'capa-ocho' => [
        'pregunta' => '¿Qué significa el término humorístico "capa ocho" en informática y redes?',
        'opciones' => [
            'A) Un nivel adicional en el modelo OSI para protocolos avanzados',
            'B) Errores causados por el usuario y no por fallos técnicos del sistema',
            'C) Una capa de seguridad extra para proteger la red',
            'D) Un tipo de hardware especializado para redes',
        ],
        'respuesta_correcta' => 'B) Errores causados por el usuario y no por fallos técnicos del sistema'
    ],

    'regla-34-de-internet' => [
        'pregunta' => '¿Qué expresa la Regla 34 de Internet?',
        'opciones' => [
            'A) Que toda información en Internet es verificada y confiable',
            'B) Que si algo existe, hay contenido pornográfico relacionado con ello, sin excepciones',
            'C) Que Internet es seguro para todo tipo de usuarios',
            'D) Que todas las redes sociales tienen las mismas reglas de uso',
        ],
        'respuesta_correcta' => 'B) Que si algo existe, hay contenido pornográfico relacionado con ello, sin excepciones'
    ],

    'netiquette' => [
        'pregunta' => '¿Qué es la netiquette en el contexto de la comunicación en línea?',
        'opciones' => [
            'A) Un conjunto de normas de cortesía y comportamiento adecuado al comunicarse en medios digitales',
            'B) Una ley internacional que regula el uso de Internet',
            'C) Un software para controlar el spam en correos electrónicos',
            'D) Un protocolo para encriptar mensajes en chats',
        ],
        'respuesta_correcta' => 'A) Un conjunto de normas de cortesía y comportamiento adecuado al comunicarse en medios digitales'
    ],

    'ley-de-moore' => [
        'pregunta' => '¿Qué establece la Ley de Moore respecto a los transistores en un chip?',
        'opciones' => [
            'A) Que el número de transistores se mantiene constante con el tiempo',
            'B) Que aproximadamente cada dos años se duplica el número de transistores en un chip',
            'C) Que el tamaño de los transistores crece exponencialmente',
            'D) Que los chips se vuelven obsoletos cada año',
        ],
        'respuesta_correcta' => 'B) Que aproximadamente cada dos años se duplica el número de transistores en un chip'
    ],

    'metadata' => [
        'pregunta' => '¿Qué son los metadatos (metadata) en el contexto digital?',
        'opciones' => [
            'A) Datos que describen otros datos, proporcionando información adicional para su organización y gestión',
            'B) Archivos de gran tamaño que contienen solo imágenes y videos',
            'C) Protocolos para enviar datos en redes de alta velocidad',
            'D) Programas que eliminan información redundante en documentos',
        ],
        'respuesta_correcta' => 'A) Datos que describen otros datos, proporcionando información adicional para su organización y gestión'
    ],
    // Términos y siglas relacionadas con Internet y el medio

    // Formato APA
    'que-es-el-formato-apa-y-su-origen' => [
        'pregunta' => '¿Cuál es el principal propósito del formato APA en la escritura académica?',
        'opciones' => [
            'A) Facilitar la comunicación clara, ordenada y uniforme en trabajos académicos, especialmente en ciencias sociales',
            'B) Proveer un formato para escribir únicamente en psicología clínica',
            'C) Obligar a los autores a usar un tipo de letra específico en todos sus textos',
            'D) Limitar el uso de citas para que los textos sean originales',
        ],
        'respuesta_correcta' => 'A) Facilitar la comunicación clara, ordenada y uniforme en trabajos académicos, especialmente en ciencias sociales'
    ],
    // Formato APA

    // Formatos de compresión
    'que-es-tar' => [
        'pregunta' => '¿Cuál es la función principal del formato TAR en sistemas Unix y Linux?',
        'opciones' => [
            'A) Comprimir archivos para reducir su tamaño',
            'B) Agrupar múltiples archivos y directorios en un solo archivo conservando estructura y permisos',
            'C) Eliminar archivos duplicados automáticamente',
            'D) Acceder directamente a archivos individuales sin necesidad de descomprimir',
        ],
        'respuesta_correcta' => 'B) Agrupar múltiples archivos y directorios en un solo archivo conservando estructura y permisos'
    ],

    'que-es-zip' => [
        'pregunta' => '¿Cuál es una ventaja principal del formato ZIP frente al formato TAR?',
        'opciones' => [
            'A) ZIP permite agrupar archivos sin comprimirlos',
            'B) ZIP comprime cada archivo individualmente y permite extraer archivos específicos sin descomprimir todo',
            'C) ZIP solo funciona en sistemas Windows',
            'D) ZIP elimina automáticamente archivos duplicados al comprimir',
        ],
        'respuesta_correcta' => 'B) ZIP comprime cada archivo individualmente y permite extraer archivos específicos sin descomprimir todo'
    ],

    'que-es-rar' => [
        'pregunta' => '¿Cuál es una característica destacada del formato RAR en comparación con ZIP?',
        'opciones' => [
            'A) No permite dividir archivos en partes o volúmenes',
            'B) Utiliza algoritmos de compresión más avanzados y permite dividir archivos en volúmenes',
            'C) Es un formato exclusivo para sistemas Unix',
            'D) No soporta protección con contraseña ni cifrado',
        ],
        'respuesta_correcta' => 'B) Utiliza algoritmos de compresión más avanzados y permite dividir archivos en volúmenes'
    ],

    'que-es-sit' => [
        'pregunta' => '¿Para qué era especialmente útil el formato de compresión SIT (StuffIt) en sistemas Macintosh clásicos?',
        'opciones' => [
            'A) Para comprimir archivos sin preservar metadatos específicos del sistema Mac',
            'B) Para preservar atributos y metadatos propios de macOS, manteniendo la integridad de archivos y recursos',
            'C) Para comprimir archivos únicamente en sistemas Windows',
            'D) Para convertir archivos en formatos universales como ZIP o RAR',
        ],
        'respuesta_correcta' => 'B) Para preservar atributos y metadatos propios de macOS, manteniendo la integridad de archivos y recursos'
    ],

    'que-es-gzip' => [
        'pregunta' => '¿Cuál es la característica principal del formato de compresión GZIP?',
        'opciones' => [
            'A) Comprime múltiples archivos y carpetas en un solo archivo',
            'B) Comprime solo un archivo a la vez y se suele combinar con TAR para agrupar varios archivos',
            'C) Es un formato exclusivo de Windows para comprimir archivos',
            'D) Permite acceder a archivos individuales sin necesidad de descomprimir',
        ],
        'respuesta_correcta' => 'B) Comprime solo un archivo a la vez y se suele combinar con TAR para agrupar varios archivos'
    ],

    'que-es-cab' => [
        'pregunta' => '¿Cuál es el uso principal del formato de compresión CAB en sistemas Windows?',
        'opciones' => [
            'A) Agrupar y comprimir archivos para facilitar la instalación de software y actualizaciones',
            'B) Comprimir archivos multimedia para reproducir en dispositivos portátiles',
            'C) Crear copias de seguridad completas del sistema operativo',
            'D) Enviar archivos cifrados por correo electrónico',
        ],
        'respuesta_correcta' => 'A) Agrupar y comprimir archivos para facilitar la instalación de software y actualizaciones'
    ],

    'que-es-bzip2' => [
        'pregunta' => '¿Cuál es una característica principal del formato de compresión BZIP2?',
        'opciones' => [
            'A) Comprime archivos rápidamente pero con menor tasa de compresión que ZIP',
            'B) Está diseñado exclusivamente para sistemas Windows',
            'C) No puede comprimir archivos grandes ni dividirlos en bloques',
            'D) Utiliza el método Burrows-Wheeler Transform para una alta tasa de compresión, especialmente en archivos grandes',
        ],
        'respuesta_correcta' => 'D) Utiliza el método Burrows-Wheeler Transform para una alta tasa de compresión, especialmente en archivos grandes'
    ],
    // Formatos de compresión

    // Librerías de JS
    'moment-js' => [
        'pregunta' => '¿Cuál es una función principal de la librería Moment.js en JavaScript?',
        'opciones' => [
            'A) Crear gráficos interactivos en la web',
            'B) Gestionar bases de datos en aplicaciones web',
            'C) Optimizar el rendimiento de animaciones CSS',
            'D) Facilitar el manejo, formateo y cálculo de fechas y horas',
        ],
        'respuesta_correcta' => 'D) Facilitar el manejo, formateo y cálculo de fechas y horas'
    ],

    'anime-js' => [
        'pregunta' => '¿Cuál es la función principal de la librería Anime.js en JavaScript?',
        'opciones' => [
            'A) Manipular bases de datos en tiempo real',
            'B) Crear gráficos estáticos para informes',
            'C) Optimizar la carga de páginas web',
            'D) Facilitar la creación de animaciones fluidas y controladas en sitios web',
        ],
        'respuesta_correcta' => 'D) Facilitar la creación de animaciones fluidas y controladas en sitios web'
    ],

    'chart-js' => [
        'pregunta' => '¿Cuál es el propósito principal de la librería Chart.js en JavaScript?',
        'opciones' => [
            'A) Crear formularios interactivos para la entrada de datos',
            'B) Manipular el DOM para animaciones complejas',
            'C) Gestionar el almacenamiento local del navegador',
            'D) Crear gráficos interactivos y visualizaciones de datos en la web',
        ],
        'respuesta_correcta' => 'D) Crear gráficos interactivos y visualizaciones de datos en la web'
    ],

    'hammer-js' => [
        'pregunta' => '¿Cuál es la función principal de la librería Hammer.js en JavaScript?',
        'opciones' => [
            'A) Crear animaciones complejas para sitios web',
            'B) Gestionar el almacenamiento local del navegador',
            'C) Crear gráficos interactivos',
            'D) Detectar y manejar gestos táctiles en dispositivos con pantalla táctil',
        ],
        'respuesta_correcta' => 'D) Detectar y manejar gestos táctiles en dispositivos con pantalla táctil'
    ],

    'glimmer-js' => [
        'pregunta' => '¿Cuál es el principal beneficio de usar Glimmer.js para construir interfaces de usuario?',
        'opciones' => [
            'A) Permite manipular directamente el DOM en cada actualización',
            'B) Ofrece una solución completa con muchas funcionalidades integradas',
            'C) Utiliza una sintaxis basada en JSX exclusiva de React',
            'D) Usa un motor de renderizado reactivo que actualiza solo lo necesario, optimizando el rendimiento',
        ],
        'respuesta_correcta' => 'D) Usa un motor de renderizado reactivo que actualiza solo lo necesario, optimizando el rendimiento'
    ],

    'd3-js' => [
        'pregunta' => '¿Cuál es la característica principal que distingue a D3.js de otras librerías de visualización de datos como Chart.js?',
        'opciones' => [
            'A) Ofrece gráficos prediseñados y fáciles de usar',
            'B) Se limita a gráficos estáticos sin animaciones',
            'C) Funciona exclusivamente con canvas en lugar de SVG',
            'D) Permite un control total y personalizado sobre cada aspecto visual mediante manipulación directa del DOM y data binding',
        ],
        'respuesta_correcta' => 'D) Permite un control total y personalizado sobre cada aspecto visual mediante manipulación directa del DOM y data binding'
    ],

    'math-js' => [
        'pregunta' => '¿Cuál es una ventaja clave de usar Math.js en proyectos JavaScript?',
        'opciones' => [
            'A) Solo realiza operaciones básicas como suma y resta',
            'B) Requiere usar un lenguaje aparte para cálculos complejos',
            'C) No permite evaluar expresiones matemáticas desde texto',
            'D) Permite realizar cálculos avanzados, incluyendo álgebra, matrices y evaluación dinámica de expresiones',
        ],
        'respuesta_correcta' => 'D) Permite realizar cálculos avanzados, incluyendo álgebra, matrices y evaluación dinámica de expresiones'
    ],
    // Librerías de JS

    // Frameworks de JS
    'angularjs' => [
        'pregunta' => '¿Cuál es una característica clave que diferencia a AngularJS de otros frameworks JavaScript tradicionales?',
        'opciones' => [
            'A) Solo permite construir sitios web estáticos sin interactividad',
            'B) Utiliza únicamente plantillas HTML sin lógica de programación',
            'C) Requiere manejar el DOM manualmente para actualizar la interfaz',
            'D) Ofrece data binding bidireccional, lo que sincroniza automáticamente la vista con el modelo de datos',
        ],
        'respuesta_correcta' => 'D) Ofrece data binding bidireccional, lo que sincroniza automáticamente la vista con el modelo de datos'
    ],

    'react' => [
        'pregunta' => '¿Qué característica clave distingue a React en la gestión de interfaces de usuario?',
        'opciones' => [
            'A) Usa exclusivamente HTML sin lógica de JavaScript',
            'B) Requiere manipulación directa del DOM en cada cambio',
            'C) Utiliza un Virtual DOM para optimizar las actualizaciones de la interfaz',
            'D) Solo funciona en aplicaciones móviles nativas',
        ],
        'respuesta_correcta' => 'C) Utiliza un Virtual DOM para optimizar las actualizaciones de la interfaz'
    ],

    'vue-js' => [
        'pregunta' => '¿Qué ventaja clave ofrece Vue.js como framework progresivo?',
        'opciones' => [
            'A) Solo puede usarse en aplicaciones móviles',
            'B) Puede adoptarse de forma gradual, desde pequeños componentes hasta aplicaciones completas',
            'C) Requiere obligatoriamente Node.js para funcionar',
            'D) No permite usar HTML ni CSS en los componentes',
        ],
        'respuesta_correcta' => 'B) Puede adoptarse de forma gradual, desde pequeños componentes hasta aplicaciones completas'
    ],

    'ember-js' => [
        'pregunta' => '¿Cuál es una característica principal de Ember.js como framework?',
        'opciones' => [
            'A) Sigue el enfoque de “convención sobre configuración” para facilitar el desarrollo',
            'B) Requiere escribir toda la lógica en HTML puro',
            'C) No permite el uso de sistemas de rutas en aplicaciones',
            'D) Solo sirve para desarrollar aplicaciones móviles sin navegador',
        ],
        'respuesta_correcta' => 'A) Sigue el enfoque de “convención sobre configuración” para facilitar el desarrollo'
    ],

    'node-js' => [
        'pregunta' => '¿Qué característica distingue a Node.js de otros entornos de servidor tradicionales?',
        'opciones' => [
            'A) Solo funciona en navegadores con el motor V8',
            'B) Bloquea la ejecución hasta que termine cada operación',
            'C) Utiliza un modelo de entrada/salida no bloqueante y basado en eventos',
            'D) Requiere compilar el código JavaScript antes de ejecutarlo',
        ],
        'respuesta_correcta' => 'C) Utiliza un modelo de entrada/salida no bloqueante y basado en eventos'
    ],

    'next-js' => [
        'pregunta' => '¿Qué ventaja ofrece Next.js al renderizar contenido en el servidor?',
        'opciones' => [
            'A) Permite ejecutar código PHP directamente dentro de componentes React',
            'B) Mejora el rendimiento y el SEO al generar contenido antes de enviarlo al cliente',
            'C) Reemplaza completamente la necesidad de usar React en el desarrollo web',
            'D) Solo funciona si el usuario tiene una conexión a Internet de alta velocidad',
        ],
        'respuesta_correcta' => 'B) Mejora el rendimiento y el SEO al generar contenido antes de enviarlo al cliente'
    ],

    'backbone-js' => [
        'pregunta' => '¿Cuál es una característica principal de Backbone.js?',
        'opciones' => [
            'A) Usa el Virtual DOM como React para mejorar el rendimiento',
            'B) Requiere el uso obligatorio de TypeScript para definir modelos y vistas',
            'C) Proporciona una estructura basada en el patrón MVC para organizar aplicaciones web',
            'D) Funciona únicamente con bases de datos NoSQL como MongoDB',
        ],
        'respuesta_correcta' => 'C) Proporciona una estructura basada en el patrón MVC para organizar aplicaciones web'
    ],
    // Frameworks de JS

    // Open Source
    'que-es-wordpress' => [
        'pregunta' => '¿Cuál es el objetivo principal de WordPress como plataforma?',
        'opciones' => [
            'A) Facilitar la creación y gestión de sitios web sin necesidad de conocimientos técnicos avanzados',
            'B) Proporcionar un entorno exclusivo para programadores backend con PHP y MySQL',
            'C) Ofrecer un sistema cerrado y privado para grandes corporaciones',
            'D) Reemplazar todos los demás CMS como Drupal y Joomla mediante licencias exclusivas',
        ],
        'respuesta_correcta' => 'A) Facilitar la creación y gestión de sitios web sin necesidad de conocimientos técnicos avanzados'
    ],

    'que-es-oscommerce' => [
        'pregunta' => '¿Cuál es el objetivo principal de osCommerce?',
        'opciones' => [
            'A) Brindar una solución de código abierto para crear y gestionar tiendas en línea',
            'B) Ofrecer un sistema de gestión de contenido exclusivamente para blogs personales',
            'C) Reemplazar servidores Apache por servicios en la nube de forma automática',
            'D) Diseñar interfaces gráficas para aplicaciones móviles sin conexión a internet',
        ],
        'respuesta_correcta' => 'A) Brindar una solución de código abierto para crear y gestionar tiendas en línea'
    ],

    'que-es-joomla' => [
        'pregunta' => '¿Cuál es el objetivo principal del CMS Joomla?',
        'opciones' => [
            'A) Diseñar aplicaciones móviles nativas para Android sin utilizar un navegador',
            'B) Automatizar bases de datos SQL para sistemas embebidos',
            'C) Proporcionar una plataforma flexible y extensible para crear y administrar sitios web y aplicaciones en línea',
            'D) Ejecutar juegos en línea a través de una red descentralizada',
        ],
        'respuesta_correcta' => 'C) Proporcionar una plataforma flexible y extensible para crear y administrar sitios web y aplicaciones en línea'
    ],

    'que-es-phpcollab' => [
        'pregunta' => '¿Cuál es el objetivo principal de phpCollab?',
        'opciones' => [
            'A) Crear tiendas en línea con sistemas de pago integrados',
            'B) Ofrecer una plataforma de código abierto para la gestión de proyectos y colaboración en línea',
            'C) Desarrollar aplicaciones móviles nativas para Android e iOS',
            'D) Administrar bases de datos SQL en tiempo real',
        ],
        'respuesta_correcta' => 'B) Ofrecer una plataforma de código abierto para la gestión de proyectos y colaboración en línea'
    ],

    'que-es-openbiblio' => [
        'pregunta' => '¿Cuál es el objetivo principal de OpenBiblio?',
        'opciones' => [
            'A) Ofrecer una solución completa y fácil de usar para la automatización y gestión de bibliotecas',
            'B) Crear plataformas de comercio electrónico para tiendas online',
            'C) Desarrollar aplicaciones móviles para gestión de usuarios',
            'D) Administrar redes sociales y contenidos digitales',
        ],
        'respuesta_correcta' => 'A) Ofrecer una solución completa y fácil de usar para la automatización y gestión de bibliotecas'
    ],

    'que-es-drupal' => [
        'pregunta' => '¿Cuál es el objetivo principal de Drupal?',
        'opciones' => [
            'A) Crear aplicaciones móviles nativas para iOS y Android',
            'B) Desarrollar sistemas operativos para dispositivos embebidos',
            'C) Gestionar bases de datos relacionales exclusivamente',
            'D) Proporcionar una plataforma flexible y robusta para la creación y administración de sitios web',
        ],
        'respuesta_correcta' => 'D) Proporcionar una plataforma flexible y robusta para la creación y administración de sitios web'
    ],

    'que-es-moodle' => [
        'pregunta' => '¿Cuál es el objetivo principal de Moodle?',
        'opciones' => [
            'A) Desarrollar aplicaciones móviles para comunicación interna',
            'B) Ofrecer herramientas para el comercio electrónico y ventas en línea',
            'C) Gestionar bases de datos empresariales y análisis financiero',
            'D) Proporcionar una plataforma accesible, flexible y personalizable para la creación y gestión de cursos en línea',
        ],
        'respuesta_correcta' => 'D) Proporcionar una plataforma accesible, flexible y personalizable para la creación y gestión de cursos en línea'
    ],
    // Open Source

    // Extensiones
    'que-es-la-extension-svg' => [
        'pregunta' => '¿Cuál es la principal característica del formato .SVG (Scalable Vector Graphics)?',
        'opciones' => [
            'A) Permite trabajar con gráficos vectoriales que no pierden resolución al cambiar su tamaño',
            'B) Es un formato exclusivo para imágenes rasterizadas como JPEG o PNG',
            'C) No permite incluir texto ni estilos CSS en su contenido',
            'D) Fue desarrollado por Microsoft para gráficos en sistemas Windows',
        ],
        'respuesta_correcta' => 'A) Permite trabajar con gráficos vectoriales que no pierden resolución al cambiar su tamaño'
    ],

    'que-es-la-extension-ogg' => [
        'pregunta' => '¿Cuál es una característica destacada del formato de audio OGG?',
        'opciones' => [
            'A) Es un formato abierto y libre de patentes, ideal para software libre y streaming',
            'B) Solo puede usarse en reproductores exclusivos de Windows',
            'C) Comprime audio con pérdida significativa de calidad',
            'D) Fue desarrollado por Microsoft para uso en juegos propietarios',
        ],
        'respuesta_correcta' => 'A) Es un formato abierto y libre de patentes, ideal para software libre y streaming'
    ],

    'que-es-la-extension-css' => [
        'pregunta' => '¿Cuál es una función principal del lenguaje CSS en el desarrollo web?',
        'opciones' => [
            'A) Definir el estilo visual de elementos HTML, como colores, fuentes y tamaños',
            'B) Crear bases de datos para almacenar contenido web',
            'C) Programar la lógica de interacción del usuario',
            'D) Comprimir imágenes para mejorar la velocidad de carga',
        ],
        'respuesta_correcta' => 'A) Definir el estilo visual de elementos HTML, como colores, fuentes y tamaños'
    ],

    'que-es-la-extension-cvs' => [
        'pregunta' => '¿Cuál de las siguientes opciones es un uso común de los archivos CSV?',
        'opciones' => [
            'A) Trabajar con datos tabulares en hojas de cálculo como Excel o Google Sheets',
            'B) Diseñar páginas web con estilos CSS',
            'C) Programar aplicaciones móviles nativas',
            'D) Crear animaciones en JavaScript con Anime.js',
        ],
        'respuesta_correcta' => 'A) Trabajar con datos tabulares en hojas de cálculo como Excel o Google Sheets'
    ],

    'que-es-la-extension-jpeg' => [
        'pregunta' => '¿Qué caracteriza al método de compresión JPEG con pérdida?',
        'opciones' => [
            'A) Reduce el tamaño del archivo sin afectar la calidad de la imagen',
            'B) Elimina información innecesaria, afectando permanentemente la calidad de la imagen',
            'C) Comprime imágenes sin comparar píxeles adyacentes',
            'D) Solo se usa para imágenes vectoriales y gráficos simples',
        ],
        'respuesta_correcta' => 'B) Elimina información innecesaria, afectando permanentemente la calidad de la imagen'
    ],

    'que-es-la-extension-cgi' => [
        'pregunta' => '¿Cuál es la función principal de la extensión CGI en servidores web?',
        'opciones' => [
            'A) Comprimir imágenes para su carga rápida',
            'B) Habilitar la interacción entre el servidor web y programas externos para procesar solicitudes',
            'C) Almacenar archivos multimedia en el servidor',
            'D) Encriptar la comunicación entre el servidor y el navegador',
        ],
        'respuesta_correcta' => 'B) Habilitar la interacción entre el servidor web y programas externos para procesar solicitudes'
    ],

    'que-es-la-extension-ico' => [
        'pregunta' => '¿Cuál es una característica clave del formato de archivo ICO?',
        'opciones' => [
            'A) Solo almacena una imagen de tamaño fijo y sin transparencia',
            'B) Se utiliza exclusivamente para imágenes fotográficas de alta resolución',
            'C) Contiene varias versiones del mismo icono en diferentes tamaños y profundidades de color',
            'D) No es compatible con transparencias ni efectos complejos',
        ],
        'respuesta_correcta' => 'C) Contiene varias versiones del mismo icono en diferentes tamaños y profundidades de color'
    ],

    'que-es-la-extension-php' => [
        'pregunta' => '¿Cuál de las siguientes afirmaciones es correcta sobre PHP?',
        'opciones' => [
            'A) PHP se ejecuta en el navegador del cliente mostrando el código fuente',
            'B) PHP no se puede integrar con bases de datos',
            'C) PHP es un lenguaje difícil de aprender para principiantes',
            'D) PHP se ejecuta en el servidor y genera contenido dinámico enviado al navegador',
        ],
        'respuesta_correcta' => 'D) PHP se ejecuta en el servidor y genera contenido dinámico enviado al navegador'
    ],

    'que-es-la-extension-aspx' => [
        'pregunta' => '¿Qué caracteriza a los archivos con extensión .aspx en el desarrollo web?',
        'opciones' => [
            'A) Son archivos estáticos que solo contienen HTML sin interacción con el servidor',
            'B) Combinan HTML con código del lado del servidor (como C# o VB.NET) para generar contenido dinámico',
            'C) Solo se usan para crear imágenes y gráficos en la web',
            'D) No permiten separar la lógica del servidor de la presentación visual',
        ],
        'respuesta_correcta' => 'B) Combinan HTML con código del lado del servidor (como C# o VB.NET) para generar contenido dinámico'
    ],

    'que-es-la-extension-jsp' => [
        'pregunta' => '¿Qué característica distingue a los archivos con extensión .jsp?',
        'opciones' => [
            'A) Integran código Java con HTML para generar contenido dinámico en el servidor',
            'B) Son archivos estáticos que solo contienen HTML sin lógica de servidor',
            'C) Solo pueden ser usados con bases de datos no relacionales',
            'D) No permiten la reutilización de código ni uso de etiquetas personalizadas',
        ],
        'respuesta_correcta' => 'A) Integran código Java con HTML para generar contenido dinámico en el servidor'
    ],

    'que-es-la-extension-pl' => [
        'pregunta' => '¿Cuál es la función principal de los archivos con extensión .pl en programación?',
        'opciones' => [
            'A) Archivos estáticos para imágenes y gráficos',
            'B) Archivos de configuración para servidores web',
            'C) Scripts escritos en Perl usados para automatización y procesamiento de texto',
            'D) Archivos compilados de aplicaciones Java',
        ],
        'respuesta_correcta' => 'C) Scripts escritos en Perl usados para automatización y procesamiento de texto'
    ],

    'que-es-la-extension-py' => [
        'pregunta' => '¿Qué característica define a los archivos con extensión .py?',
        'opciones' => [
            'A) Contienen código fuente en Python que puede ejecutarse en múltiples plataformas',
            'B) Son archivos binarios compilados de programas Python',
            'C) Solo pueden ejecutarse en sistemas operativos Windows',
            'D) Se usan exclusivamente para almacenar datos en formato JSON',
        ],
        'respuesta_correcta' => 'A) Contienen código fuente en Python que puede ejecutarse en múltiples plataformas'
    ],

    'que-es-la-extension-rb' => [
        'pregunta' => '¿Qué describe mejor los archivos con extensión .rb?',
        'opciones' => [
            'A) Archivos estáticos usados para almacenar imágenes',
            'B) Archivos de configuración para servidores web',
            'C) Archivos ejecutables de programas Java',
            'D) Archivos que contienen código fuente en Ruby ejecutable por su intérprete',
        ],
        'respuesta_correcta' => 'D) Archivos que contienen código fuente en Ruby ejecutable por su intérprete'
    ],

    'que-es-la-extension-cfm' => [
        'pregunta' => '¿Qué función cumplen los archivos con extensión .cfm?',
        'opciones' => [
            'A) Ejecutan scripts de Python desde el navegador',
            'B) Contienen código en ColdFusion Markup Language (CFML) para generar contenido web dinámico',
            'C) Almacenan imágenes utilizadas en sitios web dinámicos',
            'D) Se usan exclusivamente como hojas de estilo CSS para sitios ColdFusion',
        ],
        'respuesta_correcta' => 'B) Contienen código en ColdFusion Markup Language (CFML) para generar contenido web dinámico'
    ],
    // Extensiones

    // Utilidades de red
    'ping' => [
        'pregunta' => '¿Cuál es la función principal de la herramienta PING en redes?',
        'opciones' => [
            'A) Cifrar la comunicación entre dispositivos',
            'B) Asignar direcciones IP automáticamente',
            'C) Comprobar la conectividad y latencia entre dos dispositivos en una red',
            'D) Supervisar el uso de ancho de banda en tiempo real',
        ],
        'respuesta_correcta' => 'C) Comprobar la conectividad y latencia entre dos dispositivos en una red'
    ],

    'finger' => [
        'pregunta' => '¿Para qué se utiliza principalmente la herramienta FINGER en redes?',
        'opciones' => [
            'A) Comprobar la velocidad de la conexión a Internet',
            'B) Cifrar las comunicaciones entre dos dispositivos',
            'C) Asignar direcciones IP dinámicas a los usuarios',
            'D) Consultar información básica sobre los usuarios registrados en un sistema remoto',
        ],
        'respuesta_correcta' => 'D) Consultar información básica sobre los usuarios registrados en un sistema remoto'
    ],

    'traceroute' => [
        'pregunta' => '¿Cuál es la función principal de la herramienta Traceroute?',
        'opciones' => [
            'A) Rastrear la ruta que sigue un paquete desde el origen hasta el destino identificando los nodos intermedios',
            'B) Asignar direcciones IP a los dispositivos conectados a una red',
            'C) Monitorear el uso del ancho de banda en tiempo real',
            'D) Establecer una conexión segura entre dos dispositivos',
        ],
        'respuesta_correcta' => 'A) Rastrear la ruta que sigue un paquete desde el origen hasta el destino identificando los nodos intermedios'
    ],

    'dns' => [
        'pregunta' => '¿Cuál es la función principal del sistema DNS en Internet?',
        'opciones' => [
            'A) Monitorear el tráfico web y bloquear sitios maliciosos automáticamente',
            'B) Traducir nombres de dominio legibles por humanos en direcciones IP numéricas',
            'C) Administrar la velocidad de carga de páginas web',
            'D) Cifrar las comunicaciones entre cliente y servidor',
        ],
        'respuesta_correcta' => 'B) Traducir nombres de dominio legibles por humanos en direcciones IP numéricas'
    ],

    'netstats' => [
        'pregunta' => '¿Para qué se utiliza principalmente la herramienta NETSTAT en redes?',
        'opciones' => [
            'A) Establecer conexiones remotas mediante túneles seguros',
            'B) Asignar direcciones IP dinámicamente en una red',
            'C) Mostrar información sobre conexiones de red activas, puertos abiertos y estadísticas de red',
            'D) Comprimir y cifrar archivos antes de enviarlos por la red',
        ],
        'respuesta_correcta' => 'C) Mostrar información sobre conexiones de red activas, puertos abiertos y estadísticas de red'
    ],

    'whois' => [
        'pregunta' => '¿Cuál es la función principal de la herramienta WHOIS?',
        'opciones' => [
            'A) Analizar la velocidad de una conexión a Internet',
            'B) Traducir nombres de dominio a direcciones IP',
            'C) Establecer conexiones seguras entre clientes y servidores',
            'D) Consultar información pública sobre la propiedad y administración de dominios y direcciones IP',
        ],
        'respuesta_correcta' => 'D) Consultar información pública sobre la propiedad y administración de dominios y direcciones IP'
    ],

    'ipconfig-ifconfig' => [
        'pregunta' => '¿Para qué se utilizan principalmente los comandos ipconfig e ifconfig?',
        'opciones' => [
            'A) Consultar y configurar las interfaces de red en diferentes sistemas operativos',
            'B) Comprobar la velocidad de descarga de la red local',
            'C) Asignar nombres de dominio a direcciones IP',
            'D) Detectar intrusos en una red inalámbrica',
        ],
        'respuesta_correcta' => 'A) Consultar y configurar las interfaces de red en diferentes sistemas operativos'
    ],
    // Utilidades de red

    // Programas de Adobe
    'que-es-contribute' => [
        'pregunta' => '¿Cuál era la función principal del programa Adobe Contribute?',
        'opciones' => [
            'A) Diseñar gráficos vectoriales y editar fotografías',
            'B) Permitir la edición y publicación de contenido web por usuarios sin conocimientos técnicos',
            'C) Crear aplicaciones móviles multiplataforma',
            'D) Administrar bases de datos relacionales en la nube',
        ],
        'respuesta_correcta' => 'B) Permitir la edición y publicación de contenido web por usuarios sin conocimientos técnicos'
    ],

    'que-es-premiere' => [
        'pregunta' => '¿Cuál es la función principal de Adobe Premiere Pro?',
        'opciones' => [
            'A) Diseñar sitios web sin necesidad de código',
            'B) Crear ilustraciones vectoriales para impresión',
            'C) Editar, montar y producir videos de alta calidad de forma profesional',
            'D) Administrar bases de datos y servidores web',
        ],
        'respuesta_correcta' => 'C) Editar, montar y producir videos de alta calidad de forma profesional'
    ],

    'que-es-encore' => [
        'pregunta' => '¿Cuál era la función principal del programa Adobe Encore?',
        'opciones' => [
            'A) Editar videos y aplicar efectos visuales',
            'B) Crear contenido web interactivo y animaciones',
            'C) Diseñar gráficos vectoriales y layouts para impresión',
            'D) Crear menús y estructuras de navegación para discos DVD y Blu-ray',
        ],
        'respuesta_correcta' => 'D) Crear menús y estructuras de navegación para discos DVD y Blu-ray'
    ],

    'que-es-robohelp' => [
        'pregunta' => '¿Cuál es la función principal del programa Adobe RoboHelp?',
        'opciones' => [
            'A) Crear, editar y publicar sistemas de ayuda y documentación técnica multiformato',
            'B) Editar videos y aplicar efectos visuales profesionales',
            'C) Diseñar gráficos vectoriales para impresión y web',
            'D) Autorizar y crear discos DVD y Blu-ray con menús interactivos',
        ],
        'respuesta_correcta' => 'A) Crear, editar y publicar sistemas de ayuda y documentación técnica multiformato'
    ],

    'que-es-soundbooth' => [
        'pregunta' => '¿Cuál era la función principal del programa Adobe Soundbooth?',
        'opciones' => [
            'A) Crear efectos visuales y animaciones para videos',
            'B) Grabar, editar y limpiar audio de forma sencilla e intuitiva para creadores de contenido multimedia',
            'C) Diseñar y editar gráficos vectoriales para impresión',
            'D) Crear menús interactivos para discos DVD y Blu-ray',
        ],
        'respuesta_correcta' => 'B) Grabar, editar y limpiar audio de forma sencilla e intuitiva para creadores de contenido multimedia'
    ],

    'que-es-director' => [
        'pregunta' => '¿Para qué se utilizaba principalmente Adobe Director?',
        'opciones' => [
            'A) Edición profesional de video y efectos visuales',
            'B) Creación y edición de audio para producciones multimedia',
            'C) Desarrollo de contenido multimedia interactivo como presentaciones, juegos y simuladores',
            'D) Diseño de sitios web responsivos y aplicaciones móviles',
        ],
        'respuesta_correcta' => 'C) Desarrollo de contenido multimedia interactivo como presentaciones, juegos y simuladores'
    ],

    'que-es-captivate' => [
        'pregunta' => '¿Cuál es la función principal de Adobe Captivate?',
        'opciones' => [
            'A) Edición profesional de video y efectos visuales para cine y televisión',
            'B) Creación y edición de audio digital para contenido multimedia',
            'C) Diseño y edición de gráficos vectoriales para impresión y web',
            'D) Creación de cursos eLearning interactivos y simulaciones para capacitación y educación',
        ],
        'respuesta_correcta' => 'D) Creación de cursos eLearning interactivos y simulaciones para capacitación y educación'
    ],
    // Programas de Adobe

    // Programas de Adobe para multimedia
    'que-es-dreamweaver' => [
        'pregunta' => '¿Cuál es la principal función de Adobe Dreamweaver?',
        'opciones' => [
            'A) Edición de audio digital para contenido multimedia',
            'B) Creación de cursos eLearning interactivos',
            'C) Diseño, desarrollo y gestión de sitios y aplicaciones web con herramientas visuales y de código',
            'D) Creación de presentaciones y animaciones multimedia',
        ],
        'respuesta_correcta' => 'C) Diseño, desarrollo y gestión de sitios y aplicaciones web con herramientas visuales y de código'
    ],

    'que-es-photoshop' => [
        'pregunta' => '¿Cuál es la función principal de Adobe Photoshop?',
        'opciones' => [
            'A) Creación de cursos eLearning y simulaciones interactivas',
            'B) Edición, manipulación y creación profesional de imágenes digitales para fotógrafos y diseñadores',
            'C) Desarrollo de sitios web con herramientas visuales y de código',
            'D) Edición de audio digital para contenido multimedia',
        ],
        'respuesta_correcta' => 'B) Edición, manipulación y creación profesional de imágenes digitales para fotógrafos y diseñadores'
    ],

    'que-es-lightroom' => [
        'pregunta' => '¿Cuál es la función principal de Adobe Lightroom?',
        'opciones' => [
            'A) Creación de contenido interactivo para eLearning y simulaciones',
            'B) Edición profesional de videos con múltiples efectos y transiciones',
            'C) Organización, edición no destructiva y mejora de fotografías digitales',
            'D) Diseño y desarrollo de sitios web con herramientas visuales y de código',
        ],
        'respuesta_correcta' => 'C) Organización, edición no destructiva y mejora de fotografías digitales'
    ],

    'que-es-premiere-2' => [
        'pregunta' => '¿Cuál es el objetivo principal de Adobe Premiere?',
        'opciones' => [
            'A) Crear contenido interactivo para cursos eLearning y tutoriales',
            'B) Ofrecer una solución profesional para la edición y producción de videos',
            'C) Diseñar sitios web con herramientas visuales y codificación integrada',
            'D) Editar y manipular imágenes digitales con múltiples efectos visuales',
        ],
        'respuesta_correcta' => 'B) Ofrecer una solución profesional para la edición y producción de videos'
    ],

    'que-es-illustrator' => [
        'pregunta' => '¿Cuál es la principal característica que distingue a Adobe Illustrator?',
        'opciones' => [
            'A) Edición avanzada de imágenes rasterizadas para retoque fotográfico',
            'B) Creación de videos y animaciones con herramientas de línea de tiempo',
            'C) Diseño y edición de gráficos vectoriales escalables sin pérdida de calidad',
            'D) Desarrollo de sitios web con integración de código y diseño visual',
        ],
        'respuesta_correcta' => 'C) Diseño y edición de gráficos vectoriales escalables sin pérdida de calidad'
    ],

    'que-es-la-indesign' => [
        'pregunta' => '¿Cuál es la función principal de Adobe InDesign?',
        'opciones' => [
            'A) Edición avanzada de fotografías y retoque digital',
            'B) Creación y maquetación profesional de documentos impresos y digitales',
            'C) Diseño y animación de gráficos vectoriales escalables',
            'D) Desarrollo de sitios web con integración de código y diseño visual',
        ],
        'respuesta_correcta' => 'B) Creación y maquetación profesional de documentos impresos y digitales'
    ],

    'que-es-after-effects' => [
        'pregunta' => '¿Cuál es la función principal de Adobe After Effects?',
        'opciones' => [
            'A) Edición y montaje de video en línea de tiempo',
            'B) Diseño y maquetación de documentos impresos',
            'C) Creación de efectos visuales, animaciones y composiciones en video',
            'D) Edición avanzada de fotografías y retoque digital',
        ],
        'respuesta_correcta' => 'C) Creación de efectos visuales, animaciones y composiciones en video'
    ],
    // Programas de Adobe para multimedia

    // Programas de Adobe para tablet
    '508' => [
        'pregunta' => '¿Cuál es la función principal de Adobe Capture CC?',
        'opciones' => [
            'A) Convertir elementos del mundo real en activos digitales reutilizables para proyectos creativos',
            'B) Editar videos de alta resolución con múltiples pistas',
            'C) Crear documentos y maquetaciones para impresión profesional',
            'D) Retoque avanzado de fotografías y corrección de color',
        ],
        'respuesta_correcta' => 'A) Convertir elementos del mundo real en activos digitales reutilizables para proyectos creativos'
    ],

    'que-es-adobe-comp-cc' => [
        'pregunta' => '¿Cuál es el propósito principal de Adobe Comp CC?',
        'opciones' => [
            'A) Crear maquetas de diseño rápidas y profesionales desde dispositivos móviles',
            'B) Editar fotografías con herramientas avanzadas de retoque',
            'C) Animar gráficos vectoriales para videos',
            'D) Organizar y clasificar catálogos fotográficos',
        ],
        'respuesta_correcta' => 'A) Crear maquetas de diseño rápidas y profesionales desde dispositivos móviles'
    ],

    'que-es-adobe-illustrator-draw' => [
        'pregunta' => '¿Cuál es la función principal de Adobe Illustrator Draw?',
        'opciones' => [
            'A) Editar fotografías con filtros y ajustes avanzados',
            'B) Crear animaciones y gráficos en movimiento para videos',
            'C) Organizar catálogos de fotos y aplicar presets de color',
            'D) Crear ilustraciones vectoriales a mano alzada en dispositivos móviles',
        ],
        'respuesta_correcta' => 'D) Crear ilustraciones vectoriales a mano alzada en dispositivos móviles'
    ],

    'que-es-adobe-photoshop-express' => [
        'pregunta' => '¿Cuál es la función principal de Adobe Photoshop Express?',
        'opciones' => [
            'A) Crear ilustraciones vectoriales profesionales',
            'B) Editar fotos de manera rápida y sencilla desde dispositivos móviles',
            'C) Editar videos y añadir efectos visuales complejos',
            'D) Organizar y clasificar grandes catálogos de fotografías',
        ],
        'respuesta_correcta' => 'B) Editar fotos de manera rápida y sencilla desde dispositivos móviles'
    ],

    'que-es-adobe-photoshop-mix' => [
        'pregunta' => '¿Cuál es la función principal de Adobe Photoshop Mix?',
        'opciones' => [
            'A) Crear gráficos vectoriales escalables',
            'B) Realizar montajes fotográficos, recortes y combinaciones de imágenes desde dispositivos móviles',
            'C) Editar videos con efectos especiales complejos',
            'D) Organizar y catalogar grandes bibliotecas de fotos',
        ],
        'respuesta_correcta' => 'B) Realizar montajes fotográficos, recortes y combinaciones de imágenes desde dispositivos móviles'
    ],

    'que-es-adobe-photoshop-fix' => [
        'pregunta' => '¿Cuál es el objetivo principal de Adobe Photoshop Fix?',
        'opciones' => [
            'A) Crear montajes fotográficos y combinar imágenes en capas',
            'B) Organizar y catalogar fotos en grandes bibliotecas',
            'C) Retocar retratos y realizar ediciones fotográficas detalladas, enfocándose en correcciones faciales',
            'D) Diseñar gráficos vectoriales escalables para impresión',
        ],
        'respuesta_correcta' => 'C) Retocar retratos y realizar ediciones fotográficas detalladas, enfocándose en correcciones faciales'
    ],
    
    'que-es-adobe-spark-post' => [
        'pregunta' => '¿Cuál es la función principal de Adobe Spark Post?',
        'opciones' => [
            'A) Crear gráficos y contenidos visuales atractivos para redes sociales y marketing de forma rápida',
            'B) Editar videos profesionales con múltiples pistas y efectos',
            'C) Organizar y catalogar fotografías digitales',
            'D) Diseñar gráficos vectoriales escalables para impresión',
        ],
        'respuesta_correcta' => 'A) Crear gráficos y contenidos visuales atractivos para redes sociales y marketing de forma rápida'
    ],
    // Programas de Adobe para tablet
];

$respuesta = $preguntas[$titulo] ?? [
    'pregunta' => 'No se encontró una pregunta para este tema.',
    'opciones' => [],
    'respuesta_correcta' => ''
];

echo json_encode($respuesta);
