

@if(count($errors) > 0)

<div class="col s4 m4">    
<ul class="collection with-header">


    @foreach($errors->all() as  $error)
 
    <!--    <li class="collection-item"><i class="material-icons">error</i> {{ $error }}</li>-->
        <script>

    
    
    $.noConflict();
    jQuery(document).ready(function($){
            $.amaran({
                'message':'{{ $error }}',
                'cssanimationIn'    :'shake',
                'cssanimationOut'   :'fadeOutRight',
                'position'          : 'top right',
            });
        });
    </script>

    @endforeach

</ul> 
</div> 
@endif


    @if(Session::has('message'))

    <script>

    
    
    $.noConflict();
    jQuery(document).ready(function($){
            $.amaran({
                'message':'{{ Session::get('message') }}',
                'cssanimationIn'    :'shake',
                'cssanimationOut'   :'fadeOutRight',
                'position'          : 'top right',
            });
        });
    </script>


    <!--<div class="col s4 m4">    
        <ul class="collection with-header">
            <li class="collection-item"><i class="material-icons">error</i> {{ Session::get('message') }}</li>
        </ul> 
    </div> -->
    @endif

    @if(Session::has('deletepost'))

    <script type="text/javascript">
        window.alert("{{ Session::get('deletepost') }}");
    </script>

    
    @endif