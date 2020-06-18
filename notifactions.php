<?php if (count($notifcations) > 0 ): ?>
    <div class="notifcations">
        <?php 
            foreach ($notifcations as $notifcation):
        ?>
        <p>
            <?php 
                echo $notifcation; 
            ?>
        </p>
        <?php 
            endforeach 
        ?>
    </div>
<?php endif ?>