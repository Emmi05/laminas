<?php //echo "no se nada";?>
<!-- <h1>Hola desde el modulo To Do App!</h1> <p>You said "
<?php //echo $this->message ?>".</p> -->

<h4 class="d-flex justify-content-between align-items-center mb-3 mt-3">
   <span class="text-muted">Todas las tareas</span>
   <a class="btn btn-sm btn-info" href="<?= $this->url('home', ['action' => 'create'])?>">Crear</a>
</h4>
<table class="table table-hover">
   <thead>
   <tr>
       <th>Título</th>
       <th>Fecha de creación</th>
       <th>Fecha de finalización</th>
       <th>Completada</th>
       <td>Operaciones</td>
   </tr>
   </thead>

   <tbody>
   
   <?php if (!empty($this->tasks) && is_array($this->tasks)) : ?>
    <?php foreach ($this->tasks as $task) : ?>
        <tr>
            <td><?= $this->escapeHtml($task->title) ?></td>
            <td><?= $this->escapeHtml($task->creationDate) ?></td>
            <td><?= $this->escapeHtml($task->finishDate) ?></td>
            <td><?= $task->finished ? 'Si' : 'No' ?></td>
            <td>
                <span class="ml-1">Editar</span>
                <span class="ml-1">Ver</span>
                <span class="ml-1">Eliminar</span>
            </td>
        </tr>
    <?php endforeach; ?>
<?php else : ?>
    <tr>
        <td colspan="5">No hay tareas disponibles.</td>
    </tr>
<?php endif; ?>

   </tbody>
</table>