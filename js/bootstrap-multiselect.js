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

  if (event.detail.appKey == "ded08000589f7afbe6c5401d9879" || event.detail.appKey == "ded080006984001f67c247218976") {
    initMultiSelect('select[name$="cbParamVirtual3"]', '[name$="Top_Lock_fx"]');
    initMultiSelect('select[name$="cbParamVirtual4"]', '[name$="Bottom_Lock_fx"]');
  }
});

   