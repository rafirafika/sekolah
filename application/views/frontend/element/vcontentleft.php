<script type="text/javascript">
    $(function() {
        $( "#datepicker" ).datepicker();
        });
</script>
<div class="left">
    <table>
        <thead>
            <td>
                <?php $this->load->view('frontend/logreg/vlogin'); ?>
            </td>
        </thead>
        <tbody>
            <td>
                <div id="datepicker"></div>
            </td>
        </tbody>
    </table>

    <div></div>
</div>