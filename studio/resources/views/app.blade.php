<style>
.alert{
    z-index: 99;
    top: 60px;
    right:18px;
    min-width:30%;
    position: fixed;
    animation: slide 0.5s forwards;
}
@keyframes slide {
    100% { top: 30px; }
}
@media screen and (max-width: 668px) {
    .alert{ /* center the alert on small screens */
        left: 10px;
        right: 10px; 
    }
}
</style>

@if(session('status')) {{-- <- If session key exists --}}
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('status')}} {{-- <- Display the session value --}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<script>
    //close the alert after 3 seconds.
    $(document).ready(function(){
       setTimeout(function() {
          $(".alert").alert('close');
       }, 3000);
    });
</script>