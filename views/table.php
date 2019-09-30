<div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Second name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
    <?php foreach ($this->people as $man):?>
                    <tr>                
                        <td><?=$man['first'] ?></td>
                        <td><?=$man['second'] ?></td>
                        <td><?=$man['email'] ?></td>
                        <td>
                            <form action="<?= $_SERVER['PHP_SELF']?>?action=delete" method="post">
                                <input type="hidden" name="id" value="<?= $man['id']?>">
                                <input type="submit" class="btn btn-outline-secondary"  value="Delete"/>
                            </form>    
                            <form action="<?= $_SERVER['PHP_SELF']?>?action=edit" method="post">
                                <input type="hidden" name="id" value="<?= $man['id']?>">
                                <input type="hidden" name="first" value="<?= $man['first']?>">
                                <input type="hidden" name="second" value="<?= $man['second']?>">
                                <input type="hidden" name="email" value="<?= $man['email']?>">
                                <input type="submit" class="btn btn-outline-secondary" value="Edit"/>
                            </form>
                        </td>
                    </tr>
    
    
    <?php endforeach;?>
                </tbody>
            </table>
</div>
