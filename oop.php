<?php
    class Person {
        private $name;
        private $email;
        private static $ageLimit = 40;

        // constructor
        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' created<br>';
        }

        public function __destruct() {
            echo __CLASS__.' destroyed<br>';
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            return $this->name = $name;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            return $this->email = $email;
        }

        public static function getAgeLimit() {
            return self::$ageLimit;
        }
    }

    // $person1 = new Person('ahmed', 'ahmed@gmail.com');
    // echo $person1->getName();
    
    // echo $person1->setName('umer');
    // echo $person1->setEmail('ahmed@gmail.com');

    class Customer extends Person {
        private $balance;

        public function __construct($name, $email, $balance) {
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new'.__CLASS__.' created<br>';
        }

        public function setBalance($balance) {
            return $this->balance = $balance;
        }
        
        public function getBalance() {
            return $this->balance;
        }
    }

    // $customer = new Customer('Jone doe', 'jdoe@gmail.com', 300);
    // echo $customer->getBalance();
    echo Person::getAgeLimit();
?>