<?php

namespace Application\Model;

class Task
{
    //creamos las variables iguales a las de bd
   public $id;
   public $title;
   public $description;
   public $creationDate;
   public $finishDate;
   public $finished;

   //creamos un nuevo metodo con parametro un array de datos
   public function exchangeArray(array $data)
   {
    //validacion que si no se encuentra el id lo setea nulo sino pone el valor de id
       $this->id = !empty($data['id']) ? $data['id'] : null;
       $this->title = !empty($data['title']) ? $data['title'] : null;
       $this->description = !empty($data['description']) ? $data['description'] : null;
       $this->creationDate = !empty($data['creation_date']) ? $data['creation_date'] : null;
       $this->finishDate = !empty($data['finish_date']) ? $data['finish_date'] : null;
       $this->finished = !empty($data['finished']) ? $data['finished'] : null;
   }
}