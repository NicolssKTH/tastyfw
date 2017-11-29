<div class="container">

    <h2>Pancakes</h2>
    <p>A tasty recipe of pancakes for 4 people.</p>

    <img class="foodpic" src="<?php echo asset_url()?>images/pancakesmall.png" alt="pancakepic">

    <div class="ingredienser">
        <h2>Ingredienser:</h2>
        <ul>
            <li>2 1/2 dl of wheat flour</li>
            <li>1/2 tsp salt</li>
            <li>6 dl milk</li>
            <li>3 egg</li>
            <li>3 Tsp butter</li>
            <li>jam, berry or fruit for<br>serving</li>
        </ul>
    </div>
</div>
<hr>
<div class="instructions">
    <h2>Instructions:</h2>
    <ol>
        <li>Mix flour and salt in a bowl. Beat in half of the milk and whisk to a smooth batter. Beat in the rest of the milk and the eggs.</li>
        <li>Melt the butter in the frying pan and whisk into the batter. Stir thin pancakes of the batter in a frying pan or pancake pan.</li>
        <li>Serve with jam, berries or fruit.</li>
    </ol>
</div>
<div class="comments">
    <h2>Comments:</h2>
    <?php foreach($comments as $comment):
         if($comment['food'] == 'pancake'){?>
    <div class="comment">
        <h3><?php echo $comment['username']; ?></h3>
        <p><?php echo $comment['comment']; ?></p>
    </div>
    <?php } endforeach; ?>

</div>
