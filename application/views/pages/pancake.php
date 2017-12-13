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
    <?php if($this->session->userdata('logged_in')) : ?>
    <button id="showForm">add comment</button>
    <?php endif; ?>
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add a comment</h4>
                </div>
                <div class="modal-body">
                    <form id="myForm" action="<?php echo base_url() ?>comments/addComment" method="POST">
                        <input id="foodcomment" type="hidden" name="food" value="pancake";>
                        <textarea name="body"></textarea>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="addcomment">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <h2>Comments:</h2>

    <div id="commentsarea"></div>


</div>
