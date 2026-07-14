# Product Specification

## 1. Product Overview
Vórtice Pulse es una aplicación web que permite a los asistentes de Vórtice 2026 evaluar las charlas a las que asistieron mediante una experiencia rápida, sencilla, y sin autenticación. El producto busca recopilar retroalimentación en tiempo real para apoyar la mejora del evento. Además, se ofrece un dashboard público con métricas agregadas de participación y satisfacción.

## 2. Functional Goals
*   Permitir evaluar una charla en menos de un minuto.
*   Evitar votos duplicados.
*   Facilitar encontrar rápidamente la charla que el usuario quiere votar.
*   Mostrar resultados agregados en tiempo real.
*   Minimizar la fricción para el usuario.

## 3. User flows
*   **Flujo 1: Calificar una charla del Vórtice 2026:**
    Escanear QR ↓ Seleccionar horario ↓ Seleccionar charla perteneciente a ese horario ↓ Asignar corazones ↓ Responder dos preguntas como comentarios (opcional) ↓ Enviar ↓ Ver confirmación.
*   **Flujo 2: Consultar Dashboard:**
    Abrir dashboard ↓ Ver promedio ↓ Ver votos ↓ Ver ranking ↓ Consultar detalle por charla.

## 4. Business rules
*   **Acceso:**
    *   El acceso a la evaluación de la charla se realiza mediante código QR.
    *   No se requiere autenticación.
    *   El usuario visualizará sólo las charlas activas del bloque de horario elegido.
    *   La evaluación solo estará disponible durante una ventana de tiempo de 10 minutos, la misma es configurable por cada bloque de charlas.
    *   Una vez cerrada la ventana, no podrán registrarse nuevas evaluaciones.
*   **Evaluación:**
    *   El asistente solo podrá registrar una evaluación por charla.
    *   La calificación mediante corazones es obligatoria.
    *   Las respuestas a las dos preguntas en los campos de texto son opcionales.
    *   La evaluación podrá completarse en menos de un minuto.
    *   Los bloques de horario ya evaluados (pasados) deben verse deshabilitados.
*   **Dashboard:**
    *   El dashboard mostrará únicamente resultados agregados.
    *   Las métricas deberán actualizarse automáticamente cuando se registre una nueva evaluación.
    *   Los resultados serán públicos.
*   **Manejo de datos:**
    *   Las charlas serán cargadas previamente desde un archivo Excel.
    *   Cada charla pertenecerá a un único bloque de horario.
    *   Cada charla tendrá uno o dos conferencistas asociados.
    *   Cada charla tendrá un identificador único.
*   **Calidad:**
    *   La plataforma deberá soportar aproximadamente 300 personas concurrentes.
    *   La experiencia no deberá degradarse durante los periodos de mayor carga de uso.

## 5. Functional Requirements

| ID | Requisito funcional | Principio |
| :--- | :--- | :--- |
| FR001 | El sistema deberá permitir acceder a la evaluación mediante el escaneo de un código QR. | Reducir fricción. |
| FR002 | El sistema deberá mostrar los bloques de horario configurados para el evento. | Simplicidad. |
| FR003 | El sistema deberá mostrar activo sólo el bloque de horario que se va a evaluar. Los demás bloques deben estar deshabilitados. | Simplicidad. |
| FR004 | El sistema deberá mostrar dentro de cada bloque de horario las charlas agrupadas y definidas para este mismo. | Reducir fricción. |
| FR005 | El sistema deberá permitir seleccionar una única charla para evaluar. | Facilitar decisión. |
| FR006 | El sistema deberá permitir asignar una calificación obligatoria entre uno y cinco corazones. | Facilitar decisión. |
| FR007 | El sistema deberá permitir registrar comentarios opcionales para responder a las preguntas: - ¿Qué fue lo que más te gustó? - ¿Qué cambiarías? | Facilitar decisión. |
| FR008 | El sistema deberá impedir registrar una evaluación sin una calificación. | Organizar Data. |
| FR009 | El sistema deberá almacenar cada evaluación en la base de datos. | Organizar Data. |
| FR010 | El sistema deberá actualizar automáticamente las métricas del dashboard después de registrar una nueva evaluación. | Oportunidad. |
| FR011 | El sistema deberá mostrar el promedio de calificación por charla. | Oportunidad. |
| FR012 | El sistema deberá mostrar la cantidad total de evaluaciones recibidas por charla. | Oportunidad. |
| FR013 | El sistema deberá mostrar la cantidad total de evaluaciones recibidas por charla. | Oportunidad. |
| FR014 | El sistema deberá ordenar la cantidad total de evaluaciones recibidas por charla, ordenadas de mayor a menor. | Oportunidad. |
| FR015 | El sistema deberá ordenar las charlas según su promedio de calificación para construir el ranking de mayor a menor promedio. | Oportunidad. |

