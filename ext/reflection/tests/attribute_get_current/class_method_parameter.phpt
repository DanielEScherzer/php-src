--TEST--
ReflectionAttribute::getCurrent() for method parameter
--FILE--
<?php

#[Attribute]
class Demo {
	public function __construct( $args ) {
		echo ReflectionAttribute::getCurrent();
	}
}

class WithDemo {

	public function method(
		#[Demo("method param")] mixed $param
	) {}

}

$case = new ReflectionParameter( [ WithDemo::class, 'method' ], 'param' );
echo $case;
$case->getAttributes()[0]->newInstance();

?>
--EXPECTF--
Parameter #0 [ <required> mixed $param ]
Fatal error: Uncaught Error: Not implemented yet in %s:%d
Stack trace:
#0 %s(%d): ReflectionAttribute::getCurrent()
#1 %s(%d): Demo->__construct('method param')
#2 %s(%d): ReflectionAttribute->newInstance()
#3 {main}
  thrown in %s on line %d
