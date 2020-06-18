<?php if (count($posts) > 0 ): ?>
    

    <?php
        for ($i=0; $i < count($posts['name']); $i++):
    ?>
        <div class="posts" >
            <p class= "post_message">
                <?php 
                    echo $posts['message'][$i];
                    
                ?>
            </p>

            <p class= "post_name">
                <?php 
                    echo $posts['name'][$i];
                ?>
            </p>

            <p class= "post_time">
                <?php 
                    echo $posts['time'][$i];
                ?>
            </p>
        </div>
    <?php 
        endfor
    ?>



<?php endif ?>