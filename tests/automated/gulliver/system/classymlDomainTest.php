<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'gulliver/system/class.ymlDomain.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:24.
*/

class classymlDomainTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var ymlDomain
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new ymlDomain();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
    */
    protected function tearDown()
    {
    }

    /**
     * This is the default method to test, if the class still having
     * the same number of methods.
    */
    public function testNumberOfMethodsInThisClass()
    {
        $methods = get_class_methods('ymlDomain');        $this->assertTrue( count($methods) == 11);
    }

    /**
    * @covers ymlDomain::ymlDomain
    * @todo   Implement testymlDomain().
    */
    public function testymlDomain()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('ymlDomain', $methods ), 'exists method ymlDomain' );
        $r = new ReflectionMethod('ymlDomain', 'ymlDomain');
        $params = $r->getParameters();
    }

    /**
    * @covers ymlDomain::addDomain
    * @todo   Implement testaddDomain().
    */
    public function testaddDomain()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('addDomain', $methods ), 'exists method addDomain' );
        $r = new ReflectionMethod('ymlDomain', 'addDomain');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'domainName');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers ymlDomain::addDomainValue
    * @todo   Implement testaddDomainValue().
    */
    public function testaddDomainValue()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('addDomainValue', $methods ), 'exists method addDomainValue' );
        $r = new ReflectionMethod('ymlDomain', 'addDomainValue');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'domainName');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'value');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers ymlDomain::exists
    * @todo   Implement testexists().
    */
    public function testexists()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('exists', $methods ), 'exists method exists' );
        $r = new ReflectionMethod('ymlDomain', 'exists');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'domainName');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers ymlDomain::get
    * @todo   Implement testget().
    */
    public function testget()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('get', $methods ), 'exists method get' );
        $r = new ReflectionMethod('ymlDomain', 'get');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'resource');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers ymlDomain::name2keys
    * @todo   Implement testname2keys().
    */
    public function testname2keys()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('name2keys', $methods ), 'exists method name2keys' );
        $r = new ReflectionMethod('ymlDomain', 'name2keys');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'resource');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers ymlDomain::load
    * @todo   Implement testload().
    */
    public function testload()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('load', $methods ), 'exists method load' );
        $r = new ReflectionMethod('ymlDomain', 'load');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'resource');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers ymlDomain::find
    * @todo   Implement testfind().
    */
    public function testfind()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('find', $methods ), 'exists method find' );
        $r = new ReflectionMethod('ymlDomain', 'find');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'nodesKey');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'where');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers ymlDomain::getNode
    * @todo   Implement testgetNode().
    */
    public function testgetNode()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getNode', $methods ), 'exists method getNode' );
        $r = new ReflectionMethod('ymlDomain', 'getNode');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'nodeKey');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'from');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers ymlDomain::plainArray
    * @todo   Implement testplainArray().
    */
    public function testplainArray()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('plainArray', $methods ), 'exists method plainArray' );
        $r = new ReflectionMethod('ymlDomain', 'plainArray');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'array');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers ymlDomain::arrayAppend
    * @todo   Implement testarrayAppend().
    */
    public function testarrayAppend()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('arrayAppend', $methods ), 'exists method arrayAppend' );
        $r = new ReflectionMethod('ymlDomain', 'arrayAppend');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'to');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'appendFrom');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

  }
