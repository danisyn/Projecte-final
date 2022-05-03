<?php include('header.php')?>

<?php include('sidebar.php') ?>

<div class="col-lg-4">

<div class="text-left">

<h1>About my final project</h1>

<br>

<p class="separat"><a href="/home/ubuntu/Descargas/proyecto de gradofinalAlbertoTurrilllas.pdf" download>Here </a>you can download the documentation of the project</p>

<br>

<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:3pt;"><span style="font-size:26pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Propuesta detallada</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">El proyecto consiste en un servidor de streaming de audio con m&uacute;ltiples salidas de audio, cada una contiene una playlist de un estilo de m&uacute;sica diferente, se crear&aacute;n usuarios con su propia playlist y ser&aacute;n completamente personalizables, tambi&eacute;n podr&aacute; encender o detener el streaming cuando quiera.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">De esta manera podemos dar m&aacute;s libertad al cliente para escuchar sus propias canciones cuando quiera.</span></p>
<p><br></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:3pt;"><span style="font-size:26pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Justificaci&oacute;n</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">El problema que ve&iacute;a con el streaming de audio mediante Icecast2 era que un cliente no pod&iacute;a escuchar las canciones que &eacute;l quisiera, solo pod&iacute;a escuchar lo que el administrador especifica en la playlist.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">El motivo por el que he elegido este proyecto es porque quer&iacute;a a&ntilde;adir una capa de personalizaci&oacute;n a Icecast2 y ver hasta d&oacute;nde puede llegar.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">En el proyecto vamos a ver c&oacute;mo configurar un servidor de streaming de audio con Icecast2 y Liquidsoap ( generador de flujo de audio ), crear usuarios y sesiones mediante php, creaci&oacute;n de playlists, env&iacute;o de archivos de audio, eliminaci&oacute;n de archivos, descarga de archivos, visualizaci&oacute;n de datos de una base de datos en una web y todo esto se crear&aacute; de forma autom&aacute;tica mediante un script de Ansible.</span></p>
<p><br></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:3pt;"><span style="font-size:26pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Objetivos del proyecto</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Construir un servicio de streaming de audio personalizable y sencillo donde el cliente solo debe de preocuparse de poner la m&uacute;sica que m&aacute;s le guste.&nbsp;</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Otro objetivo es poder desplegar este servicio en cualquier parte usando un script de Ansible que automatiza la instalaci&oacute;n de todos los servicios y la configuraci&oacute;n de los mismos.</span></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>


<p dir="ltr" style="line-height:1.38;text-align: center;margin-top:0pt;margin-bottom:3pt;"><span style="font-size:26pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">1 - &iquest;Qu&eacute; es Icecast2?</span></p>

<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Icecast es un programa para la transmisi&oacute;n de medios. Puede ser utilizado para crear estaciones de radio en internet. Es una herramienta muy f&aacute;cil de usar ya que es f&aacute;cil de configurar para un servicio b&aacute;sico, es compatible con los principales formatos de audio libres.&nbsp;</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Icecast no es como Spotify o similares ya que Icecast hace un streaming real de m&uacute;sica, lo que significa que no se puede saltar la canci&oacute;n o pausarla.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">La configuraci&oacute;n de Icecast consiste en &ldquo;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">mountpoints</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&rdquo; o puntos de montaje y &ldquo;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">sources</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&rdquo; o fuentes.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:15pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&iquest;Qu&eacute; es un punto de montaje?</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Un punto de montaje es una direcci&oacute;n para la salida de la informaci&oacute;n de una fuente, cada punto de montaje s&oacute;lo puede ser asociado con una fuente.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Icecast permite crear infinitos puntos de montaje, esto permite crear muchos canales diferentes con contenido diferente. Gracias a esto el proyecto ha podido seguir adelante.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:15pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&iquest;Qu&eacute; es una fuente?</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Una fuente es un proceso que monta un punto de montaje. En palabras simples, es un software que conecta una transmisi&oacute;n en una ruta en el servidor Icecast.</span></p>
<p><br></p>

<p><br></p>
<p><br></p>

