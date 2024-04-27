<!-- Modal Structure -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">Lista de Usuarios</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody id="usersTableBody"></tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#userModal').on('show.bs.modal', function () {
        $.ajax({
            url: "{{ route('admin.usersTable') }}",  // Asegúrate de que la URL es correcta
            type: 'GET',
            success: function(data) {
                var rows = '';
                $.each(data, function(index, user) {
                    rows += '<tr><td>' + user.name + '</td><td>' + user.lastname + '</td><td>' + user.email + '</td></tr>';
                });
                $('#usersTableBody').html(rows);
            },
            error: function() {
                alert('No se pudo cargar la información de los usuarios.');
            }
        });
    });
});
</script>
