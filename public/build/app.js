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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QWdCLENBQUNOLFNBQVMsR0FBRyw2QkFBNkI7SUFDMURNLGdCQUFnQixDQUFDOUQsU0FBUyxHQUFHLEdBQUc7SUFDaEM7SUFDQXVELE9BQU8sQ0FBQ3hGLFdBQVcsQ0FBQzBGLFFBQVEsQ0FBQztJQUM3QkYsT0FBTyxDQUFDeEYsV0FBVyxDQUFDK0YsZ0JBQWdCLENBQUM7SUFDckMsSUFBSUMsYUFBYSxHQUFHckgsUUFBUSxDQUFDb0MsY0FBYyxDQUFDLGlCQUFpQixDQUFDO0lBQzlEaUYsYUFBYSxDQUFDaEcsV0FBVyxDQUFDd0YsT0FBTyxDQUFDO0lBQ2xDO0lBQ0EsSUFBSVMsaUJBQWlCLEdBQUd0SCxRQUFRLENBQUNDLHNCQUFzQixDQUFDLDZCQUE2QixDQUFDO0lBQ3RGLEtBQUssSUFBSTBFLENBQUMsR0FBRyxDQUFDLEVBQUVBLENBQUMsR0FBRzJDLGlCQUFpQixDQUFDcEgsTUFBTSxFQUFFeUUsQ0FBQyxFQUFFLEVBQUU7TUFDbEQyQyxpQkFBaUIsQ0FBQzNDLENBQUMsQ0FBQyxDQUFDcEQsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFVBQVVRLENBQUMsRUFBRTtRQUMzREEsQ0FBQyxDQUFDNEUsY0FBYyxFQUFFO1FBQ2xCLElBQUlZLFlBQVksR0FBRyxJQUFJLENBQUNDLFVBQVU7UUFDbENELFlBQVksQ0FBQ2xGLE1BQU0sRUFBRTtNQUN0QixDQUFDLENBQUM7SUFDSDtFQUNELENBQUMsQ0FBQztBQUNIOzs7Ozs7Ozs7Ozs7QUN6REEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL3RlbXBsYXRlcy9jb21wb25lbnRzL2Nhcm91c2VsL2Nhcm91c2VsLmpzIiwid2VicGFjazovLy8uL3RlbXBsYXRlcy9jb21wb25lbnRzL2hlYWRlci9oZWFkZXIuanMiLCJ3ZWJwYWNrOi8vLy4vdGVtcGxhdGVzL2NvbXBvbmVudHMvbW9kYWxzL2RlbGV0ZV90cmljay5qcyIsIndlYnBhY2s6Ly8vLi90ZW1wbGF0ZXMvaG9tZS9kaXNwbGF5X3RyaWNrcy9kaXNwbGF5X3RyaWNrcy5qcyIsIndlYnBhY2s6Ly8vLi90ZW1wbGF0ZXMvdHJpY2svZWRpdC9lZGl0X3RyaWNrLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvYXBwLnNjc3MiXSwic291cmNlc0NvbnRlbnQiOlsiLypcclxuICogV2VsY29tZSB0byB5b3VyIGFwcCdzIG1haW4gSmF2YVNjcmlwdCBmaWxlIVxyXG4gKlxyXG4gKiBXZSByZWNvbW1lbmQgaW5jbHVkaW5nIHRoZSBidWlsdCB2ZXJzaW9uIG9mIHRoaXMgSmF2YVNjcmlwdCBmaWxlXHJcbiAqIChhbmQgaXRzIENTUyBmaWxlKSBpbiB5b3VyIGJhc2UgbGF5b3V0IChiYXNlLmh0bWwudHdpZykuXHJcbiAqL1xyXG5cclxuLy8gYW55IENTUyB5b3UgaW1wb3J0IHdpbGwgb3V0cHV0IGludG8gYSBzaW5nbGUgY3NzIGZpbGUgKGFwcC5jc3MgaW4gdGhpcyBjYXNlKVxyXG4vLyBpbXBvcnQgJy4vc3R5bGVzL2FwcC5jc3MnO1xyXG5cclxuLy8gYW55IFNDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcclxuaW1wb3J0ICcuL3N0eWxlcy9hcHAuc2Nzcyc7XHJcblxyXG4vLyBzdGFydCB0aGUgU3RpbXVsdXMgYXBwbGljYXRpb25cclxuLy8gaW1wb3J0ICcuL2Jvb3RzdHJhcCc7XHJcblxyXG5pbXBvcnQgJy4uL3RlbXBsYXRlcy9jb21wb25lbnRzL2hlYWRlci9oZWFkZXIuanMnO1xyXG5pbXBvcnQgJy4uL3RlbXBsYXRlcy9jb21wb25lbnRzL21vZGFscy9kZWxldGVfdHJpY2suanMnO1xyXG5pbXBvcnQgJy4uL3RlbXBsYXRlcy9ob21lL2Rpc3BsYXlfdHJpY2tzL2Rpc3BsYXlfdHJpY2tzLmpzJztcclxuaW1wb3J0ICcuLi90ZW1wbGF0ZXMvY29tcG9uZW50cy9jYXJvdXNlbC9jYXJvdXNlbC5qcyc7XHJcbmltcG9ydCAnLi4vdGVtcGxhdGVzL3RyaWNrL2VkaXQvZWRpdF90cmljay5qcyc7XHJcbiIsIi8vIElmIHdlIGhhdmUgYSBjYXJvdXNlbCBvbiB0aGUgcGFnZVxyXG5sZXQgY2Fyb3VzZWxUZXN0ID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgnY2Fyb3VzZWxfX2NvbnRhaW5lcicpO1xyXG5cclxuaWYgKGNhcm91c2VsVGVzdC5sZW5ndGggPiAwKSB7XHJcblx0Ly8gV2Ugc2VsZWN0IHRoZSBlbGVtZW50cyB3ZSBuZWVkXHJcblx0bGV0IGRpc3BsYXkgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdbZGF0YS1kaXNwbGF5XScpO1xyXG5cdGxldCBpbWdzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnW2RhdGEtaW1nXScpO1xyXG5cdGxldCBsZWZ0QnRuID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignW2RhdGEtYnRuLWxlZnRdJyk7XHJcblx0bGV0IHJpZ2h0QnRuID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignW2RhdGEtYnRuLXJpZ2h0XScpO1xyXG5cdGxldCBpbWdTbGlkZXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdbZGF0YS1pbWctY29udGFpbmVyIF0nKTtcclxuXHJcblx0Ly8gV2UgY3JlYXRlIHRoZSBjb250YWluZXIgYmFzZWQgb24gdGhlIHRhZ05hbWVcclxuXHRsZXQgbmV3X2ltZyA9IGltZ3NbMF0udGFnTmFtZSA9PT0gJ1ZJREVPJyA/IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2lmcmFtZScpIDogZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnaW1nJyk7XHJcblx0bmV3X2ltZy5zcmMgPSBpbWdzWzBdLnNyYztcclxuXHJcblx0Ly8gV2Ugc3R5bGUgdGhlIGNvbnRhaW5lclxyXG5cdG1lZGlhU3R5bGluZ0Z1bmN0aW9uID0gKG1lZGlhKSA9PiB7XHJcblx0XHRpZiAobWVkaWEudGFnTmFtZSA9PT0gJ0lGUkFNRScpIHtcclxuXHRcdFx0bWVkaWEuaWQgPSAnZGlzcGxheWVkX21lZGlhJztcclxuXHRcdFx0bWVkaWEud2lkdGggPSA3NTA7XHJcblx0XHRcdG1lZGlhLmhlaWdodCA9IDUwMDtcclxuXHRcdFx0bWVkaWEuYWxsb3cgPSAnYWNjZWxlcm9tZXRlcjsgY2xpcGJvYXJkLXdyaXRlOyBlbmNyeXB0ZWQtbWVkaWE7IGd5cm9zY29wZTsgcGljdHVyZS1pbi1waWN0dXJlOyBmdWxsc2NyZWVuJztcclxuXHRcdFx0bWVkaWEuYXV0b3BsYXkgPSAxO1xyXG5cdFx0fSBlbHNlIHtcclxuXHRcdFx0bWVkaWEuaWQgPSAnZGlzcGxheWVkX21lZGlhJztcclxuXHRcdH1cclxuXHR9O1xyXG5cclxuXHRtZWRpYVN0eWxpbmdGdW5jdGlvbihuZXdfaW1nKTtcclxuXHJcblx0ZGlzcGxheS5hcHBlbmRDaGlsZChuZXdfaW1nKTtcclxuXHJcblx0bGV0IGxlZnQgPSAwO1xyXG5cclxuXHQvLyBXZSBhZGQgZXZlbnQgbGlzdGVuZXJzIHRvIHRoZSBidXR0b25zXHJcblx0cmlnaHRCdG4uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiBuZXh0KCkge1xyXG5cdFx0aWYgKGxlZnQgPD0gaW1ncy5sZW5ndGggLSAyKSB7XHJcblx0XHRcdGxlZnQrKztcclxuXHRcdFx0aW1nU2xpZGVyLnN0eWxlLnRyYW5zZm9ybSA9IGB0cmFuc2xhdGV4KGNhbGMoKCAke2xlZnR9ICogKC04MHB4IC0gMS42cmVtKSkpYDtcclxuXHRcdH0gZWxzZSB7XHJcblx0XHRcdGxlZnQgPSAwO1xyXG5cdFx0XHRpbWdTbGlkZXIuc3R5bGUudHJhbnNmb3JtID0gYHRyYW5zbGF0ZXgoMClgO1xyXG5cdFx0fVxyXG5cdH0pO1xyXG5cclxuXHRsZWZ0QnRuLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gYmVmb3JlKCkge1xyXG5cdFx0aWYgKGxlZnQgPiAwKSB7XHJcblx0XHRcdGxlZnQtLTtcclxuXHRcdFx0aW1nU2xpZGVyLnN0eWxlLnRyYW5zZm9ybSA9IGB0cmFuc2xhdGV4KGNhbGMoKCAtJHtsZWZ0fSAqICg4MHB4ICsgMS42cmVtKSkpYDtcclxuXHRcdH1cclxuXHRcdGlmIChsZWZ0ID09IDApIHtcclxuXHRcdFx0aW1nU2xpZGVyLnN0eWxlLnRyYW5zZm9ybSA9IGB0cmFuc2xhdGV4KDApYDtcclxuXHRcdH1cclxuXHR9KTtcclxuXHJcblx0Ly8gV2UgYWRkIGV2ZW50IGxpc3RlbmVycyB0byB0aGUgaW1hZ2VzIGFuZCBhZGQgbG9naWMgdG8gZGlzcGxheSB0aGUgc2VsZWN0ZWQgaW1hZ2VcclxuXHRpbWdzLmZvckVhY2goKGltZykgPT4ge1xyXG5cdFx0aW1nLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcclxuXHRcdFx0bGV0IG5ld19tZWRpYSA9IHRoaXMudGFnTmFtZSA9PT0gJ1ZJREVPJyA/IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2lmcmFtZScpIDogZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnaW1nJyk7XHJcblx0XHRcdG1lZGlhU3R5bGluZ0Z1bmN0aW9uKG5ld19tZWRpYSk7XHJcblx0XHRcdGlmIChuZXdfbWVkaWEuc3JjID09IHVuZGVmaW5lZCkge1xyXG5cdFx0XHRcdG5ld19tZWRpYS5zcmMgPSBpbWdzWzBdLnNyYztcclxuXHRcdFx0fVxyXG5cdFx0XHRuZXdfbWVkaWEuaWQgPSAnZGlzcGxheWVkX21lZGlhJztcclxuXHRcdFx0bmV3X21lZGlhLnNyYyA9IHRoaXMuZ2V0QXR0cmlidXRlKCdzcmMnKTtcclxuXHRcdFx0bGV0IG9sZENoaWxkID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Rpc3BsYXllZF9tZWRpYScpO1xyXG5cdFx0XHRvbGRDaGlsZC5yZW1vdmUoKTtcclxuXHRcdFx0ZGlzcGxheS5hcHBlbmRDaGlsZChuZXdfbWVkaWEpO1xyXG5cdFx0fSk7XHJcblx0fSk7XHJcbn1cclxuIiwiLy8gV2Ugc2VsZWN0IHRoZSBlbGVtZW50cyB3ZSBuZWVkLlxyXG5sZXQgZHJvcGRvd25zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLm5hdmJhciAuZHJvcGRvd24tdG9nZ2xlcicpO1xyXG5sZXQgZHJvcGRvd25Jc09wZW4gPSBmYWxzZTtcclxuXHJcbi8vIFdlIGhhbmRsZSBkcm9wZG93biBtZW51c1xyXG5pZiAoZHJvcGRvd25zLmxlbmd0aCkge1xyXG5cdGRyb3Bkb3ducy5mb3JFYWNoKChkcm9wZG93bikgPT4ge1xyXG5cdFx0ZHJvcGRvd24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZXZlbnQpID0+IHtcclxuXHRcdFx0bGV0IHRhcmdldCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoYCMke2V2ZW50LnRhcmdldC5kYXRhc2V0LmRyb3Bkb3dufWApO1xyXG5cclxuXHRcdFx0aWYgKHRhcmdldCkge1xyXG5cdFx0XHRcdGlmICh0YXJnZXQuY2xhc3NMaXN0LmNvbnRhaW5zKCdzaG93JykpIHtcclxuXHRcdFx0XHRcdHRhcmdldC5jbGFzc0xpc3QucmVtb3ZlKCdzaG93Jyk7XHJcblx0XHRcdFx0XHRkcm9wZG93bklzT3BlbiA9IGZhbHNlO1xyXG5cdFx0XHRcdH0gZWxzZSB7XHJcblx0XHRcdFx0XHR0YXJnZXQuY2xhc3NMaXN0LmFkZCgnc2hvdycpO1xyXG5cdFx0XHRcdFx0ZHJvcGRvd25Jc09wZW4gPSB0cnVlO1xyXG5cdFx0XHRcdH1cclxuXHRcdFx0fVxyXG5cdFx0fSk7XHJcblx0fSk7XHJcbn1cclxuXHJcbi8vIFdlIGFkZCBhbiBldmVudCBsaXN0ZW5lciB0byB0aGUgd2luZG93IHRvIGNsb3NlIHRoZSBkcm9wZG93bnMgd2hlbiB0aGUgdXNlciBjbGlja3Mgb3V0c2lkZSBvZiB0aGVtLlxyXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignbW91c2V1cCcsIChldmVudCkgPT4ge1xyXG5cdGlmIChkcm9wZG93bklzT3Blbikge1xyXG5cdFx0ZHJvcGRvd25zLmZvckVhY2goKGRyb3Bkb3duQnV0dG9uKSA9PiB7XHJcblx0XHRcdGxldCBkcm9wZG93biA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoYCMke2Ryb3Bkb3duQnV0dG9uLmRhdGFzZXQuZHJvcGRvd259YCk7XHJcblx0XHRcdGxldCB0YXJnZXRJc0Ryb3Bkb3duID0gZHJvcGRvd24gPT0gZXZlbnQudGFyZ2V0O1xyXG5cclxuXHRcdFx0aWYgKGRyb3Bkb3duQnV0dG9uID09IGV2ZW50LnRhcmdldCkge1xyXG5cdFx0XHRcdHJldHVybjtcclxuXHRcdFx0fVxyXG5cclxuXHRcdFx0aWYgKCF0YXJnZXRJc0Ryb3Bkb3duICYmICFkcm9wZG93bi5jb250YWlucyhldmVudC50YXJnZXQpKSB7XHJcblx0XHRcdFx0ZHJvcGRvd24uY2xhc3NMaXN0LnJlbW92ZSgnc2hvdycpO1xyXG5cdFx0XHR9XHJcblx0XHR9KTtcclxuXHR9XHJcbn0pO1xyXG5cclxuLy8gV2UgaGFuZGxlIHNtYWxsIHNjcmVlbnNcclxuZnVuY3Rpb24gaGFuZGxlU21hbGxTY3JlZW5zKCkge1xyXG5cdGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5uYXZiYXItdG9nZ2xlcicpLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4ge1xyXG5cdFx0bGV0IG5hdmJhck1lbnUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcubmF2YmFyLW1lbnUnKTtcclxuXHJcblx0XHRpZiAoIW5hdmJhck1lbnUuY2xhc3NMaXN0LmNvbnRhaW5zKCdhY3RpdmUnKSkge1xyXG5cdFx0XHRuYXZiYXJNZW51LmNsYXNzTGlzdC5hZGQoJ2FjdGl2ZScpO1xyXG5cdFx0fSBlbHNlIHtcclxuXHRcdFx0bmF2YmFyTWVudS5jbGFzc0xpc3QucmVtb3ZlKCdhY3RpdmUnKTtcclxuXHRcdH1cclxuXHR9KTtcclxufVxyXG5cclxuaGFuZGxlU21hbGxTY3JlZW5zKCk7XHJcbiIsIi8vIFdlIGdldCB0aGUgaHRtbCBoZWFkIHRpdGxlXHJcbmNvbnN0IGhlYWRUaXRsZSA9IGRvY3VtZW50LmhlYWQucXVlcnlTZWxlY3RvcigndGl0bGUnKS5pbm5lckhUTUw7XHJcbmNvbnNvbGUubG9nKGhlYWRUaXRsZSk7XHJcblxyXG5pZiAoaGVhZFRpdGxlLmluY2x1ZGVzKCdIb21lJykgfHwgaGVhZFRpdGxlLmluY2x1ZGVzKCdDYXRlZ29yeScpKSB7XHJcblx0Ly8gV2UgZ3JhYiB0aGUgZGVsZXRlX3RyaWNrX2J1dHRvbnMuXHJcblx0Y29uc3QgZGVsZXRlVHJpY2tCdXR0b24gPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdkZWxldGVfdHJpY2tfYnV0dG9uJyk7XHJcblxyXG5cdC8vIFdlIGxvb3AgdGhyb3VnaCB0aGUgZGVsZXRlX3RyaWNrX2J1dHRvbnMgYW5kIGFkZCBhbiBldmVudCBsaXN0ZW5lciBvbiBlYWNoIG9uZS4uXHJcblx0Zm9yIChsZXQgaSA9IDA7IGkgPCBkZWxldGVUcmlja0J1dHRvbi5sZW5ndGg7IGkrKykge1xyXG5cdFx0ZGVsZXRlVHJpY2tCdXR0b25baV0uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBnZXRUcmlja0lkKTtcclxuXHRcdGZ1bmN0aW9uIGdldFRyaWNrSWQoKSB7XHJcblx0XHRcdC8vIE9uIGNsaWNrLCB3ZSBkaXNwbGF5IHRoZSBtb2RhbC5cclxuXHRcdFx0bW9kYWxNYW5hZ2VtZW50KCk7XHJcblx0XHRcdC8vIFRoZW4gd2UgZ2V0IHRoZSB0cmljay5pZCBhbmQgcGFzcyBpdCB0byB0aGUgZGVsZXRlX2J1dHRvblxyXG5cdFx0XHRjb25zdCB0cmlja0lkID0gZGVsZXRlVHJpY2tCdXR0b25baV0uZ2V0QXR0cmlidXRlKCdpZCcpO1xyXG5cdFx0XHRkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGVsZXRlX2J1dHRvbicpLnNldEF0dHJpYnV0ZSgnZGF0YS10cmljay1pZCcsIHRyaWNrSWQpO1xyXG5cdFx0fVxyXG5cdH1cclxuXHJcblx0ZnVuY3Rpb24gbW9kYWxNYW5hZ2VtZW50KCkge1xyXG5cdFx0Ly8gd2UgZ3JhYiB0aGUgbW9kYWwgYW5kIGRpc3BsYXkgaXQgYXMgYSBibG9jay5cclxuXHRcdGxldCBtb2RhbCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdkZWxldGVfdHJpY2tfbW9kYWwnKTtcclxuXHRcdG1vZGFsLnN0eWxlLmRpc3BsYXkgPSAnYmxvY2snO1xyXG5cclxuXHRcdC8vIFdlIGdyYWIgdGhlIGNsb3NlIGJ1dHRvbiBhbmQgY2FuY2VsIGJ1dHRvbiBhbmQgYWRkIGV2ZW50IGxpc3RlbmVyIHRvIGFsbG93IHRvIGNsb3NlIHRoZSBtb2RhbC5cclxuXHRcdGxldCBtb2RhbENsb3NlQnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Nsb3NlX21vZGFsX2J1dHRvbicpO1xyXG5cdFx0bW9kYWxDbG9zZUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGNsb3NlTW9kYWwpO1xyXG5cdFx0bGV0IG1vZGFsQ2FuY2VsQnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2NhbmNlbF9kZWxldGVfYnV0dG9uJyk7XHJcblx0XHRtb2RhbENhbmNlbEJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGNsb3NlTW9kYWwpO1xyXG5cclxuXHRcdGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdkZWxldGVfYnV0dG9uJykuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBkZWxldGVUcmljayk7XHJcblxyXG5cdFx0Ly8gV2UgZ3JhYiB0aGUgd2luZG93IGFuZCBhZGQgYW4gZXZlbnQgbGlzdGVuZXIgdG8gY2xvc2UgdGhlIG1vZGFsIGlmIHRoZSB1c2VyIGNsaWNrcyBvdXRzaWRlIG9mIGl0LlxyXG5cdFx0d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGV2ZW50KSB7XHJcblx0XHRcdGlmIChldmVudC50YXJnZXQgPT0gbW9kYWwpIHtcclxuXHRcdFx0XHRtb2RhbC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xyXG5cdFx0XHR9XHJcblx0XHR9KTtcclxuXHJcblx0XHRmdW5jdGlvbiBjbG9zZU1vZGFsKCkge1xyXG5cdFx0XHRtb2RhbC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xyXG5cdFx0fVxyXG5cclxuXHRcdGZ1bmN0aW9uIGRlbGV0ZVRyaWNrKCkge1xyXG5cdFx0XHQvLyBXZSBncmFiIHRoZSB0cmljay5pZCBmcm9tIHRoZSBkZWxldGVfYnV0dG9uIGFuZCBwYXNzIGl0IHRvIHRoZSB1cmwuXHJcblx0XHRcdGxldCB0cmlja1RvRGVsZXRlID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RlbGV0ZV9idXR0b24nKS5nZXRBdHRyaWJ1dGUoJ2RhdGEtdHJpY2staWQnKTtcclxuXHRcdFx0bGV0IHVybCA9ICdodHRwczovLzEyNy4wLjAuMTo4MDAwL3RyaWNrLycgKyB0cmlja1RvRGVsZXRlICsgJy9kZWxldGUnO1xyXG5cdFx0XHQvLyBXZSBmZXRjaCB0aGUgdXJsIGFuZCB1c2UgdGhlIFN5bWZvbnkgY29udHJvbGxlciB0byBkZWxldGUgdGhlIHRyaWNrLlxyXG5cdFx0XHQvLyBXZSB3YWl0IGZvciB0aGUgcmVzcG9uc2UgYW5kIGlmIGl0J3Mgb2ssIHdlIGNsb3NlIHRoZSBtb2RhbC5cclxuXHRcdFx0ZmV0Y2godXJsKVxyXG5cdFx0XHRcdC50aGVuKChyZXNwb25zZSkgPT4ge1xyXG5cdFx0XHRcdFx0aWYgKHJlc3BvbnNlLm9rKSB7XHJcblx0XHRcdFx0XHRcdG1vZGFsLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7XHJcblx0XHRcdFx0XHR9XHJcblx0XHRcdFx0fSlcclxuXHRcdFx0XHQudGhlbigoZGF0YSkgPT4ge1xyXG5cdFx0XHRcdFx0Ly8gV2UgcmVsb2FkIHRoZSBwYWdlLlxyXG5cdFx0XHRcdFx0d2luZG93LmxvY2F0aW9uLnJlbG9hZCgpO1xyXG5cdFx0XHRcdH0pO1xyXG5cdFx0fVxyXG5cdH1cclxufVxyXG4iLCIvLyBXZSBnZXQgdGhlIGh0bWwgaGVhZCB0aXRsZVxyXG5jb25zdCBoZWFkVGl0bGUgPSBkb2N1bWVudC5oZWFkLnF1ZXJ5U2VsZWN0b3IoJ3RpdGxlJykuaW5uZXJIVE1MO1xyXG5cclxuaWYgKGhlYWRUaXRsZS5pbmNsdWRlcygnSG9tZScpKSB7XHJcblx0Ly8gV2UgZ3JhYiB0aGUgZGlzcGxheS1tb3JlX2J1dHRvbiBhbmQgYWRkIGFuIGV2ZW50IGxpc3RlbmVyLlxyXG5cdGNvbnN0IGRpc3BsYXlNb3JlQnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Rpc3BsYXktbW9yZV9idXR0b24nKTtcclxuXHRkaXNwbGF5TW9yZUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGRpc3BsYXlNb3JlVHJpY2tzKTtcclxuXHJcblx0ZnVuY3Rpb24gZGlzcGxheU1vcmVUcmlja3MoKSB7XHJcblx0XHRnZXRNb3JlVHJpY2tzKGdldExhc3RUcmlja051bWJlcigpKTtcclxuXHR9XHJcblxyXG5cdC8vIFdlIGdldCB0aGUgbnVtYmVyIG9mIHRyaWNrcyBkaXNwbGF5ZWQgb24gc2NyZWVuXHJcblx0ZnVuY3Rpb24gZ2V0TGFzdFRyaWNrTnVtYmVyKCkge1xyXG5cdFx0bGV0IHRyaWNrc0FycmF5ID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgndHJpY2snKTtcclxuXHRcdGxldCBsYXN0VHJpY2tOdW1iZXIgPSBwYXJzZUludCh0cmlja3NBcnJheS5sZW5ndGgpIC0gMTtcclxuXHRcdHJldHVybiBsYXN0VHJpY2tOdW1iZXI7XHJcblx0fVxyXG5cclxuXHQvLyBXZSBnZXQgdGhlIHN1bSBvZiB0cmljayBhdmFpbGFibGUgaW4gdGhlIGRhdGFiYXNlXHJcblx0ZnVuY3Rpb24gZ2V0VHJpY2tzQ291bnQoKSB7XHJcblx0XHRsZXQgdHJpY2tzQ291bnQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndHJpY2tzJykuZmlyc3RFbGVtZW50Q2hpbGQuaWQucmVwbGFjZSgndHJpY2tzX2NvdW50XycsICcnKTtcclxuXHRcdGxldCBkaXNwbGF5ZWRUcmlja3NDb3VudCA9IHBhcnNlSW50KGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ3RyaWNrJykubGVuZ3RoKTtcclxuXHRcdGxldCB0cmlja3NNYXJrZXIgPSBwYXJzZUludCh0cmlja3NDb3VudCkgLSBkaXNwbGF5ZWRUcmlja3NDb3VudDtcclxuXHRcdHJldHVybiB0cmlja3NNYXJrZXI7XHJcblx0fVxyXG5cclxuXHQvLyBXZSBxdWVyeSBmb3IgbW9yZSB0cmlja3NcclxuXHRmdW5jdGlvbiBnZXRNb3JlVHJpY2tzKGxhc3RUcmlja0luZGV4KSB7XHJcblx0XHRsZXQgdXJsID0gJ2h0dHBzOi8vbG9jYWxob3N0OjgwMDAvbG9hZC1tb3JlLXRyaWNrcy8nICsgbGFzdFRyaWNrSW5kZXggKyAnLycgKyBnZXRUcmlja3NDb3VudCgpO1xyXG5cdFx0Y29uc29sZS5sb2codXJsKTtcclxuXHRcdGZldGNoKHVybClcclxuXHRcdFx0LnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XHJcblx0XHRcdFx0cmV0dXJuIHJlc3BvbnNlLnRleHQoKTtcclxuXHRcdFx0fSlcclxuXHRcdFx0LnRoZW4oZnVuY3Rpb24gKGh0bWwpIHtcclxuXHRcdFx0XHRsZXQgdHJpY2tzID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3RyaWNrc19saXN0Jyk7XHJcblx0XHRcdFx0bGV0IGxvYWRNb3JlQnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2xvYWRfbW9yZV9jYXJkJyk7XHJcblx0XHRcdFx0Ly8gV2UgcmVtb3ZlIHRoZSBsb2FkIG1vcmUgYnV0dG9uIGZyb20gdGhlIHRyaWNrcyBsaXN0XHJcblx0XHRcdFx0dHJpY2tzLnJlbW92ZUNoaWxkKGxvYWRNb3JlQnV0dG9uKTtcclxuXHRcdFx0XHQvLyBXZSBpbnNlcnQgdGhlIG5ldyB0cmlja3MgYmVmb3JlIHRoZSBsb2FkIG1vcmUgYnV0dG9uIGluIHRoZSB0cmlja3MgbGlzdFxyXG5cdFx0XHRcdHRyaWNrcy5pbnNlcnRBZGphY2VudEhUTUwoJ2JlZm9yZWVuZCcsIGh0bWwpO1xyXG5cdFx0XHRcdC8vIFdlIGNoZWNrIGlmIHRoZXJlIGFuIGlkICd0cmlja3NfY291bnRfJyArIGxhc3RUcmlja0luZGV4IGluIHRoZSB0cmlja3MgbGlzdFxyXG5cdFx0XHRcdC8vIElmIHRoZXJlIGlzIG5vIGlkICd0cmlja3NfY291bnRfJyArIGxhc3RUcmlja0luZGV4LCBpdCBtZWFucyB0aGF0IHRoZXJlIGlzIG1vcmUgdHJpY2tzIHRvIGRpc3BsYXlcclxuXHRcdFx0XHQvLyBTbyB3ZSBhZGQgdGhlIGxvYWQgbW9yZSBidXR0b25cclxuXHRcdFx0XHRpZiAoIWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0cmlja3NfY291bnRfJyArIHBhcnNlSW50KGdldExhc3RUcmlja051bWJlcigpICsgMSkpKSB7XHJcblx0XHRcdFx0XHQvLyBXZSBpbnNlcnQgdGhlIGxvYWQgbW9yZSBidXR0b24gYXQgdGhlIGVuZCBvZiB0aGUgdHJpY2tzIGxpc3RcclxuXHRcdFx0XHRcdHRyaWNrcy5pbnNlcnRBZGphY2VudEhUTUwoJ2JlZm9yZWVuZCcsIGxvYWRNb3JlQnV0dG9uLm91dGVySFRNTCk7XHJcblx0XHRcdFx0fVxyXG5cdFx0XHRcdGNvbnN0IGRpc3BsYXlNb3JlQnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Rpc3BsYXktbW9yZV9idXR0b24nKTtcclxuXHRcdFx0XHRkaXNwbGF5TW9yZUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGRpc3BsYXlNb3JlVHJpY2tzKTtcclxuXHRcdFx0fSlcclxuXHRcdFx0LmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xyXG5cdFx0XHRcdGNvbnNvbGUubG9nKGVycm9yKTtcclxuXHRcdFx0fSk7XHJcblx0fVxyXG59XHJcbiIsIi8vIFdlIGdldCB0aGUgaHRtbCBoZWFkIHRpdGxlXHJcbmNvbnN0IGhlYWRUaXRsZSA9IGRvY3VtZW50LmhlYWQucXVlcnlTZWxlY3RvcigndGl0bGUnKS5pbm5lckhUTUw7XHJcblxyXG5pZiAoaGVhZFRpdGxlLmluY2x1ZGVzKCdFZGl0JykgfHwgaGVhZFRpdGxlLmluY2x1ZGVzKCdOZXcnKSkge1xyXG5cdC8vIFdlIGRlZmluZSBhIHZhcmlhYmxlIGJhc2VkIG9uIHRoZSBwYWdlIHRpdGxlLlxyXG5cdGxldCBwYWdlID0gaGVhZFRpdGxlLmluY2x1ZGVzKCdFZGl0JykgPyAnZWRpdCcgOiAnYWRkJztcclxuXHQvLyBXZSBncmFiIHRoZSBidXR0b24gdG8gYWRkIGlucHV0IGZpZWxkc1xyXG5cdGxldCBhZGRMaW5rQnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2FkZC12aWRlby1saW5rLWJ1dHRvbicpO1xyXG5cdC8vIFdlIGRlZmluZSB0d28gY291bnRlcnMgZm9yIHRoZSBpbnB1dCBmaWVsZHMgYW5kIHRoZSByZW1vdmUgYnV0dG9uIGFzc29jaWF0ZSB3aXRoIGl0XHJcblx0bGV0IGFkZExpbmtDb3VudGVyID0gMDtcclxuXHRsZXQgcmVtb3ZlTGlua0NvdW50ZXIgPSAwO1xyXG5cdC8vIFdlIHdyaXRlIGZ1bmN0aW9ucyB0byBpbmNyZW1lbnQgdGhvc2UgY291bnRlclxyXG5cdGZ1bmN0aW9uIGluY3JlbWVudEFkZExpbmtDb3VudGVyKCkge1xyXG5cdFx0YWRkTGlua0NvdW50ZXIrKztcclxuXHRcdHJldHVybiBhZGRMaW5rQ291bnRlcjtcclxuXHR9XHJcblx0ZnVuY3Rpb24gaW5jcmVtZW50UmVtb3ZlTGlua0NvdW50ZXIoKSB7XHJcblx0XHRyZW1vdmVMaW5rQ291bnRlcisrO1xyXG5cdFx0cmV0dXJuIHJlbW92ZUxpbmtDb3VudGVyO1xyXG5cdH1cclxuXHQvLyBXZSBoYWQgRXZlbnRMaXN0ZW5lciB0aGUgYnV0dG9uIHRvIGFkZCBpbnB1dCBmaWVsZHNcclxuXHRhZGRMaW5rQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcclxuXHRcdGUucHJldmVudERlZmF1bHQoKTtcclxuXHRcdC8vIFdlIGluY3JlbWVudCB0aGUgbGluayBjb3VudGVyIG9mIDFcclxuXHRcdGxldCBsaW5rQ291bnRlciA9IGluY3JlbWVudEFkZExpbmtDb3VudGVyKCk7XHJcblx0XHQvLyBXZSBjcmVhdGUgdGhlIG5ldyBkaXYgZm9yIHRoZSBpbnB1dCBmaWVsZCBlbGVtZW50IGFuZCBpdHMgYnV0dG9uXHJcblx0XHRsZXQgbmV3TGluayA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2RpdicpO1xyXG5cdFx0bmV3TGluay5jbGFzc05hbWUgPSAndmlkZW9fX2xpbmtfX2FkZGVkX19jb250YWluZXInO1xyXG5cdFx0Ly8gV2UgY3JlYXRlIHRoZSBpbnB1dCBmaWVsZFxyXG5cdFx0bGV0IG5ld0lucHV0ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnaW5wdXQnKTtcclxuXHRcdG5ld0lucHV0LnR5cGUgPSAndGV4dCc7XHJcblx0XHRuZXdJbnB1dC5pZCA9IHBhZ2UgKyAnLXRyaWNrLWVtYmVkLXZpZGVvLWxpbmtzLScgKyBsaW5rQ291bnRlcjtcclxuXHRcdG5ld0lucHV0Lm5hbWUgPSBwYWdlICsgJ190cmlja1tlbWJlZF92aWRlb19saW5rc11bJyArIGxpbmtDb3VudGVyICsgJ10nO1xyXG5cdFx0bmV3SW5wdXQudmFsdWUgPSAnJztcclxuXHRcdG5ld0lucHV0LnBsYWNlaG9sZGVyID0gJ2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9eHh4eHh4eHh4eHgnO1xyXG5cdFx0bmV3SW5wdXQuY2xhc3NOYW1lID0gJ3ZpZGVvX19saW5rX19hZGRlZCc7XHJcblx0XHQvLyBXZSBjcmVhdGUgdGhlIHJlbW92ZSBidXR0b25cclxuXHRcdGxldCByZW1vdmVMaW5rQnV0dG9uID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnYnV0dG9uJyk7XHJcblx0XHRyZW1vdmVMaW5rQnV0dG9uLnR5cGUgPSAnYnV0dG9uJztcclxuXHRcdHJlbW92ZUxpbmtCdXR0b24uaWQgPSAncmVtb3ZlLXZpZGVvLWxpbmstYnV0dG9uLScgKyBpbmNyZW1lbnRSZW1vdmVMaW5rQ291bnRlcigpO1xyXG5cdFx0cmVtb3ZlTGlua0J1dHRvbi5jbGFzc05hbWUgPSAncmVtb3ZlX192aWRlb19fbGlua19fYnV0dG9uJztcclxuXHRcdHJlbW92ZUxpbmtCdXR0b24uaW5uZXJIVE1MID0gJ1gnO1xyXG5cdFx0Ly8gV2UgaGFkIGV2ZXJ5dGhpbmcgdG8gdGhlIERPTVxyXG5cdFx0bmV3TGluay5hcHBlbmRDaGlsZChuZXdJbnB1dCk7XHJcblx0XHRuZXdMaW5rLmFwcGVuZENoaWxkKHJlbW92ZUxpbmtCdXR0b24pO1xyXG5cdFx0bGV0IGxpbmtDb250YWluZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYWRkLXZpZGVvLWxpbmtzJyk7XHJcblx0XHRsaW5rQ29udGFpbmVyLmFwcGVuZENoaWxkKG5ld0xpbmspO1xyXG5cdFx0Ly8gV2UgYWRkIGV2ZW50IGxpc3RlbmVycyB0byB0aGUgYnV0dG9ucyBhbmQgYWRkIGxvZ2ljIHRvIHJlbW92ZSB0aGUgc2VsZWN0ZWQgbGlua1xyXG5cdFx0bGV0IHJlbW92ZUxpbmtCdXR0b25zID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgncmVtb3ZlX192aWRlb19fbGlua19fYnV0dG9uJyk7XHJcblx0XHRmb3IgKGxldCBpID0gMDsgaSA8IHJlbW92ZUxpbmtCdXR0b25zLmxlbmd0aDsgaSsrKSB7XHJcblx0XHRcdHJlbW92ZUxpbmtCdXR0b25zW2ldLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcclxuXHRcdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XHJcblx0XHRcdFx0bGV0IGxpbmtUb1JlbW92ZSA9IHRoaXMucGFyZW50Tm9kZTtcclxuXHRcdFx0XHRsaW5rVG9SZW1vdmUucmVtb3ZlKCk7XHJcblx0XHRcdH0pO1xyXG5cdFx0fVxyXG5cdH0pO1xyXG59XHJcbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJjYXJvdXNlbFRlc3QiLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJsZW5ndGgiLCJkaXNwbGF5IiwicXVlcnlTZWxlY3RvciIsImltZ3MiLCJxdWVyeVNlbGVjdG9yQWxsIiwibGVmdEJ0biIsInJpZ2h0QnRuIiwiaW1nU2xpZGVyIiwibmV3X2ltZyIsInRhZ05hbWUiLCJjcmVhdGVFbGVtZW50Iiwic3JjIiwibWVkaWFTdHlsaW5nRnVuY3Rpb24iLCJtZWRpYSIsImlkIiwid2lkdGgiLCJoZWlnaHQiLCJhbGxvdyIsImF1dG9wbGF5IiwiYXBwZW5kQ2hpbGQiLCJsZWZ0IiwiYWRkRXZlbnRMaXN0ZW5lciIsIm5leHQiLCJzdHlsZSIsInRyYW5zZm9ybSIsImNvbmNhdCIsImJlZm9yZSIsImZvckVhY2giLCJpbWciLCJlIiwibmV3X21lZGlhIiwidW5kZWZpbmVkIiwiZ2V0QXR0cmlidXRlIiwib2xkQ2hpbGQiLCJnZXRFbGVtZW50QnlJZCIsInJlbW92ZSIsImRyb3Bkb3ducyIsImRyb3Bkb3duSXNPcGVuIiwiZHJvcGRvd24iLCJldmVudCIsInRhcmdldCIsImRhdGFzZXQiLCJjbGFzc0xpc3QiLCJjb250YWlucyIsImFkZCIsIndpbmRvdyIsImRyb3Bkb3duQnV0dG9uIiwidGFyZ2V0SXNEcm9wZG93biIsImhhbmRsZVNtYWxsU2NyZWVucyIsIm5hdmJhck1lbnUiLCJoZWFkVGl0bGUiLCJoZWFkIiwiaW5uZXJIVE1MIiwiY29uc29sZSIsImxvZyIsImluY2x1ZGVzIiwibW9kYWxNYW5hZ2VtZW50IiwibW9kYWwiLCJtb2RhbENsb3NlQnV0dG9uIiwiY2xvc2VNb2RhbCIsIm1vZGFsQ2FuY2VsQnV0dG9uIiwiZGVsZXRlVHJpY2siLCJ0cmlja1RvRGVsZXRlIiwidXJsIiwiZmV0Y2giLCJ0aGVuIiwicmVzcG9uc2UiLCJvayIsImRhdGEiLCJsb2NhdGlvbiIsInJlbG9hZCIsImRlbGV0ZVRyaWNrQnV0dG9uIiwiX2xvb3AiLCJpIiwiZ2V0VHJpY2tJZCIsInRyaWNrSWQiLCJzZXRBdHRyaWJ1dGUiLCJkaXNwbGF5TW9yZVRyaWNrcyIsImdldE1vcmVUcmlja3MiLCJnZXRMYXN0VHJpY2tOdW1iZXIiLCJ0cmlja3NBcnJheSIsImxhc3RUcmlja051bWJlciIsInBhcnNlSW50IiwiZ2V0VHJpY2tzQ291bnQiLCJ0cmlja3NDb3VudCIsImZpcnN0RWxlbWVudENoaWxkIiwicmVwbGFjZSIsImRpc3BsYXllZFRyaWNrc0NvdW50IiwidHJpY2tzTWFya2VyIiwibGFzdFRyaWNrSW5kZXgiLCJ0ZXh0IiwiaHRtbCIsInRyaWNrcyIsImxvYWRNb3JlQnV0dG9uIiwicmVtb3ZlQ2hpbGQiLCJpbnNlcnRBZGphY2VudEhUTUwiLCJvdXRlckhUTUwiLCJkaXNwbGF5TW9yZUJ1dHRvbiIsImVycm9yIiwiaW5jcmVtZW50QWRkTGlua0NvdW50ZXIiLCJhZGRMaW5rQ291bnRlciIsImluY3JlbWVudFJlbW92ZUxpbmtDb3VudGVyIiwicmVtb3ZlTGlua0NvdW50ZXIiLCJwYWdlIiwiYWRkTGlua0J1dHRvbiIsInByZXZlbnREZWZhdWx0IiwibGlua0NvdW50ZXIiLCJuZXdMaW5rIiwiY2xhc3NOYW1lIiwibmV3SW5wdXQiLCJ0eXBlIiwibmFtZSIsInZhbHVlIiwicGxhY2Vob2xkZXIiLCJyZW1vdmVMaW5rQnV0dG9uIiwibGlua0NvbnRhaW5lciIsInJlbW92ZUxpbmtCdXR0b25zIiwibGlua1RvUmVtb3ZlIiwicGFyZW50Tm9kZSJdLCJzb3VyY2VSb290IjoiIn0=