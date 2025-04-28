<div class="container">
    <div class="row">
        <div class="col">
            <h3>This is where all the house hold products are available</h3>

            @each('Products/mediumproduct', $itmeList, 'item','Products/noproduct')
        </div>
    </div>
</div>