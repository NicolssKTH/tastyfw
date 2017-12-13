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
    <?php if($this->session->userdata('logged_in')) : ?>
    <button id="showForm">add comment</button>
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add a comment</h4>
                </div>
                <div class="modal-body">
                    <form id="myForm" action="<?php echo base_url() ?>comments/addComment" method="POST">
                        <input id="foodcomment" type="hidden" name="food" value="meatballs";>
                        <textarea name="body"></textarea>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="addcomment">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <?php endif; ?>
    <h2>Comments:</h2>

    <div id="commentsarea"></div>

</div>
