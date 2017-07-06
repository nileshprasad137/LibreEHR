<a href="controller.php?practice_settings&<?php echo $this->top_action;?> pharmacy&action=edit" onclick="top.restoreSession()" class="css_button" >
<span><?php echo xl("Add a Pharmacy");?></span></a><br><br>

<div class="table-responive">
<table class="table">
    <tr>
        <th><b><?php echo xl("Name");?></b></th>
        <th><b><?php echo xl("Address");?></b></th>
        <th><b><?php echo xl("Default Method");?></b></th>
    </tr>
    
    <?php if(is_array($this->pharmacies)) { ?>
    
    <?php foreach ($this->pharmacies as $pharmacy) { ?>
        <tr >
            <td><a href="<?php echo $this->current_action;?>action=edit&id=<?php echo $pharmacy->id;?>" onclick="top.restoreSession()">
                    <?php echo $pharmacy->name;?>&nbsp;</a>
            </td>
            <td>
               <?php 
               if($pharmacy->address->line1 != '') { echo $pharmacy->address->line1.',';}
               if($pharmacy->address->city != '') { echo $pharmacy->address->city; }
               echo $pharmacy->address->state."&nbsp;".$pharmacy->address->zip;            
                ?> 
            </td> 
            <td><?php echo $pharmacy->get_transmit_method_display();?>&nbsp;</td>
        </tr>
    <?php } }
    else { ?>
        <tr class="center_display">
            <td colspan="3"><b><?php echo xl("No pharmacies Found");?><b></td>
        </tr>
    <?php } ?>
    </table>
    </div>
