<?=
$this->extend( 'Layouts/Main' );

$this->section( 'content' );
?>

<div class="container">
    <h1 class="modal-title text-center"><?= isset( $title ) ? esc( $title ) : ""; ?></h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>

        <tbody id="tableBody">

        </tbody>
    </table>

</div>


<!-- Bootstrap Modal -->

<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">
                    Error
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body" id="errorModalBody"></div>
        </div>
    </div>
</div>

<!-- Bootstrap Modal -->


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="<?= base_url( 'assets/js/bootstrap.min.js' )?>"></script>

    <script>

        setTimeout(function () {
            $.ajax({
                url: "<?= site_url( '/getData' )?>",
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    var tableBody  =   $( '#tableBody' );
                    $.each( data, function ( index, item ) {
                        tableBody.append( '<tr><th scope="row">'+ item.id + '</th><td>'+ item.name + '</td><td>' + item.email + '</td></tr>');
                    } );
                },
                error: function ( xhr, status, error ) {
                    //display error in model
                    var errorModalBody  =   $( '#errorModalBody' );
                    errorModalBody.text( 'Error: '+xhr.responseText );
                    $( '#errorModal' ).modal( 'show' );
                }
            });
        }, 500);

    </script>


<?php
$this->endSection();
