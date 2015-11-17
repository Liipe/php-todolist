<?php

class TaskService {
    
    public static function listTasks(){
        $db = ConnectionFactory::getDB();
        $tasks = array();
        
        
        //$db é o banco de dados , tasks() é a tabela do banco de dados
        foreach($db->tasks() as $task){
            $tasks[] = array(
                'id' => $task['id'],
                'description' => $task['description'],
                'done' => $task['done']
            );
        }
        
        $tasks;
    }
}
?>