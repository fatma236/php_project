<?php

function reciprocal($num) {
    if ($num == 0) {
        throw new Exception('Cannot divide by zero.');
    }
    return 1 / $num;
}

try {
    echo reciprocal(4) . ' ';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage() . ' ';
} finally {
    echo 'First finally executed. ';
}

try {
    echo reciprocal(0) . ' ';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage() . ' ';
} finally {
    echo 'Second finally executed. ';
}

echo 'End of script.';

?>