<p dir="ltr" style="line-height:1.38;text-align: center;margin-top:0pt;margin-bottom:3pt;"><span style="font-size:26pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">2 - &iquest;Qu&eacute; es Liquidsoap?</span></p>
<p><br></p>

<p><br></p>



<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Liquidsoap es una herramienta de software libre que permite generar contenido, tanto audio como video. Se trata de un lenguaje de script simple, flexible y f&aacute;cil de usar.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Las principales funciones de Liquidsoap son las siguientes:</span></p>
<p><br></p>
<ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Reproducci&oacute;n de ficheros, listas de reproducci&oacute;n o directorios&nbsp;</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Programaci&oacute;n de fuentes</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Procesamiento de sonido: compresi&oacute;n, normalizaci&oacute;n, eco, etc&eacute;tera.</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">S&iacute;ntesis de voz y sonido</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Salida a Icecast,Peercast,Shoutcast o un archivo local</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">M&uacute;ltiples salidas en la misma instancia</span></p>
    </li>
</ul>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:15pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&iquest;C&oacute;mo funciona la emisi&oacute;n?</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Liquidsoap al igual que Icecast est&aacute; enfocado a transmisiones en vivo desde internet.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">El funcionamiento ser&iacute;a el siguiente:</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-left: 36pt;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span></p>


<ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">El generador de flujo ( Liquidsoap ) crea un flujo de audio que se env&iacute;a al servidor de streaming</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">El servidor de streaming ( Icecast2 ) recoge el flujo y lo transmite a los clientes</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Los clientes acceden acceden al flujo de audio mediante una web o un reproductor de audio como VLC.</span></p>
    </li>
</ul>
<p dir="ltr" style="line-height:1.38;margin-left: 36pt;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;&nbsp;</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">El flujo de audio no se detiene nunca, no importa si hay clientes o no, solo puede detenerlo el administrador del servidor. En el proyecto podremos ver como saltar esto para que un cliente registrado pueda detener su playlist sin necesidad de la intervenci&oacute;n de un administrador.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:15pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&iquest;C&oacute;mo funcionan las playlists?</span></p>
<p><br></p>


<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Las playlists son archivos que indican a Liquidsoap la ubicaci&oacute;n del archivo de audio o video. La playlist tiene la extensi&oacute;n .pls y es muy simple de escribir, solo se debe escribir la ubicaci&oacute;n absoluta del archivo como por ejemplo &ldquo;/etc/liquidsoap/music/cancion.mp3&rdquo;.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Luego tenemos el script, cada playlist tiene un script para poder ejecutarse. En el script se especifica donde est&aacute; la playlist, la direcci&oacute;n del servidor de streaming y algunas funciones m&aacute;s como los&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">jingles</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;que pueden ser introducidos cada cuatro canciones por ejemplo. Los&nbsp;</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">jingles</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;son como un cambio de playlist, esto te permite por ejemplo a&ntilde;adir un anuncio cada cuatro canciones, tambi&eacute;n puedes a&ntilde;adir efectos en las canciones como por ejemplo un fade out para cambiar de canci&oacute;n. El script cuenta tambi&eacute;n con una funci&oacute;n de seguridad, en caso de que no se encontrara una canci&oacute;n o ocurriera cualquier error se ejecutar&iacute;a una canci&oacute;n o un mensaje de audio mientras se intenta solucionar el error.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Un script de liquidsoap es f&aacute;cil de crear para unas funciones b&aacute;sicas, pero tiene muchas &nbsp;funciones que son muy interesantes pero son dif&iacute;ciles de configurar.</span></p>
<p><br></p>


<p dir="ltr" style="line-height:1.38;text-align: center;margin-top:0pt;margin-bottom:3pt;"><span style="font-size:26pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&iquest;Qu&eacute; es MariaDB? &nbsp;</span></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span></p>

<p><br></p>

