# Proyecto Organización menús propios y lista de la compra automática.

## Declaración de intenciones

### Funcionalidades de la aplicación (en principio)

- Poder elaborar menús propios (seleccionando tú los ingredientes).
- Al elaborar los platos se actualiza automáticamente el stock de ingredientes.
- De forma automática se elabora la lista de la compra (de ese modo no tienes que estar mirando que te queda)

El objetivo es facilitar la elaboración de menús, saber qué comer en cada momento y los ingredientes que te faltan.

P.D. El tiempo que se emplea en hacer la comida y hacer la compra es bastante. Saber qué hacer y qué comprar agiliza y optimiza ese tiempo.

## Análisis de requisitos iniciales

- La aplicación debe ser _mobile first_. La mayoría de las funcionalidades se deben poder hacer directamente en el móvil (introducir ingredientes, imágenes, elaborar menús, añadir platos al menú semanal, consultar lista de la compra, etc). En pantalla de escritorio sólo será optimo visualizar el menú semanal y ver cómo quedaría impreso en DIN-A4.
- Se implementará con PHP puro, HTML, CSS
- Se utilizará el patrón MVC (modelo, vista, controlador)

## Diseño base de datos (BBDD)

### Tablas
- INGREDIENTES
- GRUPO_ALIMENTOS
- PLATOS
- CATEGORIA_PLATOS
- UNIDADES_MEDIDA
- LINEAS_INGREDIENTE



