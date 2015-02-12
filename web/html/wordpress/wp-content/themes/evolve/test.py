#!/usr/bin/env python
import datetime

print "Testing this python: "
print datetime.datetime.now().strftime("%Y-%m-%d %H:%M")

f = open('/var/www/html/wordpress/wp-content/themes/evolve/data/test.txt', 'w')
f.write('This is a test\n')
f.close()
