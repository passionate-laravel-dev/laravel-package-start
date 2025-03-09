<?php

declare(strict_types=1);

/**
 * find the maximum value in a series of nested arrays
 */
function my_max(array $xs): int
{
    $max = PHP_INT_MIN;

    for ($i = 0; $i < count($xs); $i++) {
        if (is_array($xs[$i])) {
            $maxInSubArray = my_max($xs[$i]);
            if ($maxInSubArray > $max) {
                $max = $maxInSubArray;
            }
        } else {
            if ($xs[$i] > $max) {
                $max = $xs[$i];
            }
        }
    }

    return $max;
}
echo my_max([1, [2, 3]]); // 3