<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">MariaDB es un sistema de gesti&oacute;n de bases de datos derivado de MySQL con licencia GPL. Es desarrollado por Michael Widenius fundador de MySQL.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:10.5pt;font-family:Arial;color:#202122;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">En la pr&aacute;ctica, MariaDB reemplaza directamente a la misma versi&oacute;n de MySQL (MySQL 5.1 &rarr; MariaDB 5.1, MariaDB 5.2 y MariaDB 5.3 son compatibles. MySQL 5.5 &rarr; MariaDB 5.5). Las diferencias se encuentran en estos puntos:</span></p>
<p><br></p>
<ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:10.5pt;font-family:Arial;color:#202122;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 36pt;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:10.5pt;font-family:Arial;color:#202122;background-color:#ffffff;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Mecanismos de almacenamiento</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:10.5pt;font-family:Arial;color:#202122;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 36pt;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:10.5pt;font-family:Arial;color:#202122;background-color:#ffffff;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Facilidad de uso</span></p>
        <ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
            <li aria-level="2" dir="ltr" style="list-style-type:circle;font-size:10.5pt;font-family:Arial;color:#202122;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 36pt;">
                <p dir="ltr" style="line-height:1.38;background-color:#ffffff;margin-top:0pt;margin-bottom:1pt;"><span style="font-size:10.5pt;font-family:Arial;color:#202122;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Proporciona estad&iacute;sticas de &iacute;ndices y tabla, para lo que a&ntilde;ade nuevas tablas en INFORMATION_SCHEMA y nuevas opciones a los comandos FLUSH y SHOW para identificar la causa en la carga del SGBD.</span></p>
            </li>
        </ul>
    </li>
</ul>
<p dir="ltr" style="line-height:1.38;margin-left: 108pt;background-color:#ffffff;margin-top:6pt;margin-bottom:1pt;">&nbsp;</p>
<ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    <li aria-level="2" dir="ltr" style="list-style-type:circle;font-size:10.5pt;font-family:Arial;color:#202122;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 72pt;">
        <p dir="ltr" style="line-height:1.38;background-color:#ffffff;margin-top:6pt;margin-bottom:1pt;"><span style="font-size:10.5pt;font-family:Arial;color:#202122;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Los comandos ALTER TABLE y LOAD DATA INFILE dejan de ser opacos e informan del progreso.</span></p>
    </li>
</ul>
<p dir="ltr" style="line-height:1.38;margin-left: 108pt;background-color:#ffffff;margin-top:6pt;margin-bottom:1pt;">&nbsp;</p>
<ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    <li aria-level="2" dir="ltr" style="list-style-type:circle;font-size:10.5pt;font-family:Arial;color:#202122;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 72pt;">
        <p dir="ltr" style="line-height:1.38;background-color:#ffffff;margin-top:6pt;margin-bottom:0pt;"><span style="font-size:10.5pt;font-family:Arial;color:#202122;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">La precisi&oacute;n para tipo de datos TIME, DATETIME, y TIMESTAMP ampliada al microsegundo.</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:10.5pt;font-family:Arial;color:#202122;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 36pt;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:10.5pt;font-family:Arial;color:#202122;background-color:#ffffff;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Prestaciones</span></p>
        <ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
            <li aria-level="2" dir="ltr" style="list-style-type:circle;font-size:10.5pt;font-family:Arial;color:#202122;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 36pt;">
                <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:10.5pt;font-family:Arial;color:#202122;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">El optimizador de MariaDB -que se encuentra en el n&uacute;cleo de cualquier SGBD- funciona claramente m&aacute;s r&aacute;pido con cargas complejas.</span></p>
            </li>
        </ul>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:10.5pt;font-family:Arial;color:#202122;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;margin-left: 36pt;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:10.5pt;font-family:Arial;color:#202122;background-color:#ffffff;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Menos errores y alertas</span></p>
    </li>
</ul>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:10.5pt;font-family:Arial;color:#202122;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">MariaDB es usada en algunas de las instalaciones m&aacute;s reconocidas del mundo como por ejemplo ServiceNow, DBS Bank, Google, Fundaci&oacute;n Mozilla, y, desde 2013, en la Fundaci&oacute;n Wikimedia.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:10.5pt;font-family:Arial;color:#202122;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">La distribuci&oacute;n Debian GNU/Linux desde su versi&oacute;n 9 (Stretch) incorpora MariaDB por defecto.</span></p>
<p><br></p>
<p><br></p>

