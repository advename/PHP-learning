<?php require "views/partials/head.php" // <- insert head partial ?>
    <title>Todo List</title>
</head>
<body>
    <h1>Tasks:</h1>

    <?php require "views/partials/navigation.php" // <- insert nav partial ?>

    <ul>
        <?php foreach ($todos as $todo): ?>
            <li>
                <?php if ($todo->getCompleted()): ?>
                    <strike> <?=$todo->getDescription();?> </strike>
                <?php else: ?>
                    <?=$todo->getDescription();?>
                <?php endif;?>
            </li>
        <?php endforeach;?>
    </ul>

</body>
</html>
