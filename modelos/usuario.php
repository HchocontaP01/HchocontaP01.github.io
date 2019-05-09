<?php
    include_once 'modelos/conexionDB.php';

    class User extends conexionDB{
    
        private $username;
    

        public function userExists($user, $pass){
            $md5pass = md5($pass);
            $query = $this->conectar()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');
            $query->execute(['user' => $user, 'pass' => $md5pass]);
            if($query->rowCount()){
                return true;
            }else{
                return false;
            }
        }
    
        public function setUser($user){
            $query = $this->conectar()->prepare('SELECT * FROM usuarios WHERE username = :user');
            $query->execute(['user' => $user]);
            foreach ($query as $currentUser) {
                $this->nombre = $currentUser['nombre'];
                $this->username = $currentUser['username'];
            }
        }
    
        public function getNombre(){
            return $this->nombre;
        }
    }
?>