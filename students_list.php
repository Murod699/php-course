    <?php
    include('multiple_array.php');
?>
<html>
<head>
    <title>Guruh royxati</title>
</head>
<body>
    <table width="100%" border =1>
        <thead>
            <th>№</th>
            <th>FIO</th>
            <th>Guruh</th>
            <th>Yosh</th>
            <th>Yosh kattaligi</th>
        </thead>
        <tbody>
        <!-- PHP Default -->
        <!--
        <?php foreach ($students as $key => $student) { ?>
            <tr>
                <td><?php echo $student['fio']; ?></td>
                <td><?php echo $student['group']; ?></td>
                <td><?php echo $student['age']; ?></td>
            </tr>
     } ?>
        -->
        <!-- PHP Alternative -->
        <?php foreach ($students as $key => $student): ?>
            <tr>
                <td><?= ++$key ?></td>
                <td><?= $student['fio'] ?></td>
                <td><?= $student['group'] ?></td>
                <td><?= $student['age'] ?></td>
                <td>
                    <?php if($student['age'] <= 18): ?>
                        Yosh
                    <?php elseif($student['age'] <= 20): ?>
                        Yoshiroq
                    <?php else: ?>
                        O'rta
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>