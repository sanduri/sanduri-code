#!/usr/bin/perl

use JSON::PP;

my $json = JSON::PP->new->utf8;

$text=' { "author": 
Zach Carter <zach@carter.name> (http://zaa.ch)", "name": "jsonlint", "description": "Validate JSON", "keywords": [ "json", "validation", "lint", "jsonlint" ], "version": "1.6.2", "preferGlobal": true, "repository": { "type": "git", "url": "git://github.com/zaach/jsonlint.git" }, "bugs": { "url": "http://github.com/zaach/jsonlint/issues" }, "main": "lib/jsonlint.js", "bin": { "jsonlint": "lib/cli.js" }, "engines": { "node": ">= 0.6" }, "dependencies": { "nomnom": ">= 1.5.x", "JSV": ">= 4.0.x" }, "devDependencies": { "test": "*", "jison": "*", "uglify-js": "*" }, "scripts": { "test": "node test/all-tests.js" }, "homepage": "http://zaach.github.com/jsonlint/", "optionalDependencies": {} } ';

eval {
	$a=decode_json $text;
	print "Text is valid JSON\n";
	print $json->pretty->encode ($a);
}
or do {
	$e=$@;
	print "Parse error\n";
	print $e."\n";
};
