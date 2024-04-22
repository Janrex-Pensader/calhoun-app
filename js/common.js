var cbAccountId = 'c1abn983.caspio.com'; // 8 character ID
var cbAppKeyPrefix = 'ded08000'; // 8 character Prefix
var cbDomain = 'https://' + cbAccountId;
var cbDataPagePrefix = cbDomain + '/dp/' + cbAppKeyPrefix;

function deployDP(containerID, appKey, params) {
  var params = params || "";
  var dataPageScript = "";

  var container = document.getElementById(containerID);
  container.innerHTML = "";

  //for multiple DataPages
  const appKeys = appKey.split(',');

  for (i = 0; i < appKeys.length; i++) {
      dataPageScript = document.createElement("script");
      dataPageScript.src = cbDataPagePrefix + appKeys[i].trim() + "/emb" + params;
      container.appendChild(dataPageScript);

  }

}

function openModal(modalTitle, appKey, params, size) {
  $('#cb-modal-body').html('');
  if (size) {
    $("#cb-modal .modal-dialog")
      .removeClass("modal-sm modal-md modal-lg modal-xl")
      .addClass(size);
  }
  deployDP("cb-modal-body", appKey, params);
  $('#cb-modal-title').html(modalTitle);
  $('#cb-modal').modal({
    backdrop: 'static',
    keyboard: false
  });

  // draggable modal
  $(".modal-header").on("mousedown", function (mousedownEvt) {
    var $draggable = $(this);
    var x = mousedownEvt.pageX - $draggable.offset().left,
      y = mousedownEvt.pageY - $draggable.offset().top;
    $("body").on("mousemove.draggable", function (mousemoveEvt) {
      $draggable.closest(".modal-content").offset({
        "left": mousemoveEvt.pageX - x,
        "top": mousemoveEvt.pageY - y
      });
    });
    $("body").one("mouseup", function () {
      $("body").off("mousemove.draggable");
    });
    $draggable.closest(".modal").one("bs.modal.hide", function () {
      $("body").off("mousemove.draggable");
    });
  });
}

//add modal in php file
function load_modal() {
  $('#footer').html('\
    <div id="cb-modal" class="modal" tabindex="-1" role="dialog">\
      <div class="modal-dialog" role="document">\
          <div class="modal-content">\
              <div class="modal-header">\
                <h5 class="modal-title" id="cb-modal-title">Modal title</h5>\
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">\
                  <span aria-hidden="true">&times;</span>\
                </button>\
              </div>\
            <div class="modal-body">\
            <div id="cb-modal-body" class="cb-form-fluid cb-form-resp"></div>\
          </div>\
        </div>\
      </div>\
    </div>\
  ');
}

// function - get URL Vars
function getUrlVars() {
  var vars = [], hash;
  var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');

  for (var i = 0; i < hashes.length; i++) {
    hash = hashes[i].split('=');
    hash[1] = unescape(hash[1]);
    vars.push(hash[0]);
    vars[hash[0]] = hash[1];
  }

  return vars;
}
var urlVars = getUrlVars();

// hide default submit button row at the bottom of inline forms
// document.addEventListener('DataPageReady', function (event) {
//   $('.cb-hide-submit input[type="submit"]').closest('tr').remove();
//   $('.cb-btn-reset').bind('click', function () {
//     $(this).closest('form').find('select, input[type="text"]').val('');
//     $(this).closest('form').submit();
//   });
// });

var getUrlParameter = function getUrlParameter(sParam) {
  var sPageURL = window.location.search.substring(1),
    sURLVariables = sPageURL.split('&'),
    sParameterName,
    i;

  for (i = 0; i < sURLVariables.length; i++) {
    sParameterName = sURLVariables[i].split('=');

    if (sParameterName[0] === sParam) {
      return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
    }
  }
};


function formatDate(date) {
  var monthNames = [
    "January", "February", "March",
    "April", "May", "June", "July",
    "August", "September", "October",
    "November", "December"
  ];

  var day = date.getDate();
  var monthIndex = date.getMonth();
  var year = date.getFullYear();

  // return day + ' ' + monthNames[monthIndex] + ' ' + year;
  return monthIndex + 1 + "/" + day + "/" + year;
}

function redirectLogin(user){
  window.location.href = "./"+user+"-login.php";
}