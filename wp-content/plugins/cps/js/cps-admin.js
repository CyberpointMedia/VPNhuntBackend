jQuery(function( $ ){
    $(document).ready(function(){
    $("#newsletter").validate({
        rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email:{
                    required: "Please enter email address",
                    email: "Please enter a valid email address"
                }
            },
            submitHandler: function(form, event) { 
                event.preventDefault();
                if($(this).valid()) {
                    $("#newsletter").hide();
                    $('.success').show();
                }
                //submit via ajax
            }
    
        });

        let table = new DataTable('.table');
        $(".table").on('click', 'td', function() {
            //get the initialization options
            var columns = table.settings().init().columns;
            //get the index of the clicked cell
            var colIndex = table.cell(this).index().column;
            alert('you clicked on the column with the name '+columns[colIndex].name);
        })

        $('#export-table').click(function () {
           // var $row = table.row( this ).data();
            var table_name = $('table caption').html();
          
            let table = document.getElementsByTagName("table");
            TableToExcel.convert(table[0], {
                name: table_name + '.xlsx',
                sheet: {
                    name: table_name
                }
            });
        });

        $("#btnExport").click(function () {
            
        });
        
    });
    
});