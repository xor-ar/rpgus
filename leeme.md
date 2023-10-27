# Idea general
Tener una credencial con identificador único y código QR, pudiendo generarla de forma autónoma.

## Un poco de historia

En una lluvia de ideas en un 25 de Marzo de 2023, SQ y LDH empezamos a ver de que forma se podía realizar credenciales de forma autónoma.

El 4 de Octubre de 2023, se realizó el primer prototipo.

# Diagrama
Puede verlo [aquí](https://github.com/xor-ar/rpgus/blob/main/diagrama.png)

# Cómo generar una credencial
Los pasos para generar una credencial son los siguientes

## Validador oficial
Se debe acceder a un validador oficial, en el caso de argentina se utiliza la web del [SIU Registro de Graduados](https://registrograduados.siu.edu.ar/).

Se coloca el DNI y se realiza la búsqueda. A continuación en el título se hace clic en "Detalle", lo que abrirá una ventana, copiando la URL.

## Hash
Dicha URL se debe calcular su hash SHA256, en este caso se utiliza esta [herramienta web](https://emn178.github.io/online-tools/sha256.html).

Se guarda en un archivo txt con el resultado de hash de nombre del archivo, y el contenido es la URL completa.

También del resultado obtenido del validador oficial se hace una captura de pantalla, y se almacena en un archivo de imagen con nombre de archivo el hash.

## ID
El ID son los últimos 8 caractéres del hash, es decir los últimos 4 bytes representados en hexadecimal.

## QR
El QR se debe generar con el siguiente texto (una URL):

https://validador/?id=abcd1234

Donde abcd1234 es el ID, y "validador" es el dominio. Cuanto más corta sea la URL mejor.

A su vez se sugiere aplicar un adecuado nivel de corrección de errores, para que la lectura sea rápida (puede ser 25%).

En este caso se utiliza [esta herramienta](https://danielgjackson.github.io/qrcodejs/).

## Credencial
El modelo de la credencial se encuentra en el archivo credencial-modelo.odp

# Servidor
La programación del servidor es bastante sencilla.

Se tiene una carpeta con todos los archivos de imagen y de texto.

El script principal toma el dato de GET, recorre dicha carpeta y verifica si coincide alguno con los nombres de los archivos (los últimos 8 caractéres), en caso afirmativo, así lo indica y da la URL.

Son los archivos .php

# Pendientes
* Interoperabilidad (API)
* Verificación con otros validadores

# Más informaicón

* [Registro de Profesionales Graduados Universitarios en Seguridad](https://www.segulupa.com/registro-de-profesionales-graduados-universitarios-en-seguridad/)

# Cambios
* 2023/03/25 - Ideado (LD y SQ)
* 2023/10/04 - Programado y documentado (LD)
* 2023/10/27 - Se cargan los archivos php (LD)

# Licencia
GPLv3