## 6. Non-Functional Requirements

| ID | Requisito NO funcional | Principio |
| :--- | :--- | :--- |
| NFR001 | El sistema deberá permitir que un asistente al evento complete el proceso de evaluación en menos de un minuto. | Performance. |
| NFR002 | El dashboard deberá reflejar una nueva evaluación cinco segundos después de ser registrada. | Performance. |
| NFR003 | El sistema deberá soportar una carga aproximada de 300 usuarios concurrentes sin degradar la experiencia del usuario. | Performance. |
| NFR004 | La plataforma deberá permanecer disponible 2 días, 48 horas, que es lo que dura el evento. | Availability. |
| NFR005 | La interfaz deberá ser comprensible para un usuario sin necesidad de instrucciones previas. | Usability. |
| NFR006 | El flujo de evaluación deberá minimizar el número de pasos necesarios para registrar una evaluación. | Usability. |
| NFR007 | El frontend debe construirse con un enfoque Mobile-First estricto, optimizado para orientación vertical (Portrait). Los elementos interactivos (corazones, botones) deben tener un área táctil mínima de 44x44 píxeles para evitar toques accidentales. | Usability. |
| NFR008 | La plataforma no almacenará información personal identificable de los asistentes. | Security. |
| NFR009 | Las ventanas de evaluación deberán expirar automáticamente cuando finalice el tiempo configurado. | Security. |
| NFR010 | La estructura del código deberá favorecer la comprensión por parte de desarrolladores y agentes de IA mediante el uso estricto de convenciones de nombrado (Clean Code), tipado fuerte y modularidad, evitando depender de comentarios explicativos. | Maintainability. |
| NFR011 | La solución deberá mantener una arquitectura desacoplada entre frontend y backend. | Maintainability. |
| NFR012 | La arquitectura deberá permitir reutilizar la plataforma para futuros eventos con cambios mínimos de configuración. | Scalability. |
| NFR013 | La aplicación deberá registrar eventos relevantes para facilitar el diagnóstico de errores durante la conferencia. | Observability. |
| NFR014 | La solución deberá poder ejecutarse completamente en un entorno local sin depender de servicios externos para las funcionalidades esenciales del MVP. | Deployability. |

## 7. Data model
El sistema utilizará una base de datos relacional (MySQL) gestionada mediante migraciones de Laravel. Las entidades principales y sus atributos son:

*   **Tabla: `time_blocks` (Bloques de horario)**
    *   `id`: Primary Key.
    *   `name`: String (Ej: "Bloque 1 - Mañana").
    *   `start_time`: DateTime.
    *   `end_time`: DateTime.
    *   `is_active`: Boolean.
    *   `timestamps`: created_at, updated_at.

*   **Tabla: `talks` (Charlas)**
    *   `id`: Primary Key.
    *   `time_block_id`: Foreign Key.
    *   `title`: String.
    *   `speakers`: String.
    *   `slug_or_uuid`: String.
    *   `timestamps`: created_at, updated_at.

*   **Tabla: `evaluations` (Evaluaciones)**
    *   `id`: Primary Key.
    *   `talk_id`: Foreign Key.
    *   `score`: Integer.
    *   `liked_comment`: Text.
    *   `change_comment`: Text.
    *   `device_signature`: String.
    *   `timestamps`: created_at, updated_at.

