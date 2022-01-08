<div class="container-fluid">


    <div class="container">
        <div class="row">

            <div class="col-sm-9">

                <?php
                include 'db_connect.php';
                $qry = "UPDATE messages SET STATUS=0 WHERE ID=$_GET[id]";
                $result = $conn->query($qry);
                $qry = "SELECT * FROM messages  WHERE ID=$_GET[id]";
                $result = $conn->query($qry);
                $messages = $conn->query("SELECT * FROM messages order by name asc ");
                while ($row = $messages->fetch_assoc())
                    $prev  = $conn->query("SELECT * FROM messages where status = 1 and message_id = " . $row['id'] . " order by date(date_created) desc limit 1 ");
                $prev = $prev->num_rows > 0 ? $prev->fetch_array()['date_created'] : '';




                echo $row['messages'];


                ?>

            </div>
        </div>
    </div>

</div>
<script>
    $('#view-message').submit(function(e) {
        e.preventDefault()
        start_load()
        $('#msg').html('')
        $.ajax({
            url: 'ajax.php?action=view_donor',
            data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST',
            success: function(resp) {
                if (resp == 1) {
                    alert_toast("checked", 'success')
                    setTimeout(function() {
                        location.reload()
                    }, 1000)
                }
            }
        })
    })
</script>