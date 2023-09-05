<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}fornt/img/lib/easing/easing.min.js"></script>
<script src="{{asset('/')}}fornt/img/lib/waypoints/waypoints.min.js"></script>
<script src="{{asset('/')}}fornt/img/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('/')}}fornt/img/lib/isotope/isotope.pkgd.min.js"></script>
<script src="{{asset('/')}}fornt/img/lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="{{asset('/')}}fornt/mail/jqBootstrapValidation.min.js"></script>
<script src="{{asset('/')}}fornt/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="{{asset('/')}}fornt/js/main.js"></script>
<script src="{{asset('/')}}texteditor/ckeditor.js"></script>
<script src="{{asset('/')}}texteditor/editor.js"></script>



<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script>


{{--dropy file--}}
<script src="{{asset('/')}}dropify/dist/js/dropify.min.js"></script>
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>


<script src="{{asset('/')}}node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script>
    $(function () {
        $('.baseDataTable').DataTable();
    })
</script>




<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('/')}}dist/js/perfect-scrollbar.jquery.min.js"></script>


<!--Wave Effects -->
<script src="{{asset('/')}}dist/js/waves.js"></script>

<!--Menu sidebar -->
<script src="{{asset('/')}}dist/js/sidebarmenu.js"></script>
<script src="{{asset('/')}}dist/js/custom.min.js"></script>

<!--stickey kit -->

<script src="{{asset('/')}}node_modules/sparkline/jquery.sparkline.min.js"></script>
<script src="{{asset('/')}}node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="{{asset('/')}}node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}assets/node_modules/jquery/dist/jquery.min.js"></script>



@yield('js')







