<?php

namespace Tests\Unit;

use App\Models\Box;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
 {
    $box = new Box(['toy']);
    $this->assertTrue($box->has('toy'));
    $this->assertFalse($box->has('ball'));

    $this->assertEquals('toy', $box->takeOne());

    $this->assertNull($box->takeOne());

    $box = new Box(['toy', 'torch', 'ball', 'cat', 'tissue']);
    $results = $box->startsWith('t');

    $this->assertContains('toy', $results);
    $this->assertCount(3,$results);

    $box1 = new Box(['blue']);
    $result1 = $box1->startsWith('b');
    $this->assertContains("blue",$result1);
    $this->assertNotContains('green',$result1);
    $this->assertGreaterThanOrEqual(0,$box1->startsWith('g'));

    $this->assertStringContainsStringIgnoringCase('o','hello');

    $this->assertContainsOnly('string',['1','2','3']);
    $this->assertNotContainsOnly('integer',[[1,2,3],'2','3']);
    $this->assertNotCount(2,['1','2','3']);

    $this->assertDirectoryDoesNotExist('/path/to/directory');
    $this->assertEmpty([]);
    $this->assertEquals("foo\nbar\nbaz\n", "foo\nbar\nbaz\n");


    $this->assertEqualsCanonicalizing([5,1,3,4,2],[1,2,3,4,5]);

    $this->assertEqualsIgnoringCase('geek','GeEk');

    $this->assertEqualsWithDelta(1.0,1.5,0.5);


   // $this->assertObjectEquals($box, $box1);

    $this->assertGreaterThan(1,2);

    $num = INF;
    $this->assertInfinite($num);

    $this->assertIsArray([]);

    $this->assertIsBool(false);

    $this->assertIsCallable(function()
    {
        return 'hello world';
    });

    $variable =  fopen('http://www.google.com','r');
        // Assert function to test whether assert
        //  variable is Iterable
        $this->assertIsResource(
            $variable,
            "assert variable is Iterable or not"
        );
       fclose($variable);


}

public function say($msg)
{
    return $msg;
}
}
