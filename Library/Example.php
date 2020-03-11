<?php

/**
 * Example class is just an example.
 */

namespace Project;

/**
 * Example class.
 *
 * PHP Version 7.3
 *
 * @category ExamplePhpProject
 * @package  Project
 * @author   Jarkko Tervonen <jarkko.tervonen@gmail.com.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/jtervone/example-php-project
 */

class Example
{
    /**
     * Is class created
     *
     * @var bool
     */
    public $classCreated = false;

    /**
     * Constructor of the Example class
     */
    public function __construct()
    {
        $this->classCreated = true;
    }

    /**
     * Function which is not covered in tests
     *
     * @return void
     */
    public function thisIsNotCovered() : void
    {
        $this->classCreated = false;
    }

    /**
     * Function which is partly covered in tests
     *
     * @return boolean Is class created
     */
    public function thisIsPartlyCovered() : bool
    {
        if ($this->classCreated === false) {
            return true;
        }

        return false;
    }
}
