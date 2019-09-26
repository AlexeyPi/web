<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Table</title>
        <link rel="stylesheet" href="main.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>

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
                    <tr>
                            <td>alkd</td>
                            <td>dsfasd</td>
                            <td>xcvxc</td>
                            <td>vxvx</td>
                            <?php ?>
                    </tr>


                </tbody>
            </table>
        </div>
        <form method="POST" action="">
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
                <!--<input type="hidden" name="id" value="<?= $id?>"/>-->
                <input type="submit" class="btn btn-outline-secondary" value="Добавить" /> 
        </form>
    
    </body>
</html>
