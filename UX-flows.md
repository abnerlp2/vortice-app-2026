# UX Flows - Vórtice Pulse

## 1. Estados del usuario
Estado 1: Asistente fuera de la aplicación
↓
Estado 2: Aplicación abierta
↓
Estado 3: Lista de charlas visible
↓
Estado 4: Charla seleccionada
↓
Estado 5: Evaluación diligenciada
↓
Estado 6: Evaluación enviada
↓
Estado 7: Confirmación mostrada

---

## 2. Flujo principal

```text
                               FIN DE LA CHARLA
                                            │
                                           ▼
                              Speaker proyecta el QR
                                            │
                                           ▼
                           Asistente escanea el código QR
                                            │
                                           ▼
       ┌────────────────────────────────────┐
            ¿Existe una ventana de evaluación? 
       └────────────────────────────────────┘
                               │                    │
                              Sí                   No
                              ▼                    ▼
             Mostrar charlas activas          Mostrar mensaje:
             del bloque horario actual       "Las evaluaciones
                               │                            no están disponibles"
                               │                          │
                               │                    ▼
                               │                   FIN
                              ▼
                  Asistente selecciona la charla
                               │
                              ▼
         ┌────────────────────────────────┐
            ¿Ya evaluaste esta charla? 
         └────────────────────────────────┘
                     │                        │
                    No                    Sí
                     ▼                    ▼
          Mostrar formulario        Mostrar mensaje:
            de evaluación           "Ya registraste
                     │                tu evaluación"
                     │                    │
                     │                    ▼
                     │                   FIN
                    ▼
        Seleccionar calificación (1 a 5 ❤️)
                     │
                    ▼
      ¿Responder comentarios opcionales?
             │                         │
            Sí                          No
            ▼                        ▼
Responder:                    Continuar
¿Qué fue lo mejor?   |
¿Qué cambiarías?   |
                 |
             └──────────────┐
                            ▼
                 Enviar evaluación
                            │
                           ▼
          Sistema guarda la evaluación
                            │
                           ▼
      Sistema actualiza dashboard público
                            │
                           ▼
          Mostrar mensaje de agradecimiento
                            │
                           ▼
                           FIN
```

---

## 3. Máquina de estados

```text
Fuera de la aplicación
            │
           ▼
Aplicación abierta
            │
           ▼
Charla seleccionada
            │
           ▼
Evaluando
            │
           ▼
Enviando evaluación
            │
           ▼
Evaluación registrada
            │
           ▼
Confirmación mostrada
```