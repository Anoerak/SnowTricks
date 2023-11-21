(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_app_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/app.scss */ "./assets/styles/app.scss");
/* harmony import */ var _templates_components_header_header_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../templates/components/header/header.js */ "./templates/components/header/header.js");
/* harmony import */ var _templates_components_header_header_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_templates_components_header_header_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _templates_components_modals_delete_trick_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../templates/components/modals/delete_trick.js */ "./templates/components/modals/delete_trick.js");
/* harmony import */ var _templates_components_modals_delete_trick_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_templates_components_modals_delete_trick_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _templates_home_display_tricks_display_tricks_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../templates/home/display_tricks/display_tricks.js */ "./templates/home/display_tricks/display_tricks.js");
/* harmony import */ var _templates_home_display_tricks_display_tricks_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_templates_home_display_tricks_display_tricks_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _templates_components_carousel_carousel_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../templates/components/carousel/carousel.js */ "./templates/components/carousel/carousel.js");
/* harmony import */ var _templates_components_carousel_carousel_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_templates_components_carousel_carousel_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _templates_trick_edit_edit_trick_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../templates/trick/edit/edit_trick.js */ "./templates/trick/edit/edit_trick.js");
/* harmony import */ var _templates_trick_edit_edit_trick_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_templates_trick_edit_edit_trick_js__WEBPACK_IMPORTED_MODULE_5__);
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
// import './styles/app.css';

// any SCSS you import will output into a single css file (app.css in this case)


// start the Stimulus application
// import './bootstrap';







/***/ }),

/***/ "./templates/components/carousel/carousel.js":
/*!***************************************************!*\
  !*** ./templates/components/carousel/carousel.js ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
// If we have a carousel on the page
var carouselTest = document.getElementsByClassName('carousel__container');
if (carouselTest.length > 0) {
  // We select the elements we need
  var display = document.querySelector('[data-display]');
  var imgs = document.querySelectorAll('[data-img]');
  var leftBtn = document.querySelector('[data-btn-left]');
  var rightBtn = document.querySelector('[data-btn-right]');
  var imgSlider = document.querySelector('[data-img-container ]');

  // We create the container based on the tagName
  var new_img = imgs[0].tagName === 'VIDEO' ? document.createElement('iframe') : document.createElement('img');
  new_img.src = imgs[0].src;

  // We style the container
  mediaStylingFunction = function mediaStylingFunction(media) {
    if (media.tagName === 'IFRAME') {
      media.id = 'displayed_media';
      media.width = 750;
      media.height = 500;
      media.allow = 'accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; fullscreen';
      media.autoplay = 1;
    } else {
      media.id = 'displayed_media';
    }
  };
  mediaStylingFunction(new_img);
  display.appendChild(new_img);
  var left = 0;

  // We add event listeners to the buttons
  rightBtn.addEventListener('click', function next() {
    if (left <= imgs.length - 2) {
      left++;
      imgSlider.style.transform = "translatex(calc(( ".concat(left, " * (-80px - 1.6rem)))");
    } else {
      left = 0;
      imgSlider.style.transform = "translatex(0)";
    }
  });
  leftBtn.addEventListener('click', function before() {
    if (left > 0) {
      left--;
      imgSlider.style.transform = "translatex(calc(( -".concat(left, " * (80px + 1.6rem)))");
    }
    if (left == 0) {
      imgSlider.style.transform = "translatex(0)";
    }
  });

  // We add event listeners to the images and add logic to display the selected image
  imgs.forEach(function (img) {
    img.addEventListener('click', function (e) {
      var new_media = this.tagName === 'VIDEO' ? document.createElement('iframe') : document.createElement('img');
      mediaStylingFunction(new_media);
      if (new_media.src == undefined) {
        new_media.src = imgs[0].src;
      }
      new_media.id = 'displayed_media';
      new_media.src = this.getAttribute('src');
      var oldChild = document.getElementById('displayed_media');
      oldChild.remove();
      display.appendChild(new_media);
    });
  });
}

/***/ }),

/***/ "./templates/components/header/header.js":
/*!***********************************************!*\
  !*** ./templates/components/header/header.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
// We select the elements we need.
var dropdowns = document.querySelectorAll('.navbar .dropdown-toggler');
var dropdownIsOpen = false;

// We handle dropdown menus
if (dropdowns.length) {
  dropdowns.forEach(function (dropdown) {
    dropdown.addEventListener('click', function (event) {
      var target = document.querySelector("#".concat(event.target.dataset.dropdown));
      if (target) {
        if (target.classList.contains('show')) {
          target.classList.remove('show');
          dropdownIsOpen = false;
        } else {
          target.classList.add('show');
          dropdownIsOpen = true;
        }
      }
    });
  });
}

// We add an event listener to the window to close the dropdowns when the user clicks outside of them.
window.addEventListener('mouseup', function (event) {
  if (dropdownIsOpen) {
    dropdowns.forEach(function (dropdownButton) {
      var dropdown = document.querySelector("#".concat(dropdownButton.dataset.dropdown));
      var targetIsDropdown = dropdown == event.target;
      if (dropdownButton == event.target) {
        return;
      }
      if (!targetIsDropdown && !dropdown.contains(event.target)) {
        dropdown.classList.remove('show');
      }
    });
  }
});

// We handle small screens
function handleSmallScreens() {
  document.querySelector('.navbar-toggler').addEventListener('click', function () {
    var navbarMenu = document.querySelector('.navbar-menu');
    if (!navbarMenu.classList.contains('active')) {
      navbarMenu.classList.add('active');
    } else {
      navbarMenu.classList.remove('active');
    }
  });
}
handleSmallScreens();

/***/ }),

/***/ "./templates/components/modals/delete_trick.js":
/*!*****************************************************!*\
  !*** ./templates/components/modals/delete_trick.js ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.includes.js */ "./node_modules/core-js/modules/es.array.includes.js");
