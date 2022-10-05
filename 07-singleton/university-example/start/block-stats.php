<?php

/**
 * @file
 * Stats block.
 */

$memory = round(memory_get_peak_usage() / 1024, 2);

echo "Peak memory usage: $memory kb";
