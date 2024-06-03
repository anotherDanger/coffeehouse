<?php 

abstract class Db
{
    private $host = "localhost";
    private $port = 3306;
    private $dbName = "coffeehouse";
    private $username = "root";
    private $password = "andhikad";
    private $conn;

    protected function getConn()
    {
        try
        {
            $conn = new PDO("mysql:host=$this->host:$this->port;dbname=$this->dbName",$this->username, $this->password);
            return $conn;
        }catch(Exception $e)
        {
            echo "Koneksi ke database gagal " . $e->getMessage();
            return false;
        }
    }
}

interface LoginInterface
{
    function validate($data);
}

class Login extends Db implements LoginInterface
{
    private $conn;

    public function __construct()
    {
        $this->conn = $this->getConn();
    }

    public function validate($data)
    {
        $username = $data["username"];
        $password = $data["password"];

        $query = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
        $query->execute([$username]);
        $row = $query->fetch(PDO::FETCH_ASSOC);

        if($username === $row["username"])
        {
            if($password !== $row["password"])
            {
                echo "<scritp>
                    alert('Username/Password Salah');
                </script>";
                return false;
            }
            echo "<scritp>
                    alert('Berhasil Login');
                </script>";
                return true;
        }
    }
}


?>