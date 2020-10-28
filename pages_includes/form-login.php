<?php ?>
<form id="studentFormLogin">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Authentification</h4>
    </div>
    <div class="modal-body">

        <div class="row">
            <div class="form-group col-md-12">
                <i class="fa fa-envelope"></i> <label for="adresseLogin">Email</label> <small id="labelMsgAdresseLogin"></small>
                <input type="email" name="adresseLogin" id="adresseLogin" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <i class=""></i> <label for="passeLogin">Mot de passe</label> <small id="labelMsgPasseLogin"></small>
                <input type="password" name="passeLogin" id="passeLogin" class="form-control">
            </div>
        </div>
    </div>
    <div class="ml-15 mb-15">
        <span id="successMsgLogin"></span>
    </div>
    <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="button" onclick="isLoggin()" id="saveLogin" class="btn btn-primary btn-flat">Se connecter</button>
    </div>
</form>
