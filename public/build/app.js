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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QUNKLElBQUksR0FBRyxRQUFRO0lBQ2hDSSxnQkFBZ0IsQ0FBQ3BHLEVBQUUsR0FBRywyQkFBMkIsR0FBR3VGLDBCQUEwQixFQUFFO0lBQ2hGYSxnQkFBZ0IsQ0FBQ04sU0FBUyxHQUFHLDZCQUE2QjtJQUMxRE0sZ0JBQWdCLENBQUM5RCxTQUFTLEdBQUcsR0FBRztJQUNoQztJQUNBdUQsT0FBTyxDQUFDeEYsV0FBVyxDQUFDMEYsUUFBUSxDQUFDO0lBQzdCRixPQUFPLENBQUN4RixXQUFXLENBQUMrRixnQkFBZ0IsQ0FBQztJQUNyQyxJQUFJQyxhQUFhLEdBQUdySCxRQUFRLENBQUNvQyxjQUFjLENBQUMsaUJBQWlCLENBQUM7SUFDOURpRixhQUFhLENBQUNoRyxXQUFXLENBQUN3RixPQUFPLENBQUM7SUFDbEM7SUFDQSxJQUFJUyxpQkFBaUIsR0FBR3RILFFBQVEsQ0FBQ0Msc0JBQXNCLENBQUMsNkJBQTZCLENBQUM7SUFDdEYsS0FBSyxJQUFJeUUsQ0FBQyxHQUFHLENBQUMsRUFBRUEsQ0FBQyxHQUFHNEMsaUJBQWlCLENBQUNwSCxNQUFNLEVBQUV3RSxDQUFDLEVBQUUsRUFBRTtNQUNsRDRDLGlCQUFpQixDQUFDNUMsQ0FBQyxDQUFDLENBQUNuRCxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsVUFBVVEsQ0FBQyxFQUFFO1FBQzNEQSxDQUFDLENBQUM0RSxjQUFjLEVBQUU7UUFDbEIsSUFBSVksWUFBWSxHQUFHLElBQUksQ0FBQ0MsVUFBVTtRQUNsQ0QsWUFBWSxDQUFDbEYsTUFBTSxFQUFFO01BQ3RCLENBQUMsQ0FBQztJQUNIO0VBQ0QsQ0FBQyxDQUFDO0FBQ0g7Ozs7Ozs7Ozs7OztBQ3pEQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9hcHAuanMiLCJ3ZWJwYWNrOi8vLy4vdGVtcGxhdGVzL2NvbXBvbmVudHMvY2Fyb3VzZWwvY2Fyb3VzZWwuanMiLCJ3ZWJwYWNrOi8vLy4vdGVtcGxhdGVzL2NvbXBvbmVudHMvaGVhZGVyL2hlYWRlci5qcyIsIndlYnBhY2s6Ly8vLi90ZW1wbGF0ZXMvY29tcG9uZW50cy9tb2RhbHMvZGVsZXRlX3RyaWNrLmpzIiwid2VicGFjazovLy8uL3RlbXBsYXRlcy9ob21lL2Rpc3BsYXlfdHJpY2tzL2Rpc3BsYXlfdHJpY2tzLmpzIiwid2VicGFjazovLy8uL3RlbXBsYXRlcy90cmljay9lZGl0L2VkaXRfdHJpY2suanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuc2NzcyJdLCJzb3VyY2VzQ29udGVudCI6WyIvKlxyXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXHJcbiAqXHJcbiAqIFdlIHJlY29tbWVuZCBpbmNsdWRpbmcgdGhlIGJ1aWx0IHZlcnNpb24gb2YgdGhpcyBKYXZhU2NyaXB0IGZpbGVcclxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cclxuICovXHJcblxyXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXHJcbi8vIGltcG9ydCAnLi9zdHlsZXMvYXBwLmNzcyc7XHJcblxyXG4vLyBhbnkgU0NTUyB5b3UgaW1wb3J0IHdpbGwgb3V0cHV0IGludG8gYSBzaW5nbGUgY3NzIGZpbGUgKGFwcC5jc3MgaW4gdGhpcyBjYXNlKVxyXG5pbXBvcnQgJy4vc3R5bGVzL2FwcC5zY3NzJztcclxuXHJcbi8vIHN0YXJ0IHRoZSBTdGltdWx1cyBhcHBsaWNhdGlvblxyXG4vLyBpbXBvcnQgJy4vYm9vdHN0cmFwJztcclxuXHJcbmltcG9ydCAnLi4vdGVtcGxhdGVzL2NvbXBvbmVudHMvaGVhZGVyL2hlYWRlci5qcyc7XHJcbmltcG9ydCAnLi4vdGVtcGxhdGVzL2NvbXBvbmVudHMvbW9kYWxzL2RlbGV0ZV90cmljay5qcyc7XHJcbmltcG9ydCAnLi4vdGVtcGxhdGVzL2hvbWUvZGlzcGxheV90cmlja3MvZGlzcGxheV90cmlja3MuanMnO1xyXG5pbXBvcnQgJy4uL3RlbXBsYXRlcy9jb21wb25lbnRzL2Nhcm91c2VsL2Nhcm91c2VsLmpzJztcclxuaW1wb3J0ICcuLi90ZW1wbGF0ZXMvdHJpY2svZWRpdC9lZGl0X3RyaWNrLmpzJztcclxuIiwiLy8gSWYgd2UgaGF2ZSBhIGNhcm91c2VsIG9uIHRoZSBwYWdlXHJcbmxldCBjYXJvdXNlbFRlc3QgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdjYXJvdXNlbF9fY29udGFpbmVyJyk7XHJcblxyXG5pZiAoY2Fyb3VzZWxUZXN0Lmxlbmd0aCA+IDApIHtcclxuXHQvLyBXZSBzZWxlY3QgdGhlIGVsZW1lbnRzIHdlIG5lZWRcclxuXHRsZXQgZGlzcGxheSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWRpc3BsYXldJyk7XHJcblx0bGV0IGltZ3MgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS1pbWddJyk7XHJcblx0bGV0IGxlZnRCdG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdbZGF0YS1idG4tbGVmdF0nKTtcclxuXHRsZXQgcmlnaHRCdG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdbZGF0YS1idG4tcmlnaHRdJyk7XHJcblx0bGV0IGltZ1NsaWRlciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWltZy1jb250YWluZXIgXScpO1xyXG5cclxuXHQvLyBXZSBjcmVhdGUgdGhlIGNvbnRhaW5lciBiYXNlZCBvbiB0aGUgdGFnTmFtZVxyXG5cdGxldCBuZXdfaW1nID0gaW1nc1swXS50YWdOYW1lID09PSAnVklERU8nID8gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnaWZyYW1lJykgOiBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdpbWcnKTtcclxuXHRuZXdfaW1nLnNyYyA9IGltZ3NbMF0uc3JjO1xyXG5cclxuXHQvLyBXZSBzdHlsZSB0aGUgY29udGFpbmVyXHJcblx0bWVkaWFTdHlsaW5nRnVuY3Rpb24gPSAobWVkaWEpID0+IHtcclxuXHRcdGlmIChtZWRpYS50YWdOYW1lID09PSAnSUZSQU1FJykge1xyXG5cdFx0XHRtZWRpYS5pZCA9ICdkaXNwbGF5ZWRfbWVkaWEnO1xyXG5cdFx0XHRtZWRpYS53aWR0aCA9IDc1MDtcclxuXHRcdFx0bWVkaWEuaGVpZ2h0ID0gNTAwO1xyXG5cdFx0XHRtZWRpYS5hbGxvdyA9ICdhY2NlbGVyb21ldGVyOyBjbGlwYm9hcmQtd3JpdGU7IGVuY3J5cHRlZC1tZWRpYTsgZ3lyb3Njb3BlOyBwaWN0dXJlLWluLXBpY3R1cmU7IGZ1bGxzY3JlZW4nO1xyXG5cdFx0XHRtZWRpYS5hdXRvcGxheSA9IDE7XHJcblx0XHR9IGVsc2Uge1xyXG5cdFx0XHRtZWRpYS5pZCA9ICdkaXNwbGF5ZWRfbWVkaWEnO1xyXG5cdFx0fVxyXG5cdH07XHJcblxyXG5cdG1lZGlhU3R5bGluZ0Z1bmN0aW9uKG5ld19pbWcpO1xyXG5cclxuXHRkaXNwbGF5LmFwcGVuZENoaWxkKG5ld19pbWcpO1xyXG5cclxuXHRsZXQgbGVmdCA9IDA7XHJcblxyXG5cdC8vIFdlIGFkZCBldmVudCBsaXN0ZW5lcnMgdG8gdGhlIGJ1dHRvbnNcclxuXHRyaWdodEJ0bi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIG5leHQoKSB7XHJcblx0XHRpZiAobGVmdCA8PSBpbWdzLmxlbmd0aCAtIDIpIHtcclxuXHRcdFx0bGVmdCsrO1xyXG5cdFx0XHRpbWdTbGlkZXIuc3R5bGUudHJhbnNmb3JtID0gYHRyYW5zbGF0ZXgoY2FsYygoICR7bGVmdH0gKiAoLTgwcHggLSAxLjZyZW0pKSlgO1xyXG5cdFx0fSBlbHNlIHtcclxuXHRcdFx0bGVmdCA9IDA7XHJcblx0XHRcdGltZ1NsaWRlci5zdHlsZS50cmFuc2Zvcm0gPSBgdHJhbnNsYXRleCgwKWA7XHJcblx0XHR9XHJcblx0fSk7XHJcblxyXG5cdGxlZnRCdG4uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiBiZWZvcmUoKSB7XHJcblx0XHRpZiAobGVmdCA+IDApIHtcclxuXHRcdFx0bGVmdC0tO1xyXG5cdFx0XHRpbWdTbGlkZXIuc3R5bGUudHJhbnNmb3JtID0gYHRyYW5zbGF0ZXgoY2FsYygoIC0ke2xlZnR9ICogKDgwcHggKyAxLjZyZW0pKSlgO1xyXG5cdFx0fVxyXG5cdFx0aWYgKGxlZnQgPT0gMCkge1xyXG5cdFx0XHRpbWdTbGlkZXIuc3R5bGUudHJhbnNmb3JtID0gYHRyYW5zbGF0ZXgoMClgO1xyXG5cdFx0fVxyXG5cdH0pO1xyXG5cclxuXHQvLyBXZSBhZGQgZXZlbnQgbGlzdGVuZXJzIHRvIHRoZSBpbWFnZXMgYW5kIGFkZCBsb2dpYyB0byBkaXNwbGF5IHRoZSBzZWxlY3RlZCBpbWFnZVxyXG5cdGltZ3MuZm9yRWFjaCgoaW1nKSA9PiB7XHJcblx0XHRpbWcuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xyXG5cdFx0XHRsZXQgbmV3X21lZGlhID0gdGhpcy50YWdOYW1lID09PSAnVklERU8nID8gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnaWZyYW1lJykgOiBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdpbWcnKTtcclxuXHRcdFx0bWVkaWFTdHlsaW5nRnVuY3Rpb24obmV3X21lZGlhKTtcclxuXHRcdFx0aWYgKG5ld19tZWRpYS5zcmMgPT0gdW5kZWZpbmVkKSB7XHJcblx0XHRcdFx0bmV3X21lZGlhLnNyYyA9IGltZ3NbMF0uc3JjO1xyXG5cdFx0XHR9XHJcblx0XHRcdG5ld19tZWRpYS5pZCA9ICdkaXNwbGF5ZWRfbWVkaWEnO1xyXG5cdFx0XHRuZXdfbWVkaWEuc3JjID0gdGhpcy5nZXRBdHRyaWJ1dGUoJ3NyYycpO1xyXG5cdFx0XHRsZXQgb2xkQ2hpbGQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGlzcGxheWVkX21lZGlhJyk7XHJcblx0XHRcdG9sZENoaWxkLnJlbW92ZSgpO1xyXG5cdFx0XHRkaXNwbGF5LmFwcGVuZENoaWxkKG5ld19tZWRpYSk7XHJcblx0XHR9KTtcclxuXHR9KTtcclxufVxyXG4iLCIvLyBXZSBzZWxlY3QgdGhlIGVsZW1lbnRzIHdlIG5lZWQuXHJcbmxldCBkcm9wZG93bnMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcubmF2YmFyIC5kcm9wZG93bi10b2dnbGVyJyk7XHJcbmxldCBkcm9wZG93bklzT3BlbiA9IGZhbHNlO1xyXG5cclxuLy8gV2UgaGFuZGxlIGRyb3Bkb3duIG1lbnVzXHJcbmlmIChkcm9wZG93bnMubGVuZ3RoKSB7XHJcblx0ZHJvcGRvd25zLmZvckVhY2goKGRyb3Bkb3duKSA9PiB7XHJcblx0XHRkcm9wZG93bi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudCkgPT4ge1xyXG5cdFx0XHRsZXQgdGFyZ2V0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihgIyR7ZXZlbnQudGFyZ2V0LmRhdGFzZXQuZHJvcGRvd259YCk7XHJcblxyXG5cdFx0XHRpZiAodGFyZ2V0KSB7XHJcblx0XHRcdFx0aWYgKHRhcmdldC5jbGFzc0xpc3QuY29udGFpbnMoJ3Nob3cnKSkge1xyXG5cdFx0XHRcdFx0dGFyZ2V0LmNsYXNzTGlzdC5yZW1vdmUoJ3Nob3cnKTtcclxuXHRcdFx0XHRcdGRyb3Bkb3duSXNPcGVuID0gZmFsc2U7XHJcblx0XHRcdFx0fSBlbHNlIHtcclxuXHRcdFx0XHRcdHRhcmdldC5jbGFzc0xpc3QuYWRkKCdzaG93Jyk7XHJcblx0XHRcdFx0XHRkcm9wZG93bklzT3BlbiA9IHRydWU7XHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9XHJcblx0XHR9KTtcclxuXHR9KTtcclxufVxyXG5cclxuLy8gV2UgYWRkIGFuIGV2ZW50IGxpc3RlbmVyIHRvIHRoZSB3aW5kb3cgdG8gY2xvc2UgdGhlIGRyb3Bkb3ducyB3aGVuIHRoZSB1c2VyIGNsaWNrcyBvdXRzaWRlIG9mIHRoZW0uXHJcbndpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdtb3VzZXVwJywgKGV2ZW50KSA9PiB7XHJcblx0aWYgKGRyb3Bkb3duSXNPcGVuKSB7XHJcblx0XHRkcm9wZG93bnMuZm9yRWFjaCgoZHJvcGRvd25CdXR0b24pID0+IHtcclxuXHRcdFx0bGV0IGRyb3Bkb3duID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihgIyR7ZHJvcGRvd25CdXR0b24uZGF0YXNldC5kcm9wZG93bn1gKTtcclxuXHRcdFx0bGV0IHRhcmdldElzRHJvcGRvd24gPSBkcm9wZG93biA9PSBldmVudC50YXJnZXQ7XHJcblxyXG5cdFx0XHRpZiAoZHJvcGRvd25CdXR0b24gPT0gZXZlbnQudGFyZ2V0KSB7XHJcblx0XHRcdFx0cmV0dXJuO1xyXG5cdFx0XHR9XHJcblxyXG5cdFx0XHRpZiAoIXRhcmdldElzRHJvcGRvd24gJiYgIWRyb3Bkb3duLmNvbnRhaW5zKGV2ZW50LnRhcmdldCkpIHtcclxuXHRcdFx0XHRkcm9wZG93bi5jbGFzc0xpc3QucmVtb3ZlKCdzaG93Jyk7XHJcblx0XHRcdH1cclxuXHRcdH0pO1xyXG5cdH1cclxufSk7XHJcblxyXG4vLyBXZSBoYW5kbGUgc21hbGwgc2NyZWVuc1xyXG5mdW5jdGlvbiBoYW5kbGVTbWFsbFNjcmVlbnMoKSB7XHJcblx0ZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLm5hdmJhci10b2dnbGVyJykuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB7XHJcblx0XHRsZXQgbmF2YmFyTWVudSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5uYXZiYXItbWVudScpO1xyXG5cclxuXHRcdGlmICghbmF2YmFyTWVudS5jbGFzc0xpc3QuY29udGFpbnMoJ2FjdGl2ZScpKSB7XHJcblx0XHRcdG5hdmJhck1lbnUuY2xhc3NMaXN0LmFkZCgnYWN0aXZlJyk7XHJcblx0XHR9IGVsc2Uge1xyXG5cdFx0XHRuYXZiYXJNZW51LmNsYXNzTGlzdC5yZW1vdmUoJ2FjdGl2ZScpO1xyXG5cdFx0fVxyXG5cdH0pO1xyXG59XHJcblxyXG5oYW5kbGVTbWFsbFNjcmVlbnMoKTtcclxuIiwiLy8gV2UgZ2V0IHRoZSBodG1sIGhlYWQgdGl0bGVcclxuY29uc3QgaGVhZFRpdGxlID0gZG9jdW1lbnQuaGVhZC5xdWVyeVNlbGVjdG9yKCd0aXRsZScpLmlubmVySFRNTDtcclxuXHJcbmlmIChoZWFkVGl0bGUuaW5jbHVkZXMoJ0hvbWUnKSB8fCBoZWFkVGl0bGUuaW5jbHVkZXMoJ0NhdGVnb3J5JykpIHtcclxuXHQvLyBXZSBncmFiIHRoZSBkZWxldGVfdHJpY2tfYnV0dG9ucy5cclxuXHRjb25zdCBkZWxldGVUcmlja0J1dHRvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ2RlbGV0ZV90cmlja19idXR0b24nKTtcclxuXHJcblx0Ly8gV2UgbG9vcCB0aHJvdWdoIHRoZSBkZWxldGVfdHJpY2tfYnV0dG9ucyBhbmQgYWRkIGFuIGV2ZW50IGxpc3RlbmVyIG9uIGVhY2ggb25lLi5cclxuXHRmb3IgKGxldCBpID0gMDsgaSA8IGRlbGV0ZVRyaWNrQnV0dG9uLmxlbmd0aDsgaSsrKSB7XHJcblx0XHRkZWxldGVUcmlja0J1dHRvbltpXS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGdldFRyaWNrSWQpO1xyXG5cdFx0ZnVuY3Rpb24gZ2V0VHJpY2tJZCgpIHtcclxuXHRcdFx0Ly8gT24gY2xpY2ssIHdlIGRpc3BsYXkgdGhlIG1vZGFsLlxyXG5cdFx0XHRtb2RhbE1hbmFnZW1lbnQoKTtcclxuXHRcdFx0Ly8gVGhlbiB3ZSBnZXQgdGhlIHRyaWNrLmlkIGFuZCBwYXNzIGl0IHRvIHRoZSBkZWxldGVfYnV0dG9uXHJcblx0XHRcdGNvbnN0IHRyaWNrSWQgPSBkZWxldGVUcmlja0J1dHRvbltpXS5nZXRBdHRyaWJ1dGUoJ2lkJyk7XHJcblx0XHRcdGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdkZWxldGVfYnV0dG9uJykuc2V0QXR0cmlidXRlKCdkYXRhLXRyaWNrLWlkJywgdHJpY2tJZCk7XHJcblx0XHR9XHJcblx0fVxyXG5cclxuXHRmdW5jdGlvbiBtb2RhbE1hbmFnZW1lbnQoKSB7XHJcblx0XHQvLyB3ZSBncmFiIHRoZSBtb2RhbCBhbmQgZGlzcGxheSBpdCBhcyBhIGJsb2NrLlxyXG5cdFx0bGV0IG1vZGFsID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RlbGV0ZV90cmlja19tb2RhbCcpO1xyXG5cdFx0bW9kYWwuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7XHJcblxyXG5cdFx0Ly8gV2UgZ3JhYiB0aGUgY2xvc2UgYnV0dG9uIGFuZCBjYW5jZWwgYnV0dG9uIGFuZCBhZGQgZXZlbnQgbGlzdGVuZXIgdG8gYWxsb3cgdG8gY2xvc2UgdGhlIG1vZGFsLlxyXG5cdFx0bGV0IG1vZGFsQ2xvc2VCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY2xvc2VfbW9kYWxfYnV0dG9uJyk7XHJcblx0XHRtb2RhbENsb3NlQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgY2xvc2VNb2RhbCk7XHJcblx0XHRsZXQgbW9kYWxDYW5jZWxCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY2FuY2VsX2RlbGV0ZV9idXR0b24nKTtcclxuXHRcdG1vZGFsQ2FuY2VsQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgY2xvc2VNb2RhbCk7XHJcblxyXG5cdFx0ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RlbGV0ZV9idXR0b24nKS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGRlbGV0ZVRyaWNrKTtcclxuXHJcblx0XHQvLyBXZSBncmFiIHRoZSB3aW5kb3cgYW5kIGFkZCBhbiBldmVudCBsaXN0ZW5lciB0byBjbG9zZSB0aGUgbW9kYWwgaWYgdGhlIHVzZXIgY2xpY2tzIG91dHNpZGUgb2YgaXQuXHJcblx0XHR3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZXZlbnQpIHtcclxuXHRcdFx0aWYgKGV2ZW50LnRhcmdldCA9PSBtb2RhbCkge1xyXG5cdFx0XHRcdG1vZGFsLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7XHJcblx0XHRcdH1cclxuXHRcdH0pO1xyXG5cclxuXHRcdGZ1bmN0aW9uIGNsb3NlTW9kYWwoKSB7XHJcblx0XHRcdG1vZGFsLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7XHJcblx0XHR9XHJcblxyXG5cdFx0ZnVuY3Rpb24gZGVsZXRlVHJpY2soKSB7XHJcblx0XHRcdC8vIFdlIGdyYWIgdGhlIHRyaWNrLmlkIGZyb20gdGhlIGRlbGV0ZV9idXR0b24gYW5kIHBhc3MgaXQgdG8gdGhlIHVybC5cclxuXHRcdFx0bGV0IHRyaWNrVG9EZWxldGUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGVsZXRlX2J1dHRvbicpLmdldEF0dHJpYnV0ZSgnZGF0YS10cmljay1pZCcpO1xyXG5cdFx0XHRsZXQgdXJsID0gJ2h0dHBzOi8vbG9jYWxob3N0OjgwMDAvdHJpY2svJyArIHRyaWNrVG9EZWxldGUgKyAnL2RlbGV0ZSc7XHJcblx0XHRcdC8vIFdlIGZldGNoIHRoZSB1cmwgYW5kIHVzZSB0aGUgU3ltZm9ueSBjb250cm9sbGVyIHRvIGRlbGV0ZSB0aGUgdHJpY2suXHJcblx0XHRcdC8vIFdlIHdhaXQgZm9yIHRoZSByZXNwb25zZSBhbmQgaWYgaXQncyBvaywgd2UgY2xvc2UgdGhlIG1vZGFsLlxyXG5cdFx0XHRmZXRjaCh1cmwpXHJcblx0XHRcdFx0LnRoZW4oKHJlc3BvbnNlKSA9PiB7XHJcblx0XHRcdFx0XHRpZiAocmVzcG9uc2Uub2spIHtcclxuXHRcdFx0XHRcdFx0bW9kYWwuc3R5bGUuZGlzcGxheSA9ICdub25lJztcclxuXHRcdFx0XHRcdH1cclxuXHRcdFx0XHR9KVxyXG5cdFx0XHRcdC50aGVuKChkYXRhKSA9PiB7XHJcblx0XHRcdFx0XHRpZiAoaGVhZFRpdGxlLmluY2x1ZGVzKCdIb21lJykpIHtcclxuXHRcdFx0XHRcdFx0Ly8gV2UgcmVsb2FkIHRoZSBwYWdlLlxyXG5cdFx0XHRcdFx0XHR3aW5kb3cubG9jYXRpb24ucmVsb2FkKCk7XHJcblx0XHRcdFx0XHR9IGVsc2Uge1xyXG5cdFx0XHRcdFx0XHQvLyBXZSByZWRpcmVjdCB0byB0aGUgaG9tZSBwYWdlLlxyXG5cdFx0XHRcdFx0XHR3aW5kb3cubG9jYXRpb24ucmVwbGFjZSgnaHR0cHM6Ly9sb2NhbGhvc3Q6ODAwMC8nKTtcclxuXHRcdFx0XHRcdH1cclxuXHRcdFx0XHR9KTtcclxuXHRcdH1cclxuXHR9XHJcbn1cclxuIiwiLy8gV2UgZ2V0IHRoZSBodG1sIGhlYWQgdGl0bGVcclxuY29uc3QgaGVhZFRpdGxlID0gZG9jdW1lbnQuaGVhZC5xdWVyeVNlbGVjdG9yKCd0aXRsZScpLmlubmVySFRNTDtcclxuXHJcbmlmIChoZWFkVGl0bGUuaW5jbHVkZXMoJ0hvbWUnKSkge1xyXG5cdC8vIFdlIGdyYWIgdGhlIGRpc3BsYXktbW9yZV9idXR0b24gYW5kIGFkZCBhbiBldmVudCBsaXN0ZW5lci5cclxuXHRjb25zdCBkaXNwbGF5TW9yZUJ1dHRvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdkaXNwbGF5LW1vcmVfYnV0dG9uJyk7XHJcblx0ZGlzcGxheU1vcmVCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBkaXNwbGF5TW9yZVRyaWNrcyk7XHJcblxyXG5cdGZ1bmN0aW9uIGRpc3BsYXlNb3JlVHJpY2tzKCkge1xyXG5cdFx0Z2V0TW9yZVRyaWNrcyhnZXRMYXN0VHJpY2tOdW1iZXIoKSk7XHJcblx0fVxyXG5cclxuXHQvLyBXZSBnZXQgdGhlIG51bWJlciBvZiB0cmlja3MgZGlzcGxheWVkIG9uIHNjcmVlblxyXG5cdGZ1bmN0aW9uIGdldExhc3RUcmlja051bWJlcigpIHtcclxuXHRcdGxldCB0cmlja3NBcnJheSA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ3RyaWNrJyk7XHJcblx0XHRsZXQgbGFzdFRyaWNrTnVtYmVyID0gcGFyc2VJbnQodHJpY2tzQXJyYXkubGVuZ3RoKSAtIDE7XHJcblx0XHRyZXR1cm4gbGFzdFRyaWNrTnVtYmVyO1xyXG5cdH1cclxuXHJcblx0Ly8gV2UgZ2V0IHRoZSBzdW0gb2YgdHJpY2sgYXZhaWxhYmxlIGluIHRoZSBkYXRhYmFzZVxyXG5cdGZ1bmN0aW9uIGdldFRyaWNrc0NvdW50KCkge1xyXG5cdFx0bGV0IHRyaWNrc0NvdW50ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3RyaWNrcycpLmZpcnN0RWxlbWVudENoaWxkLmlkLnJlcGxhY2UoJ3RyaWNrc19jb3VudF8nLCAnJyk7XHJcblx0XHRsZXQgZGlzcGxheWVkVHJpY2tzQ291bnQgPSBwYXJzZUludChkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCd0cmljaycpLmxlbmd0aCk7XHJcblx0XHRsZXQgdHJpY2tzTWFya2VyID0gcGFyc2VJbnQodHJpY2tzQ291bnQpIC0gZGlzcGxheWVkVHJpY2tzQ291bnQ7XHJcblx0XHRyZXR1cm4gdHJpY2tzTWFya2VyO1xyXG5cdH1cclxuXHJcblx0Ly8gV2UgcXVlcnkgZm9yIG1vcmUgdHJpY2tzXHJcblx0ZnVuY3Rpb24gZ2V0TW9yZVRyaWNrcyhsYXN0VHJpY2tJbmRleCkge1xyXG5cdFx0bGV0IHVybCA9ICdodHRwczovL2xvY2FsaG9zdDo4MDAwL2xvYWQtbW9yZS10cmlja3MvJyArIGxhc3RUcmlja0luZGV4ICsgJy8nICsgZ2V0VHJpY2tzQ291bnQoKTtcclxuXHRcdGNvbnNvbGUubG9nKHVybCk7XHJcblx0XHRmZXRjaCh1cmwpXHJcblx0XHRcdC50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xyXG5cdFx0XHRcdHJldHVybiByZXNwb25zZS50ZXh0KCk7XHJcblx0XHRcdH0pXHJcblx0XHRcdC50aGVuKGZ1bmN0aW9uIChodG1sKSB7XHJcblx0XHRcdFx0bGV0IHRyaWNrcyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0cmlja3NfbGlzdCcpO1xyXG5cdFx0XHRcdGxldCBsb2FkTW9yZUJ1dHRvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsb2FkX21vcmVfY2FyZCcpO1xyXG5cdFx0XHRcdC8vIFdlIHJlbW92ZSB0aGUgbG9hZCBtb3JlIGJ1dHRvbiBmcm9tIHRoZSB0cmlja3MgbGlzdFxyXG5cdFx0XHRcdHRyaWNrcy5yZW1vdmVDaGlsZChsb2FkTW9yZUJ1dHRvbik7XHJcblx0XHRcdFx0Ly8gV2UgaW5zZXJ0IHRoZSBuZXcgdHJpY2tzIGJlZm9yZSB0aGUgbG9hZCBtb3JlIGJ1dHRvbiBpbiB0aGUgdHJpY2tzIGxpc3RcclxuXHRcdFx0XHR0cmlja3MuaW5zZXJ0QWRqYWNlbnRIVE1MKCdiZWZvcmVlbmQnLCBodG1sKTtcclxuXHRcdFx0XHQvLyBXZSBjaGVjayBpZiB0aGVyZSBhbiBpZCAndHJpY2tzX2NvdW50XycgKyBsYXN0VHJpY2tJbmRleCBpbiB0aGUgdHJpY2tzIGxpc3RcclxuXHRcdFx0XHQvLyBJZiB0aGVyZSBpcyBubyBpZCAndHJpY2tzX2NvdW50XycgKyBsYXN0VHJpY2tJbmRleCwgaXQgbWVhbnMgdGhhdCB0aGVyZSBpcyBtb3JlIHRyaWNrcyB0byBkaXNwbGF5XHJcblx0XHRcdFx0Ly8gU28gd2UgYWRkIHRoZSBsb2FkIG1vcmUgYnV0dG9uXHJcblx0XHRcdFx0aWYgKCFkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndHJpY2tzX2NvdW50XycgKyBwYXJzZUludChnZXRMYXN0VHJpY2tOdW1iZXIoKSArIDEpKSkge1xyXG5cdFx0XHRcdFx0Ly8gV2UgaW5zZXJ0IHRoZSBsb2FkIG1vcmUgYnV0dG9uIGF0IHRoZSBlbmQgb2YgdGhlIHRyaWNrcyBsaXN0XHJcblx0XHRcdFx0XHR0cmlja3MuaW5zZXJ0QWRqYWNlbnRIVE1MKCdiZWZvcmVlbmQnLCBsb2FkTW9yZUJ1dHRvbi5vdXRlckhUTUwpO1xyXG5cdFx0XHRcdH1cclxuXHRcdFx0XHRjb25zdCBkaXNwbGF5TW9yZUJ1dHRvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdkaXNwbGF5LW1vcmVfYnV0dG9uJyk7XHJcblx0XHRcdFx0ZGlzcGxheU1vcmVCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBkaXNwbGF5TW9yZVRyaWNrcyk7XHJcblx0XHRcdH0pXHJcblx0XHRcdC5jYXRjaChmdW5jdGlvbiAoZXJyb3IpIHtcclxuXHRcdFx0XHRjb25zb2xlLmxvZyhlcnJvcik7XHJcblx0XHRcdH0pO1xyXG5cdH1cclxufVxyXG4iLCIvLyBXZSBnZXQgdGhlIGh0bWwgaGVhZCB0aXRsZVxyXG5jb25zdCBoZWFkVGl0bGUgPSBkb2N1bWVudC5oZWFkLnF1ZXJ5U2VsZWN0b3IoJ3RpdGxlJykuaW5uZXJIVE1MO1xyXG5cclxuaWYgKGhlYWRUaXRsZS5pbmNsdWRlcygnRWRpdCcpIHx8IGhlYWRUaXRsZS5pbmNsdWRlcygnTmV3JykpIHtcclxuXHQvLyBXZSBkZWZpbmUgYSB2YXJpYWJsZSBiYXNlZCBvbiB0aGUgcGFnZSB0aXRsZS5cclxuXHRsZXQgcGFnZSA9IGhlYWRUaXRsZS5pbmNsdWRlcygnRWRpdCcpID8gJ2VkaXQnIDogJ2FkZCc7XHJcblx0Ly8gV2UgZ3JhYiB0aGUgYnV0dG9uIHRvIGFkZCBpbnB1dCBmaWVsZHNcclxuXHRsZXQgYWRkTGlua0J1dHRvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdhZGQtdmlkZW8tbGluay1idXR0b24nKTtcclxuXHQvLyBXZSBkZWZpbmUgdHdvIGNvdW50ZXJzIGZvciB0aGUgaW5wdXQgZmllbGRzIGFuZCB0aGUgcmVtb3ZlIGJ1dHRvbiBhc3NvY2lhdGUgd2l0aCBpdFxyXG5cdGxldCBhZGRMaW5rQ291bnRlciA9IDA7XHJcblx0bGV0IHJlbW92ZUxpbmtDb3VudGVyID0gMDtcclxuXHQvLyBXZSB3cml0ZSBmdW5jdGlvbnMgdG8gaW5jcmVtZW50IHRob3NlIGNvdW50ZXJcclxuXHRmdW5jdGlvbiBpbmNyZW1lbnRBZGRMaW5rQ291bnRlcigpIHtcclxuXHRcdGFkZExpbmtDb3VudGVyKys7XHJcblx0XHRyZXR1cm4gYWRkTGlua0NvdW50ZXI7XHJcblx0fVxyXG5cdGZ1bmN0aW9uIGluY3JlbWVudFJlbW92ZUxpbmtDb3VudGVyKCkge1xyXG5cdFx0cmVtb3ZlTGlua0NvdW50ZXIrKztcclxuXHRcdHJldHVybiByZW1vdmVMaW5rQ291bnRlcjtcclxuXHR9XHJcblx0Ly8gV2UgaGFkIEV2ZW50TGlzdGVuZXIgdGhlIGJ1dHRvbiB0byBhZGQgaW5wdXQgZmllbGRzXHJcblx0YWRkTGlua0J1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XHJcblx0XHRlLnByZXZlbnREZWZhdWx0KCk7XHJcblx0XHQvLyBXZSBpbmNyZW1lbnQgdGhlIGxpbmsgY291bnRlciBvZiAxXHJcblx0XHRsZXQgbGlua0NvdW50ZXIgPSBpbmNyZW1lbnRBZGRMaW5rQ291bnRlcigpO1xyXG5cdFx0Ly8gV2UgY3JlYXRlIHRoZSBuZXcgZGl2IGZvciB0aGUgaW5wdXQgZmllbGQgZWxlbWVudCBhbmQgaXRzIGJ1dHRvblxyXG5cdFx0bGV0IG5ld0xpbmsgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcclxuXHRcdG5ld0xpbmsuY2xhc3NOYW1lID0gJ3ZpZGVvX19saW5rX19hZGRlZF9fY29udGFpbmVyJztcclxuXHRcdC8vIFdlIGNyZWF0ZSB0aGUgaW5wdXQgZmllbGRcclxuXHRcdGxldCBuZXdJbnB1dCA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2lucHV0Jyk7XHJcblx0XHRuZXdJbnB1dC50eXBlID0gJ3RleHQnO1xyXG5cdFx0bmV3SW5wdXQuaWQgPSBwYWdlICsgJy10cmljay1lbWJlZC12aWRlby1saW5rcy0nICsgbGlua0NvdW50ZXI7XHJcblx0XHRuZXdJbnB1dC5uYW1lID0gcGFnZSArICdfdHJpY2tbZW1iZWRfdmlkZW9fbGlua3NdWycgKyBsaW5rQ291bnRlciArICddJztcclxuXHRcdG5ld0lucHV0LnZhbHVlID0gJyc7XHJcblx0XHRuZXdJbnB1dC5wbGFjZWhvbGRlciA9ICdodHRwczovL3d3dy55b3V0dWJlLmNvbS93YXRjaD92PXh4eHh4eHh4eHh4JztcclxuXHRcdG5ld0lucHV0LmNsYXNzTmFtZSA9ICd2aWRlb19fbGlua19fYWRkZWQnO1xyXG5cdFx0Ly8gV2UgY3JlYXRlIHRoZSByZW1vdmUgYnV0dG9uXHJcblx0XHRsZXQgcmVtb3ZlTGlua0J1dHRvbiA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2J1dHRvbicpO1xyXG5cdFx0cmVtb3ZlTGlua0J1dHRvbi50eXBlID0gJ2J1dHRvbic7XHJcblx0XHRyZW1vdmVMaW5rQnV0dG9uLmlkID0gJ3JlbW92ZS12aWRlby1saW5rLWJ1dHRvbi0nICsgaW5jcmVtZW50UmVtb3ZlTGlua0NvdW50ZXIoKTtcclxuXHRcdHJlbW92ZUxpbmtCdXR0b24uY2xhc3NOYW1lID0gJ3JlbW92ZV9fdmlkZW9fX2xpbmtfX2J1dHRvbic7XHJcblx0XHRyZW1vdmVMaW5rQnV0dG9uLmlubmVySFRNTCA9ICdYJztcclxuXHRcdC8vIFdlIGhhZCBldmVyeXRoaW5nIHRvIHRoZSBET01cclxuXHRcdG5ld0xpbmsuYXBwZW5kQ2hpbGQobmV3SW5wdXQpO1xyXG5cdFx0bmV3TGluay5hcHBlbmRDaGlsZChyZW1vdmVMaW5rQnV0dG9uKTtcclxuXHRcdGxldCBsaW5rQ29udGFpbmVyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2FkZC12aWRlby1saW5rcycpO1xyXG5cdFx0bGlua0NvbnRhaW5lci5hcHBlbmRDaGlsZChuZXdMaW5rKTtcclxuXHRcdC8vIFdlIGFkZCBldmVudCBsaXN0ZW5lcnMgdG8gdGhlIGJ1dHRvbnMgYW5kIGFkZCBsb2dpYyB0byByZW1vdmUgdGhlIHNlbGVjdGVkIGxpbmtcclxuXHRcdGxldCByZW1vdmVMaW5rQnV0dG9ucyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ3JlbW92ZV9fdmlkZW9fX2xpbmtfX2J1dHRvbicpO1xyXG5cdFx0Zm9yIChsZXQgaSA9IDA7IGkgPCByZW1vdmVMaW5rQnV0dG9ucy5sZW5ndGg7IGkrKykge1xyXG5cdFx0XHRyZW1vdmVMaW5rQnV0dG9uc1tpXS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XHJcblx0XHRcdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cdFx0XHRcdGxldCBsaW5rVG9SZW1vdmUgPSB0aGlzLnBhcmVudE5vZGU7XHJcblx0XHRcdFx0bGlua1RvUmVtb3ZlLnJlbW92ZSgpO1xyXG5cdFx0XHR9KTtcclxuXHRcdH1cclxuXHR9KTtcclxufVxyXG4iLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOlsiY2Fyb3VzZWxUZXN0IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwibGVuZ3RoIiwiZGlzcGxheSIsInF1ZXJ5U2VsZWN0b3IiLCJpbWdzIiwicXVlcnlTZWxlY3RvckFsbCIsImxlZnRCdG4iLCJyaWdodEJ0biIsImltZ1NsaWRlciIsIm5ld19pbWciLCJ0YWdOYW1lIiwiY3JlYXRlRWxlbWVudCIsInNyYyIsIm1lZGlhU3R5bGluZ0Z1bmN0aW9uIiwibWVkaWEiLCJpZCIsIndpZHRoIiwiaGVpZ2h0IiwiYWxsb3ciLCJhdXRvcGxheSIsImFwcGVuZENoaWxkIiwibGVmdCIsImFkZEV2ZW50TGlzdGVuZXIiLCJuZXh0Iiwic3R5bGUiLCJ0cmFuc2Zvcm0iLCJjb25jYXQiLCJiZWZvcmUiLCJmb3JFYWNoIiwiaW1nIiwiZSIsIm5ld19tZWRpYSIsInVuZGVmaW5lZCIsImdldEF0dHJpYnV0ZSIsIm9sZENoaWxkIiwiZ2V0RWxlbWVudEJ5SWQiLCJyZW1vdmUiLCJkcm9wZG93bnMiLCJkcm9wZG93bklzT3BlbiIsImRyb3Bkb3duIiwiZXZlbnQiLCJ0YXJnZXQiLCJkYXRhc2V0IiwiY2xhc3NMaXN0IiwiY29udGFpbnMiLCJhZGQiLCJ3aW5kb3ciLCJkcm9wZG93bkJ1dHRvbiIsInRhcmdldElzRHJvcGRvd24iLCJoYW5kbGVTbWFsbFNjcmVlbnMiLCJuYXZiYXJNZW51IiwiaGVhZFRpdGxlIiwiaGVhZCIsImlubmVySFRNTCIsImluY2x1ZGVzIiwibW9kYWxNYW5hZ2VtZW50IiwibW9kYWwiLCJtb2RhbENsb3NlQnV0dG9uIiwiY2xvc2VNb2RhbCIsIm1vZGFsQ2FuY2VsQnV0dG9uIiwiZGVsZXRlVHJpY2siLCJ0cmlja1RvRGVsZXRlIiwidXJsIiwiZmV0Y2giLCJ0aGVuIiwicmVzcG9uc2UiLCJvayIsImRhdGEiLCJsb2NhdGlvbiIsInJlbG9hZCIsInJlcGxhY2UiLCJkZWxldGVUcmlja0J1dHRvbiIsIl9sb29wIiwiaSIsImdldFRyaWNrSWQiLCJ0cmlja0lkIiwic2V0QXR0cmlidXRlIiwiZGlzcGxheU1vcmVUcmlja3MiLCJnZXRNb3JlVHJpY2tzIiwiZ2V0TGFzdFRyaWNrTnVtYmVyIiwidHJpY2tzQXJyYXkiLCJsYXN0VHJpY2tOdW1iZXIiLCJwYXJzZUludCIsImdldFRyaWNrc0NvdW50IiwidHJpY2tzQ291bnQiLCJmaXJzdEVsZW1lbnRDaGlsZCIsImRpc3BsYXllZFRyaWNrc0NvdW50IiwidHJpY2tzTWFya2VyIiwibGFzdFRyaWNrSW5kZXgiLCJjb25zb2xlIiwibG9nIiwidGV4dCIsImh0bWwiLCJ0cmlja3MiLCJsb2FkTW9yZUJ1dHRvbiIsInJlbW92ZUNoaWxkIiwiaW5zZXJ0QWRqYWNlbnRIVE1MIiwib3V0ZXJIVE1MIiwiZGlzcGxheU1vcmVCdXR0b24iLCJlcnJvciIsImluY3JlbWVudEFkZExpbmtDb3VudGVyIiwiYWRkTGlua0NvdW50ZXIiLCJpbmNyZW1lbnRSZW1vdmVMaW5rQ291bnRlciIsInJlbW92ZUxpbmtDb3VudGVyIiwicGFnZSIsImFkZExpbmtCdXR0b24iLCJwcmV2ZW50RGVmYXVsdCIsImxpbmtDb3VudGVyIiwibmV3TGluayIsImNsYXNzTmFtZSIsIm5ld0lucHV0IiwidHlwZSIsIm5hbWUiLCJ2YWx1ZSIsInBsYWNlaG9sZGVyIiwicmVtb3ZlTGlua0J1dHRvbiIsImxpbmtDb250YWluZXIiLCJyZW1vdmVMaW5rQnV0dG9ucyIsImxpbmtUb1JlbW92ZSIsInBhcmVudE5vZGUiXSwic291cmNlUm9vdCI6IiJ9