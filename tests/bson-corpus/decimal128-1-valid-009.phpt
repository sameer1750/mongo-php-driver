--TEST--
Decimal128: Special - Invalid representation treated as 0
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('180000001364000000000000000000000000000000106C00');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toJSON($bson)), "\n";

$json = '{"d" : {"$numberDecimal" : "0"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toJSON(fromJSON($json))), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
180000001364000000000000000000000000000000106c00
{"d":{"$numberDecimal":"0"}}
{"d":{"$numberDecimal":"0"}}
===DONE===