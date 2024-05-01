document.addEventListener('DataPageReady', function (event) {
    
    if (event.detail.appKey.includes('cce084d0153e40b5bc4a')) //add owner
    { 
        var emailChecker = document.querySelector('form[action*="cce084d0153e40b5bc4a"] input[name*="cbParamVirtual1"]');

        emailChecker.addEventListener('change',function(){
            console.log(emailChecker.value);
            userDupChecker(emailChecker.value);
        });
    }
    
});

function userDupChecker(userGUID){
    document.querySelector('form[action*="cce084d0153e40b5bc4a"] input[name*="InsertRecordEmail"]').value="";
    if(userGUID != 0 && userGUID != null){
        Swal.fire({
            title: "Owner is already in the system!",
            text: "Go to the owner's profile?",
            icon: "warning",
            backdrop: false,
            showCancelButton: true,
            confirmButtonColor: "#2A2F42",
            confirmButtonText: "Okay"

        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = './owner-details.php?Owner_GUID='+userGUID;
            }
        });
    }
}