<form id="addForm" action="<?= $_SERVER['PHP_SELF']?>?action=save" method="post">
    <div class="form-group">
                <label>First name:
                    <input type="text" name="first" required/>
                </label>
            </div>
            
            <div class="form-group">
                <label>Second name:
                    <input type="text" name="second" required/>
                </label>
            </div>
            <div class="form-group">       
                <label>Email:
                    <input type="text" name="email" required/>
                </label>
            </div>
                
                <input type="submit" class="btn btn-primary" value="Add" /> 
</form>

<?php
include_once 'views'.DIRECTORY_SEPARATOR.'table.php';
