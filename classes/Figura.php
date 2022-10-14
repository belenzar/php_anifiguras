<?PHP 

class Figura{
   public $id;
   public $anime;
   public $fecha; 
   public $serie;
   public $especie;
   public $nombre;
   public $apellido;
   public $edad;
   public $caracteristicas;
   public $imagen;
   public $precio;

   /**
    * Me trae todas las figuras que tengo en stock
    */
   public function figurasTotal(): array{
      $figuras = [];

      $JSON = file_get_contents('datos/productos.json');
      $JSONdata = json_decode($JSON);

      foreach($JSONdata AS $item){
         $figura = new self();

         $figura->id = $item->id;
         $figura->anime = $item->anime;
         $figura->fecha = $item->fecha; 
         $figura->serie = $item->serie;
         $figura->especie = $item->especie;
         $figura->nombre = $item->nombre;
         $figura->apellido = $item->apellido;
         $figura->edad = $item->edad;
         $figura->caracteristicas = $item->caracteristicas;
         $figura->imagen = $item->imagen;
         $figura->precio = $item->precio;

         $figuras[] = $figura;
      }
      
      return $figuras;
   }

   /*Función que me separa las figuras por Animé*/
   public function figuraAnime($anime){

      $animeElegido = [];
      
      $figuras = $this->figurasTotal();

      foreach ($figuras as $item) {
         if ($item->anime == $anime){
            $animeElegido[] = $item;
         }
      }

      return $animeElegido;

   }

   /*Función que me trae una figura en particular */

   public function figuraId($id){
      $figuras = $this->figurasTotal();

      foreach ($figuras as $item) {
         if ($item->id == $id){
            return $item;
         }
      }

      return null;
   }

   /*Función que me trae las primeras 15 palabras de las características */

   public function caracteristicaCorta($palabras = 15){
      $parrafo = $this->caracteristicas;
     
      $array = explode(" ", $parrafo);
      if(count($array)<=$palabras){
          $resultado = $parrafo;
      } else {
          array_splice($array, $palabras);
          $resultado = implode(" ", $array). "...";
      }
      return $resultado;
    }
    
}

?>