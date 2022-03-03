$(document).on('click', '#procedures_modal', function(e){
    var url = $(this).data('url');
    
    $('#modal-body').html(''); // leave it blank before ajax call
    $('#modal-loader').show();      // load ajax loader

    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html'
    })
    .done(function(data){
        //alert(data);  
        $("#modal-body").html(data);
        /*$('#modal-body').JSON('');    
        $('#modal-body').JSON(data); // load response 
        $('#modal-loader').hide();        // hide ajax loader   */
    })
    .fail(function(){
        $('#modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
        $('#modal-loader').hide();
    });
});