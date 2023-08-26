<div class="container mx-auto">
    <h1 class="text-3xl">User: <?= $this->getRequest()->getSession()->read('Auth.User.username');?></h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-4">
            <h2 class="text-xl font-semibold">Latest Article</h2>
        <?php
        if (empty($user->get('questions'))) {
            ?><p>
                No questions found, why not ask a question?<br>
                <?= $this->Html->link('Ask a question', ['controller' => 'Questions', 'action' => 'add'], ['class' => 'btn btn-primary']);?>
            </p><?php
        } else {
            foreach ($user->get('questions') as $question) {
                echo $this->element('item-compact', ['data' => $question]);
            }
        }
        ?>
        </div>

        <div class="bg-white rounded-lg shadow-md p-4">
            <h2 class="text-xl font-semibold">Latest Replies</h2>
                <?php
        if (empty($user->get('answers'))) {
            ?><p>
                No replies found, why post an answer?<br>
                <?= $this->Html->link('View questions', ['controller' => 'Questions', 'action' => 'index'], ['class' => 'btn btn-primary']);?>
            </p><?php
        } else {
            foreach ($user->get('answers') as $answer) {
                echo $this->element('item-compact', ['data' => $answer]);
            }
        }
        ?>
        </div>

        <div class="bg-white rounded-lg shadow-md p-4">
            <h2 class="text-xl font-semibold">Latest Comments</h2>
                 <?php
        if (empty($user->get('comments'))) {
            ?><p>
                No comments found
            </p><?php
        } else {
            foreach ($user->get('comments') as $comment) {
                echo $this->element('item-compact', ['data' => $comment]);
            }
        }
        ?>
        </div>
    </div>
</div>
