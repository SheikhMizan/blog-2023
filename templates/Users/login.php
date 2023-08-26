 <div class="container mx-auto p-8 flex">
        <div class="max-w-md w-full mx-auto">
            <h1 class="text-4xl text-center mb-12 font-thin">Login</h1>

            <div class="bg-white rounded-lg overflow-hidden shadow-2xl">
                <div class="p-8">
                  <?php
            echo $this->Flash->render('auth');

            echo $this->Form->create();
            echo $this->Form->control('email_address');
            echo $this->Form->control('password');
            echo $this->Form->submit('Login', ['class' => 'block w-full p-3 rounded bg-purple-900 text-white border border-transparent focus:outline-none']);
            echo $this->Form->end();
            ?>
                </div>
                
                <div class="flex justify-between p-8 text-sm border-t border-gray-300 bg-gray-100">
                 

                    <?= $this->Html->link(
                    'Create account',
                    ['controller' => 'Users', 'action' => 'register'],
                    ['class' => $this->getRequest()->getParam('action') === 'register' ? 'nav-link active font-medium text-indigo-500' : 'font-medium text-indigo-500']
                );?>

                    <a href="#" class="text-gray-600">Forgot password?</a>
                </div>
            </div>
        </div>
    </div>