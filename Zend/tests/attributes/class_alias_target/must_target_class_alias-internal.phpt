--TEST--
Error when attribute does not target class alias (internal attribute)
--FILE--
<?php

#[ClassAlias('Other', [new Override()])]
class Demo {}

?>
--EXPECT--
NO