__webpack_require__(/*! core-js/modules/es.string.includes.js */ "./node_modules/core-js/modules/es.string.includes.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
__webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
// We get the html head title
var headTitle = document.head.querySelector('title').innerHTML;
if (headTitle.includes('Home') || headTitle.includes('Category')) {
  var modalManagement = function modalManagement() {
    // we grab the modal and display it as a block.
    var modal = document.getElementById('delete_trick_modal');
    modal.style.display = 'block';

    // We grab the close button and cancel button and add event listener to allow to close the modal.
    var modalCloseButton = document.getElementById('close_modal_button');
    modalCloseButton.addEventListener('click', closeModal);
    var modalCancelButton = document.getElementById('cancel_delete_button');
    modalCancelButton.addEventListener('click', closeModal);
    document.getElementById('delete_button').addEventListener('click', deleteTrick);

    // We grab the window and add an event listener to close the modal if the user clicks outside of it.
    window.addEventListener('click', function (event) {
      if (event.target == modal) {
        modal.style.display = 'none';
      }
    });
    function closeModal() {
      modal.style.display = 'none';
    }
    function deleteTrick() {
      // We grab the trick.id from the delete_button and pass it to the url.
      var trickToDelete = document.getElementById('delete_button').getAttribute('data-trick-id');
      var url = 'https://localhost:8000/trick/' + trickToDelete + '/delete';
      // We fetch the url and use the Symfony controller to delete the trick.
      // We wait for the response and if it's ok, we close the modal.
      fetch(url).then(function (response) {
        if (response.ok) {
          modal.style.display = 'none';
        }
      }).then(function (data) {
        if (headTitle.includes('Home')) {
          // We reload the page.
          window.location.reload();
        } else {
          // We redirect to the home page.
          window.location.replace('https://localhost:8000/');
        }
      });
    }
  };
  // We grab the delete_trick_buttons.
  var deleteTrickButton = document.getElementsByClassName('delete_trick_button');

  // We loop through the delete_trick_buttons and add an event listener on each one..
  var _loop = function _loop(i) {
    deleteTrickButton[i].addEventListener('click', getTrickId);
    function getTrickId() {
      // On click, we display the modal.
      modalManagement();
      // Then we get the trick.id and pass it to the delete_button
      var trickId = deleteTrickButton[i].getAttribute('id');
      document.getElementById('delete_button').setAttribute('data-trick-id', trickId);
    }
  };
  for (var i = 0; i < deleteTrickButton.length; i++) {
    _loop(i);
  }
}

/***/ }),

/***/ "./templates/home/display_tricks/display_tricks.js":
/*!*********************************************************!*\
  !*** ./templates/home/display_tricks/display_tricks.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.includes.js */ "./node_modules/core-js/modules/es.array.includes.js");
__webpack_require__(/*! core-js/modules/es.string.includes.js */ "./node_modules/core-js/modules/es.string.includes.js");
__webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
__webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
// We get the html head title
var headTitle = document.head.querySelector('title').innerHTML;
if (headTitle.includes('Home')) {
  var displayMoreTricks = function displayMoreTricks() {
    getMoreTricks(getLastTrickNumber());
  }; // We get the number of tricks displayed on screen
  var getLastTrickNumber = function getLastTrickNumber() {
    var tricksArray = document.getElementsByClassName('trick');
    var lastTrickNumber = parseInt(tricksArray.length) - 1;
    return lastTrickNumber;
  }; // We get the sum of trick available in the database
  var getTricksCount = function getTricksCount() {
    var tricksCount = document.getElementById('tricks').firstElementChild.id.replace('tricks_count_', '');
    var displayedTricksCount = parseInt(document.getElementsByClassName('trick').length);
    var tricksMarker = parseInt(tricksCount) - displayedTricksCount;
    return tricksMarker;
  }; // We query for more tricks
  var getMoreTricks = function getMoreTricks(lastTrickIndex) {
    var url = 'https://localhost:8000/load-more-tricks/' + lastTrickIndex + '/' + getTricksCount();
    console.log(url);
    fetch(url).then(function (response) {
      return response.text();
    }).then(function (html) {
      var tricks = document.getElementById('tricks_list');
      var loadMoreButton = document.getElementById('load_more_card');
      // We remove the load more button from the tricks list
      tricks.removeChild(loadMoreButton);
      // We insert the new tricks before the load more button in the tricks list
      tricks.insertAdjacentHTML('beforeend', html);
      // We check if there an id 'tricks_count_' + lastTrickIndex in the tricks list
      // If there is no id 'tricks_count_' + lastTrickIndex, it means that there is more tricks to display
      // So we add the load more button
      if (!document.getElementById('tricks_count_' + parseInt(getLastTrickNumber() + 1))) {
        // We insert the load more button at the end of the tricks list
        tricks.insertAdjacentHTML('beforeend', loadMoreButton.outerHTML);
      }
      var displayMoreButton = document.getElementById('display-more_button');
      displayMoreButton.addEventListener('click', displayMoreTricks);
    })["catch"](function (error) {
      console.log(error);
    });
  };
  // We grab the display-more_button and add an event listener.
  var displayMoreButton = document.getElementById('display-more_button');
  displayMoreButton.addEventListener('click', displayMoreTricks);
}

/***/ }),

/***/ "./templates/trick/edit/edit_trick.js":
/*!********************************************!*\
  !*** ./templates/trick/edit/edit_trick.js ***!
  \********************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.includes.js */ "./node_modules/core-js/modules/es.array.includes.js");
__webpack_require__(/*! core-js/modules/es.string.includes.js */ "./node_modules/core-js/modules/es.string.includes.js");
__webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
// We get the html head title
var headTitle = document.head.querySelector('title').innerHTML;
if (headTitle.includes('Edit') || headTitle.includes('New')) {
  // We write functions to increment those counter
  var incrementAddLinkCounter = function incrementAddLinkCounter() {
    addLinkCounter++;
    return addLinkCounter;
  };
  var incrementRemoveLinkCounter = function incrementRemoveLinkCounter() {
    removeLinkCounter++;
    return removeLinkCounter;
  }; // We had EventListener the button to add input fields
  // We define a variable based on the page title.
  var page = headTitle.includes('Edit') ? 'edit' : 'add';
  // We grab the button to add input fields
  var addLinkButton = document.getElementById('add-video-link-button');
  // We define two counters for the input fields and the remove button associate with it
  var addLinkCounter = 0;
  var removeLinkCounter = 0;
  addLinkButton.addEventListener('click', function (e) {
    e.preventDefault();
    // We increment the link counter of 1
    var linkCounter = incrementAddLinkCounter();
    // We create the new div for the input field element and its button
    var newLink = document.createElement('div');
    newLink.className = 'video__link__added__container';
    // We create the input field
    var newInput = document.createElement('input');
    newInput.type = 'text';
    newInput.id = page + '-trick-embed-video-links-' + linkCounter;
    newInput.name = page + '_trick[embed_video_links][' + linkCounter + ']';
    newInput.value = '';
    newInput.placeholder = 'https://www.youtube.com/watch?v=xxxxxxxxxxx';
    newInput.className = 'video__link__added';
    // We create the remove button
    var removeLinkButton = document.createElement('button');
    removeLinkButton.type = 'button';
    removeLinkButton.id = 'remove-video-link-button-' + incrementRemoveLinkCounter();
    removeLinkButton.className = 'remove__video__link__button';
    removeLinkButton.innerHTML = 'X';
    // We had everything to the DOM
    newLink.appendChild(newInput);
    newLink.appendChild(removeLinkButton);
    var linkContainer = document.getElementById('add-video-links');
    linkContainer.appendChild(newLink);
    // We add event listeners to the buttons and add logic to remove the selected link
    var removeLinkButtons = document.getElementsByClassName('remove__video__link__button');
    for (var i = 0; i < removeLinkButtons.length; i++) {
      removeLinkButtons[i].addEventListener('click', function (e) {
        e.preventDefault();
        var linkToRemove = this.parentNode;
        linkToRemove.remove();
      });
    }
  });
}

/***/ }),

