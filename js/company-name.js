document.addEventListener('DataPageReady', function (event) 
{
    if (
        event.detail.appKey.includes("ded080000d0ebbcb9d6f40f89f6b") //owner - edit profile 
        || event.detail.appKey.includes("ded08000cce084d0153e40b5bc4a") // staff - add owner
        || event.detail.appKey.includes("ded08000590877b9cf22402bb2cb") // staff - edit owner details
    ){
        $('input[name*=RecordFirst_Name]').change(function(){updateIndividual()});
        $('input[name*=RecordLast_Name]').change(function(){updateIndividual()});

        $('input[name*=Company_Type]').change(function(){
            var value = $( 'input[name*=Company_Type]:checked' ).val();
            if(value == 2) {
                updateCompany();
            } else  if(value == 1) {
                updateIndividual();
            } 
        });

        function updateCompany(){
            document.querySelector("input[name*=RecordCompany_Name]").value = '';
        }
        
        function updateIndividual(){ 
            var first_name = $( 'input[name*=RecordFirst_Name]' ).val();
            var last_name = $( 'input[name*=RecordLast_Name]' ).val();
            var value = $( 'input[name*=Company_Type]:checked' ).val();
            if(value == 1){
                document.querySelector("input[name*=RecordCompany_Name]").value = first_name+' '+last_name;
            }
        }
    }

    
});


