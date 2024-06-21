function initMultiSelect(virtualElementSelector, selector) {
  $(virtualElementSelector).prop("multiple", true);

  if ($(selector).val().trim()) {
    // Exclude the "Select All"/"Any" item when preselecting items on load
    const cleanValues = [
      // Remove duplicate values
      ...new Set(
        $(selector)
          .val()
          .split("||")
          .map((value) => value.trim())
          .filter((value) => value !== ""),
      ),
    ];
    const cleanParams = cleanValues.sort().join("||");

    $(selector).val(cleanParams);
    $(virtualElementSelector).val(cleanValues);
  } else {
    // Select all items on load
    $(virtualElementSelector).val("");
  }

  $(virtualElementSelector).selectpicker({
    actionsBox: true, 
    selectAllText: "Select All", 
    deselectAllText: "Deselect All",
    liveSearch: true,
  });

  $(virtualElementSelector).on("changed.bs.select", function () {
    const values =
      $(this).val().length !== 1
        ? // Exclude the "Select All"/"Any" item when multiple items are selected
          $(this)
            .val()
            .filter((value) => value.trim() !== "")
        : // Allow "Select All"/"Any" for single selections
          $(this).val();

    $(selector).val(values.join("||"));
    $(selector).get(0).dispatchEvent(new Event("change"));
  });
}


document.addEventListener("DataPageReady", function (event) {
  if (event.detail.appKey == "ded08000fc901a3d203148f5b7bb") {

    

    initMultiSelect('select[name$="cbParamVirtual2"]', '[name$="Tenant_ID_List"]');

    setTimeout(function() {
      $('select[name$="cbParamVirtual2"]').selectpicker('refresh');
    }, 2000);

  }

  if (event.detail.appKey == "ded08000eae4ea1894924d0ca0b7") {

    //hide the actual field
    document.querySelector('input[name*=EditRecordDate_Method_Delivery_fx]').parentElement.parentElement.style.display = 'none'
    
    initMultiSelect('select[name$="cbParamVirtual2"]', '[name$="EditRecordDate_Method_Delivery_fx"]');

    setTimeout(function() {
      $('select[name$="cbParamVirtual2"]').selectpicker('refresh');
    }, 2000);

  }

  if (event.detail.appKey == "ded080002f512709e97b4e0bbd97") {
    
    initMultiSelect('select[name$="cbParamVirtual1"]', '[name$="RecordCourt_Dismissed_Reason"]');

  }

});

   
