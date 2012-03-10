<div class="login">
    <?php echo form_open(); ?>
        <table>
            <tr>
                <td>
                    <?php echo form_label('Username','username'); ?>
                </td>
                <td>
                    <?php
                        $data = array(
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
                <td>
                    <?php
                        $data = array(
                            'id'=>'login',
                            'value'=>'Login'
                        );
                        echo form_submit($data);
                    ?>
                </td>
                <td>
                    <?php
                        $data = array(
                            'id'=>'register',
                            'type'=>'button',
                            'value'=>'Register'
                        );
                        echo form_input($data);
                    ?>
                </td>
            </tr>
        </table>
    <?php echo form_close(); ?>
</div>