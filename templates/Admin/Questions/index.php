<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question[]|\Cake\Collection\CollectionInterface $questions
 */
?>
 <div class="flex">
    <div class="w-1/4 p-4">
        <nav id="actions-sidebar">
            <h4 class="text-lg font-semibold mb-2">Actions</h4>
            <div class="space-y-2">
                <?= $this->Html->link(__('New Question'), ['action' => 'add'], ['class' => 'block p-2 rounded border border-gray-300 hover:bg-blue-500 hover:text-white']) ?>
                <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'block p-2 rounded border border-gray-300 hover:bg-blue-500 hover:text-white']) ?>
                <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'block p-2 rounded border border-gray-300 hover:bg-blue-500 hover:text-white']) ?>
                <?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index'], ['class' => 'block p-2 rounded border border-gray-300 hover:bg-blue-500 hover:text-white']) ?>
                <?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add'], ['class' => 'block p-2 rounded border border-gray-300 hover:bg-blue-500 hover:text-white']) ?>
                <?= $this->Html->link(__('List Votes'), ['controller' => 'Votes', 'action' => 'index'], ['class' => 'block p-2 rounded border border-gray-300 hover:bg-blue-500 hover:text-white']) ?>
                <?= $this->Html->link(__('New Vote'), ['controller' => 'Votes', 'action' => 'add'], ['class' => 'block p-2 rounded border border-gray-300 hover:bg-blue-500 hover:text-white']) ?>
                <?= $this->Html->link(__('List Answers'), ['controller' => 'Answers', 'action' => 'index'], ['class' => 'block p-2 rounded border border-gray-300 hover:bg-blue-500 hover:text-white']) ?>
                <?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add'], ['class' => 'block p-2 rounded border border-gray-300 hover:bg-blue-500 hover:text-white']) ?>
                <?= $this->Html->link(__('List Tagged'), ['controller' => 'Tagged', 'action' => 'index'], ['class' => 'block p-2 rounded border border-gray-300 hover:bg-blue-500 hover:text-white']) ?>
                <?= $this->Html->link(__('New Tagged'), ['controller' => 'Tagged', 'action' => 'add'], ['class' => 'block p-2 rounded border border-gray-300 hover:bg-blue-500 hover:text-white']) ?>
            </div>
        </nav>
    </div>
    <div class="w-3/4 p-4">
        <div class="questions index">
            <h3 class="text-2xl font-semibold mb-4"><?= __('Articles') ?></h3>
            <table class="min-w-full text-sm text-dark-400">
                <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">#</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"><?= $this->Paginator->sort('title') ?></th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"><?= $this->Paginator->sort('slug') ?></th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"><?= $this->Paginator->sort('answer_count') ?></th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"><?= $this->Paginator->sort('created') ?></th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"><?= $this->Paginator->sort('modified') ?></th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"><?= $this->Paginator->sort('view_count') ?></th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($questions as $question): ?>
                <tr class="border">
                    <td class="px-4 py-2"><?= $this->Number->format($question->id) ?></td>
                    <td class="px-4 py-2"><?= h($question->title) ?></td>
                    <td class="px-4 py-2"><?= h($question->slug) ?></td>
                    <td class="px-4 py-2"><?= $this->Number->format($question->answer_count) ?></td>
                    <td class="px-4 py-2">
                        <?= $question->has('user') ? $this->Html->link($question->user->username, ['controller' => 'Users', 'action' => 'view', $question->user->id], ['class' => 'text-blue-500 hover:underline']) : '' ?>
                    </td>
                    <td class="px-4 py-2"><?= h($question->created) ?></td>
                    <td class="px-4 py-2"><?= h($question->modified) ?></td>
                    <td class="px-4 py-2"><?= $this->Number->format($question->view_count) ?></td>
                    <td class="px-4 py-2">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $question->id], ['class' => 'text-blue-500 hover:underline mr-2']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $question->id], ['class' => 'text-blue-500 hover:underline mr-2']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id), 'class' => 'text-red-500 hover:underline']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>


    <div class="mt-4 mx-auto px-4 justify-between md:justify-center items-center">
<ul class="pagination flex flex-row flex-nowrap justify-between md:justify-center items-center">
<?= $this->Paginator->first('<< ' . __('first')) ?>
<?= $this->Paginator->prev('< ' . __('previous')) ?>
<?= $this->Paginator->numbers() ?>
<?= $this->Paginator->next(__('next') . ' >') ?>
<?= $this->Paginator->last(__('last') . ' >>') ?>
</ul>
<p class="text-center mt-4"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
</div>


</div>
</div>
</div>