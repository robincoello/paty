# paty

Quiero hablar con paty como si fuera un humano y no una computadora, por el momento cuando quiero saber algo paso codigos 
estilo: ```date``` para saber que fecha es pero lo que quiero es que escribir ```que fecha es``` y tener el mismo resultado


Requieres de los siguintes paquetes

* jq
* espeak




## Tipos de preguntas

### simples

Una pregunta simple ejemplo:

```como te llamas?``` Respuesta: ```robin```

### con datos extra

Una pregunta con dato estra

```cuanto es? 2+2``` respuesta ```4```

Aqui podemos pasar un dato al final de la pregunta, incluso esta fuera de ella, y sin este dato no podemos responder la pregunta

### con dato extra dentro o completa

```cual es la capital de Ecuador?``` respuesta ```Quito```

En este caso el dato esta dentro de la pregunta ya que no podriamos hacerla de esta manera

```cual es la capital de? Ecuador``` no suena natural


### Actualemte

Asi que por el momento ```paty``` solo se puede responder a preguntas simples

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







## Para leer en json 

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



































