<form id="editForm" action="<?= $_SERVER['PHP_SELF']?>?action=edittodb" method="post">
   <div class="form-group">
                <label>First name:
                <input type="text" name="first" value="<?= $_POST['first']?>"/>
                </label>
            </div>
            
            <div class="form-group">
                <label>Second name:
                <input type="text" name="second" value="<?= $_POST['second']?>"/>
                </label>
            </div>
            <div class="form-group">       
                <label>Email:
                    <input type="text" name="email" value="<?=$_POST['email']?>"/>
                </label>
            </div>
                <input type="hidden" name="id" value="<?= $_POST['id']?>"/>
                <input type="submit" class="btn btn-primary" value="Add" /> 
</form>
<?php
include_once 'views'.DIRECTORY_SEPARATOR.'table.php';
