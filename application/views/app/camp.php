<?php
foreach ($campp as $row) {

    if ($row->estado != 'false') {
        
        $fo = $this->db->where('nombre_camp', $row->nombre);
        $fo = $this->db->get('img_camp');
        foreach ($fo->result() as $row2);
        ?>


         
                <!-- portfolio item starts  -->
                <div class="portfolioFilterableItemWrapper" data-type="websites,logos"> <a href="#" class="portfolioFilterableItemImageWrapper"><img src="<?php echo base_url($row2->img); ?>" alt=""/></a>
                    <div class="portfolioFilterableItemInfoWrapper">
                        <h4 class="portfolioFilterableItemTitle"><?php echo $row->nombre; ?></h4>
                        <p><?php echo $row2->descripcion; ?></p>
                    </div>
                    <div class="portfolioFilterableItemButtonsWrapper"><a href="<?php echo base_url('app/cupon?token='.md5($row->id.$row->nombre.$this->user->nick.$this->user->id).'&camp='.$row->nombre.'&id='.$row->id.''); ?>" class="portfolioFilterableDetailsButton">Add cupon</a></div>
                </div>

            <?php
        }
    }
    ?>