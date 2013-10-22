<div class="row">
<?php
$i = 0;
foreach ($listCategory as $key => $value) {
    $urlImage = $value->image != "" ? $value->image : 'default.jpg';
    if ($i >= 3) {
        $i = 0;
?>
</div>
<div class="row">
<?php
    }
    $i++;
?>
    <div class="col-md-4">
        <div class="row ">
            <div class="text-center">
                <a href="<?=site_url('category/category/index/' . $value->id);?>"><img width="150", src="<?=base_url() . 'images/category/' . $urlImage;?>" class="img-thumbnail"/></a>
            </div>
        </div>
        <div class="row text-center">
            <?=$value->name;?>
        </div>
    </div>
<?php
}
?>
</div>