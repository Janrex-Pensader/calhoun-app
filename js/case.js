document.addEventListener('DataPageReady', function (event) {
    
    if (event.detail.appKey.includes('0f21b6db76e345d0b5a5') //shared - case details page
        || event.detail.appKey.includes('19f1679b90d6413a9a2a') //shared - add case
    ) { 
        hidetenantsPortion();
        onchangeGovernmentSubsidized();
    }

    function onchangeGovernmentSubsidized(){

        $('input[name*=RecordIs_Government_Subsidized]').change(function(){hidetenantsPortion()});
    }

    function hidetenantsPortion(){
        
        var value = $( 'input[name*=RecordIs_Government_Subsidized]:checked' ).val();
        console.log(value);
        if(value == 1) {
            document.querySelector("[id*='RecordTenants_Portion']").parentNode.parentNode.style.display = 'block'
        } else  if(value == 2) {
            document.querySelector("[id*='RecordTenants_Portion']").parentNode.parentNode.style.display = 'none'
        } 
    }

    

});

function addCase(tenantCount){ //function for adding case from the properties details page
    console.log(tenantCount);
    if(tenantCount > 0){ //open case type picker
        openModal('Add Case','49fb1db99f9449919f63','?Case_Type_ID=1','modal-md');
    }else{ //open swal and add tenant modal
        Swal.fire({
            title: "No active tenants!",
            text: "Add an active tenant to proceed.",
            icon: "warning",
            confirmButtonColor: "#2A2F42",
            confirmButtonText: "Okay"
        }).then((result) => {
            if (result.isConfirmed) {
                openModal('Add Tenant','b500afa0dd354befb701','','modal-md');
            }
        });
    }
}

function addCaseStaff(tenantCount, CaseName, CaseTye, propertyGUID){ //function to add case outside property details page
    console.log(tenantCount+' '+CaseName+' '+CaseTye);
    if(tenantCount > 0){ //open case type picker
        openModal('Add Case','19f1679b90d6413a9a2a','?Property_GUID='+propertyGUID+'&Case_Name='+CaseName+'&Case_Type_ID='+CaseTye,'modal-lg');
    }else{ //open swal and add tenant modal
        Swal.fire({
            title: "No active tenants!",
            text: "Add an active tenant to the selected property to proceed.",
            icon: "warning",
            confirmButtonColor: "#2A2F42",
            confirmButtonText: "Okay"
        }).then((result) => {
            if (result.isConfirmed) {
                $('#cb-modal').modal('hide');
            }
        });
    }
}