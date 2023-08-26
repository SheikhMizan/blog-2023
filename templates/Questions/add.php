<div class="container mx-auto my-8 p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold mb-4">Add New Article</h2>
    <?php
// echo $this->Form->create($question, [  'class' => ' px-8 pt-6 pb-8 mb-4'] );
echo $this->Form->create($question,  ['type' => 'file'] );
echo $this->Form->control('title');
echo $this->Form->control('question');
echo $this->Form->control('image', ['type' => 'file']);
echo $this->Form->control('tags', ['type' => 'select', 'multiple' => true]);
echo $this->Form->submit('Save', ['class' => 'btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline']);
echo $this->Form->end();
?>
</div>
<?php $this->append('script');?>
<script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css">
<?php $this->end();?>
<script type="application/javascript">
    $(function () {
        $('#tags').selectize({
            delimiter: ',',
            create: function (input) {
                return {
                    value: input,
                    text: input
                };
            }
        });
    });
</script>
