<?php

class Person {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function greet() {
        return "Hello, my name is {$this->name}";
    }
}

class Staff extends Person {
    public $role;

    public function __construct($name, $email, $role) {
        parent::__construct($name, $email);
        $this->role = $role;
    }

    public function getRole() {
        return $this->role;
    }
}

$user = new Person('Ali', 'ali@example.com');
echo $user->greet();
echo '<br>';

$staff = new Staff('Lina', 'lina@example.com', 'Developer');
echo $staff->greet();
echo '<br>';
echo 'Role: ' . $staff->getRole();

?>
