<?php

function task1($arrLines, $ret = false)
{
    if ($ret) {
        return implode($arrLines, '');
    } else {
        foreach ($arrLines as $item) { ?>
            <p><?= $item ?></p>
        <? }
    }
}

function task2(...$arg)
{
    $operands = '';
    $res = 0;

    if ($arg[0] == '+') {
        for ($i = 1; $i < sizeof($arg); $i++) {
            $operands .= $i == sizeof($arg) - 1 ? $arg[$i] . ' = ' : $arg[$i] . ' ' . $arg[0] . ' ';
            $res += $arg[$i];
        }
    } elseif ($arg[0] == '-') {
        $res = $arg[1];
        for ($i = 1; $i < sizeof($arg); $i++) {
            $operands .= $i == sizeof($arg) - 1 ? $arg[$i] . ' = ' : $arg[$i] . ' ' . $arg[0] . ' ';
            if ($arg[$i + 1] != null) {
                $res -= $arg[$i + 1];
            }
        }
    } elseif ($arg[0] == '*') {
        $res = 1;
        for ($i = 1; $i < sizeof($arg); $i++) {
            $operands .= $i == sizeof($arg) - 1 ? $arg[$i] . ' = ' : $arg[$i] . ' ' . $arg[0] . ' ';
            $res *= $arg[$i];
        }
    } elseif ($arg[0] == '/') {
        $res = $arg[1];
        for ($i = 1; $i < sizeof($arg); $i++) {
            $operands .= $i == sizeof($arg) - 1 ? $arg[$i] . ' = ' : $arg[$i] . ' ' . $arg[0] . ' ';
            if ($arg[$i + 1] != null) {
                $res /= $arg[$i + 1];
            }
        }
    }

    echo $operands . $res . '<br>';
}

function task3($num1, $num2)
{
    if (is_int($num1) && is_int($num2)) { ?>
        <table cellspacing="0" cellpadding="0" style="border-collapse: collapse;">
            <?php for ($i = 1; $i <= $num1; $i++) { ?>
                <tr>
                    <?php for ($j = 1; $j <= $num2; $j++) { ?>
                        <td align="center" style="border: 1px solid black;width: 30px;height: 30px;">
                            <?= $i * $j ?>
                        </td>
                    <? } ?>
                </tr>
            <?php } ?>
        </table>
    <? } else {
        echo 'Передайте целые числа';
    }
}

function task4($name)
{
    echo file_get_contents($name);
}