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
        <div class="col-lg-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                +  User
            </button>
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
                    <a data-id="<?php echo $row['id']; ?>" class="btn btn-primary btnEdit">Edit</a>
                    <a data-id="<?php echo $row['id']; ?>" class="btn btn-danger btnDelete">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <!-- New user html-->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addUser" name="addUser" action="<?php echo
                base_url('user/store');?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="txtFirstName">First Name:</label>
                            <input type="text" class="form-control" id="txtFirstName" placeholder="Enter First Name" name="txtFirstName">
                        </div>
                        <div class="form-group">
                            <label for="txtLastName">Last Name:</label>
                            <input type="text" class="form-control" id="txtLastName" placeholder="Enter Last Name" name="txtLastName">
                        </div>
                        <div class="form-group">
                            <label for="txtUsername">Username:</label>
                            <input type="text" class="form-control"
                                   id="txtUsername"
                                   placeholder="Enter User Name"
                                   name="txtUsername">
                        </div>
                        <div class="form-group">
                            <label for="txtEmail">Email:</label>
                            <input type="text" class="form-control"
                                   id="txtEmail" placeholder="Enter Email"
                                   name="txtEmail">
                        </div>
                        <div class="form-group">
                            <label for="txtPwd">Pasword:</label>
                            <input type="text" class="form-control"
                                   id="txtPwd" placeholder="Enter Password"
                                   name="txtPwd">
                        </div>
                        <div class="form-group">
                            <label for="txtMobile">Mobile:</label>
                            <input type="text" class="form-control"
                                   id="txtMobile" placeholder="Enter Mobile"
                                   name="txtMobile">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Update user html -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Update User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="updateUser" name="updateUser" action="<?php
                echo base_url('user/update');?>"
                      method="post">
                    <div class="modal-body">
                        <input type="hidden" name="hdnStudentId" id="hdnStudentId"/>
                        <div class="form-group">
                            <label for="txtFirstName">First Name:</label>
                            <input type="text" class="form-control" id="txtFirstName" placeholder="Enter First Name" name="txtFirstName">
                        </div>
                        <div class="form-group">
                            <label for="txtLastName">Last Name:</label>
                            <input type="text" class="form-control" id="txtLastName" placeholder="Enter Last Name" name="txtLastName">
                        </div>
                        <div class="form-group">
                            <label for="txtUsername">Username:</label>
                            <input type="text"
                                   class="form-control"
                                   id="txtUsername"
                                   placeholder="Enter User Name"
                                   name="txtUsername">
                        </div>
                        <div class="form-group">
                            <label for="txtEmail">Email:</label>
                            <input type="text" class="form-control"
                                   id="txtEmail" placeholder="Enter Email"
                                   name="txtEmail">
                        </div>
                        <div class="form-group">
                            <label for="txtPwd">Pwd:</label>
                            <input type="text" class="form-control"
                                   id="txtPwd" placeholder="Enter Password"
                                   name="txtPwd">
                        </div>
                        <div class="form-group">
                            <label for="txtMobile">Mobile:</label>
                            <input type="text" class="form-control"
                                   id="txtMobile" placeholder="Enter Mobile"
                                   name="txtMobile">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#userTable').DataTable({
            paging: false,
            searching: false
        });
        //CREATE ACTION
        $("#addUser").validate({
            submitHandler: function(form) {
                var form_action = $("#addUser").attr("action");
                $.ajax({
                    data: $('#addUser').serialize(),
                    url: form_action,
                    type: "POST",
                    dataType: 'json',
                    success: function (res) {
                        var user = '<tr id="'+res.data.id+'">';
                        user += '<td>' + res.data.id + '</td>';
                        user += '<td>' + res.data.firstname + '</td>';
                        user += '<td>' + res.data.lastname + '</td>';
                        user += '<td>' + res.data.username + '</td>';
                        user += '<td>' + res.data.email + '</td>';
                        user += '<td>' + res.data.password + '</td>';
                        user += '<td>' + res.data.mobile + '</td>';
                        user += '<td><a data-id="' + res.data.id + '" ' +
                            'class="btn btn-primary btnEdit">Edit</a> <a data-id="' + res.data.id + '" class="btn btn-danger btnDelete">Delete</a></td>';
                        user += '</tr>';
                        $('#userTable tbody').prepend(user);
                        $('#addUser')[0].reset();
                        $('#addModal').modal('hide');
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
            }
        });
        //EDIT ACTION
        $('body').on('click', '.btnEdit', function () {
            var user_id = $(this).attr('data-id');
            $.ajax({
                url: 'user/edit/'+user_id,
                type: "GET",
                dataType: 'json',
                success: function (res) {
                    $('#updateModal').modal('show');
                    $('#updateUser #hdnStudentId').val(res.data.id);
                    $('#updateUser #txtFirstName').val(res.data.firstname);
                    $('#updateUser #txtLastName').val(res.data.lastname);
                    $('#updateUser #txtUsername').val(res.data.username);
                    $('#updateUser #txtEmail').val(res.data.email);
                    $('#updateUser #txtPwd').val(res.data.password);
                    $('#updateUser #txtMobile').val(res.data.mobile);
                },
                error: function (data) {
                    console.log("Error Edit: ", data);
                }
            });
        });
        //Submit form
        $("#updateUser").validate({
            submitHandler: function(form) {
                var form_action = $("#updateUser").attr("action");
                $.ajax({
                    data: $('#updateUser').serialize(),
                    url: form_action,
                    type: "POST",
                    dataType: 'json',
                    success: function (res) {
                        console.log("Vamos", res);
                        // $('#studentTable tbody #'+ res.data.id).html(student);
                        // $('#studentTable tbody').prepend(student);
                        $('#updateUser')[0].reset();
                        $('#updateModal').modal('hide');
                        location.reload(true);
                    },
                    error: function (data) {
                        console.log("Error Update: ", data);
                    }
                });
            }
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
