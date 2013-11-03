<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Tests for Node_Column class
 *
 * @package PhpMyAdmin-test
 */

require_once 'libraries/navigation/NodeFactory.class.php';
require_once 'libraries/Util.class.php';
require_once 'libraries/Theme.class.php';

/**
 * Tests for Node_Column class
 *
 * @package PhpMyAdmin-test
 */
class Node_Column_Test extends PHPUnit_Framework_TestCase
{
    /**
     * SetUp for test cases
     *
     * @return void
     */
    public function setup()
    {
        $GLOBALS['server'] = 0;
        $GLOBALS['token'] = 'token';
        $_SESSION['PMA_Theme'] = PMA_Theme::load('./themes/pmahomme');
    }

    /**
     * Test for PMA_NodeFactory::getInstance
     *
     * @return void
     */
    public function testConstructor()
    {
        $parent = PMA_NodeFactory::getInstance('Node_Column');
        $this->assertArrayHasKey(
            'text',
            $parent->links
        );
        $this->assertContains(
            'tbl_structure.php',
            $parent->links['text']
        );
    }
}
?>
