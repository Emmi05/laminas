<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Application\Model\TaskTable; //que use el tasktable del modelo que se creo


class PruebasController extends AbstractActionController
{
    /** Tasktable tasktable es un tipo de dato? */
    private $table;

    public function __construct(TaskTable $table)
    {
        $this->table = $table;
    }

    // public function indexAction(): ViewModel
    // {
      
    //     //esta variable tasks es la misma que esta en la vista en index
    //     $tasks = $this->table->fetchAll();
    //     return new ViewModel(['tasks' => $tasks]);
    // }
    

    public function indexAction(): ViewModel
{
    try {
        $tasks = $this->taskTable->fetchAll();
    } catch (\Exception $e) {
        // Maneja la excepción, imprime el mensaje de error o registra en algún lugar
        echo "Error: " . $e->getMessage();
        // Puedes retornar una respuesta de error o tomar medidas adicionales según sea necesario
    }

    // Resto de la lógica del controlador...
    
    return new ViewModel(['tasks' => $tasks]);
}





}
