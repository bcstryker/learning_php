<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p><?=$main_text?></p>
        <?php foreach($notes as $note) :?>
        <li>
            <a href="/note?id=<?=$note["id"]?>" class="text-blue-500 hover:underline"><?=$note["title"]?></a>
        </li>
        <?php endforeach; ?>
    </div>
</main>

