var GodObj = {};


        function selectselect() {
            var valsort = "";
            var selid = GodObj.ourid;
            $( "select option:selected" ).each(function() {
                valsort = $( this ).text() + " ";
                loadcategory(selid);
            });    
        };

        function loadcategory(id){
        
        var perent = document.getElementById(id);
        var sortvaluedefault = $( "#sort-select" ).val();
        GodObj.ourid = perent.id;
        $.ajax({
            type: 'GET',
            url: 'category.php?category=' + perent.id + '&sort=' + sortvaluedefault + '',

        success: function(data) {
            $('#result').html(data);
        }
        });
        
        };
        function incat(id)
        {
            var perentcart = document.getElementById(id).value;
           

            var el = document.getElementById('modalres');
            el.innerText = perentcart + " добавлен в корзину.";
        }
   
       
    