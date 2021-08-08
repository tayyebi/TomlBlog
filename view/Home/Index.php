<?php

?>

<!--PAYLOAD_CONTENT_END-->



<div class="slider">
<?php
foreach ($Data['Toml']->slider->slides as $slide)
{
?>
    <figure class="slide">
        <img src="<?php echo $slide->src ?>" alt="<?php echo $slide->title ?>">
        <figcaption><?php echo $slide->caption ?></figcaption>
        <a class="calltoaction" href="<?php echo $slide->link ?>" ><?php echo $slide->calltoaction ?></a>
    </figure>
<?php
}
?>
    <div class="controlbox">
        <button class="btn_prev" onclick="plusDivs(-1)">&#10094;</button>
        <button class="btn_next" onclick="plusDivs(+1)">&#10095;</button>
    </div>
</div>