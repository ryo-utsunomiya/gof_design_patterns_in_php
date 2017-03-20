<?php namespace Interpreter;

use Interpreter\Node\Program;

require_once __DIR__ . '/../vendor/autoload.php';

run('program end');
run('program go end');
run('program go right go right go right go right end');
run('program repeat 4 go right end end');
run('program repeat 4 repeat 3 go right go left end right end end');

/**
 * @param string $program
 */
function run($program)
{
    $node = new Program();
    $node->parse(new Context($program));
    printf("text: %s\n", $program);
    printf("node: %s\n", $node);
    echo "\n";
}