<div class="container">
    <div class="containerhead">
        <h2>Meatballs</h2>
        <p>A tasty recipe of meatballs for 4 people.</p>
    </div>
    <img class="foodpic" src="<?php echo asset_url()?>images/meatballssmall.png" alt="meatballpic">

    <div class="ingredienser">
        <h2>Ingredients:</h2>
        <ul>
            <li>1 dl Milk</li>
            <li>2 Tsp Breadcrumbs</li>
            <li>500 g Minced meat</li>
            <li>1 Finely chopped yellow onion</li>
            <li>1 Egg</li>
            <li>1/2 tsp Ground black pepper</li>
            <li>1 1/2 tsp Salt</li>
            <li>Oil for frying</li>
        </ul>
    </div>
</div>
<hr>

<div class="instructions">
    <h2>Instructions:</h2>
    <ol>
        <li>Mix milk and sprinkle in a bowl, allow to cool 3 minutes. Mix the fries, onions, eggs, black pepper and salt, form large meatballs, about 12 pcs</li>
        <li>Bring the meatballs in a frying pan in oil until golden brown.</li>
    </ol>
</div>
<div class="comments">
    <?php echo validation_errors(); ?>
    <?php echo form_open('comments/create'); ?>
    <label>Name:</label>
    <input type="text" name="name">
    <label>comment:</label>
    <textarea name="body"></textarea>
    <input type="hidden" name="food" value="meatballs";>
    <button type="submit">Comment</button>
    <?php echo form_close(); ?>
    <h2>Comments</h2>
    <?php foreach($comments as $comment):
    if($comment['food'] == 'meatballs'){?>
    <div class="comment">
        <h3><?php echo $comment['username']; ?></h3>
        <p><?php echo $comment['comment']; ?></p>
    </div>
    <?php } endforeach; ?>
</div>
