<?php
    class customer {
        public $name;
        public $dob;
        public $hobby;

        function setName ($name) {
            $this->name = $name;
        }

        function setDob ($dob) {
            $this->dob = $dob;
        }

        function setHobby ($hobby) {
            $this->hobby = $hobby;
        }

        function getAge () {
            $age = floor((time() - strtotime($this->dob)) / 31556926);
            echo "Hi ".$this->name.", you are ". $age." years old! You like ". $this->hobby."<br>";
        }
    }

    if (isset($_POST['submit'])) {
        $person = new customer;
        $person->setName($_POST['name']);
        $person->setDob ($_POST['dob']);
        $person->setHobby($_POST['hobby']);
        $person->getAge();
    }           
?>

<html>
    <body>
        <form action="index.php">
            <input type="submit" value="Return">
        </form>
    </body>
</html>
