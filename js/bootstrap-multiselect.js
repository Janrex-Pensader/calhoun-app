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
    selectedTextFormat: 'count > 2'
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

  if (event.detail.appKey == "ded08000306989d74e894128a689") {
    
    initMultiSelect('select[name$="cbParamVirtual2"]', '[name$="RecordCourt_Dismissed_Reason"]');

  }

  if (event.detail.appKey == "ded080002aea70c4391047e88e5f") {
    
    initMultiSelect2('select[name$="cbParamVirtual7"]', '[name$="cbParamVirtual4"]'); //Flag status
    initMultiSelect2('select[name$="cbParamVirtual5"]', '[name$="cbParamVirtual10"]'); // Case Stage
    initMultiSelect2('select[name$="cbParamVirtual3"]', '[name$="cbParamVirtual11"]'); //Case Type

    document.querySelector('form[action*=ded080002aea70c4391047e88e5f] input[id=cbParamVirtual4]').parentNode.parentNode.style.display = 'none';
    document.querySelector('form[action*=ded080002aea70c4391047e88e5f] input[id=cbParamVirtual10]').parentNode.parentNode.style.display = 'none';
    document.querySelector('form[action*=ded080002aea70c4391047e88e5f] input[id=cbParamVirtual11]').parentNode.parentNode.style.display = 'none';
  }

});


//used in flag status search criteria
function initMultiSelect2(virtualElementSelector, selector) {
  $(virtualElementSelector).prop("multiple", true);

  if ($(selector).val().trim()) {
    // Exclude the "Select All"/"Any" item when preselecting items on load
    const cleanValues = [
      // Remove duplicate values
      ...new Set(
        $(selector)
          .val()
          .split(" OR ")
          .map((value) => value.trim())
          .filter((value) => value !== ""),
      ),
    ];
    const cleanParams = cleanValues.sort().join(" OR ");

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
    liveSearch: false,
    selectedTextFormat: 'count > 2'
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

    $(selector).val(values.join(" OR "));
    $(selector).get(0).dispatchEvent(new Event("change"));
  });
}
   

