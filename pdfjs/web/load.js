document.addEventListener('DataPageReady', function (event) {
    if (file_link !== undefined) {
        // convert file link to base64
        convertToBase64(file_link);
    }
});

// convert base64 to binary
function convertDataURIToBinary(dataURI) {
    var BASE64_MARKER = ';base64,';
    var base64Index = dataURI.indexOf(BASE64_MARKER) + BASE64_MARKER.length;
    // get Base64 string only
    var base64 = dataURI.substring(base64Index);
    // Decode then convert to binary
    var raw = window.atob(base64);
    var rawLength = raw.length;
    var array = new Uint8Array(new ArrayBuffer(rawLength));

    for (var i = 0; i < rawLength; i++) {
        array[i] = raw.charCodeAt(i);
    }
    return array;
}

function convertToBase64(url) {
    // create request 
    var request_data = new FormData();
    request_data.append('AjaxActionHostName', window.location.protocol + '//' + window.location.hostname + (window.location.port !== '' ? ':' + window.location.port : ''));
    request_data.append('cbAjaxReferrer', window.location.toString());

    // Initialize the XMLHttpRequest and wait until request load
    var request = new XMLHttpRequest();
    request.withCredentials = true;
    // account id
    request.open('POST', 'https://c1abn983.caspio.com/dp/checkcookieaccepted');
    request.onreadystatechange = function (e) {
        if (this.readyState === 4 && this.status === 200) {
            var v_result = JSON.parse(request.responseText);
            if (v_result.status) {
                // create file request 
                var file_request_data = new FormData();
                file_request_data.append('AjaxActionHostName', window.location.protocol + '//' + window.location.hostname + (window.location.port !== '' ? ':' + window.location.port : ''));
                file_request_data.append('cbAjaxReferrer', window.location.toString());

                // Initialize the XMLHttpRequest and wait until file load     
                let file_request = new XMLHttpRequest();
                file_request.responseType = 'arraybuffer';
                file_request.open('GET', url);

                // set bearer
                var dpAppKey = document.querySelector('input[name="AppKey"]').value + document.querySelector('input[name="cbUniqueFormId"]').value;
                var dpFolderKey = window.dataPageManagerObj.dataPages[dpAppKey].dataPageObj.dpFolderKey;
                if (dpFolderKey) {
                    file_request.setRequestHeader('Authorization', 'Bearer ' + dpFolderKey);
                }

                file_request.onreadystatechange = function (ev) {
                    if (this.readyState === 4 && this.status === 200) {
                        var b64 = arrayBufferToBase64(file_request.response);
                        document.querySelector('.cbform .cbspan').setAttribute('cb-data', b64);
                    }
                }
                file_request.onerror = function (e) {
                    console.error(file_request.statusText);
                };

                file_request.send(file_request_data.valueOf());
            }
        }
    }

    request.onerror = function (e) {
        console.error(request.statusText);
    };
    request.send(request_data.valueOf());
}


function arrayBufferToBase64(buffer) {
    var binary = '';
    var bytes = new Uint8Array(buffer);
    var len = bytes.byteLength;
    for (var i = 0; i < len; i++) {
        binary += String.fromCharCode(bytes[i]);
    }
    return window.btoa(binary);
}