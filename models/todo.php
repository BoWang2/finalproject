<?php 
//namespace models;
 class todo extends classes\model 
 {
        public $id;
        public $owneremail;
        public $ownerid;
        public $createddate;
        public $duedate;
        public $message;
        public $isdone;
        protected static $modelName = 'todo';
        static public function getTableName()
        {
            $tableName = 'todos';
            return $tableName;
        }
    }

 ?>