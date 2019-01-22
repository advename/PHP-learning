<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Members</h1>
    <ul>
        <?php foreach( $members as $name => $email) : ?>
            <li>
                <p> 
                    <?= htmlspecialchars($name)?> : <?= htmlspecialchars($email) ?>
                </p>
            </li>
        <?php endforeach?>
    </ul>

    <h2>Task</h2>

    <ul>
        <li>Title : <?= $task['title']?></li>

        <li>Due: <?= $task['due']?></li>

        <li>Assigned to: <?= $task['assigned_to']?></li>

        <li>Completed:
            <?php if($task['completed']): ?>
                <span class="icon">&#9989;</span>
            <?php else: ?>
                <span class="icon">&#10060;</span>
            <?php endif; ?>
        </li>
    </ul>
</body>
</html>