<?php
  class UsersView extends Users{
      
      public function showUser($username, $field='username'){
          $results = $this->getUser($username, $field);
          echo "<h1>HTML OUTPUT</h1>";
          echo var_dump($results);
      }
  }  
?>