<?php
    function dump($value){
        echo'<pre>';
        var_dump($value);
        echo'</pre>';
    }
   

    function connectToDb(string $dbname){
    try{
        $pdo =new PDO("mysql:host=127.0.0.1;dbname=$dbname",'root','');//arguements:dns,dbname,id,password
        return $pdo;
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
    }

    function selectAll(PDO $pdo,string $table,string $class){
        $statement=$pdo->prepare('select * from '.$table);// * is used to select all
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS,$class); //fetching data form database to class.
    }

    // function insert($pdo,$table,$data){
    //     $sql="INSERT INTO $table SET";
    //     foreach($data as $field=>$value){
    //         $fieldSQL[]="'$field'='$value'";
    //     }

    //     $sql .=implode(',',$fieldSQL);
    //     $statement=$pdo->prepare($sql);
    //     $statement->execute();
    // }
    ?>