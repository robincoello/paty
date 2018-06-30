# si Equivalente al if

si CONDICION HACER_ESTO

El si se divide en tres partes, la palabra clave ``` si ``` la ```condicion``` y lo que se realizara si se cumple si la condicion es verdadera
 
si condicion 
    hacer

ejemplo: 

$llueve = si

si $llueve 
    llevar paraguas

Aca vemos que la palabra clave  ```si``` nos indica que vamos a evaluar si la variable ```$llueve``` es verdadero,
si es verdadero ejecutamos el resto y como el resto no empieza por ninguna palabra clave asumimos que es un print() o escribir()

El mismo codigo en dos lineas seria asi

si $llueve 
    llevar paraguas

Resultado

> llevar paraguas


Hay que tomar en cuenta que devemos separar la segunda linea del margen izquierdo on un TAB o 4 espacios para que no sea 
tomado como el inicio de otra instruccion 

Un si empieza con la palabra clave ``` si ``` seguido de la condicion despues en otra linea que empieza por la TAB se
ejecuta el codigo si esta condicion es correcta


Ejemplo


si llueve cerrar la ventana.

si (llueve) cerrar la ventana.

si ( 18 > $edad ) eres mayor de edad.

si ( 18 > $edad )
    eres mayor de edad.



 