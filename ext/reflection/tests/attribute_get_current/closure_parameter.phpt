--TEST--
ReflectionAttribute::getCurrent() for closure parameter
--FILE--
<?php

#[Attribute]
class Demo {
	public function __construct( $args ) {
		echo ReflectionAttribute::getCurrent();
	}
}

$closure = static function ( #[Demo("closure param")] mixed $param ) {};

$case = new ReflectionParameter( $closure, 'param' );
echo $case;
$case->getAttributes()[0]->newInstance();

?>
--EXPECTF--
Parameter #0 [ <required> mixed $param ]
Fatal error: Uncaught Error: Not implemented yet in %s:%d
Stack trace:
#0 %s(%d): ReflectionAttribute::getCurrent()
#1 %s(%d): Demo->__construct('closure param')
#2 %s(%d): ReflectionAttribute->newInstance()
#3 {main}
  thrown in %s on line %d
