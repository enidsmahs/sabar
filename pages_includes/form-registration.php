<?php ?>
<form id="studentForm">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Régistration</h4>
    </div>
    <div class="modal-body">

        <div class="row">
            <div class="form-group col-md-12">
                <i class="fa fa-user"></i> <label for="name">Name</label> <small id="labelMsgName"></small>
                <input type="text" name="name" id="name" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <i class="fa fa-envelope"></i> <label for="adresse">Email Address</label> <small id="labelMsgAdresse"></small>
                <input type="email" name="adresse" id="adresse" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <i class=""></i> <label for="passe">Choose Password</label> <small id="labelMsgPasse"></small>
                <input type="password" name="passe" id="passe" class="form-control">
            </div>
        </div>
    </div>
    <div class="ml-15 mb-15">
        <span id="successMsg"></span>
    </div>
    <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="addStudent()" id="save" class="btn btn-primary btn-flat">Save</button>
    </div>
</form>