/***/ "./assets/styles/app.scss":
/*!********************************!*\
  !*** ./assets/styles/app.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_for-each_js-node_modules_core-js_modules_es_arr-f30406"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QUNKLElBQUksR0FBRyxRQUFRO0lBQ2hDSSxnQkFBZ0IsQ0FBQ3BHLEVBQUUsR0FBRywyQkFBMkIsR0FBR3VGLDBCQUEwQixFQUFFO0lBQ2hGYSxnQkFBZ0IsQ0FBQ04sU0FBUyxHQUFHLDZCQUE2QjtJQUMxRE0sZ0JBQWdCLENBQUM5RCxTQUFTLEdBQUcsR0FBRztJQUNoQztJQUNBdUQsT0FBTyxDQUFDeEYsV0FBVyxDQUFDMEYsUUFBUSxDQUFDO0lBQzdCRixPQUFPLENBQUN4RixXQUFXLENBQUMrRixnQkFBZ0IsQ0FBQztJQUNyQyxJQUFJQyxhQUFhLEdBQUdySCxRQUFRLENBQUNvQyxjQUFjLENBQUMsaUJBQWlCLENBQUM7SUFDOURpRixhQUFhLENBQUNoRyxXQUFXLENBQUN3RixPQUFPLENBQUM7SUFDbEM7SUFDQSxJQUFJUyxpQkFBaUIsR0FBR3RILFFBQVEsQ0FBQ0Msc0JBQXNCLENBQUMsNkJBQTZCLENBQUM7SUFDdEYsS0FBSyxJQUFJeUUsQ0FBQyxHQUFHLENBQUMsRUFBRUEsQ0FBQyxHQUFHNEMsaUJBQWlCLENBQUNwSCxNQUFNLEVBQUV3RSxDQUFDLEVBQUUsRUFBRTtNQUNsRDRDLGlCQUFpQixDQUFDNUMsQ0FBQyxDQUFDLENBQUNuRCxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsVUFBVVEsQ0FBQyxFQUFFO1FBQzNEQSxDQUFDLENBQUM0RSxjQUFjLEVBQUU7UUFDbEIsSUFBSVksWUFBWSxHQUFHLElBQUksQ0FBQ0MsVUFBVTtRQUNsQ0QsWUFBWSxDQUFDbEYsTUFBTSxFQUFFO01BQ3RCLENBQUMsQ0FBQztJQUNIO0VBQ0QsQ0FBQyxDQUFDO0FBQ0g7Ozs7Ozs7Ozs7OztBQ3pEQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9hcHAuanMiLCJ3ZWJwYWNrOi8vLy4vdGVtcGxhdGVzL2NvbXBvbmVudHMvY2Fyb3VzZWwvY2Fyb3VzZWwuanMiLCJ3ZWJwYWNrOi8vLy4vdGVtcGxhdGVzL2NvbXBvbmVudHMvaGVhZGVyL2hlYWRlci5qcyIsIndlYnBhY2s6Ly8vLi90ZW1wbGF0ZXMvY29tcG9uZW50cy9tb2RhbHMvZGVsZXRlX3RyaWNrLmpzIiwid2VicGFjazovLy8uL3RlbXBsYXRlcy9ob21lL2Rpc3BsYXlfdHJpY2tzL2Rpc3BsYXlfdHJpY2tzLmpzIiwid2VicGFjazovLy8uL3RlbXBsYXRlcy90cmljay9lZGl0L2VkaXRfdHJpY2suanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuc2Nzcz84ZjU5Il0sInNvdXJjZXNDb250ZW50IjpbIi8qXHJcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcclxuICpcclxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxyXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxyXG4gKi9cclxuXHJcbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcclxuLy8gaW1wb3J0ICcuL3N0eWxlcy9hcHAuY3NzJztcclxuXHJcbi8vIGFueSBTQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXHJcbmltcG9ydCAnLi9zdHlsZXMvYXBwLnNjc3MnO1xyXG5cclxuLy8gc3RhcnQgdGhlIFN0aW11bHVzIGFwcGxpY2F0aW9uXHJcbi8vIGltcG9ydCAnLi9ib290c3RyYXAnO1xyXG5cclxuaW1wb3J0ICcuLi90ZW1wbGF0ZXMvY29tcG9uZW50cy9oZWFkZXIvaGVhZGVyLmpzJztcclxuaW1wb3J0ICcuLi90ZW1wbGF0ZXMvY29tcG9uZW50cy9tb2RhbHMvZGVsZXRlX3RyaWNrLmpzJztcclxuaW1wb3J0ICcuLi90ZW1wbGF0ZXMvaG9tZS9kaXNwbGF5X3RyaWNrcy9kaXNwbGF5X3RyaWNrcy5qcyc7XHJcbmltcG9ydCAnLi4vdGVtcGxhdGVzL2NvbXBvbmVudHMvY2Fyb3VzZWwvY2Fyb3VzZWwuanMnO1xyXG5pbXBvcnQgJy4uL3RlbXBsYXRlcy90cmljay9lZGl0L2VkaXRfdHJpY2suanMnO1xyXG4iLCIvLyBJZiB3ZSBoYXZlIGEgY2Fyb3VzZWwgb24gdGhlIHBhZ2VcbmxldCBjYXJvdXNlbFRlc3QgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdjYXJvdXNlbF9fY29udGFpbmVyJyk7XG5cbmlmIChjYXJvdXNlbFRlc3QubGVuZ3RoID4gMCkge1xuXHQvLyBXZSBzZWxlY3QgdGhlIGVsZW1lbnRzIHdlIG5lZWRcblx0bGV0IGRpc3BsYXkgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdbZGF0YS1kaXNwbGF5XScpO1xuXHRsZXQgaW1ncyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ1tkYXRhLWltZ10nKTtcblx0bGV0IGxlZnRCdG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdbZGF0YS1idG4tbGVmdF0nKTtcblx0bGV0IHJpZ2h0QnRuID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignW2RhdGEtYnRuLXJpZ2h0XScpO1xuXHRsZXQgaW1nU2xpZGVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignW2RhdGEtaW1nLWNvbnRhaW5lciBdJyk7XG5cblx0Ly8gV2UgY3JlYXRlIHRoZSBjb250YWluZXIgYmFzZWQgb24gdGhlIHRhZ05hbWVcblx0bGV0IG5ld19pbWcgPSBpbWdzWzBdLnRhZ05hbWUgPT09ICdWSURFTycgPyBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdpZnJhbWUnKSA6IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2ltZycpO1xuXHRuZXdfaW1nLnNyYyA9IGltZ3NbMF0uc3JjO1xuXG5cdC8vIFdlIHN0eWxlIHRoZSBjb250YWluZXJcblx0bWVkaWFTdHlsaW5nRnVuY3Rpb24gPSAobWVkaWEpID0+IHtcblx0XHRpZiAobWVkaWEudGFnTmFtZSA9PT0gJ0lGUkFNRScpIHtcblx0XHRcdG1lZGlhLmlkID0gJ2Rpc3BsYXllZF9tZWRpYSc7XG5cdFx0XHRtZWRpYS53aWR0aCA9IDc1MDtcblx0XHRcdG1lZGlhLmhlaWdodCA9IDUwMDtcblx0XHRcdG1lZGlhLmFsbG93ID0gJ2FjY2VsZXJvbWV0ZXI7IGNsaXBib2FyZC13cml0ZTsgZW5jcnlwdGVkLW1lZGlhOyBneXJvc2NvcGU7IHBpY3R1cmUtaW4tcGljdHVyZTsgZnVsbHNjcmVlbic7XG5cdFx0XHRtZWRpYS5hdXRvcGxheSA9IDE7XG5cdFx0fSBlbHNlIHtcblx0XHRcdG1lZGlhLmlkID0gJ2Rpc3BsYXllZF9tZWRpYSc7XG5cdFx0fVxuXHR9O1xuXG5cdG1lZGlhU3R5bGluZ0Z1bmN0aW9uKG5ld19pbWcpO1xuXG5cdGRpc3BsYXkuYXBwZW5kQ2hpbGQobmV3X2ltZyk7XG5cblx0bGV0IGxlZnQgPSAwO1xuXG5cdC8vIFdlIGFkZCBldmVudCBsaXN0ZW5lcnMgdG8gdGhlIGJ1dHRvbnNcblx0cmlnaHRCdG4uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiBuZXh0KCkge1xuXHRcdGlmIChsZWZ0IDw9IGltZ3MubGVuZ3RoIC0gMikge1xuXHRcdFx0bGVmdCsrO1xuXHRcdFx0aW1nU2xpZGVyLnN0eWxlLnRyYW5zZm9ybSA9IGB0cmFuc2xhdGV4KGNhbGMoKCAke2xlZnR9ICogKC04MHB4IC0gMS42cmVtKSkpYDtcblx0XHR9IGVsc2Uge1xuXHRcdFx0bGVmdCA9IDA7XG5cdFx0XHRpbWdTbGlkZXIuc3R5bGUudHJhbnNmb3JtID0gYHRyYW5zbGF0ZXgoMClgO1xuXHRcdH1cblx0fSk7XG5cblx0bGVmdEJ0bi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIGJlZm9yZSgpIHtcblx0XHRpZiAobGVmdCA+IDApIHtcblx0XHRcdGxlZnQtLTtcblx0XHRcdGltZ1NsaWRlci5zdHlsZS50cmFuc2Zvcm0gPSBgdHJhbnNsYXRleChjYWxjKCggLSR7bGVmdH0gKiAoODBweCArIDEuNnJlbSkpKWA7XG5cdFx0fVxuXHRcdGlmIChsZWZ0ID09IDApIHtcblx0XHRcdGltZ1NsaWRlci5zdHlsZS50cmFuc2Zvcm0gPSBgdHJhbnNsYXRleCgwKWA7XG5cdFx0fVxuXHR9KTtcblxuXHQvLyBXZSBhZGQgZXZlbnQgbGlzdGVuZXJzIHRvIHRoZSBpbWFnZXMgYW5kIGFkZCBsb2dpYyB0byBkaXNwbGF5IHRoZSBzZWxlY3RlZCBpbWFnZVxuXHRpbWdzLmZvckVhY2goKGltZykgPT4ge1xuXHRcdGltZy5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XG5cdFx0XHRsZXQgbmV3X21lZGlhID0gdGhpcy50YWdOYW1lID09PSAnVklERU8nID8gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnaWZyYW1lJykgOiBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdpbWcnKTtcblx0XHRcdG1lZGlhU3R5bGluZ0Z1bmN0aW9uKG5ld19tZWRpYSk7XG5cdFx0XHRpZiAobmV3X21lZGlhLnNyYyA9PSB1bmRlZmluZWQpIHtcblx0XHRcdFx0bmV3X21lZGlhLnNyYyA9IGltZ3NbMF0uc3JjO1xuXHRcdFx0fVxuXHRcdFx0bmV3X21lZGlhLmlkID0gJ2Rpc3BsYXllZF9tZWRpYSc7XG5cdFx0XHRuZXdfbWVkaWEuc3JjID0gdGhpcy5nZXRBdHRyaWJ1dGUoJ3NyYycpO1xuXHRcdFx0bGV0IG9sZENoaWxkID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Rpc3BsYXllZF9tZWRpYScpO1xuXHRcdFx0b2xkQ2hpbGQucmVtb3ZlKCk7XG5cdFx0XHRkaXNwbGF5LmFwcGVuZENoaWxkKG5ld19tZWRpYSk7XG5cdFx0fSk7XG5cdH0pO1xufVxuIiwiLy8gV2Ugc2VsZWN0IHRoZSBlbGVtZW50cyB3ZSBuZWVkLlxubGV0IGRyb3Bkb3ducyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5uYXZiYXIgLmRyb3Bkb3duLXRvZ2dsZXInKTtcbmxldCBkcm9wZG93bklzT3BlbiA9IGZhbHNlO1xuXG4vLyBXZSBoYW5kbGUgZHJvcGRvd24gbWVudXNcbmlmIChkcm9wZG93bnMubGVuZ3RoKSB7XG5cdGRyb3Bkb3ducy5mb3JFYWNoKChkcm9wZG93bikgPT4ge1xuXHRcdGRyb3Bkb3duLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGV2ZW50KSA9PiB7XG5cdFx0XHRsZXQgdGFyZ2V0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihgIyR7ZXZlbnQudGFyZ2V0LmRhdGFzZXQuZHJvcGRvd259YCk7XG5cblx0XHRcdGlmICh0YXJnZXQpIHtcblx0XHRcdFx0aWYgKHRhcmdldC5jbGFzc0xpc3QuY29udGFpbnMoJ3Nob3cnKSkge1xuXHRcdFx0XHRcdHRhcmdldC5jbGFzc0xpc3QucmVtb3ZlKCdzaG93Jyk7XG5cdFx0XHRcdFx0ZHJvcGRvd25Jc09wZW4gPSBmYWxzZTtcblx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHR0YXJnZXQuY2xhc3NMaXN0LmFkZCgnc2hvdycpO1xuXHRcdFx0XHRcdGRyb3Bkb3duSXNPcGVuID0gdHJ1ZTtcblx0XHRcdFx0fVxuXHRcdFx0fVxuXHRcdH0pO1xuXHR9KTtcbn1cblxuLy8gV2UgYWRkIGFuIGV2ZW50IGxpc3RlbmVyIHRvIHRoZSB3aW5kb3cgdG8gY2xvc2UgdGhlIGRyb3Bkb3ducyB3aGVuIHRoZSB1c2VyIGNsaWNrcyBvdXRzaWRlIG9mIHRoZW0uXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignbW91c2V1cCcsIChldmVudCkgPT4ge1xuXHRpZiAoZHJvcGRvd25Jc09wZW4pIHtcblx0XHRkcm9wZG93bnMuZm9yRWFjaCgoZHJvcGRvd25CdXR0b24pID0+IHtcblx0XHRcdGxldCBkcm9wZG93biA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoYCMke2Ryb3Bkb3duQnV0dG9uLmRhdGFzZXQuZHJvcGRvd259YCk7XG5cdFx0XHRsZXQgdGFyZ2V0SXNEcm9wZG93biA9IGRyb3Bkb3duID09IGV2ZW50LnRhcmdldDtcblxuXHRcdFx0aWYgKGRyb3Bkb3duQnV0dG9uID09IGV2ZW50LnRhcmdldCkge1xuXHRcdFx0XHRyZXR1cm47XG5cdFx0XHR9XG5cblx0XHRcdGlmICghdGFyZ2V0SXNEcm9wZG93biAmJiAhZHJvcGRvd24uY29udGFpbnMoZXZlbnQudGFyZ2V0KSkge1xuXHRcdFx0XHRkcm9wZG93bi5jbGFzc0xpc3QucmVtb3ZlKCdzaG93Jyk7XG5cdFx0XHR9XG5cdFx0fSk7XG5cdH1cbn0pO1xuXG4vLyBXZSBoYW5kbGUgc21hbGwgc2NyZWVuc1xuZnVuY3Rpb24gaGFuZGxlU21hbGxTY3JlZW5zKCkge1xuXHRkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcubmF2YmFyLXRvZ2dsZXInKS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHtcblx0XHRsZXQgbmF2YmFyTWVudSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5uYXZiYXItbWVudScpO1xuXG5cdFx0aWYgKCFuYXZiYXJNZW51LmNsYXNzTGlzdC5jb250YWlucygnYWN0aXZlJykpIHtcblx0XHRcdG5hdmJhck1lbnUuY2xhc3NMaXN0LmFkZCgnYWN0aXZlJyk7XG5cdFx0fSBlbHNlIHtcblx0XHRcdG5hdmJhck1lbnUuY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJyk7XG5cdFx0fVxuXHR9KTtcbn1cblxuaGFuZGxlU21hbGxTY3JlZW5zKCk7XG4iLCIvLyBXZSBnZXQgdGhlIGh0bWwgaGVhZCB0aXRsZVxuY29uc3QgaGVhZFRpdGxlID0gZG9jdW1lbnQuaGVhZC5xdWVyeVNlbGVjdG9yKCd0aXRsZScpLmlubmVySFRNTDtcblxuaWYgKGhlYWRUaXRsZS5pbmNsdWRlcygnSG9tZScpIHx8IGhlYWRUaXRsZS5pbmNsdWRlcygnQ2F0ZWdvcnknKSkge1xuXHQvLyBXZSBncmFiIHRoZSBkZWxldGVfdHJpY2tfYnV0dG9ucy5cblx0Y29uc3QgZGVsZXRlVHJpY2tCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdkZWxldGVfdHJpY2tfYnV0dG9uJyk7XG5cblx0Ly8gV2UgbG9vcCB0aHJvdWdoIHRoZSBkZWxldGVfdHJpY2tfYnV0dG9ucyBhbmQgYWRkIGFuIGV2ZW50IGxpc3RlbmVyIG9uIGVhY2ggb25lLi5cblx0Zm9yIChsZXQgaSA9IDA7IGkgPCBkZWxldGVUcmlja0J1dHRvbi5sZW5ndGg7IGkrKykge1xuXHRcdGRlbGV0ZVRyaWNrQnV0dG9uW2ldLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZ2V0VHJpY2tJZCk7XG5cdFx0ZnVuY3Rpb24gZ2V0VHJpY2tJZCgpIHtcblx0XHRcdC8vIE9uIGNsaWNrLCB3ZSBkaXNwbGF5IHRoZSBtb2RhbC5cblx0XHRcdG1vZGFsTWFuYWdlbWVudCgpO1xuXHRcdFx0Ly8gVGhlbiB3ZSBnZXQgdGhlIHRyaWNrLmlkIGFuZCBwYXNzIGl0IHRvIHRoZSBkZWxldGVfYnV0dG9uXG5cdFx0XHRjb25zdCB0cmlja0lkID0gZGVsZXRlVHJpY2tCdXR0b25baV0uZ2V0QXR0cmlidXRlKCdpZCcpO1xuXHRcdFx0ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RlbGV0ZV9idXR0b24nKS5zZXRBdHRyaWJ1dGUoJ2RhdGEtdHJpY2staWQnLCB0cmlja0lkKTtcblx0XHR9XG5cdH1cblxuXHRmdW5jdGlvbiBtb2RhbE1hbmFnZW1lbnQoKSB7XG5cdFx0Ly8gd2UgZ3JhYiB0aGUgbW9kYWwgYW5kIGRpc3BsYXkgaXQgYXMgYSBibG9jay5cblx0XHRsZXQgbW9kYWwgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGVsZXRlX3RyaWNrX21vZGFsJyk7XG5cdFx0bW9kYWwuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7XG5cblx0XHQvLyBXZSBncmFiIHRoZSBjbG9zZSBidXR0b24gYW5kIGNhbmNlbCBidXR0b24gYW5kIGFkZCBldmVudCBsaXN0ZW5lciB0byBhbGxvdyB0byBjbG9zZSB0aGUgbW9kYWwuXG5cdFx0bGV0IG1vZGFsQ2xvc2VCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY2xvc2VfbW9kYWxfYnV0dG9uJyk7XG5cdFx0bW9kYWxDbG9zZUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGNsb3NlTW9kYWwpO1xuXHRcdGxldCBtb2RhbENhbmNlbEJ1dHRvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjYW5jZWxfZGVsZXRlX2J1dHRvbicpO1xuXHRcdG1vZGFsQ2FuY2VsQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgY2xvc2VNb2RhbCk7XG5cblx0XHRkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGVsZXRlX2J1dHRvbicpLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZGVsZXRlVHJpY2spO1xuXG5cdFx0Ly8gV2UgZ3JhYiB0aGUgd2luZG93IGFuZCBhZGQgYW4gZXZlbnQgbGlzdGVuZXIgdG8gY2xvc2UgdGhlIG1vZGFsIGlmIHRoZSB1c2VyIGNsaWNrcyBvdXRzaWRlIG9mIGl0LlxuXHRcdHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChldmVudCkge1xuXHRcdFx0aWYgKGV2ZW50LnRhcmdldCA9PSBtb2RhbCkge1xuXHRcdFx0XHRtb2RhbC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xuXHRcdFx0fVxuXHRcdH0pO1xuXG5cdFx0ZnVuY3Rpb24gY2xvc2VNb2RhbCgpIHtcblx0XHRcdG1vZGFsLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7XG5cdFx0fVxuXG5cdFx0ZnVuY3Rpb24gZGVsZXRlVHJpY2soKSB7XG5cdFx0XHQvLyBXZSBncmFiIHRoZSB0cmljay5pZCBmcm9tIHRoZSBkZWxldGVfYnV0dG9uIGFuZCBwYXNzIGl0IHRvIHRoZSB1cmwuXG5cdFx0XHRsZXQgdHJpY2tUb0RlbGV0ZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdkZWxldGVfYnV0dG9uJykuZ2V0QXR0cmlidXRlKCdkYXRhLXRyaWNrLWlkJyk7XG5cdFx0XHRsZXQgdXJsID0gJ2h0dHBzOi8vbG9jYWxob3N0OjgwMDAvdHJpY2svJyArIHRyaWNrVG9EZWxldGUgKyAnL2RlbGV0ZSc7XG5cdFx0XHQvLyBXZSBmZXRjaCB0aGUgdXJsIGFuZCB1c2UgdGhlIFN5bWZvbnkgY29udHJvbGxlciB0byBkZWxldGUgdGhlIHRyaWNrLlxuXHRcdFx0Ly8gV2Ugd2FpdCBmb3IgdGhlIHJlc3BvbnNlIGFuZCBpZiBpdCdzIG9rLCB3ZSBjbG9zZSB0aGUgbW9kYWwuXG5cdFx0XHRmZXRjaCh1cmwpXG5cdFx0XHRcdC50aGVuKChyZXNwb25zZSkgPT4ge1xuXHRcdFx0XHRcdGlmIChyZXNwb25zZS5vaykge1xuXHRcdFx0XHRcdFx0bW9kYWwuc3R5bGUuZGlzcGxheSA9ICdub25lJztcblx0XHRcdFx0XHR9XG5cdFx0XHRcdH0pXG5cdFx0XHRcdC50aGVuKChkYXRhKSA9PiB7XG5cdFx0XHRcdFx0aWYgKGhlYWRUaXRsZS5pbmNsdWRlcygnSG9tZScpKSB7XG5cdFx0XHRcdFx0XHQvLyBXZSByZWxvYWQgdGhlIHBhZ2UuXG5cdFx0XHRcdFx0XHR3aW5kb3cubG9jYXRpb24ucmVsb2FkKCk7XG5cdFx0XHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0XHRcdC8vIFdlIHJlZGlyZWN0IHRvIHRoZSBob21lIHBhZ2UuXG5cdFx0XHRcdFx0XHR3aW5kb3cubG9jYXRpb24ucmVwbGFjZSgnaHR0cHM6Ly9sb2NhbGhvc3Q6ODAwMC8nKTtcblx0XHRcdFx0XHR9XG5cdFx0XHRcdH0pO1xuXHRcdH1cblx0fVxufVxuIiwiLy8gV2UgZ2V0IHRoZSBodG1sIGhlYWQgdGl0bGVcbmNvbnN0IGhlYWRUaXRsZSA9IGRvY3VtZW50LmhlYWQucXVlcnlTZWxlY3RvcigndGl0bGUnKS5pbm5lckhUTUw7XG5cbmlmIChoZWFkVGl0bGUuaW5jbHVkZXMoJ0hvbWUnKSkge1xuXHQvLyBXZSBncmFiIHRoZSBkaXNwbGF5LW1vcmVfYnV0dG9uIGFuZCBhZGQgYW4gZXZlbnQgbGlzdGVuZXIuXG5cdGNvbnN0IGRpc3BsYXlNb3JlQnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Rpc3BsYXktbW9yZV9idXR0b24nKTtcblx0ZGlzcGxheU1vcmVCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBkaXNwbGF5TW9yZVRyaWNrcyk7XG5cblx0ZnVuY3Rpb24gZGlzcGxheU1vcmVUcmlja3MoKSB7XG5cdFx0Z2V0TW9yZVRyaWNrcyhnZXRMYXN0VHJpY2tOdW1iZXIoKSk7XG5cdH1cblxuXHQvLyBXZSBnZXQgdGhlIG51bWJlciBvZiB0cmlja3MgZGlzcGxheWVkIG9uIHNjcmVlblxuXHRmdW5jdGlvbiBnZXRMYXN0VHJpY2tOdW1iZXIoKSB7XG5cdFx0bGV0IHRyaWNrc0FycmF5ID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgndHJpY2snKTtcblx0XHRsZXQgbGFzdFRyaWNrTnVtYmVyID0gcGFyc2VJbnQodHJpY2tzQXJyYXkubGVuZ3RoKSAtIDE7XG5cdFx0cmV0dXJuIGxhc3RUcmlja051bWJlcjtcblx0fVxuXG5cdC8vIFdlIGdldCB0aGUgc3VtIG9mIHRyaWNrIGF2YWlsYWJsZSBpbiB0aGUgZGF0YWJhc2Vcblx0ZnVuY3Rpb24gZ2V0VHJpY2tzQ291bnQoKSB7XG5cdFx0bGV0IHRyaWNrc0NvdW50ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3RyaWNrcycpLmZpcnN0RWxlbWVudENoaWxkLmlkLnJlcGxhY2UoJ3RyaWNrc19jb3VudF8nLCAnJyk7XG5cdFx0bGV0IGRpc3BsYXllZFRyaWNrc0NvdW50ID0gcGFyc2VJbnQoZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgndHJpY2snKS5sZW5ndGgpO1xuXHRcdGxldCB0cmlja3NNYXJrZXIgPSBwYXJzZUludCh0cmlja3NDb3VudCkgLSBkaXNwbGF5ZWRUcmlja3NDb3VudDtcblx0XHRyZXR1cm4gdHJpY2tzTWFya2VyO1xuXHR9XG5cblx0Ly8gV2UgcXVlcnkgZm9yIG1vcmUgdHJpY2tzXG5cdGZ1bmN0aW9uIGdldE1vcmVUcmlja3MobGFzdFRyaWNrSW5kZXgpIHtcblx0XHRsZXQgdXJsID0gJ2h0dHBzOi8vbG9jYWxob3N0OjgwMDAvbG9hZC1tb3JlLXRyaWNrcy8nICsgbGFzdFRyaWNrSW5kZXggKyAnLycgKyBnZXRUcmlja3NDb3VudCgpO1xuXHRcdGNvbnNvbGUubG9nKHVybCk7XG5cdFx0ZmV0Y2godXJsKVxuXHRcdFx0LnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG5cdFx0XHRcdHJldHVybiByZXNwb25zZS50ZXh0KCk7XG5cdFx0XHR9KVxuXHRcdFx0LnRoZW4oZnVuY3Rpb24gKGh0bWwpIHtcblx0XHRcdFx0bGV0IHRyaWNrcyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0cmlja3NfbGlzdCcpO1xuXHRcdFx0XHRsZXQgbG9hZE1vcmVCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbG9hZF9tb3JlX2NhcmQnKTtcblx0XHRcdFx0Ly8gV2UgcmVtb3ZlIHRoZSBsb2FkIG1vcmUgYnV0dG9uIGZyb20gdGhlIHRyaWNrcyBsaXN0XG5cdFx0XHRcdHRyaWNrcy5yZW1vdmVDaGlsZChsb2FkTW9yZUJ1dHRvbik7XG5cdFx0XHRcdC8vIFdlIGluc2VydCB0aGUgbmV3IHRyaWNrcyBiZWZvcmUgdGhlIGxvYWQgbW9yZSBidXR0b24gaW4gdGhlIHRyaWNrcyBsaXN0XG5cdFx0XHRcdHRyaWNrcy5pbnNlcnRBZGphY2VudEhUTUwoJ2JlZm9yZWVuZCcsIGh0bWwpO1xuXHRcdFx0XHQvLyBXZSBjaGVjayBpZiB0aGVyZSBhbiBpZCAndHJpY2tzX2NvdW50XycgKyBsYXN0VHJpY2tJbmRleCBpbiB0aGUgdHJpY2tzIGxpc3Rcblx0XHRcdFx0Ly8gSWYgdGhlcmUgaXMgbm8gaWQgJ3RyaWNrc19jb3VudF8nICsgbGFzdFRyaWNrSW5kZXgsIGl0IG1lYW5zIHRoYXQgdGhlcmUgaXMgbW9yZSB0cmlja3MgdG8gZGlzcGxheVxuXHRcdFx0XHQvLyBTbyB3ZSBhZGQgdGhlIGxvYWQgbW9yZSBidXR0b25cblx0XHRcdFx0aWYgKCFkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndHJpY2tzX2NvdW50XycgKyBwYXJzZUludChnZXRMYXN0VHJpY2tOdW1iZXIoKSArIDEpKSkge1xuXHRcdFx0XHRcdC8vIFdlIGluc2VydCB0aGUgbG9hZCBtb3JlIGJ1dHRvbiBhdCB0aGUgZW5kIG9mIHRoZSB0cmlja3MgbGlzdFxuXHRcdFx0XHRcdHRyaWNrcy5pbnNlcnRBZGphY2VudEhUTUwoJ2JlZm9yZWVuZCcsIGxvYWRNb3JlQnV0dG9uLm91dGVySFRNTCk7XG5cdFx0XHRcdH1cblx0XHRcdFx0Y29uc3QgZGlzcGxheU1vcmVCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGlzcGxheS1tb3JlX2J1dHRvbicpO1xuXHRcdFx0XHRkaXNwbGF5TW9yZUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGRpc3BsYXlNb3JlVHJpY2tzKTtcblx0XHRcdH0pXG5cdFx0XHQuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XG5cdFx0XHRcdGNvbnNvbGUubG9nKGVycm9yKTtcblx0XHRcdH0pO1xuXHR9XG59XG4iLCIvLyBXZSBnZXQgdGhlIGh0bWwgaGVhZCB0aXRsZVxuY29uc3QgaGVhZFRpdGxlID0gZG9jdW1lbnQuaGVhZC5xdWVyeVNlbGVjdG9yKCd0aXRsZScpLmlubmVySFRNTDtcblxuaWYgKGhlYWRUaXRsZS5pbmNsdWRlcygnRWRpdCcpIHx8IGhlYWRUaXRsZS5pbmNsdWRlcygnTmV3JykpIHtcblx0Ly8gV2UgZGVmaW5lIGEgdmFyaWFibGUgYmFzZWQgb24gdGhlIHBhZ2UgdGl0bGUuXG5cdGxldCBwYWdlID0gaGVhZFRpdGxlLmluY2x1ZGVzKCdFZGl0JykgPyAnZWRpdCcgOiAnYWRkJztcblx0Ly8gV2UgZ3JhYiB0aGUgYnV0dG9uIHRvIGFkZCBpbnB1dCBmaWVsZHNcblx0bGV0IGFkZExpbmtCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYWRkLXZpZGVvLWxpbmstYnV0dG9uJyk7XG5cdC8vIFdlIGRlZmluZSB0d28gY291bnRlcnMgZm9yIHRoZSBpbnB1dCBmaWVsZHMgYW5kIHRoZSByZW1vdmUgYnV0dG9uIGFzc29jaWF0ZSB3aXRoIGl0XG5cdGxldCBhZGRMaW5rQ291bnRlciA9IDA7XG5cdGxldCByZW1vdmVMaW5rQ291bnRlciA9IDA7XG5cdC8vIFdlIHdyaXRlIGZ1bmN0aW9ucyB0byBpbmNyZW1lbnQgdGhvc2UgY291bnRlclxuXHRmdW5jdGlvbiBpbmNyZW1lbnRBZGRMaW5rQ291bnRlcigpIHtcblx0XHRhZGRMaW5rQ291bnRlcisrO1xuXHRcdHJldHVybiBhZGRMaW5rQ291bnRlcjtcblx0fVxuXHRmdW5jdGlvbiBpbmNyZW1lbnRSZW1vdmVMaW5rQ291bnRlcigpIHtcblx0XHRyZW1vdmVMaW5rQ291bnRlcisrO1xuXHRcdHJldHVybiByZW1vdmVMaW5rQ291bnRlcjtcblx0fVxuXHQvLyBXZSBoYWQgRXZlbnRMaXN0ZW5lciB0aGUgYnV0dG9uIHRvIGFkZCBpbnB1dCBmaWVsZHNcblx0YWRkTGlua0J1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XG5cdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xuXHRcdC8vIFdlIGluY3JlbWVudCB0aGUgbGluayBjb3VudGVyIG9mIDFcblx0XHRsZXQgbGlua0NvdW50ZXIgPSBpbmNyZW1lbnRBZGRMaW5rQ291bnRlcigpO1xuXHRcdC8vIFdlIGNyZWF0ZSB0aGUgbmV3IGRpdiBmb3IgdGhlIGlucHV0IGZpZWxkIGVsZW1lbnQgYW5kIGl0cyBidXR0b25cblx0XHRsZXQgbmV3TGluayA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2RpdicpO1xuXHRcdG5ld0xpbmsuY2xhc3NOYW1lID0gJ3ZpZGVvX19saW5rX19hZGRlZF9fY29udGFpbmVyJztcblx0XHQvLyBXZSBjcmVhdGUgdGhlIGlucHV0IGZpZWxkXG5cdFx0bGV0IG5ld0lucHV0ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnaW5wdXQnKTtcblx0XHRuZXdJbnB1dC50eXBlID0gJ3RleHQnO1xuXHRcdG5ld0lucHV0LmlkID0gcGFnZSArICctdHJpY2stZW1iZWQtdmlkZW8tbGlua3MtJyArIGxpbmtDb3VudGVyO1xuXHRcdG5ld0lucHV0Lm5hbWUgPSBwYWdlICsgJ190cmlja1tlbWJlZF92aWRlb19saW5rc11bJyArIGxpbmtDb3VudGVyICsgJ10nO1xuXHRcdG5ld0lucHV0LnZhbHVlID0gJyc7XG5cdFx0bmV3SW5wdXQucGxhY2Vob2xkZXIgPSAnaHR0cHM6Ly93d3cueW91dHViZS5jb20vd2F0Y2g/dj14eHh4eHh4eHh4eCc7XG5cdFx0bmV3SW5wdXQuY2xhc3NOYW1lID0gJ3ZpZGVvX19saW5rX19hZGRlZCc7XG5cdFx0Ly8gV2UgY3JlYXRlIHRoZSByZW1vdmUgYnV0dG9uXG5cdFx0bGV0IHJlbW92ZUxpbmtCdXR0b24gPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdidXR0b24nKTtcblx0XHRyZW1vdmVMaW5rQnV0dG9uLnR5cGUgPSAnYnV0dG9uJztcblx0XHRyZW1vdmVMaW5rQnV0dG9uLmlkID0gJ3JlbW92ZS12aWRlby1saW5rLWJ1dHRvbi0nICsgaW5jcmVtZW50UmVtb3ZlTGlua0NvdW50ZXIoKTtcblx0XHRyZW1vdmVMaW5rQnV0dG9uLmNsYXNzTmFtZSA9ICdyZW1vdmVfX3ZpZGVvX19saW5rX19idXR0b24nO1xuXHRcdHJlbW92ZUxpbmtCdXR0b24uaW5uZXJIVE1MID0gJ1gnO1xuXHRcdC8vIFdlIGhhZCBldmVyeXRoaW5nIHRvIHRoZSBET01cblx0XHRuZXdMaW5rLmFwcGVuZENoaWxkKG5ld0lucHV0KTtcblx0XHRuZXdMaW5rLmFwcGVuZENoaWxkKHJlbW92ZUxpbmtCdXR0b24pO1xuXHRcdGxldCBsaW5rQ29udGFpbmVyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2FkZC12aWRlby1saW5rcycpO1xuXHRcdGxpbmtDb250YWluZXIuYXBwZW5kQ2hpbGQobmV3TGluayk7XG5cdFx0Ly8gV2UgYWRkIGV2ZW50IGxpc3RlbmVycyB0byB0aGUgYnV0dG9ucyBhbmQgYWRkIGxvZ2ljIHRvIHJlbW92ZSB0aGUgc2VsZWN0ZWQgbGlua1xuXHRcdGxldCByZW1vdmVMaW5rQnV0dG9ucyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ3JlbW92ZV9fdmlkZW9fX2xpbmtfX2J1dHRvbicpO1xuXHRcdGZvciAobGV0IGkgPSAwOyBpIDwgcmVtb3ZlTGlua0J1dHRvbnMubGVuZ3RoOyBpKyspIHtcblx0XHRcdHJlbW92ZUxpbmtCdXR0b25zW2ldLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcblx0XHRcdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xuXHRcdFx0XHRsZXQgbGlua1RvUmVtb3ZlID0gdGhpcy5wYXJlbnROb2RlO1xuXHRcdFx0XHRsaW5rVG9SZW1vdmUucmVtb3ZlKCk7XG5cdFx0XHR9KTtcblx0XHR9XG5cdH0pO1xufVxuIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbImNhcm91c2VsVGVzdCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImxlbmd0aCIsImRpc3BsYXkiLCJxdWVyeVNlbGVjdG9yIiwiaW1ncyIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJsZWZ0QnRuIiwicmlnaHRCdG4iLCJpbWdTbGlkZXIiLCJuZXdfaW1nIiwidGFnTmFtZSIsImNyZWF0ZUVsZW1lbnQiLCJzcmMiLCJtZWRpYVN0eWxpbmdGdW5jdGlvbiIsIm1lZGlhIiwiaWQiLCJ3aWR0aCIsImhlaWdodCIsImFsbG93IiwiYXV0b3BsYXkiLCJhcHBlbmRDaGlsZCIsImxlZnQiLCJhZGRFdmVudExpc3RlbmVyIiwibmV4dCIsInN0eWxlIiwidHJhbnNmb3JtIiwiY29uY2F0IiwiYmVmb3JlIiwiZm9yRWFjaCIsImltZyIsImUiLCJuZXdfbWVkaWEiLCJ1bmRlZmluZWQiLCJnZXRBdHRyaWJ1dGUiLCJvbGRDaGlsZCIsImdldEVsZW1lbnRCeUlkIiwicmVtb3ZlIiwiZHJvcGRvd25zIiwiZHJvcGRvd25Jc09wZW4iLCJkcm9wZG93biIsImV2ZW50IiwidGFyZ2V0IiwiZGF0YXNldCIsImNsYXNzTGlzdCIsImNvbnRhaW5zIiwiYWRkIiwid2luZG93IiwiZHJvcGRvd25CdXR0b24iLCJ0YXJnZXRJc0Ryb3Bkb3duIiwiaGFuZGxlU21hbGxTY3JlZW5zIiwibmF2YmFyTWVudSIsImhlYWRUaXRsZSIsImhlYWQiLCJpbm5lckhUTUwiLCJpbmNsdWRlcyIsIm1vZGFsTWFuYWdlbWVudCIsIm1vZGFsIiwibW9kYWxDbG9zZUJ1dHRvbiIsImNsb3NlTW9kYWwiLCJtb2RhbENhbmNlbEJ1dHRvbiIsImRlbGV0ZVRyaWNrIiwidHJpY2tUb0RlbGV0ZSIsInVybCIsImZldGNoIiwidGhlbiIsInJlc3BvbnNlIiwib2siLCJkYXRhIiwibG9jYXRpb24iLCJyZWxvYWQiLCJyZXBsYWNlIiwiZGVsZXRlVHJpY2tCdXR0b24iLCJfbG9vcCIsImkiLCJnZXRUcmlja0lkIiwidHJpY2tJZCIsInNldEF0dHJpYnV0ZSIsImRpc3BsYXlNb3JlVHJpY2tzIiwiZ2V0TW9yZVRyaWNrcyIsImdldExhc3RUcmlja051bWJlciIsInRyaWNrc0FycmF5IiwibGFzdFRyaWNrTnVtYmVyIiwicGFyc2VJbnQiLCJnZXRUcmlja3NDb3VudCIsInRyaWNrc0NvdW50IiwiZmlyc3RFbGVtZW50Q2hpbGQiLCJkaXNwbGF5ZWRUcmlja3NDb3VudCIsInRyaWNrc01hcmtlciIsImxhc3RUcmlja0luZGV4IiwiY29uc29sZSIsImxvZyIsInRleHQiLCJodG1sIiwidHJpY2tzIiwibG9hZE1vcmVCdXR0b24iLCJyZW1vdmVDaGlsZCIsImluc2VydEFkamFjZW50SFRNTCIsIm91dGVySFRNTCIsImRpc3BsYXlNb3JlQnV0dG9uIiwiZXJyb3IiLCJpbmNyZW1lbnRBZGRMaW5rQ291bnRlciIsImFkZExpbmtDb3VudGVyIiwiaW5jcmVtZW50UmVtb3ZlTGlua0NvdW50ZXIiLCJyZW1vdmVMaW5rQ291bnRlciIsInBhZ2UiLCJhZGRMaW5rQnV0dG9uIiwicHJldmVudERlZmF1bHQiLCJsaW5rQ291bnRlciIsIm5ld0xpbmsiLCJjbGFzc05hbWUiLCJuZXdJbnB1dCIsInR5cGUiLCJuYW1lIiwidmFsdWUiLCJwbGFjZWhvbGRlciIsInJlbW92ZUxpbmtCdXR0b24iLCJsaW5rQ29udGFpbmVyIiwicmVtb3ZlTGlua0J1dHRvbnMiLCJsaW5rVG9SZW1vdmUiLCJwYXJlbnROb2RlIl0sInNvdXJjZVJvb3QiOiIifQ==