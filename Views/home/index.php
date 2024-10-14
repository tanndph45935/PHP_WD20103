<hr>
<div class="container">
    
    <?php
    foreach($arr_news as $row){
        $link_detail='home.php?route=detail&id='.$row['id'];
        ?>
    
    <div class="row">        
            <div class="col-md-4">
                <a href="<?=$link_detail?>"><img src="<?=BASE_IMAGE.$row['image']?>" alt="" height="250px;"></a>
            </div>
            <div class="col-md-8">
                <a href="<?=$link_detail?>"><h2 class=""> <?=$row['title']?></a></h2>
                <p> <?=$row['content']?></p>
                <a href="<?=$link_detail?>"><button class="btn btn-primary">xem them</button></a>
            </div>
        
    </div>
    <hr>
    <?php }?>
</div>