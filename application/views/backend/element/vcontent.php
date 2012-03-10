<div class="container-fluid">
    <div class="row-fluid">
        <div class="span2">

            <ul class="nav nav-list">
                <li class="nav-header">
                    Dashboard
                </li>
            </ul>

            <div class="tabbable tabs-left">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#lA" data-toggle="tab"><i class="icon-envelope"></i>&nbsp;Post</a>
                    </li>
                    <li class="">
                        <a href="#lB" data-toggle="tab"><i class="icon-cog"></i>&nbsp;Setting</a>
                    </li>
                    <li class="">
                        <a href="#lC" data-toggle="tab"><i class="icon-user"></i>&nbsp;Users</a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="span10">
            <div class="tab-content">
                <div class="tab-pane active" id="lA">

                    <?php
                    $data = array(
                        'class'=>'well'
                    );
                    echo form_open('',$data);
                    ?>
                    <table>
                        <tr>
                            <td>
                                <?php
                                echo form_label('Title','title');
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $data = array(
                                    'class'=>'span3',
                                    'style'=>'height: 25px'
                                );
                                echo form_input($data);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php

                                    echo form_label('Note','note');
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <textarea rows="10" cols="40" style="width: 1057px"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <?php
                                    $data = array(
                                        'class'=>'btn',
                                        'value'=>'submit'
                                    );
                                    echo form_submit($data);
                                ?>
                                &nbsp;&nbsp;
                                <?php
                                $data = array(
                                    'class'=>'btn',
                                    'value'=>'cancel'
                                );
                                echo form_submit($data);
                                ?>

                            </td>

                        </tr>
                    </table>

                    <?php echo form_close(); ?>


                </div>
                <div class="tab-pane" id="lB">

                    <form class="well">
                        <label>Label name</label>
                        <input type="text" class="span3" placeholder="Type something…"/>
                        <span class="help-inline">Associated help text!</span>
                        <label class="checkbox">
                            <input type="checkbox"/>
                            Check me out
                        </label>
                        <button type="submit" class="btn">Submit</button>
                    </form>

                </div>
                <div class="tab-pane" id="lC">

                    <form class="well">
                        <label>Label name</label>
                        <input type="text" class="span3" placeholder="Type something…"/>
                        <span class="help-inline">Associated help text!</span>
                        <label class="checkbox">
                            <input type="checkbox"/>
                            Check me out
                        </label>
                        <button type="submit" class="btn">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
