<!DOCTYPE html>
<html lang="en">
<head>
    <title>Joaquin Pino</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
</head>
<body>
<div class="container"><br/><br/>
    <div class="row">
        <div class="col-lg-10">
            <h2>CF Partners Test</h2>
        </div>
    </div>

    <table class="table table-bordered table-striped" id="userTable">
        <thead>
        <tr>
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>UserName</th>
            <th>Email</th>
            <th>Password</th>
            <th>Mobile</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($user_detail as $row){
            ?>
            <tr id="<?php echo $row['id']; ?>">
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td>
                    <a data-id="<?php echo $row['id']; ?>" class="btn btn-danger btnDelete">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        $('#userTable').DataTable({
            paging: false,
            searching: false
        });
        //DELETE ACTION
        $('body').on('click', '.btnDelete', function () {
            var user_id = $(this).attr('data-id');
            $.get('user/delete/'+user_id, function (data) {
                $('#userTable tbody #'+ user_id).remove();
            })
        });
    });
</script>
</body>
</html>