<p dir="ltr" style="line-height:1.38;text-align: center;margin-top:0pt;margin-bottom:3pt;"><span style="font-size:26pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&iquest;Qu&eacute; es Nginx?</span></p>
<p><br></p>

<p><br></p>

<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Nginx es un servidor web/proxy inverso ligero de alto rendimiento y un proxy para protocolos de correo electr&oacute;nico.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Es software libre y de c&oacute;digo abierto, licenciado bajo la Licencia BSD simplificada; tambi&eacute;n existe una versi&oacute;n comercial distribuida bajo el nombre de Nginx Plus.</span></p>
<p><br></p>

<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:16pt;"><span style="font-size:15pt;font-family:Arial;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">USO</span></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Originalmente, Nginx fue desarrollado para satisfacer las necesidades de varios sitios web de Rambler que recib&iacute;an unas 500 millones de peticiones al d&iacute;a en septiembre de 2008.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">De acuerdo con el estudio de Netcraft, Netcraft&apos;s Jul 2014 Web Server Survey, nginx es el segundo servidor web m&aacute;s usado en dominios activos (14,35%) superando a Internet Information Server de Microsoft. Adem&aacute;s, pas&oacute; la marca de ser usado en m&aacute;s de 100 millones de sitios. Para el 29 de mayo de 2018 en el informe actualizado para este mismo estudio, Nginx alcanz&oacute; los 359 millones de dominios servidos, a pesar de haber perdido 44 millones con respecto al mes anterior.</span></p>
<p><br></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:16pt;"><span style="font-size:15pt;font-family:Arial;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Comparaci&oacute;n con Apache</span></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Nginx fue inicialmente desarrollado con el fin expl&iacute;cito de superar el rendimiento ofrecido por el servidor web Apache. Sirviendo archivos est&aacute;ticos, Nginx usa mucha menos memoria que Apache, y puede manejar aproximadamente cuatro veces m&aacute;s solicitudes por segundo. Este aumento de rendimiento viene con un costo de disminuida flexibilidad, como por ejemplo la capacidad de anular las configuraciones de acceso del sistema por archivo&nbsp;</span></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;text-align: center;margin-top:0pt;margin-bottom:3pt;"><span style="font-size:26pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&iquest;Qu&eacute; es php?</span></p>
<p><br></p>

<p><br></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">PHP es un lenguaje de programaci&oacute;n de uso general que se adapta especialmente al desarrollo web. Fue creado inicialmente por el programador dan&eacute;s-canadiense Rasmus Lerdorf en 1994. En la actualidad, la implementaci&oacute;n de referencia de PHP es producida por The PHP Group.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">El c&oacute;digo PHP suele ser procesado en un servidor web por un int&eacute;rprete PHP implementado como un m&oacute;dulo, un daemon o como un ejecutable de interfaz de entrada com&uacute;n (CGI). En un servidor web, el resultado del c&oacute;digo PHP interpretado y ejecutado que puede ser cualquier tipo de datos, como el HTML generado o datos de im&aacute;genes binarias formar&iacute;a la totalidad o parte de una respuesta HTTP. Existen diversos sistemas de plantillas, sistemas de gesti&oacute;n de contenidos y frameworks que pueden emplearse para organizar o facilitar la generaci&oacute;n de esa respuesta. Por otra parte, PHP puede utilizarse para muchas tareas de programaci&oacute;n fuera del contexto de la web, como aplicaciones gr&aacute;ficas aut&oacute;nomas y el control de drones.8 Tambi&eacute;n se puede interpretar y ejecutar un c&oacute;digo PHP cualquiera a trav&eacute;s de una interfaz de l&iacute;nea de comandos (CLI).</span></p>
<p><br></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:16pt;"><span style="font-size:15pt;font-family:Arial;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Ventajas de PHP</span></p>
<ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">PHP puede ser desplegado en la mayor&iacute;a de servidores web, en todos los sistemas operativos y en todas las plataformas sin coste alguno.</span></p>
    </li>
</ul>
<p><br></p>
<ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">PHP es una alternativa a las tecnolog&iacute;as de Microsoft como ASP y ASP.NET.</span></p>
    </li>