## 8. Edge cases

*   **EC01: Expiración de la ventana en pleno diligenciamiento:** Un usuario escanea el QR en el minuto 9 de la ventana activa, se toma 2 minutos escribiendo su comentario y presiona "Enviar" en el minuto 11, cuando el bloque ya se desactivó.
    *   *Manejo esperado:* El backend debe validar el estado del bloque en el momento del "Submit", rechazar el guardado y mostrar un mensaje amable: "La ventana de tiempo para evaluar esta charla acaba de cerrar. ¡Gracias por participar!".
*   **EC02: Pérdida de conexión en el momento de envío:** El usuario pierde el WiFi o los datos móviles en el instante exacto en que presiona el botón de calificar.
    *   *Manejo esperado:* El frontend (Alpine.js) debe atrapar el error de red, mantener los datos ingresados en el formulario y mostrar un botón para "Reintentar conexión", evitando que el usuario tenga que escribir todo de nuevo.
*   **EC03: Evasión del control de fraude (Modo Incógnito):** Un usuario intenta votar múltiples veces abriendo el enlace en pestañas de modo incógnito o borrando la caché del navegador para reiniciar su `device_signature`.
    *   *Manejo esperado:* Se asume como un **riesgo aceptado del producto** en pro de mantener la fricción en cero (sin login). No se bloqueará por IP para evitar falsos positivos (ya que muchos usuarios compartirán la misma IP del WiFi del evento).
*   **EC04: Códigos QR huérfanos o URL manipuladas:** Un usuario escanea un QR de un día anterior, o intenta alterar manualmente el `slug_or_uuid` en la barra de direcciones de su navegador para acceder a una charla inexistente.
    *   *Manejo esperado:* El sistema no debe mostrar una página de error 404 técnica. Debe redirigir automáticamente a la pantalla del inventario general de charlas del día con un mensaje: "La charla buscada no está disponible en este momento".
*   **EC05: Límite de caracteres excedido o inyección de código:** Un usuario pega un artículo completo en los campos de texto opcionales o intenta inyectar código malicioso (XSS) en las respuestas.
    *   *Manejo esperado:* El frontend debe limitar los campos de texto a un máximo razonable (ej. 500 caracteres). El backend (Laravel) debe sanitizar estrictamente todo el texto entrante antes de insertarlo en la base de datos para prevenir ataques.

## 9. Acceptance criteria
*   **Escenario 1: Acceso sin fricción.** Dado que un bloque de horario está activo, cuando el Asistente escanea el código QR de una charla, entonces el sistema despliega el formulario de calificación inmediatamente sin solicitar inicio de sesión o registro de datos personales.
*   **Escenario 2: Control de votos duplicados.** Dado que un Asistente ya registró su evaluación para la "Charla A", cuando el mismo Asistente intenta enviar una nueva calificación para esa misma charla desde el mismo dispositivo, entonces el sistema rechaza la solicitud, no altera los promedios y muestra un mensaje amigable indicando que su opinión ya fue registrada.
*   **Escenario 3: Actualización en tiempo real.** Dado que un Organizador tiene el Dashboard abierto en su pantalla, cuando un Asistente envía una nueva calificación de "5 corazones", entonces el promedio, la cantidad de votos y el ranking se actualizan en el Dashboard del Organizador en menos de 5 segundos, sin que este tenga que recargar la página.
*   **Escenario 4: Respeto de la ventana de tiempo.** Dado que han transcurrido más de 10 minutos desde que finalizó un bloque de horario, cuando un Asistente intenta acceder al enlace de evaluación, entonces el sistema muestra una pantalla indicando que el tiempo de evaluación ha concluido y bloquea el registro de nuevos datos.
*   **Escenario 5: Rendimiento bajo estrés.** Dado que el evento está en curso, cuando 300 usuarios intentan enviar su evaluación simultáneamente en el mismo minuto, entonces el sistema registra todas las evaluaciones exitosamente utilizando la cola de Redis, sin colgar la base de datos ni degradar el tiempo de respuesta del formulario.