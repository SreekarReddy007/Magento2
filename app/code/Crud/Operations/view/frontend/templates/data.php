<?php
 
$data = $block->getGreetings();
 
?>
<div class="my-greetings-header">
    <div class="my-greetings-list">
        <ul>
            <?php foreach($data as $greeting): ?>
                    <li>
                        <form action="/operations/action/update" method="post">
                            <input type="hidden" name="greetingsid" value="<?php echo $greeting->getGreetingsId(); ?>">
                            <input type="text" name="name" value="<?php echo $greeting->getGreetingText(); ?>">
                            <input type="email" name="email" value="<?php echo $greeting->getGreetingText(); ?>">
                            <input type="submit" value="update">
                        </form>
                        [<a href="/operations/action/delete?greetingid=<?php echo $greeting->getGreetingsId(); ?>">delete</a>]
                    </li>
            <?php endforeach; ?>
        </ul>
        <ul>
            <form action="/operations/action/create" method="post">
                <li><input type="text" name="greeting_text"> <input type="submit" value="create"></li>
            </form>
        </ul>
    </div>
</div>