</ul>
<p><br></p>
<ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">El c&oacute;digo PHP es invisible para el navegador web y para el cliente, ya que se ejecuta en el servidor y env&iacute;a el resultado en lenguaje HTML.</span></p>
    </li>
</ul>
<p dir="ltr" style="line-height:1.38;margin-left: 36pt;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span></p>
<ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Tiene la capacidad de expandirse con m&oacute;dulos.</span></p>
    </li>
</ul>
<p><br></p>
<ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Una gr&aacute;n ventaja es que es completamente libre.</span></p>
    </li>
</ul>
<p><br></p>
<ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Es un lenguaje de programaci&oacute;n f&aacute;cil de aprender</span></p>
    </li>
</ul>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:16pt;"><span style="font-size:15pt;font-family:Arial;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Desventajas de PHP</span></p>
<ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Debido a que es un lenguaje interpretado, un script en PHP suele funcionar considerablemente m&aacute;s lento que su equivalente en un lenguaje de bajo nivel, sin embargo este inconveniente se puede minimizar con t&eacute;cnicas de cach&eacute; tanto en archivos como en memoria.</span></p>
    </li>
</ul>
<p><br></p>
<ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Como es un lenguaje que se interpreta en ejecuci&oacute;n, para ciertos usos puede resultar un inconveniente que el c&oacute;digo fuente no pueda ser ocultado. La ofuscaci&oacute;n es una t&eacute;cnica que puede dificultar la lectura del c&oacute;digo pero no necesariamente impide que el c&oacute;digo sea examinado.</span></p>
    </li>
</ul>
<p><br></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:16pt;"><span style="font-size:15pt;font-family:Arial;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Principales sitios desarrollados con PHP</span></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Se utiliza PHP en millones de sitios; entre los m&aacute;s destacados se encuentran:</span></p>
<p><br></p>
<ul style="margin-top:0;margin-bottom:0;padding-inline-start:48px;">
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Digg</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Facebook</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Flickr</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Mailchimp</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Tumblr</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Wikipedia</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">WordPress</span></p>
    </li>
    <li aria-level="1" dir="ltr" style="list-style-type:disc;font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;">
        <p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Yahoo!</span></p>
    </li>
