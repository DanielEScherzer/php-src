--TEST--
Test bad ISO date formats passed to DatePeriod constructor
--FILE--
<?php

try {
    new DatePeriod("R4");
} catch (Exception $e) {
    echo $e::class, ': ', $e->getMessage(), "\n";
}

try {
    DatePeriod::createFromISO8601String("R4");
} catch (Exception $e) {
    echo $e::class, ': ', $e->getMessage(), "\n";
}

try {
    new DatePeriod("R4/2012-07-01T00:00:00Z");
} catch (Exception $e) {
    echo $e::class, ': ', $e->getMessage(), "\n";
}

try {
    DatePeriod::createFromISO8601String("R4/2012-07-01T00:00:00Z");
} catch (Exception $e) {
    echo $e::class, ': ', $e->getMessage(), "\n";
}

try {
    new DatePeriod("2012-07-01T00:00:00Z/P7D");
} catch (Exception $e) {
    echo $e::class, ': ', $e->getMessage(), "\n";
}

try {
    DatePeriod::createFromISO8601String("2012-07-01T00:00:00Z/P7D");
} catch (Exception $e) {
    echo $e::class, ': ', $e->getMessage(), "\n";
}

?>
--EXPECTF--
Deprecated: Calling DatePeriod::__construct(string $isostr, int $options = 0) is deprecated, use DatePeriod::createFromISO8601String() instead in %s on line %d
DateMalformedPeriodStringException: DatePeriod::__construct(): ISO interval must contain a start date, "R4" given
DateMalformedPeriodStringException: DatePeriod::createFromISO8601String(): ISO interval must contain a start date, "R4" given

Deprecated: Calling DatePeriod::__construct(string $isostr, int $options = 0) is deprecated, use DatePeriod::createFromISO8601String() instead in %s on line %d
DateMalformedPeriodStringException: DatePeriod::__construct(): ISO interval must contain an interval, "R4/2012-07-01T00:00:00Z" given
DateMalformedPeriodStringException: DatePeriod::createFromISO8601String(): ISO interval must contain an interval, "R4/2012-07-01T00:00:00Z" given

Deprecated: Calling DatePeriod::__construct(string $isostr, int $options = 0) is deprecated, use DatePeriod::createFromISO8601String() instead in %s on line %d
DateMalformedPeriodStringException: DatePeriod::__construct(): Recurrence count must be greater or equal to 1 and lower than %d
DateMalformedPeriodStringException: DatePeriod::createFromISO8601String(): Recurrence count must be greater or equal to 1 and lower than %d
