document.addEventListener('DataPageReady', function (event) {
    if (event.detail.appKey.includes('72ddbd34090c4bbfb924') || //Owner - add case with property dropdown
        event.detail.appKey.includes('2005e4566c8f4c93a743') || //staff - add case with owner and proerty dropdown
        event.detail.appKey.includes('19f1679b90d6413a9a2a')//staff - add case with owner and proerty dropdown
    ) {
        
        console.log(event.detail.appKey);
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
});

