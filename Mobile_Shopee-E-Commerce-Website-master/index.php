<?php
    ob_start();
    // include header.php file
    include ('header.php');
?>

<?php

    /*  include banner area  */
        include ('Template/_banner-area.php');
    /*  include banner area  */

    /*  include top sale section */
        include ('Template/_top-sale.php');
    /*  include top sale section */

    /*  include special price section  */
         include ('Template/_special-price.php');
    /*  include special price section  */

    /*  include banner ads  */
        include ('Template/_banner-ads.php');
    /*  include banner ads  */

    /*  include new phones section  */
        include ('Template/_new-phones.php');
    /*  include new phones section  */

    /*  include blog area  */
         include ('Template/_blogs.php');
    /*  include blog area  */

?>


<?php
// include footer.php file
include ('footer.php');
?>

<?php

class Controller{
    // protected variable that can access only in the class

protected $host = 'localhost';

protected $user = 'root';

protected $password = '';

protected $database = 'shopee';



}



public $con = null;

public function __construct()

{

// initialize connection property

$this->con = mysqli_connect($this->host, $this->user, $this->password, $this->datab A

if($this->con->connect_error) {

echo "Fail". $this->con->connect_error; X

}

echo "Connection Successful...!";
}