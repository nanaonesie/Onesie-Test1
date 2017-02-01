<?php
namespace tests\lib;
use Lib\stringFormater;
class stringFormaterTest extends \PHPUnit_Framework_TestCase{

    public function testPrefixSucess(){
        $stringFormater = new stringFormater();
        $result =$stringFormater->prefix(false);
        $this->assertTrue($result);
    }

    public function testSuffixSucess(){
        $stringFormater = new stringFormater();
        $result =$stringFormater->suffix(false);
        $this->assertTrue($result);
    }

    public function testToCamelCase(){
        $stringFormater = new stringFormater();
        $result =$stringFormater->toCamelCae(false);
        $this->assertTrue($result);
    }
    
    
}
