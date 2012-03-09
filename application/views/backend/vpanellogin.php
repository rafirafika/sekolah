<html>
    <head>
        <title>Panel Login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css_admin/style.css"/>
    </head>
    <body>
        <div class="wrap">
            <div class="panel">
                <?php echo form_open(); ?>
                    <table>
                        <tr>
                            <td>
                                <?php echo form_label('Username','username'); ?>
                            </td>
                            <td>
                                <?php
                                $data = array(
                                    'type'=>'text',
                                    'name'=>'username'
                                );
                                echo form_input($data);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo form_label('Password','password'); ?>
                            </td>
                            <td>
                                <?php
                                $data = array(
                                    'name'=>'password'
                                );
                                echo form_password($data);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><br/></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <?php
                                $data = array(
                                    'id'=>'login',
                                    'value'=>'kirim'
                                );
                                echo form_submit($data);
                                ?>
                            </td>
                        </tr>
                    </table>
                <?php echo form_close(); ?>
            </div>
        </div>
    </body>
</html>