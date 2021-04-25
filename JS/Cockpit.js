function EdicaoDoTicket(ID){
    document.location.href= `Edition.php?Ticket=${ID}`;
}

$(document).ready( function () {
    var table = $('#TableCVs').DataTable();

    $('#txtNome').on( 'keyup', function () {
        table.search( this.value ).draw();
    } ); 

    $('#txtArea').on( 'keyup', function () {
        table.search( this.value ).draw();
    } ); 

    $('#txtUF').on( 'keyup', function () {
        table.search( this.value ).draw(); 
    } ); 

    $('#txtCidade').on( 'keyup', function () {
        table.search( this.value ).draw();
    } ); 
} );