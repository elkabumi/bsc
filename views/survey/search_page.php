

<input class="btn btn-warning" type="submit" name="go_button" value="Go"  style=" margin-right:0px; float:right;" >&nbsp;<input  type="text" name="i_search_page" placeHolder="Search Page" class="form-control" style="width:120px; margin-right:0px; float:right;" />


<?php

if(isset($_GET['page']) && $_GET['page'] == "form"){
?>
<?php

if(isset($_GET['id'])){
?>
<a href="<?= $next_button ?>" class="btn btn-info "  style=" margin-right:5px; float:right;" >Next</a>
<?php
}
}else{
	?>
    
    <a href="<?= $next_button ?>" class="btn btn-info "  style=" margin-right:5px; float:right;" >Next</a>
<a href="<?= $prev_button ?>" class="btn btn-info "  style=" margin-right:5px; float:right;" >Prev</a>

    
    <?php
}
?>