</ul>
<p><br></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:16pt;"><span style="font-size:15pt;font-family:Arial;color:#666666;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Sintaxis</span></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">La sintaxis de PHP, se fundamenta en los principios de programaci&oacute;n de C.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">El int&eacute;rprete de PHP solo ejecuta el c&oacute;digo que se encuentra entre sus delimitadores. Los delimitadores m&aacute;s comunes son &lt;?php para abrir una secci&oacute;n PHP y ?&gt; para cerrarla. El prop&oacute;sito de estos delimitadores es separar el c&oacute;digo PHP del resto de c&oacute;digo, como por ejemplo el HTML.51 En los archivos que contienen solo c&oacute;digo PHP, el delimitador ?&gt; se puede omitir. De hecho, PHP-FIG a trav&eacute;s de sus recomendaciones est&aacute;ndar para PHP recomienda omitir el delimitador ?&gt;, ya que as&iacute; no se env&iacute;a contenido HTML de manera accidental. Por ejemplo, si se env&iacute;a un car&aacute;cter &quot;no PHP&quot; (que no es procesado por el int&eacute;rprete de PHP), no se podr&aacute;n ejecutar ciertas acciones como enviar encabezados HTTP a trav&eacute;s de la funci&oacute;n header(), ya que el proceso de respuesta ya ha comenzado.</span></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;text-align: center;margin-top:0pt;margin-bottom:3pt;"><span style="font-size:26pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Planificaci&oacute;n del proyecto</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Una vez terminada la introducci&oacute;n a todo el software que necesitamos para el proyecto podemos pasar a la parte de la planificaci&oacute;n.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Para empezar se debe instalar Icecast2 y Liquidsoap que s&oacute;n las piedras angulares de este proyecto.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Tambi&eacute;n se debe instalar un servidor web, en este caso es Nginx, para poder alojar la p&aacute;gina donde daremos salida al audio del servidor web.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Una vez tengamos todo lo b&aacute;sico instalado procederemos a la configuraci&oacute;n de los servicios.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Primero empezaremos por el servidor web, creamos una copia del archivo de configuraci&oacute;n por defecto y lo modificamos, de cambiaremos el nombre del servidor, le daremos un puerto por el que salir, preferiblemente el 80 o 8080. Una vez terminada la configuraci&oacute;n b&aacute;sica empezaremos con la configuraci&oacute;n del int&eacute;rprete de PHP.</span></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Al terminar la configuraci&oacute;n debemos activar el sitio web.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">El siguiente paso ser&iacute;a configurar el servidor de streaming Icecast2, lo &uacute;nico que se debe modificar es el &nbsp;archivo icecast.xml.</span></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">En la configuraci&oacute;n le daremos un nombre al servidor, definiremos unas contrase&ntilde;as, una para las salidas de audio y la otra para el usuario de administraci&oacute;n, luego crearemos un punto de montaje para ejecutar el streaming.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Ahora pasamos a la configuraci&oacute;n de Liquidsoap, para ello configuraremos una playlist con algunas canciones, se crear&aacute; una carpeta con canciones y crearemos un archivo donde se escribir&aacute; el script para la ejecuci&oacute;n de la playlist.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Una vez configurado &eacute;sto ya tenemos un servicio de streaming de audio b&aacute;sico.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Lo siguiente es empezar con la creaci&oacute;n de la p&aacute;gina web, para ello usaremos la aplicaci&oacute;n Visual Studio Code. Con esta aplicaci&oacute;n podremos escribir c&oacute;digo de una forma muy sencilla y f&aacute;cil de visualizar.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">La primera meta para la web es crear una p&aacute;gina de inicio con una barra de navegaci&oacute;n para poder acceder a los distintos apartados que se crear&aacute;n para la p&aacute;gina.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Lo siguiente es crear diferentes p&aacute;ginas para alojar las salidas de audio, cada p&aacute;gina tendr&aacute; la salida de audio de una playlist diferente y una tabla con las canciones que hay en la playlist.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Para que funcione la tabla de las canciones necesitaremos una base de datos, por lo tanto el siguiente paso es instalar MariaDB y configurar la base de datos para que pueda recoger el nombre de las canciones de la playlist.</span></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Una vez instalada y configurada procederemos a crear el esquema y las tablas para las canciones.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Con las tablas ya creadas y con el uso de PHP para la conexi&oacute;n a la base de datos se podr&aacute; empezar a crear la lista de canciones.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Para introducir las canciones usaremos unas funciones de PHP que interact&uacute;an con la base de datos para escribir el resultado de unos scripts de Bash que se usar&aacute;n.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Los scripts de bash que se crear&aacute;n deber&aacute;n poder extraer el nombre de las canciones alojadas en el archivo donde est&aacute; escrito la direcci&oacute;n de cada canci&oacute;n.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Con esto se podr&aacute; crear una lista con los nombres de las canciones que se introduzcan en las playlists. &nbsp;</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Ahora podemos replicar la creaci&oacute;n de las playlists para tener el n&uacute;mero que se desee, solo se debe modificar el c&oacute;digo un poco.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Si la lista de canciones funciona correctamente podremos pasar al siguiente paso que ser&aacute; la funci&oacute;n de descarga de archivos. La idea es que los usuarios puedan descargar las canciones que hay p&uacute;blicas en las diferentes playlists.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Una vez funcione todo lo anterior pasaremos a la parte m&aacute;s importante y compleja del proyecto.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">La siguiente meta es la creaci&oacute;n de usuarios con playlists personalizables. Para ello usaremos unas funciones de PHP para crear usuarios y almacenarlos en la base de datos, en medio de la creaci&oacute;n se insertar&aacute;n unos scripts para automatizar la creaci&oacute;n de un punto de montaje, una carpeta de m&uacute;sica, una playlist y el script de ejecuci&oacute;n de la playlist.&nbsp;</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Para realizar esto se crear&aacute; una paǵina de registro de usuarios y una de Log-In que interactuar&aacute;n con la base de datos para insertar y recoger los credenciales de los usuarios.</span></p>
<p><br></p>
<p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;"><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">&nbsp;</span></p>

<br>


