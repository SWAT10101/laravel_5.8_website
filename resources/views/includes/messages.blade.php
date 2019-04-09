<!-- redirct with massage in Authenticate.php file -->
@if (session('message'))

<script>
    var mass = "<dic class='text-white'>{{session('message')}} <b>login</b> first !</div>";
    $(document).ready(function () {
        alertify.notify(mass, 'error', 10);
    });

</script>
@endif

<!-- message after login -->
@if (session('welcome'))
<script>
    var mass = "<dic class='text-white'>{{ session('welcome') }} {{ Auth::user()->name }}</div>";
    $(document).ready(function () {
        alertify.notify(mass, 'success', 10);
    });

</script>
@endif

<!-- ADD user, tec, ect.. technical -->
@if (session('success'))

<script>
    $(document).ready(function () {
        alertify.notify('<div class="text-white">{{ session('
            success ') }}</div>', 'success', 10);
    });

</script>
@endif
