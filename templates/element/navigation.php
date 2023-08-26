<?php
/* @var $this \Cake\View\View */

$prefix = $this->getRequest()->getParam('prefix');
?>

 <div class="container mx-auto flex justify-between items-center">
  

  <?= $this->Html->link(
                'Blog with Cake',
                ['controller' => 'Questions', 'action' => 'index', 'prefix' => false],
                [
                    'class' => $this->getRequest()->getParam('controller') === 'Questions'
                    &&  in_array($this->getRequest()->getParam('action'), ['index', 'view']) ? 'nav-link active text-xl font-bold' : 'text-xl font-bold nav-link'
                ]
            );?>


    <ul class="space-x-4">
        <li class="inline-block">
            <?= $this->Html->link(
                'Articles',
                ['controller' => 'Questions', 'action' => 'index', 'prefix' => false],
                [
                    'class' => $this->getRequest()->getParam('controller') === 'Questions'
                    &&  in_array($this->getRequest()->getParam('action'), ['index', 'view']) ? 'nav-link active' : 'nav-link'
                ]
            );?>
        </li>
        <li class="inline-block">
            <?= $this->Html->link(
                'Post Article',
                ['controller' => 'Questions', 'action' => 'add', 'prefix' => false],
                [
                    'class' => $this->getRequest()->getParam('controller') === 'Questions'
                    && $this->getRequest()->getParam('action') === 'add' ? 'nav-link active' : 'nav-link'
                ]
            );?>
        </li>

        <?php if (!$this->getRequest()->getSession()->check('Auth')): ?>
            <li class="inline-block">
                <?= $this->Html->link(
                    'Register',
                    ['controller' => 'Users', 'action' => 'register'],
                    ['class' => $this->getRequest()->getParam('action') === 'register' ? 'nav-link active' : 'nav-link']
                );?>
            </li>
            <li class="inline-block">
                <?= $this->Html->link(
                    'Login',
                    ['controller' => 'Users', 'action' => 'login'],
                    ['class' => $this->getRequest()->getParam('action') === 'login' ? 'nav-link active' : 'nav-link']
                );?>
            </li>
        <?php else: // User is logged in ?>
            <li class="inline-block">
                <?= $this->Html->link(
                    'My profile',
                    ['controller' => 'Users', 'action' => 'profile', 'prefix' => false],
                    [
                        'class' => $this->getRequest()->getParam('controller') === 'Users'
                        && $this->getRequest()->getParam('action') === 'profile' ? 'nav-link active' : 'nav-link'
                    ]
                );?>
            </li>
            <li class="inline-block">
                <?= $this->Html->link(
                    'Administration',
                    ['controller' => 'Questions', 'action' => 'index', 'prefix' => 'Admin'],
                    ['class' => $this->getRequest()->getParam('prefix') === 'Admin' ? 'nav-link active' : 'nav-link']
                )?>
            </li>
            <li class="inline-block">
                <?= $this->Html->link(
                    'Logout ' . $this->getRequest()->getSession()->read('Auth.User.username'),
                    ['controller' => 'Users', 'action' => 'logout', 'prefix' => false],
                    ['class' => 'hover:text-gray-400']
                );?>
            </li>
        <?php endif; ?>
    </ul>
 </div> 
   