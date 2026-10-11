
    <h1>Все статьи</h1>


       <?php foreach($article as $a): ?>

        <div>
            <h3><?= htmlspecialchars($a['title']) ?> </h3>
            <p><a href="/article/<?=$a['id'] ?>">Читать</a></p>
       </div>
          
        

    <?php endforeach ?>