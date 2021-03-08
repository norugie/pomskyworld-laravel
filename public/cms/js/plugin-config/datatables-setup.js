// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#dataTable').DataTable({
        "ordering": false,
        "lengthChange": false,
        "pageLength": 10
    });
});
