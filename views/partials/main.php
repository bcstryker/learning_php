<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach($posts as $post) {
            $text = $post["title"];
            echo "<li>$text</li>";
        }?>
    </div>
</main>