<h1 class="text-2xl font-bold mb-4">Articles</h1>
<hr class="my-4">

<?php if ($questions->isEmpty()): ?>
    <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3 mb-4" role="alert">
        Sorry, we couldn't find any questions.
    </div>
    <p class="mb-4">
        <a href="<?= $this->Html->link('Ask question', ['controller' => 'Questions', 'action' => 'add'], ['class' => 'btn btn-primary'])?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Ask question
        </a>
    </p>
<?php else:
    foreach ($questions as $question) { 
        ?>
<div class="question">


  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden    transition duration-300  ">

<?php
if (!empty($question->image)) {
    $imagePath = '/img/' . $question->image; // Modify this path based on your folder structure
    echo '<img src="' . $imagePath . '" alt="Uploaded Image" class="w-full h-48 object-cover object-center">';
} else {
    echo 'No image available.';
}

?>
            <div class="p-4">
                <h2 class="text-xl font-semibold">
                       <?= $this->Html->link(
                        '<h4>' . $question->get('title') . '</h4>',
                        ['controller' => 'Questions', 'action' => 'view', 'slug' => $question->get('slug')],
                        ['escape' => false]
                    )?>
                </h2>
                <p class="text-gray-600">
                   <?= $this->Html->link(
                        '<h4>' . implode(' ', array_slice(str_word_count($question->get('question'), 2), 0, 55)) . '</h4>',
                        ['controller' => 'Questions', 'action' => 'view', 'slug' => $question->get('slug')],
                        ['escape' => false]
                    )?>

                </p>
                <a href="#" class="mt-2 inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-full transition duration-300 ease-in-out">Read More</a>
            </div>
        </div>
    </div>
    </div>

        <?php
       
    }
endif;?> 

<nav class="mb-4">
    <ul class="flex">
        <?= $this->Paginator->numbers(['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2'])?>
    </ul>
</nav>