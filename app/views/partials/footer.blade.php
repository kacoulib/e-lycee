<div class="container footer text-right">
    <div class="row footer">
        @section('footer')
        <ul class="list-inline text-center">
            <li><a href="{{url('mentions-legales')}}"><span class="glyphicon glyphicon-chevron-down"></span> Mentions légales</a></li>
            <li><a href="{{url('contact')}}"><span class="glyphicon glyphicon-copyright-mark"></span> Contact</a></li>
        </ul>
        @show
    </div> <!-- row footer -->
</div> <!-- container footer -->

<script type="text/javascript" src="{{asset('dist/js/bootstrap.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.container-fluid').css({
            'padding-left' : $('.container-fluid').width()/2 - $('body').width()/4 + 'px'
        });
    });

    function showAlert(){
        $("#myAlert").addClass("in");
    }


</script>
</body>
</html>