<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="POST" action="">
    <input type="text" name="gorev" placeholder="Yorum">
    <br>
    <input type="submit" name="gonder" value="Gönder" />
  </form>
    <?php 
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "comment";

     try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->exec("SET NAMES utf8");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->query("SET @autoid:=0; UPDATE comment SET id=@autoid:=(@autoid+1); ALTER TABLE comment AUTO_INCREMENT=1");

        $result = $conn->query("SELECT * FROM comment", PDO::FETCH_ASSOC);

        
         if(isset($_POST['gonder'])){
         if(!$_POST['gorev']){
             echo "Boş bırakmayın";   
         }else{
         $kaydet=$conn->prepare("INSERT INTO comment(yorum) VALUES(?)");
         $kaydet->execute(array($_POST['gorev']));
         header('Location: deneme1.php');
         
         }
                  
                        
        }
        

       
    
    }catch (PDOException $e) {
        die($e->getMessage());    
    }
    
    
    ?>
</body>
</html>
