$(document).ready(function(){
    $('#catbourse').hide();
    $('#adresse').hide();
    $('#loge').hide();
    $('#chambre').hide();
    
    $('#boursier').click(function(){
        $('#catbourse').show();
        $('#adresse').hide();
        $('#chambre').hide();
        $('#loge').show();
    });
    $('#loge').click(function(){
        $('#catbourse').show();
        $('#adresse').hide();
        $('#chambre').show();
        $('#loge').show();
    });

    $('#nonboursier').click(function(){
        $('#catbourse').hide();
        $('#adresse').show();
        $('#chambre').hide();
        $('#loge').hide();

    });

    $("input[type=checkbox][name=interest]").change(function(){
        if(this.checked){
        $('#catbourse').show();
        $('#adresse').hide();
        $('#chambre').show();
        }
        else{
            (!this.checked)
            $('#chambre').hide();

        }
    });
});