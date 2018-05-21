# Paty

Quiero hablar con paty como si fuera un humano y no una computadora, por el momento cuando quiero saber algo, ejemplo: 'la fecha' escribo en la consola :
 
```date``` 

y me sale algo parecido a esto: 

``` jue dic  7 23:12:29 CET 2017  ```


pero lo que quiero es escribir: 

```que fecha es``` 

y tener un resultado mas claro y facil de entender



## Requiere de los siguientes paquetes

* jq
* espeak

https://github.com/dominictarr/JSON.sh



## Tipos de preguntas
Hay varias formas de hacer una pregunta, vamos a clasificarlas en 3 tipos segun si contiene o no el dato el cual necesitamos hacer la pregunta


### simples

Una pregunta simple donde no necesita de un dato extra dentro o fuera de la pregunta para ser respondida


```como te llamas?``` Respuesta: ```paty```

### Con datos extra

Una pregunta con dato extra

```cuanto es? 2+2``` respuesta ```4```

Aqui podemos pasar un dato al final de la pregunta, y si separamos el dato del resto de la frase podriamos aun responder a la pregunta solo con el dato.

### con dato extra dentro o completa

```La capital del Ecuador es?``` respuesta ```Quito```

En este caso el dato Ecuador esta dentro (en cualquier parte de la pregunta) si separamos el dato del resto de la frase, el dato no tiene ningun significado

```cual es la capital de? Ecuador``` no suena natural


### Actualmente

Por el momento ```paty``` solo se puede responder a preguntas simples ya que son preguntas programadas para dar una respuesta sin ningun tipo de analisis de la pregunta, 
esto quiere decir que basta con un error de escritura en la pregunta para que nos de un resultado diferente.

## El problema

Como se podran imaginar, podriamos hacer una lista de preguntas simples a las cuales ```paty``` podria responder
pero rapidamente las preguntas serian tantas que no podriamos administrarlas en una base de datos

## Solución 

Analizar la frase para saber que pregunta esta haciendo el usuario y darle una respuesta adecuada

La solucion es simple, aunque la implementacion sea la complicada, 

Listo, lo haces para mañana temprano jiii

## Instalación

```
cd ~
git clone https://github.com/robincoello/paty.git

cd paty

# ahora copia
sudo cp paty /usr/local/bin/

# dale permisos de ejecución

sudo chmod +x /usr/local/bin/paty

```

Ahora puedes hacer preguntas a paty

```
paty
```

Y te saldra esto:


```
robin, tienes que hacer una pregunta que pueda responder
Esta es la lista de preguntas que puedo responder
===================================
"dame la lista de programas ") 
"busca programa ") 
"dame detalles de ") 
"que version de fedora estoy usando ")
"quien esta conectado ") 
"quien soy ")
"que fecha es ")
"hola ")
"chao ")
"como te llamas "  | "cual es tu nombre ")
"que edad tienes " | "cuantos años tienes ")
"donde vives ")
"como me llamo ")
"ayudame " | "ayuda")
"me quieres ")
===================================

```

ahora intenta cualquier pregunta asi:

```
paty cual es tu nombre
```



Ahora nos queda hacer un sitio web con una base de datos de preguntas y respuestas (pyr) seguramente con puntajes para que los 
usuarios publiquen sus pyr y paty pueda leer estas pyr y presentarlas en la consola, 

## Hacer
* pasar comando de linux segun tipo de distribucion
* como puntuar las respuestas desde la consola
* 



## Para leer en json desde la web via una api

```
[robin@localhost paty]$ php pr-json.php | jq '.'
{
  "id": "01",
  "pregunta": "Cual es la capital del Ecuador",
  "respuesta": "Quito",
  "estatus": "1"
}
[robin@localhost paty]$ 


```

https://ouep.eu/shell/internationalisation-de-scripts-bash/

https://www.semicomplete.com/projects/xdotool/xdotool.xhtml































