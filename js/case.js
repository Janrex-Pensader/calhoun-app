document.addEventListener('DataPageReady', function (event) {
    if (event.detail.appKey.includes('72ddbd34090c4bbfb924') || //Owner - add case with property dropdown
        event.detail.appKey.includes('2005e4566c8f4c93a743') || //staff - add case with owner and proerty dropdown
        event.detail.appKey.includes('19f1679b90d6413a9a2a')//staff - add case with owner and proerty dropdown
    ) {
        onchangeGovernmentSubsidized();
        var caseNameCont = document.querySelector("input[id*='cbParamVirtual1']");
        var property = document.querySelector("[id*='RecordProperty_ID']");
        var caseName = '';

        caseNameCont.addEventListener("change", function(){
            
            caseName = caseNameCont.value;
            console.log("value: "+caseName);
            if(property.value != ''){
                document.querySelector("input[name*='RecordCase_Name']").value = caseName;
            }
            
        });
    }

    if (event.detail.appKey.includes('0f21b6db76e345d0b5a5')) { //case details page
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

function addCase(tenantCount){
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