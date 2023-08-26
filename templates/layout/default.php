<!DOCTYPE html>
<html class="light">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <?= $this->fetch('meta') ?>
    <?= $this->Html->css(['site']);?>
    <?= $this->fetch('css') ?>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">   
         <?= $this->element('navigation');?>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto mt-6 px-4 flex">
        <!-- Sidebar -->
        <aside class="w-1/4 mr-8 bg-white p-4">
            <!-- Sidebar content goes here -->
            <h2 class="text-xl font-semibold mb-4">Categories</h2>
            <ul>
                <li><a href="#" class="text-blue-500 hover:underline">Category 1</a></li>
                <li><a href="#" class="text-blue-500 hover:underline">Category 2</a></li>
                <li><a href="#" class="text-blue-500 hover:underline">Category 3</a></li>
                <!-- Add more categories as needed -->
            </ul>
        </aside>

        <!-- Blog Posts -->
        <div class="w-3/4 bg-white p-4">
            <!-- Individual Blog Post -->
        <div class="text-center">
            <?= $this->Flash->render() ?>
      
        </div>
        <div class="container mx-auto">
            <?= $this->fetch('content') ?>
        </div>

            <!-- Repeat this structure for additional blog posts -->
        </div>
    </div>






  <script src="https://unpkg.com/jquery@3.4.0/dist/jquery.min.js"></script>


    <?= $this->Html->script('site');?>
    <?= $this->fetch('script') ?>



  <!-- Dark Mode Toggle Button -->
    <button id="dark-mode-toggle" class="fixed bottom-5 right-5 p-2 bg-gray-900 text-white rounded-full">
        Toggle Dark Mode
    </button>

    <!-- Include Tailwind CSS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>


    <!-- Scripts -->
    <!-- Include jQuery and Bootstrap JS if needed -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

    <!-- JavaScript to toggle dark mode -->
    <script>
const htmlElement = document.documentElement;
const darkModeToggle = document.getElementById('dark-mode-toggle');

darkModeToggle.addEventListener('click', () => {
    htmlElement.classList.toggle('dark');
});
    </script>
<style>
    @media (prefers-color-scheme: dark) {
        .dark {
            /* Dark mode styles go here */
            background-color: #000;
            color: #fff;
        }
    }
</style>


 
    <footer class="bg-gray-900 text-white py-4">
        <div class="container mx-auto text-center">
            &copy; 2023 My Modern Blog
        </div>
    </footer>



</body>
</html>
