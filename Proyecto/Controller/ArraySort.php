<?php

namespace Proyecto\Controller;


class ArraySort
{

  /* @var $array array */
  private $array;

  /**
   * La clase recibe el parámetro al momento de la creación de la instancia
   * @param $array
   */
  public function __construct($array)
  {
    $this->array = $array;
  }

  /**
   * Ordena un array realizando el método comparación de burbuja comparando de menor a mayor y guardando el
   * anterior si se cumpĺe
   * @return array
   */
  public function sort(): array
  {
    $n = count($this->array);
    for ($i = 0; $i < $n-1; $i++) {
      for ($j = 0; $j < $n-$i-1; $j++) {
        if ($this->array[$j] > $this->array[$j+1]) {
          // intercambiar $this->array[$j] y $this->array[$j+1]
          $temp = $this->array[$j];
          $this->array[$j] = $this->array[$j+1];
          $this->array[$j+1] = $temp;
        }
      }
    }
    return $this->array;
  }
}

// Ejemplo de uso
$arraysort = new ArraySort([1,3,5,8,7,4,2]);
$resultado = $arraysort->sort();
print_r($resultado);
