 <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col sm-12">
                    <p>&copy; copyright 2017 | built with love by <a href="http:instagram/stayrocks">Muhammad Alfi</a></p>
                </div>
            </div>
        </div>
    </footer>
    

    <script src="<?= base_url("assets/") ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url("assets/") ?>dist/js/bootstrap.min.js"></script>     
    <script src="<?= base_url("assets/") ?>dist/js/summernote.min.js"></script>     
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> <!-- search autocomplete fiture -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <script>
        $('input.typeahead').change(function(){
            var q = $(".typeahead").val();
            $.get("search.php?query="+q,function(e){
                var e = JSON.parse(e);
                var data = "";
                for(var i = 0; i < e.length; i++)
                {
                   data += '<div class="col-sm-6 col-md-4"><div class="thumbnail"> <img src="img/portfolio/london.jpg" alt="..."><div class="caption"><h3>'+e[i].nama+'</h3><p><i class="fa fa-map-marker"></i> '+e[i].lokasi+'</p><p><a href="view.php?id='+e[i].id+'" class="btn btn-primary" >More</a></p></div></div></div>';
                }
                $("#kotak").html(data);

            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/core.js"></script>
   
    
</body>
</html>
