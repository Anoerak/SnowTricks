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
// We get the html head title
var headTitle = document.head.querySelector('title').innerHTML;
console.log(headTitle);
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
      var url = 'https://127.0.0.1:8000/trick/' + trickToDelete + '/delete';
      // We fetch the url and use the Symfony controller to delete the trick.
      // We wait for the response and if it's ok, we close the modal.
      fetch(url).then(function (response) {
        if (response.ok) {
          modal.style.display = 'none';
        }
      }).then(function (data) {
        // We reload the page.
        window.location.reload();
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QWdCLENBQUNOLFNBQVMsR0FBRyw2QkFBNkI7SUFDMURNLGdCQUFnQixDQUFDOUQsU0FBUyxHQUFHLEdBQUc7SUFDaEM7SUFDQXVELE9BQU8sQ0FBQ3hGLFdBQVcsQ0FBQzBGLFFBQVEsQ0FBQztJQUM3QkYsT0FBTyxDQUFDeEYsV0FBVyxDQUFDK0YsZ0JBQWdCLENBQUM7SUFDckMsSUFBSUMsYUFBYSxHQUFHckgsUUFBUSxDQUFDb0MsY0FBYyxDQUFDLGlCQUFpQixDQUFDO0lBQzlEaUYsYUFBYSxDQUFDaEcsV0FBVyxDQUFDd0YsT0FBTyxDQUFDO0lBQ2xDO0lBQ0EsSUFBSVMsaUJBQWlCLEdBQUd0SCxRQUFRLENBQUNDLHNCQUFzQixDQUFDLDZCQUE2QixDQUFDO0lBQ3RGLEtBQUssSUFBSTBFLENBQUMsR0FBRyxDQUFDLEVBQUVBLENBQUMsR0FBRzJDLGlCQUFpQixDQUFDcEgsTUFBTSxFQUFFeUUsQ0FBQyxFQUFFLEVBQUU7TUFDbEQyQyxpQkFBaUIsQ0FBQzNDLENBQUMsQ0FBQyxDQUFDcEQsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFVBQVVRLENBQUMsRUFBRTtRQUMzREEsQ0FBQyxDQUFDNEUsY0FBYyxFQUFFO1FBQ2xCLElBQUlZLFlBQVksR0FBRyxJQUFJLENBQUNDLFVBQVU7UUFDbENELFlBQVksQ0FBQ2xGLE1BQU0sRUFBRTtNQUN0QixDQUFDLENBQUM7SUFDSDtFQUNELENBQUMsQ0FBQztBQUNIOzs7Ozs7Ozs7Ozs7QUN6REEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL3RlbXBsYXRlcy9jb21wb25lbnRzL2Nhcm91c2VsL2Nhcm91c2VsLmpzIiwid2VicGFjazovLy8uL3RlbXBsYXRlcy9jb21wb25lbnRzL2hlYWRlci9oZWFkZXIuanMiLCJ3ZWJwYWNrOi8vLy4vdGVtcGxhdGVzL2NvbXBvbmVudHMvbW9kYWxzL2RlbGV0ZV90cmljay5qcyIsIndlYnBhY2s6Ly8vLi90ZW1wbGF0ZXMvaG9tZS9kaXNwbGF5X3RyaWNrcy9kaXNwbGF5X3RyaWNrcy5qcyIsIndlYnBhY2s6Ly8vLi90ZW1wbGF0ZXMvdHJpY2svZWRpdC9lZGl0X3RyaWNrLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvYXBwLnNjc3M/OGY1OSJdLCJzb3VyY2VzQ29udGVudCI6WyIvKlxyXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXHJcbiAqXHJcbiAqIFdlIHJlY29tbWVuZCBpbmNsdWRpbmcgdGhlIGJ1aWx0IHZlcnNpb24gb2YgdGhpcyBKYXZhU2NyaXB0IGZpbGVcclxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cclxuICovXHJcblxyXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXHJcbi8vIGltcG9ydCAnLi9zdHlsZXMvYXBwLmNzcyc7XHJcblxyXG4vLyBhbnkgU0NTUyB5b3UgaW1wb3J0IHdpbGwgb3V0cHV0IGludG8gYSBzaW5nbGUgY3NzIGZpbGUgKGFwcC5jc3MgaW4gdGhpcyBjYXNlKVxyXG5pbXBvcnQgJy4vc3R5bGVzL2FwcC5zY3NzJztcclxuXHJcbi8vIHN0YXJ0IHRoZSBTdGltdWx1cyBhcHBsaWNhdGlvblxyXG4vLyBpbXBvcnQgJy4vYm9vdHN0cmFwJztcclxuXHJcbmltcG9ydCAnLi4vdGVtcGxhdGVzL2NvbXBvbmVudHMvaGVhZGVyL2hlYWRlci5qcyc7XHJcbmltcG9ydCAnLi4vdGVtcGxhdGVzL2NvbXBvbmVudHMvbW9kYWxzL2RlbGV0ZV90cmljay5qcyc7XHJcbmltcG9ydCAnLi4vdGVtcGxhdGVzL2hvbWUvZGlzcGxheV90cmlja3MvZGlzcGxheV90cmlja3MuanMnO1xyXG5pbXBvcnQgJy4uL3RlbXBsYXRlcy9jb21wb25lbnRzL2Nhcm91c2VsL2Nhcm91c2VsLmpzJztcclxuaW1wb3J0ICcuLi90ZW1wbGF0ZXMvdHJpY2svZWRpdC9lZGl0X3RyaWNrLmpzJztcclxuIiwiLy8gSWYgd2UgaGF2ZSBhIGNhcm91c2VsIG9uIHRoZSBwYWdlXHJcbmxldCBjYXJvdXNlbFRlc3QgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdjYXJvdXNlbF9fY29udGFpbmVyJyk7XHJcblxyXG5pZiAoY2Fyb3VzZWxUZXN0Lmxlbmd0aCA+IDApIHtcclxuXHQvLyBXZSBzZWxlY3QgdGhlIGVsZW1lbnRzIHdlIG5lZWRcclxuXHRsZXQgZGlzcGxheSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWRpc3BsYXldJyk7XHJcblx0bGV0IGltZ3MgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS1pbWddJyk7XHJcblx0bGV0IGxlZnRCdG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdbZGF0YS1idG4tbGVmdF0nKTtcclxuXHRsZXQgcmlnaHRCdG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdbZGF0YS1idG4tcmlnaHRdJyk7XHJcblx0bGV0IGltZ1NsaWRlciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWltZy1jb250YWluZXIgXScpO1xyXG5cclxuXHQvLyBXZSBjcmVhdGUgdGhlIGNvbnRhaW5lciBiYXNlZCBvbiB0aGUgdGFnTmFtZVxyXG5cdGxldCBuZXdfaW1nID0gaW1nc1swXS50YWdOYW1lID09PSAnVklERU8nID8gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnaWZyYW1lJykgOiBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdpbWcnKTtcclxuXHRuZXdfaW1nLnNyYyA9IGltZ3NbMF0uc3JjO1xyXG5cclxuXHQvLyBXZSBzdHlsZSB0aGUgY29udGFpbmVyXHJcblx0bWVkaWFTdHlsaW5nRnVuY3Rpb24gPSAobWVkaWEpID0+IHtcclxuXHRcdGlmIChtZWRpYS50YWdOYW1lID09PSAnSUZSQU1FJykge1xyXG5cdFx0XHRtZWRpYS5pZCA9ICdkaXNwbGF5ZWRfbWVkaWEnO1xyXG5cdFx0XHRtZWRpYS53aWR0aCA9IDc1MDtcclxuXHRcdFx0bWVkaWEuaGVpZ2h0ID0gNTAwO1xyXG5cdFx0XHRtZWRpYS5hbGxvdyA9ICdhY2NlbGVyb21ldGVyOyBjbGlwYm9hcmQtd3JpdGU7IGVuY3J5cHRlZC1tZWRpYTsgZ3lyb3Njb3BlOyBwaWN0dXJlLWluLXBpY3R1cmU7IGZ1bGxzY3JlZW4nO1xyXG5cdFx0XHRtZWRpYS5hdXRvcGxheSA9IDE7XHJcblx0XHR9IGVsc2Uge1xyXG5cdFx0XHRtZWRpYS5pZCA9ICdkaXNwbGF5ZWRfbWVkaWEnO1xyXG5cdFx0fVxyXG5cdH07XHJcblxyXG5cdG1lZGlhU3R5bGluZ0Z1bmN0aW9uKG5ld19pbWcpO1xyXG5cclxuXHRkaXNwbGF5LmFwcGVuZENoaWxkKG5ld19pbWcpO1xyXG5cclxuXHRsZXQgbGVmdCA9IDA7XHJcblxyXG5cdC8vIFdlIGFkZCBldmVudCBsaXN0ZW5lcnMgdG8gdGhlIGJ1dHRvbnNcclxuXHRyaWdodEJ0bi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIG5leHQoKSB7XHJcblx0XHRpZiAobGVmdCA8PSBpbWdzLmxlbmd0aCAtIDIpIHtcclxuXHRcdFx0bGVmdCsrO1xyXG5cdFx0XHRpbWdTbGlkZXIuc3R5bGUudHJhbnNmb3JtID0gYHRyYW5zbGF0ZXgoY2FsYygoICR7bGVmdH0gKiAoLTgwcHggLSAxLjZyZW0pKSlgO1xyXG5cdFx0fSBlbHNlIHtcclxuXHRcdFx0bGVmdCA9IDA7XHJcblx0XHRcdGltZ1NsaWRlci5zdHlsZS50cmFuc2Zvcm0gPSBgdHJhbnNsYXRleCgwKWA7XHJcblx0XHR9XHJcblx0fSk7XHJcblxyXG5cdGxlZnRCdG4uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiBiZWZvcmUoKSB7XHJcblx0XHRpZiAobGVmdCA+IDApIHtcclxuXHRcdFx0bGVmdC0tO1xyXG5cdFx0XHRpbWdTbGlkZXIuc3R5bGUudHJhbnNmb3JtID0gYHRyYW5zbGF0ZXgoY2FsYygoIC0ke2xlZnR9ICogKDgwcHggKyAxLjZyZW0pKSlgO1xyXG5cdFx0fVxyXG5cdFx0aWYgKGxlZnQgPT0gMCkge1xyXG5cdFx0XHRpbWdTbGlkZXIuc3R5bGUudHJhbnNmb3JtID0gYHRyYW5zbGF0ZXgoMClgO1xyXG5cdFx0fVxyXG5cdH0pO1xyXG5cclxuXHQvLyBXZSBhZGQgZXZlbnQgbGlzdGVuZXJzIHRvIHRoZSBpbWFnZXMgYW5kIGFkZCBsb2dpYyB0byBkaXNwbGF5IHRoZSBzZWxlY3RlZCBpbWFnZVxyXG5cdGltZ3MuZm9yRWFjaCgoaW1nKSA9PiB7XHJcblx0XHRpbWcuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xyXG5cdFx0XHRsZXQgbmV3X21lZGlhID0gdGhpcy50YWdOYW1lID09PSAnVklERU8nID8gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnaWZyYW1lJykgOiBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdpbWcnKTtcclxuXHRcdFx0bWVkaWFTdHlsaW5nRnVuY3Rpb24obmV3X21lZGlhKTtcclxuXHRcdFx0aWYgKG5ld19tZWRpYS5zcmMgPT0gdW5kZWZpbmVkKSB7XHJcblx0XHRcdFx0bmV3X21lZGlhLnNyYyA9IGltZ3NbMF0uc3JjO1xyXG5cdFx0XHR9XHJcblx0XHRcdG5ld19tZWRpYS5pZCA9ICdkaXNwbGF5ZWRfbWVkaWEnO1xyXG5cdFx0XHRuZXdfbWVkaWEuc3JjID0gdGhpcy5nZXRBdHRyaWJ1dGUoJ3NyYycpO1xyXG5cdFx0XHRsZXQgb2xkQ2hpbGQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGlzcGxheWVkX21lZGlhJyk7XHJcblx0XHRcdG9sZENoaWxkLnJlbW92ZSgpO1xyXG5cdFx0XHRkaXNwbGF5LmFwcGVuZENoaWxkKG5ld19tZWRpYSk7XHJcblx0XHR9KTtcclxuXHR9KTtcclxufVxyXG4iLCIvLyBXZSBzZWxlY3QgdGhlIGVsZW1lbnRzIHdlIG5lZWQuXHJcbmxldCBkcm9wZG93bnMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcubmF2YmFyIC5kcm9wZG93bi10b2dnbGVyJyk7XHJcbmxldCBkcm9wZG93bklzT3BlbiA9IGZhbHNlO1xyXG5cclxuLy8gV2UgaGFuZGxlIGRyb3Bkb3duIG1lbnVzXHJcbmlmIChkcm9wZG93bnMubGVuZ3RoKSB7XHJcblx0ZHJvcGRvd25zLmZvckVhY2goKGRyb3Bkb3duKSA9PiB7XHJcblx0XHRkcm9wZG93bi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudCkgPT4ge1xyXG5cdFx0XHRsZXQgdGFyZ2V0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihgIyR7ZXZlbnQudGFyZ2V0LmRhdGFzZXQuZHJvcGRvd259YCk7XHJcblxyXG5cdFx0XHRpZiAodGFyZ2V0KSB7XHJcblx0XHRcdFx0aWYgKHRhcmdldC5jbGFzc0xpc3QuY29udGFpbnMoJ3Nob3cnKSkge1xyXG5cdFx0XHRcdFx0dGFyZ2V0LmNsYXNzTGlzdC5yZW1vdmUoJ3Nob3cnKTtcclxuXHRcdFx0XHRcdGRyb3Bkb3duSXNPcGVuID0gZmFsc2U7XHJcblx0XHRcdFx0fSBlbHNlIHtcclxuXHRcdFx0XHRcdHRhcmdldC5jbGFzc0xpc3QuYWRkKCdzaG93Jyk7XHJcblx0XHRcdFx0XHRkcm9wZG93bklzT3BlbiA9IHRydWU7XHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9XHJcblx0XHR9KTtcclxuXHR9KTtcclxufVxyXG5cclxuLy8gV2UgYWRkIGFuIGV2ZW50IGxpc3RlbmVyIHRvIHRoZSB3aW5kb3cgdG8gY2xvc2UgdGhlIGRyb3Bkb3ducyB3aGVuIHRoZSB1c2VyIGNsaWNrcyBvdXRzaWRlIG9mIHRoZW0uXHJcbndpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdtb3VzZXVwJywgKGV2ZW50KSA9PiB7XHJcblx0aWYgKGRyb3Bkb3duSXNPcGVuKSB7XHJcblx0XHRkcm9wZG93bnMuZm9yRWFjaCgoZHJvcGRvd25CdXR0b24pID0+IHtcclxuXHRcdFx0bGV0IGRyb3Bkb3duID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihgIyR7ZHJvcGRvd25CdXR0b24uZGF0YXNldC5kcm9wZG93bn1gKTtcclxuXHRcdFx0bGV0IHRhcmdldElzRHJvcGRvd24gPSBkcm9wZG93biA9PSBldmVudC50YXJnZXQ7XHJcblxyXG5cdFx0XHRpZiAoZHJvcGRvd25CdXR0b24gPT0gZXZlbnQudGFyZ2V0KSB7XHJcblx0XHRcdFx0cmV0dXJuO1xyXG5cdFx0XHR9XHJcblxyXG5cdFx0XHRpZiAoIXRhcmdldElzRHJvcGRvd24gJiYgIWRyb3Bkb3duLmNvbnRhaW5zKGV2ZW50LnRhcmdldCkpIHtcclxuXHRcdFx0XHRkcm9wZG93bi5jbGFzc0xpc3QucmVtb3ZlKCdzaG93Jyk7XHJcblx0XHRcdH1cclxuXHRcdH0pO1xyXG5cdH1cclxufSk7XHJcblxyXG4vLyBXZSBoYW5kbGUgc21hbGwgc2NyZWVuc1xyXG5mdW5jdGlvbiBoYW5kbGVTbWFsbFNjcmVlbnMoKSB7XHJcblx0ZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLm5hdmJhci10b2dnbGVyJykuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB7XHJcblx0XHRsZXQgbmF2YmFyTWVudSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5uYXZiYXItbWVudScpO1xyXG5cclxuXHRcdGlmICghbmF2YmFyTWVudS5jbGFzc0xpc3QuY29udGFpbnMoJ2FjdGl2ZScpKSB7XHJcblx0XHRcdG5hdmJhck1lbnUuY2xhc3NMaXN0LmFkZCgnYWN0aXZlJyk7XHJcblx0XHR9IGVsc2Uge1xyXG5cdFx0XHRuYXZiYXJNZW51LmNsYXNzTGlzdC5yZW1vdmUoJ2FjdGl2ZScpO1xyXG5cdFx0fVxyXG5cdH0pO1xyXG59XHJcblxyXG5oYW5kbGVTbWFsbFNjcmVlbnMoKTtcclxuIiwiLy8gV2UgZ2V0IHRoZSBodG1sIGhlYWQgdGl0bGVcclxuY29uc3QgaGVhZFRpdGxlID0gZG9jdW1lbnQuaGVhZC5xdWVyeVNlbGVjdG9yKCd0aXRsZScpLmlubmVySFRNTDtcclxuY29uc29sZS5sb2coaGVhZFRpdGxlKTtcclxuXHJcbmlmIChoZWFkVGl0bGUuaW5jbHVkZXMoJ0hvbWUnKSB8fCBoZWFkVGl0bGUuaW5jbHVkZXMoJ0NhdGVnb3J5JykpIHtcclxuXHQvLyBXZSBncmFiIHRoZSBkZWxldGVfdHJpY2tfYnV0dG9ucy5cclxuXHRjb25zdCBkZWxldGVUcmlja0J1dHRvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ2RlbGV0ZV90cmlja19idXR0b24nKTtcclxuXHJcblx0Ly8gV2UgbG9vcCB0aHJvdWdoIHRoZSBkZWxldGVfdHJpY2tfYnV0dG9ucyBhbmQgYWRkIGFuIGV2ZW50IGxpc3RlbmVyIG9uIGVhY2ggb25lLi5cclxuXHRmb3IgKGxldCBpID0gMDsgaSA8IGRlbGV0ZVRyaWNrQnV0dG9uLmxlbmd0aDsgaSsrKSB7XHJcblx0XHRkZWxldGVUcmlja0J1dHRvbltpXS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGdldFRyaWNrSWQpO1xyXG5cdFx0ZnVuY3Rpb24gZ2V0VHJpY2tJZCgpIHtcclxuXHRcdFx0Ly8gT24gY2xpY2ssIHdlIGRpc3BsYXkgdGhlIG1vZGFsLlxyXG5cdFx0XHRtb2RhbE1hbmFnZW1lbnQoKTtcclxuXHRcdFx0Ly8gVGhlbiB3ZSBnZXQgdGhlIHRyaWNrLmlkIGFuZCBwYXNzIGl0IHRvIHRoZSBkZWxldGVfYnV0dG9uXHJcblx0XHRcdGNvbnN0IHRyaWNrSWQgPSBkZWxldGVUcmlja0J1dHRvbltpXS5nZXRBdHRyaWJ1dGUoJ2lkJyk7XHJcblx0XHRcdGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdkZWxldGVfYnV0dG9uJykuc2V0QXR0cmlidXRlKCdkYXRhLXRyaWNrLWlkJywgdHJpY2tJZCk7XHJcblx0XHR9XHJcblx0fVxyXG5cclxuXHRmdW5jdGlvbiBtb2RhbE1hbmFnZW1lbnQoKSB7XHJcblx0XHQvLyB3ZSBncmFiIHRoZSBtb2RhbCBhbmQgZGlzcGxheSBpdCBhcyBhIGJsb2NrLlxyXG5cdFx0bGV0IG1vZGFsID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RlbGV0ZV90cmlja19tb2RhbCcpO1xyXG5cdFx0bW9kYWwuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7XHJcblxyXG5cdFx0Ly8gV2UgZ3JhYiB0aGUgY2xvc2UgYnV0dG9uIGFuZCBjYW5jZWwgYnV0dG9uIGFuZCBhZGQgZXZlbnQgbGlzdGVuZXIgdG8gYWxsb3cgdG8gY2xvc2UgdGhlIG1vZGFsLlxyXG5cdFx0bGV0IG1vZGFsQ2xvc2VCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY2xvc2VfbW9kYWxfYnV0dG9uJyk7XHJcblx0XHRtb2RhbENsb3NlQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgY2xvc2VNb2RhbCk7XHJcblx0XHRsZXQgbW9kYWxDYW5jZWxCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY2FuY2VsX2RlbGV0ZV9idXR0b24nKTtcclxuXHRcdG1vZGFsQ2FuY2VsQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgY2xvc2VNb2RhbCk7XHJcblxyXG5cdFx0ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RlbGV0ZV9idXR0b24nKS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGRlbGV0ZVRyaWNrKTtcclxuXHJcblx0XHQvLyBXZSBncmFiIHRoZSB3aW5kb3cgYW5kIGFkZCBhbiBldmVudCBsaXN0ZW5lciB0byBjbG9zZSB0aGUgbW9kYWwgaWYgdGhlIHVzZXIgY2xpY2tzIG91dHNpZGUgb2YgaXQuXHJcblx0XHR3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZXZlbnQpIHtcclxuXHRcdFx0aWYgKGV2ZW50LnRhcmdldCA9PSBtb2RhbCkge1xyXG5cdFx0XHRcdG1vZGFsLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7XHJcblx0XHRcdH1cclxuXHRcdH0pO1xyXG5cclxuXHRcdGZ1bmN0aW9uIGNsb3NlTW9kYWwoKSB7XHJcblx0XHRcdG1vZGFsLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7XHJcblx0XHR9XHJcblxyXG5cdFx0ZnVuY3Rpb24gZGVsZXRlVHJpY2soKSB7XHJcblx0XHRcdC8vIFdlIGdyYWIgdGhlIHRyaWNrLmlkIGZyb20gdGhlIGRlbGV0ZV9idXR0b24gYW5kIHBhc3MgaXQgdG8gdGhlIHVybC5cclxuXHRcdFx0bGV0IHRyaWNrVG9EZWxldGUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGVsZXRlX2J1dHRvbicpLmdldEF0dHJpYnV0ZSgnZGF0YS10cmljay1pZCcpO1xyXG5cdFx0XHRsZXQgdXJsID0gJ2h0dHBzOi8vMTI3LjAuMC4xOjgwMDAvdHJpY2svJyArIHRyaWNrVG9EZWxldGUgKyAnL2RlbGV0ZSc7XHJcblx0XHRcdC8vIFdlIGZldGNoIHRoZSB1cmwgYW5kIHVzZSB0aGUgU3ltZm9ueSBjb250cm9sbGVyIHRvIGRlbGV0ZSB0aGUgdHJpY2suXHJcblx0XHRcdC8vIFdlIHdhaXQgZm9yIHRoZSByZXNwb25zZSBhbmQgaWYgaXQncyBvaywgd2UgY2xvc2UgdGhlIG1vZGFsLlxyXG5cdFx0XHRmZXRjaCh1cmwpXHJcblx0XHRcdFx0LnRoZW4oKHJlc3BvbnNlKSA9PiB7XHJcblx0XHRcdFx0XHRpZiAocmVzcG9uc2Uub2spIHtcclxuXHRcdFx0XHRcdFx0bW9kYWwuc3R5bGUuZGlzcGxheSA9ICdub25lJztcclxuXHRcdFx0XHRcdH1cclxuXHRcdFx0XHR9KVxyXG5cdFx0XHRcdC50aGVuKChkYXRhKSA9PiB7XHJcblx0XHRcdFx0XHQvLyBXZSByZWxvYWQgdGhlIHBhZ2UuXHJcblx0XHRcdFx0XHR3aW5kb3cubG9jYXRpb24ucmVsb2FkKCk7XHJcblx0XHRcdFx0fSk7XHJcblx0XHR9XHJcblx0fVxyXG59XHJcbiIsIi8vIFdlIGdldCB0aGUgaHRtbCBoZWFkIHRpdGxlXHJcbmNvbnN0IGhlYWRUaXRsZSA9IGRvY3VtZW50LmhlYWQucXVlcnlTZWxlY3RvcigndGl0bGUnKS5pbm5lckhUTUw7XHJcblxyXG5pZiAoaGVhZFRpdGxlLmluY2x1ZGVzKCdIb21lJykpIHtcclxuXHQvLyBXZSBncmFiIHRoZSBkaXNwbGF5LW1vcmVfYnV0dG9uIGFuZCBhZGQgYW4gZXZlbnQgbGlzdGVuZXIuXHJcblx0Y29uc3QgZGlzcGxheU1vcmVCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGlzcGxheS1tb3JlX2J1dHRvbicpO1xyXG5cdGRpc3BsYXlNb3JlQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZGlzcGxheU1vcmVUcmlja3MpO1xyXG5cclxuXHRmdW5jdGlvbiBkaXNwbGF5TW9yZVRyaWNrcygpIHtcclxuXHRcdGdldE1vcmVUcmlja3MoZ2V0TGFzdFRyaWNrTnVtYmVyKCkpO1xyXG5cdH1cclxuXHJcblx0Ly8gV2UgZ2V0IHRoZSBudW1iZXIgb2YgdHJpY2tzIGRpc3BsYXllZCBvbiBzY3JlZW5cclxuXHRmdW5jdGlvbiBnZXRMYXN0VHJpY2tOdW1iZXIoKSB7XHJcblx0XHRsZXQgdHJpY2tzQXJyYXkgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCd0cmljaycpO1xyXG5cdFx0bGV0IGxhc3RUcmlja051bWJlciA9IHBhcnNlSW50KHRyaWNrc0FycmF5Lmxlbmd0aCkgLSAxO1xyXG5cdFx0cmV0dXJuIGxhc3RUcmlja051bWJlcjtcclxuXHR9XHJcblxyXG5cdC8vIFdlIGdldCB0aGUgc3VtIG9mIHRyaWNrIGF2YWlsYWJsZSBpbiB0aGUgZGF0YWJhc2VcclxuXHRmdW5jdGlvbiBnZXRUcmlja3NDb3VudCgpIHtcclxuXHRcdGxldCB0cmlja3NDb3VudCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0cmlja3MnKS5maXJzdEVsZW1lbnRDaGlsZC5pZC5yZXBsYWNlKCd0cmlja3NfY291bnRfJywgJycpO1xyXG5cdFx0bGV0IGRpc3BsYXllZFRyaWNrc0NvdW50ID0gcGFyc2VJbnQoZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgndHJpY2snKS5sZW5ndGgpO1xyXG5cdFx0bGV0IHRyaWNrc01hcmtlciA9IHBhcnNlSW50KHRyaWNrc0NvdW50KSAtIGRpc3BsYXllZFRyaWNrc0NvdW50O1xyXG5cdFx0cmV0dXJuIHRyaWNrc01hcmtlcjtcclxuXHR9XHJcblxyXG5cdC8vIFdlIHF1ZXJ5IGZvciBtb3JlIHRyaWNrc1xyXG5cdGZ1bmN0aW9uIGdldE1vcmVUcmlja3MobGFzdFRyaWNrSW5kZXgpIHtcclxuXHRcdGxldCB1cmwgPSAnaHR0cHM6Ly9sb2NhbGhvc3Q6ODAwMC9sb2FkLW1vcmUtdHJpY2tzLycgKyBsYXN0VHJpY2tJbmRleCArICcvJyArIGdldFRyaWNrc0NvdW50KCk7XHJcblx0XHRjb25zb2xlLmxvZyh1cmwpO1xyXG5cdFx0ZmV0Y2godXJsKVxyXG5cdFx0XHQudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcclxuXHRcdFx0XHRyZXR1cm4gcmVzcG9uc2UudGV4dCgpO1xyXG5cdFx0XHR9KVxyXG5cdFx0XHQudGhlbihmdW5jdGlvbiAoaHRtbCkge1xyXG5cdFx0XHRcdGxldCB0cmlja3MgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndHJpY2tzX2xpc3QnKTtcclxuXHRcdFx0XHRsZXQgbG9hZE1vcmVCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbG9hZF9tb3JlX2NhcmQnKTtcclxuXHRcdFx0XHQvLyBXZSByZW1vdmUgdGhlIGxvYWQgbW9yZSBidXR0b24gZnJvbSB0aGUgdHJpY2tzIGxpc3RcclxuXHRcdFx0XHR0cmlja3MucmVtb3ZlQ2hpbGQobG9hZE1vcmVCdXR0b24pO1xyXG5cdFx0XHRcdC8vIFdlIGluc2VydCB0aGUgbmV3IHRyaWNrcyBiZWZvcmUgdGhlIGxvYWQgbW9yZSBidXR0b24gaW4gdGhlIHRyaWNrcyBsaXN0XHJcblx0XHRcdFx0dHJpY2tzLmluc2VydEFkamFjZW50SFRNTCgnYmVmb3JlZW5kJywgaHRtbCk7XHJcblx0XHRcdFx0Ly8gV2UgY2hlY2sgaWYgdGhlcmUgYW4gaWQgJ3RyaWNrc19jb3VudF8nICsgbGFzdFRyaWNrSW5kZXggaW4gdGhlIHRyaWNrcyBsaXN0XHJcblx0XHRcdFx0Ly8gSWYgdGhlcmUgaXMgbm8gaWQgJ3RyaWNrc19jb3VudF8nICsgbGFzdFRyaWNrSW5kZXgsIGl0IG1lYW5zIHRoYXQgdGhlcmUgaXMgbW9yZSB0cmlja3MgdG8gZGlzcGxheVxyXG5cdFx0XHRcdC8vIFNvIHdlIGFkZCB0aGUgbG9hZCBtb3JlIGJ1dHRvblxyXG5cdFx0XHRcdGlmICghZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3RyaWNrc19jb3VudF8nICsgcGFyc2VJbnQoZ2V0TGFzdFRyaWNrTnVtYmVyKCkgKyAxKSkpIHtcclxuXHRcdFx0XHRcdC8vIFdlIGluc2VydCB0aGUgbG9hZCBtb3JlIGJ1dHRvbiBhdCB0aGUgZW5kIG9mIHRoZSB0cmlja3MgbGlzdFxyXG5cdFx0XHRcdFx0dHJpY2tzLmluc2VydEFkamFjZW50SFRNTCgnYmVmb3JlZW5kJywgbG9hZE1vcmVCdXR0b24ub3V0ZXJIVE1MKTtcclxuXHRcdFx0XHR9XHJcblx0XHRcdFx0Y29uc3QgZGlzcGxheU1vcmVCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGlzcGxheS1tb3JlX2J1dHRvbicpO1xyXG5cdFx0XHRcdGRpc3BsYXlNb3JlQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZGlzcGxheU1vcmVUcmlja3MpO1xyXG5cdFx0XHR9KVxyXG5cdFx0XHQuY2F0Y2goZnVuY3Rpb24gKGVycm9yKSB7XHJcblx0XHRcdFx0Y29uc29sZS5sb2coZXJyb3IpO1xyXG5cdFx0XHR9KTtcclxuXHR9XHJcbn1cclxuIiwiLy8gV2UgZ2V0IHRoZSBodG1sIGhlYWQgdGl0bGVcclxuY29uc3QgaGVhZFRpdGxlID0gZG9jdW1lbnQuaGVhZC5xdWVyeVNlbGVjdG9yKCd0aXRsZScpLmlubmVySFRNTDtcclxuXHJcbmlmIChoZWFkVGl0bGUuaW5jbHVkZXMoJ0VkaXQnKSB8fCBoZWFkVGl0bGUuaW5jbHVkZXMoJ05ldycpKSB7XHJcblx0Ly8gV2UgZGVmaW5lIGEgdmFyaWFibGUgYmFzZWQgb24gdGhlIHBhZ2UgdGl0bGUuXHJcblx0bGV0IHBhZ2UgPSBoZWFkVGl0bGUuaW5jbHVkZXMoJ0VkaXQnKSA/ICdlZGl0JyA6ICdhZGQnO1xyXG5cdC8vIFdlIGdyYWIgdGhlIGJ1dHRvbiB0byBhZGQgaW5wdXQgZmllbGRzXHJcblx0bGV0IGFkZExpbmtCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYWRkLXZpZGVvLWxpbmstYnV0dG9uJyk7XHJcblx0Ly8gV2UgZGVmaW5lIHR3byBjb3VudGVycyBmb3IgdGhlIGlucHV0IGZpZWxkcyBhbmQgdGhlIHJlbW92ZSBidXR0b24gYXNzb2NpYXRlIHdpdGggaXRcclxuXHRsZXQgYWRkTGlua0NvdW50ZXIgPSAwO1xyXG5cdGxldCByZW1vdmVMaW5rQ291bnRlciA9IDA7XHJcblx0Ly8gV2Ugd3JpdGUgZnVuY3Rpb25zIHRvIGluY3JlbWVudCB0aG9zZSBjb3VudGVyXHJcblx0ZnVuY3Rpb24gaW5jcmVtZW50QWRkTGlua0NvdW50ZXIoKSB7XHJcblx0XHRhZGRMaW5rQ291bnRlcisrO1xyXG5cdFx0cmV0dXJuIGFkZExpbmtDb3VudGVyO1xyXG5cdH1cclxuXHRmdW5jdGlvbiBpbmNyZW1lbnRSZW1vdmVMaW5rQ291bnRlcigpIHtcclxuXHRcdHJlbW92ZUxpbmtDb3VudGVyKys7XHJcblx0XHRyZXR1cm4gcmVtb3ZlTGlua0NvdW50ZXI7XHJcblx0fVxyXG5cdC8vIFdlIGhhZCBFdmVudExpc3RlbmVyIHRoZSBidXR0b24gdG8gYWRkIGlucHV0IGZpZWxkc1xyXG5cdGFkZExpbmtCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xyXG5cdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cdFx0Ly8gV2UgaW5jcmVtZW50IHRoZSBsaW5rIGNvdW50ZXIgb2YgMVxyXG5cdFx0bGV0IGxpbmtDb3VudGVyID0gaW5jcmVtZW50QWRkTGlua0NvdW50ZXIoKTtcclxuXHRcdC8vIFdlIGNyZWF0ZSB0aGUgbmV3IGRpdiBmb3IgdGhlIGlucHV0IGZpZWxkIGVsZW1lbnQgYW5kIGl0cyBidXR0b25cclxuXHRcdGxldCBuZXdMaW5rID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcblx0XHRuZXdMaW5rLmNsYXNzTmFtZSA9ICd2aWRlb19fbGlua19fYWRkZWRfX2NvbnRhaW5lcic7XHJcblx0XHQvLyBXZSBjcmVhdGUgdGhlIGlucHV0IGZpZWxkXHJcblx0XHRsZXQgbmV3SW5wdXQgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdpbnB1dCcpO1xyXG5cdFx0bmV3SW5wdXQudHlwZSA9ICd0ZXh0JztcclxuXHRcdG5ld0lucHV0LmlkID0gcGFnZSArICctdHJpY2stZW1iZWQtdmlkZW8tbGlua3MtJyArIGxpbmtDb3VudGVyO1xyXG5cdFx0bmV3SW5wdXQubmFtZSA9IHBhZ2UgKyAnX3RyaWNrW2VtYmVkX3ZpZGVvX2xpbmtzXVsnICsgbGlua0NvdW50ZXIgKyAnXSc7XHJcblx0XHRuZXdJbnB1dC52YWx1ZSA9ICcnO1xyXG5cdFx0bmV3SW5wdXQucGxhY2Vob2xkZXIgPSAnaHR0cHM6Ly93d3cueW91dHViZS5jb20vd2F0Y2g/dj14eHh4eHh4eHh4eCc7XHJcblx0XHRuZXdJbnB1dC5jbGFzc05hbWUgPSAndmlkZW9fX2xpbmtfX2FkZGVkJztcclxuXHRcdC8vIFdlIGNyZWF0ZSB0aGUgcmVtb3ZlIGJ1dHRvblxyXG5cdFx0bGV0IHJlbW92ZUxpbmtCdXR0b24gPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdidXR0b24nKTtcclxuXHRcdHJlbW92ZUxpbmtCdXR0b24udHlwZSA9ICdidXR0b24nO1xyXG5cdFx0cmVtb3ZlTGlua0J1dHRvbi5pZCA9ICdyZW1vdmUtdmlkZW8tbGluay1idXR0b24tJyArIGluY3JlbWVudFJlbW92ZUxpbmtDb3VudGVyKCk7XHJcblx0XHRyZW1vdmVMaW5rQnV0dG9uLmNsYXNzTmFtZSA9ICdyZW1vdmVfX3ZpZGVvX19saW5rX19idXR0b24nO1xyXG5cdFx0cmVtb3ZlTGlua0J1dHRvbi5pbm5lckhUTUwgPSAnWCc7XHJcblx0XHQvLyBXZSBoYWQgZXZlcnl0aGluZyB0byB0aGUgRE9NXHJcblx0XHRuZXdMaW5rLmFwcGVuZENoaWxkKG5ld0lucHV0KTtcclxuXHRcdG5ld0xpbmsuYXBwZW5kQ2hpbGQocmVtb3ZlTGlua0J1dHRvbik7XHJcblx0XHRsZXQgbGlua0NvbnRhaW5lciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdhZGQtdmlkZW8tbGlua3MnKTtcclxuXHRcdGxpbmtDb250YWluZXIuYXBwZW5kQ2hpbGQobmV3TGluayk7XHJcblx0XHQvLyBXZSBhZGQgZXZlbnQgbGlzdGVuZXJzIHRvIHRoZSBidXR0b25zIGFuZCBhZGQgbG9naWMgdG8gcmVtb3ZlIHRoZSBzZWxlY3RlZCBsaW5rXHJcblx0XHRsZXQgcmVtb3ZlTGlua0J1dHRvbnMgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdyZW1vdmVfX3ZpZGVvX19saW5rX19idXR0b24nKTtcclxuXHRcdGZvciAobGV0IGkgPSAwOyBpIDwgcmVtb3ZlTGlua0J1dHRvbnMubGVuZ3RoOyBpKyspIHtcclxuXHRcdFx0cmVtb3ZlTGlua0J1dHRvbnNbaV0uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xyXG5cdFx0XHRcdGUucHJldmVudERlZmF1bHQoKTtcclxuXHRcdFx0XHRsZXQgbGlua1RvUmVtb3ZlID0gdGhpcy5wYXJlbnROb2RlO1xyXG5cdFx0XHRcdGxpbmtUb1JlbW92ZS5yZW1vdmUoKTtcclxuXHRcdFx0fSk7XHJcblx0XHR9XHJcblx0fSk7XHJcbn1cclxuIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbImNhcm91c2VsVGVzdCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImxlbmd0aCIsImRpc3BsYXkiLCJxdWVyeVNlbGVjdG9yIiwiaW1ncyIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJsZWZ0QnRuIiwicmlnaHRCdG4iLCJpbWdTbGlkZXIiLCJuZXdfaW1nIiwidGFnTmFtZSIsImNyZWF0ZUVsZW1lbnQiLCJzcmMiLCJtZWRpYVN0eWxpbmdGdW5jdGlvbiIsIm1lZGlhIiwiaWQiLCJ3aWR0aCIsImhlaWdodCIsImFsbG93IiwiYXV0b3BsYXkiLCJhcHBlbmRDaGlsZCIsImxlZnQiLCJhZGRFdmVudExpc3RlbmVyIiwibmV4dCIsInN0eWxlIiwidHJhbnNmb3JtIiwiY29uY2F0IiwiYmVmb3JlIiwiZm9yRWFjaCIsImltZyIsImUiLCJuZXdfbWVkaWEiLCJ1bmRlZmluZWQiLCJnZXRBdHRyaWJ1dGUiLCJvbGRDaGlsZCIsImdldEVsZW1lbnRCeUlkIiwicmVtb3ZlIiwiZHJvcGRvd25zIiwiZHJvcGRvd25Jc09wZW4iLCJkcm9wZG93biIsImV2ZW50IiwidGFyZ2V0IiwiZGF0YXNldCIsImNsYXNzTGlzdCIsImNvbnRhaW5zIiwiYWRkIiwid2luZG93IiwiZHJvcGRvd25CdXR0b24iLCJ0YXJnZXRJc0Ryb3Bkb3duIiwiaGFuZGxlU21hbGxTY3JlZW5zIiwibmF2YmFyTWVudSIsImhlYWRUaXRsZSIsImhlYWQiLCJpbm5lckhUTUwiLCJjb25zb2xlIiwibG9nIiwiaW5jbHVkZXMiLCJtb2RhbE1hbmFnZW1lbnQiLCJtb2RhbCIsIm1vZGFsQ2xvc2VCdXR0b24iLCJjbG9zZU1vZGFsIiwibW9kYWxDYW5jZWxCdXR0b24iLCJkZWxldGVUcmljayIsInRyaWNrVG9EZWxldGUiLCJ1cmwiLCJmZXRjaCIsInRoZW4iLCJyZXNwb25zZSIsIm9rIiwiZGF0YSIsImxvY2F0aW9uIiwicmVsb2FkIiwiZGVsZXRlVHJpY2tCdXR0b24iLCJfbG9vcCIsImkiLCJnZXRUcmlja0lkIiwidHJpY2tJZCIsInNldEF0dHJpYnV0ZSIsImRpc3BsYXlNb3JlVHJpY2tzIiwiZ2V0TW9yZVRyaWNrcyIsImdldExhc3RUcmlja051bWJlciIsInRyaWNrc0FycmF5IiwibGFzdFRyaWNrTnVtYmVyIiwicGFyc2VJbnQiLCJnZXRUcmlja3NDb3VudCIsInRyaWNrc0NvdW50IiwiZmlyc3RFbGVtZW50Q2hpbGQiLCJyZXBsYWNlIiwiZGlzcGxheWVkVHJpY2tzQ291bnQiLCJ0cmlja3NNYXJrZXIiLCJsYXN0VHJpY2tJbmRleCIsInRleHQiLCJodG1sIiwidHJpY2tzIiwibG9hZE1vcmVCdXR0b24iLCJyZW1vdmVDaGlsZCIsImluc2VydEFkamFjZW50SFRNTCIsIm91dGVySFRNTCIsImRpc3BsYXlNb3JlQnV0dG9uIiwiZXJyb3IiLCJpbmNyZW1lbnRBZGRMaW5rQ291bnRlciIsImFkZExpbmtDb3VudGVyIiwiaW5jcmVtZW50UmVtb3ZlTGlua0NvdW50ZXIiLCJyZW1vdmVMaW5rQ291bnRlciIsInBhZ2UiLCJhZGRMaW5rQnV0dG9uIiwicHJldmVudERlZmF1bHQiLCJsaW5rQ291bnRlciIsIm5ld0xpbmsiLCJjbGFzc05hbWUiLCJuZXdJbnB1dCIsInR5cGUiLCJuYW1lIiwidmFsdWUiLCJwbGFjZWhvbGRlciIsInJlbW92ZUxpbmtCdXR0b24iLCJsaW5rQ29udGFpbmVyIiwicmVtb3ZlTGlua0J1dHRvbnMiLCJsaW5rVG9SZW1vdmUiLCJwYXJlbnROb2RlIl0sInNvdXJjZVJvb3QiOiIifQ==