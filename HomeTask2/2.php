<?php
$height = 15; // высота треугольнка
$height1 = $height - 2; // высота треугольнка без верхней и нижней строчки
$l1 = ($height * 2) - 1;
$arr = [];
for ($i = 0; $i <= $height; $i++) {
    for ($j = 0; $j <= $l1; $j++) {
        if ($i !== 0 && (($j == (($l1 - 1) / 2 - $i) - 1) || ($j == ($l1 -1)/2 + $i + 1))){
            $arr[$i][$j] = "*";
        } else if ($i == 0 && $j == ($l1 - 1) /2) {
            $arr[$i][$j] = "*";
        } else if ((($i == $height) && ($j % 2 == 0) && $j !== $height - 1)) {
            $arr[$i][$j] = "*";
        } else {
            $arr[$i][$j] = " ";
        }
    }
}



?>



<table>
    <?php foreach ($arr as list($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o, $p, $q, $r, $s, $t, $u, $v, $w, $x, $y, $z, $aa, $ab, $ac)): ?>
    <tr>
        <th><?php echo $a?></th>
        <th><?php echo $b?></th>
        <th><?php echo $c?></th>
        <th><?php echo $d?></th>
        <th><?php echo $e?></th>
        <th><?php echo $f?></th>
        <th><?php echo $g?></th>
        <th><?php echo $h?></th>
        <th><?php echo $i?></th>        
        <th><?php echo $j?></th>        
        <th><?php echo $k?></th>        
        <th><?php echo $l?></th>        
        <th><?php echo $m?></th>        
        <th><?php echo $n?></th>        
        <th><?php echo $o?></th>        
        <th><?php echo $p?></th>        
        <th><?php echo $q?></th>        
        <th><?php echo $r?></th>        
        <th><?php echo $s?></th>        
        <th><?php echo $t?></th>        
        <th><?php echo $u?></th>        
        <th><?php echo $v?></th>        
        <th><?php echo $w?></th>        
        <th><?php echo $x?></th>        
        <th><?php echo $y?></th>        
        <th><?php echo $z?></th>        
        <th><?php echo $aa?></th>        
        <th><?php echo $ab?></th>        
        <th><?php echo $ac?></th>        
    </tr>
    <?php endforeach; ?>
</table>
