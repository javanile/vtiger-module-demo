#!/bin/bash
set -e

{ echo "1"; sleep 1; echo "Demo"; sleep 1; echo "Demo"; } | php -f /var/www/html/vtiger/vtlib/tools/console.php
