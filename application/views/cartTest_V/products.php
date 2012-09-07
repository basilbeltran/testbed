<div class="span4">
<ul class="products">
    
<script type="text/javascript">
$(function(){
   $('.carousel').carousel({interval: -1});
});
</script>


    <div id="myCarousel" class="carousel ">
        
      <div class="span1">    
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      </div> <!--span1-->
      
      <div class="carousel-inner">
          <div class="span3 offset1">
            <?php $i=1;?>
            <?php foreach($products as $p): ?>

                    <div class="item <?php if ($i==1){echo 'active';} ?>">

                        <h3><?php echo $p['name']; ?></h3>
                        <img src="<?php echo base_url(); ?>assets/img/products/<?php echo $p['image']; ?>" alt="" />
                        <small>&dollar;<?php echo $p['price']; ?></small>
                        <?php  $attributes = array('class' => 'form-inline');
                        $hidden = array('product_id' => $p['id']);
                        echo form_open('cartTest/add_cart_item', $attributes, $hidden); ?>
                            <fieldset>
                                    <label>Quantity</label>
                                    <?php echo form_input('quantity', '1', 'maxlength="3"'); ?>
                                    <?php //echo form_hidden('product_id', $p['id']); ?>
                                    <?php echo form_submit('add', 'Add'); ?>
                            </fieldset>
                        <?php echo form_close(); ?>

                    </div> <!--item active-->

            <?php $i++;?>
            <?php endforeach;?>
          </div> <!--span3-->    
    </div> <!--carousel-inner-->
       
  <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
 </div> <!--   carousel slide-->
</ul>
</div> <!--   span4-->




<div class="span4">
<ul class="products">
    <div id="myCarousel-2" class="carousel">
        
      <div class="span1">    
      <a class="left carousel-control" href="#myCarousel-2" data-slide="prev">&lsaquo;</a>
      </div> <!--span1-->
      
      <div class="carousel-inner">
          <div class="span3 offset1">
            <?php $j=1;?>
            <?php foreach($products as $p): ?>

                    <div class="item <?php if ($j==1){echo 'active';} ?>">

                        <h3><?php echo $p['name']; ?></h3>
                        <img src="<?php echo base_url(); ?>assets/img/products/<?php echo $p['image']; ?>" alt="" />
                        <small>&dollar;<?php echo $p['price']; ?></small>
                        <?php  $attributes = array('class' => 'form-inline');
                        $hidden = array('product_id' => $p['id']);
                        echo form_open('cartTest/add_cart_item', $attributes, $hidden); ?>
                            <fieldset>
                                    <label>Quantity</label>
                                    <?php echo form_input('quantity', '1', 'maxlength="3"'); ?>
                                    <?php echo form_hidden('product_id', $p['id']); ?>
                                    <?php echo form_submit('add', 'Add'); ?>
                            </fieldset>
                        <?php echo form_close(); ?>

                    </div> <!--item active-->

            <?php $j++;?>
            <?php endforeach;?>
          </div> <!--span3-->    
    </div> <!--carousel-inner-->
       
    <a class="right carousel-control" href="#myCarousel-2" data-slide="next">&rsaquo;</a>
 </div> <!--   carousel slide-->
</ul>
</div> <!--   span3-->