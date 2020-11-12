<?php 

declare(strict_types=1);
require 'src/Rss.php';

use AdrianWitkowskiRekrutacjaHRtec\Rss\Rss as Rss;
use PHPUnit\Framework\TestCase;
 
class RssTest extends TestCase
{
    private $rss;

    protected function setUp(): void
    {
        $this->rss = new Rss();
    }

    protected function tearDown(): void
    {
        $this->rss = null;
    }
 
    public function testcheckParameters()
    {
        $argv = array();
        $argv[] = "src/console.php";
        $argv[] = "csv:simpleeee";
        $argv[] = "https://blog.nationalgeographic.org/rss";
        $argv[] = "simple_export.csv";

        $argc = count($argv);

        $result = $this->rss->checkParameters($argc, $argv);
        $this->assertEquals($result, false);
    }

    public function testInitIfFeedIsNotEmpty()
    {
        $this->rss->setUrl("https://blog.nationalgeographic.org/rss");
        $result = $this->rss->init();
        $this->assertTrue($result);
    }
 
}