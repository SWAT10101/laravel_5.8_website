<!-- redirct with massage in Authenticate.php file -->
@if (session('message'))

<script>

   var mass = "<dic class='text-white'>{{session('message')}} <b>login</b> first !</div>";
    $( document ).ready(function() {
        alertify.notify(mass, 'error', 10); 
    });
    
</script>
@endif