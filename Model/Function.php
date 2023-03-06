<?php
class img{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function Image($filename)
    {
        $sql = "INSERT INTO images (file_name) VALUES ('$filename')";
        if($filename != ""){
            $query = $this->ConDB->prepare($sql);
            if( $query->execute()){
                return true;
            }else {
                return false;
            }
        } else {
            return false;
            }
    }

    public function getImage()
    {
        $sql = "SELECT * FROM images";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $data = json_encode($result);
            return $data;
        }else {
            return false;
        }
    }

}
?>