<div class="row">
    <div class="col-md-4">
        <div class="slider_product">
            <div id="gallery">

                <div id="slides">
<?php
foreach ($productImages as $key => $value) {
?>
                    <div class="slide"><img src="<?=base_url();?>images/product/<?=$value->name;?>" width="320"  alt="side" /></div>
<?php
}
?>              
                </div>
                <div id="menu">
                    <ul>
                        <li class="fbar"><p>&nbsp;</p></li>
<?php
foreach ($productImages as $key => $value) {
?>                        
                        <li class="menuItem"><a href=""><img src="<?=base_url();?>images/product/<?=$value->name;?>" alt="thumbnail" width="32"/></a></li>
<?php
}
?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-8">
        <h4>pro 1 </h4>
        <p>sdsdf sdf qs qsfqs fs</p>
    </div>
</div>