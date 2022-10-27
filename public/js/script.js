$(function(){

    $('.row button[type=button]').click(function(){
        $('.modal-title').html('Tambah Data');
        $('.modal-footer button[type=submit]').html('Tambah');
    });
    
    $('#editButton').on('click', function(){
        $('.modal-title').html('Update Data');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action','http://localhost/php/Medical-Assist-Software-WEB-MVC/public/Data/update' );
        const NIM = $(this).data('NIM');
        $.ajax({
            url: 'http://localhost/php/Medical-Assist-Software-WEB-MVC/public/Data/getubah',
            data: {NIM:NIM},
            method: 'post',
            dataType: 'json',
            succes: function(data){
                console.log(data.NIM);
            }
        });
    });
});