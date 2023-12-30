<?php

declare(strict_types=1);

namespace Application;

use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\ModuleManager\Feature\ConfigProviderInterface;
//checar si esto afecta en algo 
use Application\Model\Task;
use Application\Model\TaskTable;


class Module implements ConfigProviderInterface
{
    public function getConfig(): array
    {
        /** @var array $config */
        $config = include __DIR__ . '/../config/module.config.php';
        return $config;
    }
                public function getServiceConfig(): array
            {
            return [
                'factories' => [
                    'TaskTableGateway' => function ($sm) {
                        $dbAdapter = $sm->get(AdapterInterface::class); //Reconstruimos la conex con la bd eso esta en archivo autoload
                        $resultSetPrototype = new ResultSet();
                        $resultSetPrototype->setArrayObjectPrototype(new Task());  //db adaptater ya tiene la config de bd
                        return new TableGateway('task',$dbAdapter, null, $resultSetPrototype);//que use la tabla task
                    },
                    //funcion anonima que manda a llamar a la funcion de arriba
                    'Application\Model\TaskTable' => function ($sm) {
                        $tableGateWay = $sm->get('TaskTableGateway');
                        return new TaskTable($tableGateWay);
                    }
                ]
            ];
            }

            //vamos a hacer para que lea las tareas de la bd
        public function getControllerConfig() :array
        {
        return [
            'factories' => [
                Controller\PruebasController::class => function ($container) {
                    return new Controller\PruebasController(
                        $container->get(Model\TaskTable::class)
                    );
                }
            ]
        ];
        }

}
