# Curso Laravel

1. Definición
2. Requisitos
3. Recursos
4. Instalación
5. Iniciar el server
6. Actualizar desde un proyecto hecho

## Definición
> Laravel es uno de los frameworks de código abierto más fáciles de asimilar para PHP.  El objetivo de Laravel es el de ser un framework que permita el uso de una sintaxis refinada y expresiva para crear código de forma sencilla, evitando el “código espagueti” y permitiendo multitud de funcionalidades.  Aprovecha todo lo bueno de otros frameworks y utiliza las características de las últimas versiones de PHP.  Fue creado en 2011 por Taylor Otwell y tiene una gran influencia de frameworks como Ruby on Rails, Sinatra y ASP.NET MVC.  
> Gran parte de Laravel está formado por dependencias, especialmente de Symfony, esto implica que el desarrollo de Laravel dependa también del desarrollo de sus dependencias.  

## Requisitos
> De Software  

1. un terminal 
- [ ] la del sistema operativo  
- [ ] cmDer https://cmder.net/
- [ ] Cygwin https://www.cygwin.com/
- [ ] Git Bash  

2. Composer 
 Composer es un administrador de dependencias en PHP.
 https://getcomposer.org/  
 https://getcomposer.org/Composer-Setup.exe
 
## Recursos
- [ ] Manual oficial de Laravel:  https://laravel.com/
- [ ] Laracasts_  https://laracasts.com/
- [ ] Styde https://styde.net/ 
- [ ] Laravel News https://laravel-news.com/


## Instalación
> Usando composer vamos a movernos al directorio de trabajo    
> En ese directorio vamos a crear un proyecto (carpeta con toda la magia de laravel) .  
> Con el comando "cd" nos movemos a nuestro directorio de trabajo    
> y luego, con el comando "composer create-project" crearemos un proyecto     

`composer create-project laravel/laravel nombre "version"`


> Ejemplo para instalar laravel 6x    
`composer create-project laravel/laravel proyecto "6.*"`

## Iniciando el server
> Nos tenemos que mover a la carpeta del proyecto    
> y en la terminal hacer    

`cd proyecto`


> EL MARAVILLOSO MUNDO DE ARTISAN    
> para iniciar al server es el comando    

`php artisan serve`

## Actualizar desde un proyecto hecho

>Moverse al directorio de trabajo
  
    cd directorio

>Clonar el proyecto existente con el comando git clone  

    git clone https://github.com/exegeses/LaravelAllDeNaih.git
    
>Descargar el directorio Vendor y otros componentes de laravel que no descargaron del proyecto original usamos el comando composer update  

    composer update  
    
>Crear el archivo de configuración ".env", ya que este no descargó del proyecto clonado.   
>Simplemente se renombra el archivo ".env.example" a ".env"  

>Generar la key del proyecto con el comando key:generate  

    php artisan key:generate   
    
