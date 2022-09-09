<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-4">
            <h3>répartition  des notes  élèves</h3>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"> </th>
                    <th scope="col">1</th>
                    <th scope="col">2</th>
                    <th scope="col">3</th>
                    <th scope="col">4</th>
                    <th scope="col">5</th>
                    <th scope="col">6</th>
                    <th scope="col">7</th>
                    <th scope="col">8</th>

                </tr>
                </thead>
                <tbody>
                    <?php foreach ($stat as $k => $v):?>
                        <tr>
                        <th scope="col"> <?php echo $k ?> </th>
                        <?php
                        for($i = 1; $i <= $v; $i++){?>
                        <th scope="row"> <?php echo "*" ?> </th>
                        <?php } ?>
                    
                <?php endforeach; ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>