# Pruebas de Nivel PHP

## Descripción

Este repositorio contiene dos pruebas de nivel realizadas en PHP para evaluar conocimientos de lógica de programación, programación orientada a objetos (POO), arrays, métodos y gestión de objetos.

---

# 1. Prueba de Nivel - Clase Kata

## Objetivo

Desarrollar un ejercicio utilizando una clase `Kata` para demostrar conocimientos de Programación Orientada a Objetos y lógica en PHP.

## Funcionalidades

* Crear katas con:

  * Nombre
  * Descripción
  * Dificultad
  * Tiempo estimado

* Gestionar colecciones de katas mediante una clase gestora (`KataManager`).

* Utilizar un enum para representar la dificultad.

## Conceptos practicados

* Programación Orientada a Objetos (POO)
* Clases y objetos
* Clase gestora (`KataManager`)
* Enums (`Dificultad`)
* Métodos y getters
* Arrays de objetos
* Condicionales
* Bucles (`for`, `foreach`, `while`)
* Lógica de programación

## Estructura

* `Kata.php` → Clase principal de la kata.
* `KataManager.php` → Clase gestora de katas.
* `Dificultad.php` → Enum de dificultad.
* `index.php` → Punto de entrada y pruebas.

## Tecnologías

* PHP
* XAMPP
* Visual Studio Code

## Ejecución

1. Abrir el proyecto en VS Code.
2. Iniciar Apache desde XAMPP.
3. Ejecutar el archivo principal desde el navegador o terminal.

---

# 2. Prueba de Nivel - Gestión de Karatecas (POO)

## Objetivo

Crear un sistema sencillo para gestionar karatecas utilizando Programación Orientada a Objetos en PHP.

## Funcionalidades

* Crear karatecas con:

  * Nombre
  * Edad
  * Cinturón
  * Grado
  * Años de experiencia

* Obtener:

  * El karateca más experimentado
  * Karatecas mayores de una edad determinada

## Conceptos practicados

* Clases y objetos
* Constructores
* Encapsulación
* Arrays de objetos
* Clase gestora (`KaratecaManager`)
* Métodos y getters
* Uso de `foreach`
* Manejo de valores `null`
* Uso de `$this`

## Estructura

* `Karateca.php` → Clase principal del karateca.
* `KaratecaManager.php` → Clase gestora.
* `index.php` → Punto de entrada y pruebas.

## Tecnologías

* PHP
* XAMPP
* Visual Studio Code

## Ejecución

1. Iniciar Apache en XAMPP.
2. Colocar el proyecto en `htdocs`.
3. Ejecutar `index.php` desde el navegador o terminal.


