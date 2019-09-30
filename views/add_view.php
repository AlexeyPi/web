<form action="<?= $_SERVER['PHP_SELF']?>?action=save" method="post">
    <div class="form-group">
                <label>First name:
                <input type="text" name="first"/>
                </label>
            </div>
            
            <div class="form-group">
                <label>Second name:
                <input type="text" name="second"/>
                </label>
            </div>
            <div class="form-group">       
                <label>Email:
                <input type="text" name="email"/>
                </label>
            </div>
                
                <input type="submit" class="btn btn-outline-secondary" value="Добавить" /> 
</form>