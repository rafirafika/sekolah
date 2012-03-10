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
                            <td colspan="2">

                                <p><i class="icon-off"></i>&nbsp;PANEL LOGIN</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo form_label('Username','username'); ?>
                            </td>

                            <td>
                                <?php
                                $data = array(
                                    'type'=>'text',
                                    'name'=>'username',
                                    'style'=>'height: 30px;margin-left: 10px'
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
                                    'name'=>'password',
                                    'style'=>'height: 30px;margin-left: 10px'
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
                                    'value'=>'submit',
                                    'class'=>'btn'
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