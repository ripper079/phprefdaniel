<?php



// Single line comments
# Single line comments
/*
* Multi line comments
*/


//Many of the features that is in docblock has been reduced by e.t type hinting.
//Beware that many tools/libraries still uses the docblock for its functionality
// Works as annotations in c sharp

/**
 * Docblock
 *
 * @param int|float $numberOne This is the first term
 * @param int|float $numberTwo This is the first term
 * @return int The total sum of the $numberOne and $numberTwo
 */

function add($numberOne, $numberTwo)
{
    return $numberOne + $numberTwo;
}

class Transaction
{
    /** @var string  */
    private $customerName;

    /** @var float */
    private $amount;

    //Type hinting ok > php 7.4
    /** @var date */
    private date $dateOfTransaction;



    /**
     * @param Customer $customer The customer in talk
     * @param float $amount The amount the customer what to transfer...
     * @throws \InvalidArgumentException The object thrown is invalid data is entered
     */

    public function process($customer, $amount)
    {

    }

    /**
     *  @param Customer[] $arr
     */
    public function foo(array $arr)
    {
        //Use ful for 'specifying' type, some ide makes use of it
        /** @var Customer $obj */
        foreach ($arr as $obj) {
            $obj->someMethod();
        }
    }
}

/**
 * Class User
 * @property string $name
 * @property int $age
 */
class User
{
    private $data = [];

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
}

$user = new User();
$user->name = "John Doe";
$user->age = 30;

// Accessing virtual properties using magic __get() method
echo "Name: " . $user->name . PHP_EOL;
echo "Age: " . $user->age . PHP_EOL;
