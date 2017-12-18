<?php 
//namespace models;
class account extends classes\model 
	{
        public $id;
        public $email;
        public $fname;
        public $lname;
        public $phone;
        public $birthday;
        public $gender;
        public $password;
        protected static $modelName = 'account';
        static public function getTableName()
        {
            $tableName = 'accounts';
            return $tableName;
        }

        public static function findTasks()
        {
            //I am temporarily putting a findall here but you should add a method to todos that takes the USER ID and returns their tasks.
            $records = todos::findAll();
            print_r($records);
            return $records;
        }
        //add a method to compare the passwords this is where bcrypt should be done and it should return TRUE / FALSE for login
        
        public function setPassword($password) 
        {
            $password = password_hash($password, PASSWORD_DEFAULT);
            return $password;
        }

        public function checkPassword($LoginPassword) 
        {
            return password_verify($LoginPassword, $this->password);
        }

        public function validate()
        {
            $valid = TRUE;
            echo 'myemail: ' . $this->email;
            if($this->email == '') {
                $valid = FALSE;
                echo 'nothing in email';
            }
            return $valid;
        }
    }

        

    


 ?>
