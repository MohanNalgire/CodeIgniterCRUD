<script src="//code.jquery.com/jquery-1.12.4.js" ></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js" ></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js" ></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.bootstrap4.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js" ></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js" ></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js" ></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js" ></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.colVis.min.js" ></script>
<script>
    $(document).ready(function() {
    var table=$('#table').DataTable( {
        dom: 'Bfrtip',
        lengthChange: false,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "scrollY": true,
        "scrollX": true,
    });
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );

} );
</script>
</body>
</html>