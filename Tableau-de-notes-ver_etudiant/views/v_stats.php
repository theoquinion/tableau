<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-4">
            <h3>Notes des élèves</h3>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">0-4</th>
                    <th scope="col">4-8</th>
                    <th scope="col">8-12</th>
                    <th scope="col">12-16</th>
                    <th scope="col">16-20</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php foreach ($stat as $k => $v): ?>
                    
                        <th scope="col"><?php echo $v; ?></th>
                    
                <?php endforeach; ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
