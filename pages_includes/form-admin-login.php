<?php ?>
<form id="adminFormLogin">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Authentification-Admin</h4>
    </div>
    <div class="modal-body">

        <div class="row">
            <div class="form-group col-md-12">
                <i class="fa fa-envelope"></i> <label for="adresseAdminLogin">Email</label> <small id="MsgAdresseAdminLogin"></small>
                <input type="email" name="adresseAdminLogin" id="adresseAdminLogin" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <i class=""></i> <label for="passeAdminLogin">Mot de passe</label> <small id="MsgAdresseAdminPasse"></small>
                <input type="password" name="passeAdminLogin" id="passeAdminLogin" class="form-control">
            </div>
        </div>
    </div>
    <div class="ml-15 mb-15">
        <span id="successMsgAdminLogin"></span>
    </div>
    <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="button" onclick="isAdminLoggin()" id="saveAdminLogin" class="btn btn-primary btn-flat">Se connecter</button>
    </div>
</form>
