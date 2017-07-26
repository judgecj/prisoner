<?php 
    
    function error_loading($if_set){
     if (!$if_set) {
       die("not connetion to mysql" . mysql_error( ));
      }
    }

    function get_all_buildings(){
        global $connetion;
        $query = "SELECT * FROM  buildings ;";
        $subject_set = mysql_query( $query, $connetion);
       error_loading($subject_set);
       return $subject_set;
     }  


     function set_subject_subject_id($subject_id){
        global $connetion;
         $query = "SELECT * FROM  pages WHERE  subject_id = {$subject_id} ORDER BY position ASC ";
            $page_set = mysql_query($query, $connetion);
            error_loading($page_set);
           return $page_set;
     }

function set_celle_build_id($build_id){
        global $connetion;
    $query = "SELECT * FROM  cells WHERE block_id = {$build_id} ORDER BY position ASC ";
    $cells_set = mysql_query($query, $connetion);
    error_loading($cells_set);
    return $cells_set;
}


function set_prisoner_p_cell_id($cell_id){
    global $connetion;
    $query = "SELECT * FROM  prisoner_p WHERE cell_id = {$cell_id}  ";
    $set_prisoner = mysql_query($query, $connetion);
    error_loading($set_prisoner);
    return $set_prisoner;
}

function get_all_cells(){
    global $connetion;
    $query = "SELECT * FROM  cells ";
    $cells_set = mysql_query( $query, $connetion);
    error_loading($cells_set);
    return $cells_set;
}
function get_all_prisoner(){
    global $connetion;
    $query = "SELECT * FROM  prisoner_p ";
    $prisoners_set = mysql_query( $query, $connetion);
    error_loading($prisoners_set);
    return $prisoners_set;
}
?>