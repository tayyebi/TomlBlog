<ul id="treeview">
    <?php
    foreach ($Data['Toml']->nav as $item) {
        if ($item->type == 'category') {
    ?>
            <li class="parent" onclick='navclicked()'>
                <?php
                echo $item->title;
                ?>
                <ul>

                </ul>
                <span class="pointer" style="display: none;"><?php
                                                                echo $item->pointer;
                                                                ?></span>
            </li>
    <?php
        }
    }
    ?>
</ul>