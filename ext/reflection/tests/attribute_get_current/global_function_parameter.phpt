--TEST--
ReflectionAttribute::getCurrent() for function parameter
--FILE--
<?php

#[Attribute]
class Demo {
	public function __construct( $args ) {
		echo ReflectionAttribute::getCurrent();
	}
}

function globalFunc(
	#[Demo("function param")] mixed $param
) {}

$case = new ReflectionParameter( 'globalFunc', 'param' );
echo $case;
$case->getAttributes()[0]->newInstance();

?>
--EXPECTF--
Parameter #0 [ <required> mixed $param ]
Fatal error: Uncaught Error: Not implemented yet in %s:%d
Stack trace:
#0 %s(%d): ReflectionAttribute::getCurrent()
#1 %s(%d): Demo->__construct('function param')
#2 %s(%d): ReflectionAttribute->newInstance()
#3 {main}
  thrown in %s on line %d
