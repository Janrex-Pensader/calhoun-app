
document.addEventListener('DataPageReady', function (event) {

    if(event.detail.appKey.includes("ded08000e2d22bc2252a49498f0f") // edit staff
    || event.detail.appKey.includes("ded08000552cff79acd5463c865f")){  // add staff

        var role = document.querySelector('[name*=RecordRole_ID]');
        hideCompanyName(role.value);
        role.addEventListener("change", function(){hideCompanyName(role.value)});
    }
  

});


function hideCompanyName(role) {
    console.log(role);
  if(role != 4){
    document.querySelector("input[name*=RecordCompany_Name]").value = '';
    document.querySelector("input[name*=RecordCompany_Name]").parentNode.parentNode.style.display = "none"
  }
  else{
    document.querySelector("input[name*=RecordCompany_Name]").parentNode.parentNode.style.display = "block";
  }
}
