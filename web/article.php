<?php
   class Article {
       private $conn;
       private $table_name = "articles";

       public function __construct($db) {
           $this->conn = $db;
       }

       // Read all articles
       public function readAll() {
           $query = "SELECT article_id, image_url, title, publish_date, content 
                     FROM " . $this->table_name . " 
                     ORDER BY publish_date DESC";
           $stmt = $this->conn->prepare($query);
           $stmt->execute();
           return $stmt;
       }

   }
   ?>