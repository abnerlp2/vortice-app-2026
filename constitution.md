# Constitution

Project name: Vórtice Pulse
Tagline: “El latido del evento”
Version: 1.0
Status: Draft
Owners: Abner Trejos & Jeid Vasquez
Last Updated: Julio 2026

## 1. Mission
Permitir que la opinión de cada asistente contribuya a mejorar continuamente la calidad de las charlas de Vórtice 2026, mediante una experiencia de evaluación tan simple que no interrumpa el aprendizaje, la logística ni la experiencia del evento. Cada evaluación debe entenderse como una oportunidad de aprendizaje y mejora continua, nunca como un mecanismo de juicio hacia los speakers.

## 2. Product Vision
Mediremos el latido del evento, VÓRTICE PULSE será el canal oficial mediante el cuál cada participante podrá expresar en menos de un minuto, su experiencia sobre las charlas de Vórtice 2026. La información que se recopile permitirá visualizar en tiempo real el pulso del evento, con métricas transparentes y confiables que nos den esa retroalimentación necesaria, que permita generar acciones de mejora y aprendizaje, nuestra constante e inagotable búsqueda en la comunidad ágil.

## 3. Design Principles
*   **Simplicidad es lo primero:** La experiencia de evaluación debe completarse en menos de un minuto.
*   **Sin fricción:** Los asistentes nunca deberán crear cuentas, ni iniciar sesión para participar de la calificación de la charla.
*   **Una opinión por persona:** Cada asistente podrá registrar una única evaluación por charla y será dentro de una ventana de tiempo establecida (10 minutos).
*   **Transparencia:** Los resultados agregados serán públicos y visibles durante el evento.
*   **Menos clics, más aprendizaje:** La interfaz siempre deberá minimizar el número de decisiones necesarias para completar una evaluación.
*   **Muchas personas opinando al tiempo:** El sistema deberá soportar la concurrencia esperada del evento sin afectar la experiencia de evaluación, como referencia se considera una carga objetivo de 300 usuarios aproximadamente.
*   **Las métricas cuentan historias, no personas:** El producto priorizará la comprensión de la experiencia colectiva del evento mediante métricas agregadas, promoviendo conversaciones de mejora en lugar de juicios sobre los speakers.
*   **Mobile-First y "Thumb-friendly":** La aplicación será consumida casi en su totalidad desde smartphones en orientación vertical (Portrait). El diseño del frontend con Tailwind debe estar optimizado estrictamente para pantallas móviles.

## 4. Users
*   **Usuario 1: Asistente.** Compartir la experiencia de la charla en menos de un minuto y regresar a la agenda de Vórtice 2026.
    *   Necesita acceder sin identificarse.
    *   Necesita encontrar fácilmente la charla.
    *   Necesita calificar en menos de un minuto.
    *   Necesita saber si su opinión fue registrada.
*   **Usuario 2: Organizador.** Monitorear en tiempo real la satisfacción del evento y tener información que permita tomar decisiones.
    *   Necesita consultar métricas.
    *   Necesita visualizar rankings.
    *   Necesita analizar participación.
    *   Necesita coordinar las charlas antes del evento.
    *   Necesita habilitar los QR's para cada charla.

## 5. Success Metrics
El producto se considera exitoso si logra:
*   Alta participación: al menos el 70% de los asistentes a una charla registran una evaluación durante la ventana habilitada.
*   Rapidez: El tiempo promedio para completar una evaluación será inferior a 1 minuto.
*   Disponibilidad: El sistema permanecerá disponible durante toda la jornada del evento sin afectar la experiencia de los asistentes a Vórtice 2026.
*   Información útil: Los organizadores podrán consultar en tiempo real los indicadores de satisfacción de cada charla.
*   Transparencia: Los resultados agregados estarán disponibles públicamente durante el desarrollo del evento.
*   Aprendizajes: Se logra generar un repositorio de aprendizaje en el uso de SDD.

## 6. Technical Direction

### Architecture
La solución se construirá inicialmente como una aplicación web con arquitectura cliente-servidor.
1.  **Arquitectura Principal:** TALL Stack (Tailwind CSS, Alpine.js, Laravel, Livewire).
2.  **Backend:** Laravel (PHP 8.3).
3.  **Frontend / Estilos:** Tailwind CSS y Alpine.js (minimizar el uso de JavaScript externo).
4.  **Tiempo Real:** Laravel Reverb (o Pusher) para actualización instantánea del dashboard.
5.  **Base de Datos:** MySQL. Todo cambio estructural debe hacerse mediante migraciones de Laravel.
6.  **Caché y Rendimiento:** Redis para gestionar la alta concurrencia y servir las métricas del ranking sin saturar la base de datos.
7.  **Visualización de Datos:** Chart.js (o componentes nativos de Tailwind para barras de progreso).
8.  **Control de Versiones:** Git y GitHub. Crear ramas por funcionalidad y realizar commits atómicos.

### Principios Técnicos
*   Simplicidad sobre satisfacción.
*   Evolución incremental.
*   Componentes desacoplados.
*   Desarrollo guiado por especificaciones (lo que estamos aprendiendo SDD).
*   Observabilidad.
*   Preparado para IA.
*   Priorizar tecnologías conocidas y ampliamente documentadas para facilitar el ejercicio en tiempos de ejecución.
*   El repositorio deberá estar claro y bien documentado, para que pueda utilizarse como material académico sobre SDD en español.

## 7. MVP Scope
VÓRTICE PULSE permitirá validar que es posible recoger retroalimentación de los asistentes durante el evento en tiempo real, mediante una experiencia de evaluación rápida, sencilla y sin autenticación, mostrando los resultados de forma transparente para los organizadores y asistentes.
*   La aplicación debe permitir que un asistente acceda mediante un código QR a la evaluación de una charla sin necesidad de registro, ni inicio de sesión.
*   El QR debe tener un tiempo de duración de 10 minutos a partir de la activación.
*   La aplicación debe mostrar el inventario de charlas del día para poder seleccionar.
*   Debe permitir registrar una única evaluación por charla utilizando una escala de cinco (5) corazones, donde un solo corazón es una mala calificación y 5 corazones es una excelente calificación.
*   Luego de los corazones, la evaluación debe tener dos campos de texto con los siguientes títulos:
    *   ¿Qué fue lo que más te gustó?
    *   ¿Qué le cambiarías?
*   Debe registrar cada evaluación en una base de datos.
*   Debe actualizar automáticamente las métricas del evento después de cada evaluación.
*   Se debe poder visualizar públicamente un dashboard con:
    *   Promedio de evaluaciones por charla.
    *   Cantidad de votos por charla.
    *   Ranking con el promedio de mayor a menor puntaje de las charlas.
*   Se debe garantizar que toda la experiencia pueda completarse en menos de un minuto.
*   Se confía en que el asistente calificará la charla a la que realmente asistió.

## 8. Out of Scope
Que NO hará parte del MVP:
*   Autenticación de usuarios.
*   Gestión de múltiples eventos.
*   Exportación de reportes.
*   Notificaciones.
*   Analítica avanzada.
*   Integraciones con otras plataformas.
*   Impedir calificar una charla a la que no se asistió.

## 9. Future Evolution
A definirse.