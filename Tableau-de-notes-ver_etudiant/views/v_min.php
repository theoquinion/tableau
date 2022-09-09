<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-4">
            <h3>Notes des élèves</h3>
                <?php 
                    $min = min($lesNotes);
                    foreach ($lesNotes as $k => $v)
                        if($v == $min)
                            {
                                echo "le n° " . $k+1;
                            }
                ?>    
        </div>
    </div>
</div>