<?php 
for ($i = 1; $i <= 10; $i++) {
    
    for ($j = 1; $j <= 10; $j++) {
        
    $arr2[$j - 1] = $j * $i;
    }
    
    $arr[$i - 1] = $arr2;
    
}
?>

<style>
    table, 
    th {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<table>
    <caption> Таблица умножения </caption>
    <?php foreach ($arr as list($a, $b, $c, $d, $e, $f, $g, $h, $i, $j)): ?>
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
    </tr>
    <?php endforeach; ?>    
</table>

