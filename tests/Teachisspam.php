<?php

class Teachisspam_Plugin extends PHPUnit_Framework_TestCase
{

    function setUp()
    {
        include_once __DIR__ . '/../teachisspam.php';
    }

    /**
     * Plugin object construction test
     */
    function test_constructor()
    {
        $rcube  = rcube::get_instance();
        $plugin = new teachisspam($rcube->api);

        $this->assertInstanceOf('teachisspam', $plugin);
        $this->assertInstanceOf('rcube_plugin', $plugin);
    }
}

