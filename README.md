# Contact Diary Application 🙂

## Descripción :boom:

El presente aplicativo es herramienta que le permite al usuario tener un registro de todos sus contactos 
que utilice en su día a dia. Esta cuenta con las distintas funcionalidades para un gestionamiento
completo; el mismo se basa en el **listado**, **guardado**, **borrado**, **actualizado**. 

## 1.¿Cuándo se utiliza el método OPTIONS en las peticiones HTTP? 💿

Es implementado cuando se desea saber información adicional sobre las opciones de comunicación hacia un destino, este puede ser un servidor web. Además, permite que puedan consultarse aspectos como los métodos HTTP (POST, GET, PUT, DELETE) permitidos por un servidor a través del acceso por un nombre de dominio y demás capacidades que contenga el mismo.

## 2.Menciones por lo menos 3 tipos de códigos HTTP que existen 🤔

1. **200 OK**: Es un código que informa que la solicitud al servidor se ejecuto de manera exitosa.
2. **404 (NOT FOUND)**: Especifica que el servidor no pudo encontrar el recurso deseado.
3. **500 (Internal Server Error)**: Ocurre cuando se presenta un error en el servidor que no se ha podido gestionar.

## 3.¿Es óptimo manejar sesiones en una API REST?, explique el por qué y de un ejemplo :speech_balloon:

Si, ya que la arquitectura REST le permite al usuario interactuar con el servidor de manera eficiente en cuanto a sus necesidades (Métodos HTTP) y este también permite distintos tipos de autenticación por los encabezados HTTP, como lo es el caso de la básica; o bien por Token, permitiendo que el servidor genere un registro en base de datos de acuerdo a  las credenciales del usuario, para así evitar que tenga que solicitarse nuevamente sus datos.

Un ejemplo práctico es cuando deseamos entrar a un login de una página, estos datos bien son enviados a través del método POST, de forma segura, sin ser visualizados por la URL del navegador, y bien el servidor efectua el tipo de autenticación que tenga configurada (Básica, por token, etc).

## 4. ¿Qué valor imprime el siguiente código (Case 1) ? :cyclone:

    Question 4
    $a = array("A", "B", 1 => "C", "D", 2 => "E"); 
    echo count($a);
    Answer: Return 3 
    Array 3 postions ["A", "C", "E"];
    echo $a[0];
    echo $a[1];
    echo $a[2];

## 5. ¿Qué valor imprime el siguiente código (Case 2)? :zap:

    Question 5 
    $a=1;
    ++$a;
    $a *= $a;
    echo $a--;  
    Return 4, then decrement $a to 3

© 2022 Hecho con ❤️ por Ysnaldo José. López