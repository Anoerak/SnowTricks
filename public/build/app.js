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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQzJCOztBQUUzQjtBQUNBOztBQUVrRDtBQUNNO0FBQ0k7QUFDTjs7Ozs7Ozs7Ozs7Ozs7QUNuQnREO0FBQ0EsSUFBSUEsWUFBWSxHQUFHQyxRQUFRLENBQUNDLHNCQUFzQixDQUFDLHFCQUFxQixDQUFDO0FBRXpFLElBQUlGLFlBQVksQ0FBQ0csTUFBTSxHQUFHLENBQUMsRUFBRTtFQUM1QjtFQUNBLElBQUlDLE9BQU8sR0FBR0gsUUFBUSxDQUFDSSxhQUFhLENBQUMsZ0JBQWdCLENBQUM7RUFDdEQsSUFBSUMsSUFBSSxHQUFHTCxRQUFRLENBQUNNLGdCQUFnQixDQUFDLFlBQVksQ0FBQztFQUNsRCxJQUFJQyxPQUFPLEdBQUdQLFFBQVEsQ0FBQ0ksYUFBYSxDQUFDLGlCQUFpQixDQUFDO0VBQ3ZELElBQUlJLFFBQVEsR0FBR1IsUUFBUSxDQUFDSSxhQUFhLENBQUMsa0JBQWtCLENBQUM7RUFDekQsSUFBSUssU0FBUyxHQUFHVCxRQUFRLENBQUNJLGFBQWEsQ0FBQyx1QkFBdUIsQ0FBQzs7RUFFL0Q7RUFDQSxJQUFJTSxPQUFPLEdBQUdMLElBQUksQ0FBQyxDQUFDLENBQUMsQ0FBQ00sT0FBTyxLQUFLLE9BQU8sR0FBR1gsUUFBUSxDQUFDWSxhQUFhLENBQUMsUUFBUSxDQUFDLEdBQUdaLFFBQVEsQ0FBQ1ksYUFBYSxDQUFDLEtBQUssQ0FBQztFQUM1R0YsT0FBTyxDQUFDRyxHQUFHLEdBQUdSLElBQUksQ0FBQyxDQUFDLENBQUMsQ0FBQ1EsR0FBRzs7RUFFekI7RUFDQUMsb0JBQW9CLEdBQUcsU0FBQUEscUJBQUNDLEtBQUssRUFBSztJQUNqQyxJQUFJQSxLQUFLLENBQUNKLE9BQU8sS0FBSyxRQUFRLEVBQUU7TUFDL0JJLEtBQUssQ0FBQ0MsRUFBRSxHQUFHLGlCQUFpQjtNQUM1QkQsS0FBSyxDQUFDRSxLQUFLLEdBQUcsR0FBRztNQUNqQkYsS0FBSyxDQUFDRyxNQUFNLEdBQUcsR0FBRztNQUNsQkgsS0FBSyxDQUFDSSxLQUFLLEdBQUcsNEZBQTRGO01BQzFHSixLQUFLLENBQUNLLFFBQVEsR0FBRyxDQUFDO0lBQ25CLENBQUMsTUFBTTtNQUNOTCxLQUFLLENBQUNDLEVBQUUsR0FBRyxpQkFBaUI7SUFDN0I7RUFDRCxDQUFDO0VBRURGLG9CQUFvQixDQUFDSixPQUFPLENBQUM7RUFFN0JQLE9BQU8sQ0FBQ2tCLFdBQVcsQ0FBQ1gsT0FBTyxDQUFDO0VBRTVCLElBQUlZLElBQUksR0FBRyxDQUFDOztFQUVaO0VBQ0FkLFFBQVEsQ0FBQ2UsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFNBQVNDLElBQUlBLENBQUEsRUFBRztJQUNsRCxJQUFJRixJQUFJLElBQUlqQixJQUFJLENBQUNILE1BQU0sR0FBRyxDQUFDLEVBQUU7TUFDNUJvQixJQUFJLEVBQUU7TUFDTmIsU0FBUyxDQUFDZ0IsS0FBSyxDQUFDQyxTQUFTLHdCQUFBQyxNQUFBLENBQXdCTCxJQUFJLDBCQUF1QjtJQUM3RSxDQUFDLE1BQU07TUFDTkEsSUFBSSxHQUFHLENBQUM7TUFDUmIsU0FBUyxDQUFDZ0IsS0FBSyxDQUFDQyxTQUFTLGtCQUFrQjtJQUM1QztFQUNELENBQUMsQ0FBQztFQUVGbkIsT0FBTyxDQUFDZ0IsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFNBQVNLLE1BQU1BLENBQUEsRUFBRztJQUNuRCxJQUFJTixJQUFJLEdBQUcsQ0FBQyxFQUFFO01BQ2JBLElBQUksRUFBRTtNQUNOYixTQUFTLENBQUNnQixLQUFLLENBQUNDLFNBQVMseUJBQUFDLE1BQUEsQ0FBeUJMLElBQUkseUJBQXNCO0lBQzdFO0lBQ0EsSUFBSUEsSUFBSSxJQUFJLENBQUMsRUFBRTtNQUNkYixTQUFTLENBQUNnQixLQUFLLENBQUNDLFNBQVMsa0JBQWtCO0lBQzVDO0VBQ0QsQ0FBQyxDQUFDOztFQUVGO0VBQ0FyQixJQUFJLENBQUN3QixPQUFPLENBQUMsVUFBQ0MsR0FBRyxFQUFLO0lBQ3JCQSxHQUFHLENBQUNQLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxVQUFVUSxDQUFDLEVBQUU7TUFDMUMsSUFBSUMsU0FBUyxHQUFHLElBQUksQ0FBQ3JCLE9BQU8sS0FBSyxPQUFPLEdBQUdYLFFBQVEsQ0FBQ1ksYUFBYSxDQUFDLFFBQVEsQ0FBQyxHQUFHWixRQUFRLENBQUNZLGFBQWEsQ0FBQyxLQUFLLENBQUM7TUFDM0dFLG9CQUFvQixDQUFDa0IsU0FBUyxDQUFDO01BQy9CLElBQUlBLFNBQVMsQ0FBQ25CLEdBQUcsSUFBSW9CLFNBQVMsRUFBRTtRQUMvQkQsU0FBUyxDQUFDbkIsR0FBRyxHQUFHUixJQUFJLENBQUMsQ0FBQyxDQUFDLENBQUNRLEdBQUc7TUFDNUI7TUFDQW1CLFNBQVMsQ0FBQ2hCLEVBQUUsR0FBRyxpQkFBaUI7TUFDaENnQixTQUFTLENBQUNuQixHQUFHLEdBQUcsSUFBSSxDQUFDcUIsWUFBWSxDQUFDLEtBQUssQ0FBQztNQUN4QyxJQUFJQyxRQUFRLEdBQUduQyxRQUFRLENBQUNvQyxjQUFjLENBQUMsaUJBQWlCLENBQUM7TUFDekRELFFBQVEsQ0FBQ0UsTUFBTSxFQUFFO01BQ2pCbEMsT0FBTyxDQUFDa0IsV0FBVyxDQUFDVyxTQUFTLENBQUM7SUFDL0IsQ0FBQyxDQUFDO0VBQ0gsQ0FBQyxDQUFDO0FBQ0g7Ozs7Ozs7Ozs7Ozs7QUN0RUE7QUFDQSxJQUFJTSxTQUFTLEdBQUd0QyxRQUFRLENBQUNNLGdCQUFnQixDQUFDLDJCQUEyQixDQUFDO0FBQ3RFLElBQUlpQyxjQUFjLEdBQUcsS0FBSzs7QUFFMUI7QUFDQSxJQUFJRCxTQUFTLENBQUNwQyxNQUFNLEVBQUU7RUFDckJvQyxTQUFTLENBQUNULE9BQU8sQ0FBQyxVQUFDVyxRQUFRLEVBQUs7SUFDL0JBLFFBQVEsQ0FBQ2pCLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxVQUFDa0IsS0FBSyxFQUFLO01BQzdDLElBQUlDLE1BQU0sR0FBRzFDLFFBQVEsQ0FBQ0ksYUFBYSxLQUFBdUIsTUFBQSxDQUFLYyxLQUFLLENBQUNDLE1BQU0sQ0FBQ0MsT0FBTyxDQUFDSCxRQUFRLEVBQUc7TUFFeEUsSUFBSUUsTUFBTSxFQUFFO1FBQ1gsSUFBSUEsTUFBTSxDQUFDRSxTQUFTLENBQUNDLFFBQVEsQ0FBQyxNQUFNLENBQUMsRUFBRTtVQUN0Q0gsTUFBTSxDQUFDRSxTQUFTLENBQUNQLE1BQU0sQ0FBQyxNQUFNLENBQUM7VUFDL0JFLGNBQWMsR0FBRyxLQUFLO1FBQ3ZCLENBQUMsTUFBTTtVQUNORyxNQUFNLENBQUNFLFNBQVMsQ0FBQ0UsR0FBRyxDQUFDLE1BQU0sQ0FBQztVQUM1QlAsY0FBYyxHQUFHLElBQUk7UUFDdEI7TUFDRDtJQUNELENBQUMsQ0FBQztFQUNILENBQUMsQ0FBQztBQUNIOztBQUVBO0FBQ0FRLE1BQU0sQ0FBQ3hCLGdCQUFnQixDQUFDLFNBQVMsRUFBRSxVQUFDa0IsS0FBSyxFQUFLO0VBQzdDLElBQUlGLGNBQWMsRUFBRTtJQUNuQkQsU0FBUyxDQUFDVCxPQUFPLENBQUMsVUFBQ21CLGNBQWMsRUFBSztNQUNyQyxJQUFJUixRQUFRLEdBQUd4QyxRQUFRLENBQUNJLGFBQWEsS0FBQXVCLE1BQUEsQ0FBS3FCLGNBQWMsQ0FBQ0wsT0FBTyxDQUFDSCxRQUFRLEVBQUc7TUFDNUUsSUFBSVMsZ0JBQWdCLEdBQUdULFFBQVEsSUFBSUMsS0FBSyxDQUFDQyxNQUFNO01BRS9DLElBQUlNLGNBQWMsSUFBSVAsS0FBSyxDQUFDQyxNQUFNLEVBQUU7UUFDbkM7TUFDRDtNQUVBLElBQUksQ0FBQ08sZ0JBQWdCLElBQUksQ0FBQ1QsUUFBUSxDQUFDSyxRQUFRLENBQUNKLEtBQUssQ0FBQ0MsTUFBTSxDQUFDLEVBQUU7UUFDMURGLFFBQVEsQ0FBQ0ksU0FBUyxDQUFDUCxNQUFNLENBQUMsTUFBTSxDQUFDO01BQ2xDO0lBQ0QsQ0FBQyxDQUFDO0VBQ0g7QUFDRCxDQUFDLENBQUM7O0FBRUY7QUFDQSxTQUFTYSxrQkFBa0JBLENBQUEsRUFBRztFQUM3QmxELFFBQVEsQ0FBQ0ksYUFBYSxDQUFDLGlCQUFpQixDQUFDLENBQUNtQixnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsWUFBTTtJQUN6RSxJQUFJNEIsVUFBVSxHQUFHbkQsUUFBUSxDQUFDSSxhQUFhLENBQUMsY0FBYyxDQUFDO0lBRXZELElBQUksQ0FBQytDLFVBQVUsQ0FBQ1AsU0FBUyxDQUFDQyxRQUFRLENBQUMsUUFBUSxDQUFDLEVBQUU7TUFDN0NNLFVBQVUsQ0FBQ1AsU0FBUyxDQUFDRSxHQUFHLENBQUMsUUFBUSxDQUFDO0lBQ25DLENBQUMsTUFBTTtNQUNOSyxVQUFVLENBQUNQLFNBQVMsQ0FBQ1AsTUFBTSxDQUFDLFFBQVEsQ0FBQztJQUN0QztFQUNELENBQUMsQ0FBQztBQUNIO0FBRUFhLGtCQUFrQixFQUFFOzs7Ozs7Ozs7Ozs7Ozs7O0FDdERwQjtBQUNBLElBQU1FLFNBQVMsR0FBR3BELFFBQVEsQ0FBQ3FELElBQUksQ0FBQ2pELGFBQWEsQ0FBQyxPQUFPLENBQUMsQ0FBQ2tELFNBQVM7QUFFaEUsSUFBSUYsU0FBUyxDQUFDRyxRQUFRLENBQUMsTUFBTSxDQUFDLElBQUlILFNBQVMsQ0FBQ0csUUFBUSxDQUFDLFVBQVUsQ0FBQyxFQUFFO0VBQUEsSUFnQnhEQyxlQUFlLEdBQXhCLFNBQVNBLGVBQWVBLENBQUEsRUFBRztJQUMxQjtJQUNBLElBQUlDLEtBQUssR0FBR3pELFFBQVEsQ0FBQ29DLGNBQWMsQ0FBQyxvQkFBb0IsQ0FBQztJQUN6RHFCLEtBQUssQ0FBQ2hDLEtBQUssQ0FBQ3RCLE9BQU8sR0FBRyxPQUFPOztJQUU3QjtJQUNBLElBQUl1RCxnQkFBZ0IsR0FBRzFELFFBQVEsQ0FBQ29DLGNBQWMsQ0FBQyxvQkFBb0IsQ0FBQztJQUNwRXNCLGdCQUFnQixDQUFDbkMsZ0JBQWdCLENBQUMsT0FBTyxFQUFFb0MsVUFBVSxDQUFDO0lBQ3RELElBQUlDLGlCQUFpQixHQUFHNUQsUUFBUSxDQUFDb0MsY0FBYyxDQUFDLHNCQUFzQixDQUFDO0lBQ3ZFd0IsaUJBQWlCLENBQUNyQyxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUVvQyxVQUFVLENBQUM7SUFFdkQzRCxRQUFRLENBQUNvQyxjQUFjLENBQUMsZUFBZSxDQUFDLENBQUNiLGdCQUFnQixDQUFDLE9BQU8sRUFBRXNDLFdBQVcsQ0FBQzs7SUFFL0U7SUFDQWQsTUFBTSxDQUFDeEIsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFVBQVVrQixLQUFLLEVBQUU7TUFDakQsSUFBSUEsS0FBSyxDQUFDQyxNQUFNLElBQUllLEtBQUssRUFBRTtRQUMxQkEsS0FBSyxDQUFDaEMsS0FBSyxDQUFDdEIsT0FBTyxHQUFHLE1BQU07TUFDN0I7SUFDRCxDQUFDLENBQUM7SUFFRixTQUFTd0QsVUFBVUEsQ0FBQSxFQUFHO01BQ3JCRixLQUFLLENBQUNoQyxLQUFLLENBQUN0QixPQUFPLEdBQUcsTUFBTTtJQUM3QjtJQUVBLFNBQVMwRCxXQUFXQSxDQUFBLEVBQUc7TUFDdEI7TUFDQSxJQUFJQyxhQUFhLEdBQUc5RCxRQUFRLENBQUNvQyxjQUFjLENBQUMsZUFBZSxDQUFDLENBQUNGLFlBQVksQ0FBQyxlQUFlLENBQUM7TUFDMUYsSUFBSTZCLEdBQUcsR0FBRywrQkFBK0IsR0FBR0QsYUFBYSxHQUFHLFNBQVM7TUFDckU7TUFDQTtNQUNBRSxLQUFLLENBQUNELEdBQUcsQ0FBQyxDQUNSRSxJQUFJLENBQUMsVUFBQ0MsUUFBUSxFQUFLO1FBQ25CLElBQUlBLFFBQVEsQ0FBQ0MsRUFBRSxFQUFFO1VBQ2hCVixLQUFLLENBQUNoQyxLQUFLLENBQUN0QixPQUFPLEdBQUcsTUFBTTtRQUM3QjtNQUNELENBQUMsQ0FBQyxDQUNEOEQsSUFBSSxDQUFDLFVBQUNHLElBQUksRUFBSztRQUNmLElBQUloQixTQUFTLENBQUNHLFFBQVEsQ0FBQyxNQUFNLENBQUMsRUFBRTtVQUMvQjtVQUNBUixNQUFNLENBQUNzQixRQUFRLENBQUNDLE1BQU0sRUFBRTtRQUN6QixDQUFDLE1BQU07VUFDTjtVQUNBdkIsTUFBTSxDQUFDc0IsUUFBUSxDQUFDRSxPQUFPLENBQUMseUJBQXlCLENBQUM7UUFDbkQ7TUFDRCxDQUFDLENBQUM7SUFDSjtFQUNELENBQUM7RUE3REQ7RUFDQSxJQUFNQyxpQkFBaUIsR0FBR3hFLFFBQVEsQ0FBQ0Msc0JBQXNCLENBQUMscUJBQXFCLENBQUM7O0VBRWhGO0VBQUEsSUFBQXdFLEtBQUEsWUFBQUEsTUFBQUMsQ0FBQSxFQUNtRDtJQUNsREYsaUJBQWlCLENBQUNFLENBQUMsQ0FBQyxDQUFDbkQsZ0JBQWdCLENBQUMsT0FBTyxFQUFFb0QsVUFBVSxDQUFDO0lBQzFELFNBQVNBLFVBQVVBLENBQUEsRUFBRztNQUNyQjtNQUNBbkIsZUFBZSxFQUFFO01BQ2pCO01BQ0EsSUFBTW9CLE9BQU8sR0FBR0osaUJBQWlCLENBQUNFLENBQUMsQ0FBQyxDQUFDeEMsWUFBWSxDQUFDLElBQUksQ0FBQztNQUN2RGxDLFFBQVEsQ0FBQ29DLGNBQWMsQ0FBQyxlQUFlLENBQUMsQ0FBQ3lDLFlBQVksQ0FBQyxlQUFlLEVBQUVELE9BQU8sQ0FBQztJQUNoRjtFQUNELENBQUM7RUFURCxLQUFLLElBQUlGLENBQUMsR0FBRyxDQUFDLEVBQUVBLENBQUMsR0FBR0YsaUJBQWlCLENBQUN0RSxNQUFNLEVBQUV3RSxDQUFDLEVBQUU7SUFBQUQsS0FBQSxDQUFBQyxDQUFBO0VBQUE7QUEwRGxEOzs7Ozs7Ozs7Ozs7Ozs7OztBQ2xFQTtBQUNBLElBQU10QixTQUFTLEdBQUdwRCxRQUFRLENBQUNxRCxJQUFJLENBQUNqRCxhQUFhLENBQUMsT0FBTyxDQUFDLENBQUNrRCxTQUFTO0FBRWhFLElBQUlGLFNBQVMsQ0FBQ0csUUFBUSxDQUFDLE1BQU0sQ0FBQyxFQUFFO0VBQUEsSUFLdEJ1QixpQkFBaUIsR0FBMUIsU0FBU0EsaUJBQWlCQSxDQUFBLEVBQUc7SUFDNUJDLGFBQWEsQ0FBQ0Msa0JBQWtCLEVBQUUsQ0FBQztFQUNwQyxDQUFDLEVBRUQ7RUFBQSxJQUNTQSxrQkFBa0IsR0FBM0IsU0FBU0Esa0JBQWtCQSxDQUFBLEVBQUc7SUFDN0IsSUFBSUMsV0FBVyxHQUFHakYsUUFBUSxDQUFDQyxzQkFBc0IsQ0FBQyxPQUFPLENBQUM7SUFDMUQsSUFBSWlGLGVBQWUsR0FBR0MsUUFBUSxDQUFDRixXQUFXLENBQUMvRSxNQUFNLENBQUMsR0FBRyxDQUFDO0lBQ3RELE9BQU9nRixlQUFlO0VBQ3ZCLENBQUMsRUFFRDtFQUFBLElBQ1NFLGNBQWMsR0FBdkIsU0FBU0EsY0FBY0EsQ0FBQSxFQUFHO0lBQ3pCLElBQUlDLFdBQVcsR0FBR3JGLFFBQVEsQ0FBQ29DLGNBQWMsQ0FBQyxRQUFRLENBQUMsQ0FBQ2tELGlCQUFpQixDQUFDdEUsRUFBRSxDQUFDdUQsT0FBTyxDQUFDLGVBQWUsRUFBRSxFQUFFLENBQUM7SUFDckcsSUFBSWdCLG9CQUFvQixHQUFHSixRQUFRLENBQUNuRixRQUFRLENBQUNDLHNCQUFzQixDQUFDLE9BQU8sQ0FBQyxDQUFDQyxNQUFNLENBQUM7SUFDcEYsSUFBSXNGLFlBQVksR0FBR0wsUUFBUSxDQUFDRSxXQUFXLENBQUMsR0FBR0Usb0JBQW9CO0lBQy9ELE9BQU9DLFlBQVk7RUFDcEIsQ0FBQyxFQUVEO0VBQUEsSUFDU1QsYUFBYSxHQUF0QixTQUFTQSxhQUFhQSxDQUFDVSxjQUFjLEVBQUU7SUFDdEMsSUFBSTFCLEdBQUcsR0FBRywwQ0FBMEMsR0FBRzBCLGNBQWMsR0FBRyxHQUFHLEdBQUdMLGNBQWMsRUFBRTtJQUM5Rk0sT0FBTyxDQUFDQyxHQUFHLENBQUM1QixHQUFHLENBQUM7SUFDaEJDLEtBQUssQ0FBQ0QsR0FBRyxDQUFDLENBQ1JFLElBQUksQ0FBQyxVQUFVQyxRQUFRLEVBQUU7TUFDekIsT0FBT0EsUUFBUSxDQUFDMEIsSUFBSSxFQUFFO0lBQ3ZCLENBQUMsQ0FBQyxDQUNEM0IsSUFBSSxDQUFDLFVBQVU0QixJQUFJLEVBQUU7TUFDckIsSUFBSUMsTUFBTSxHQUFHOUYsUUFBUSxDQUFDb0MsY0FBYyxDQUFDLGFBQWEsQ0FBQztNQUNuRCxJQUFJMkQsY0FBYyxHQUFHL0YsUUFBUSxDQUFDb0MsY0FBYyxDQUFDLGdCQUFnQixDQUFDO01BQzlEO01BQ0EwRCxNQUFNLENBQUNFLFdBQVcsQ0FBQ0QsY0FBYyxDQUFDO01BQ2xDO01BQ0FELE1BQU0sQ0FBQ0csa0JBQWtCLENBQUMsV0FBVyxFQUFFSixJQUFJLENBQUM7TUFDNUM7TUFDQTtNQUNBO01BQ0EsSUFBSSxDQUFDN0YsUUFBUSxDQUFDb0MsY0FBYyxDQUFDLGVBQWUsR0FBRytDLFFBQVEsQ0FBQ0gsa0JBQWtCLEVBQUUsR0FBRyxDQUFDLENBQUMsQ0FBQyxFQUFFO1FBQ25GO1FBQ0FjLE1BQU0sQ0FBQ0csa0JBQWtCLENBQUMsV0FBVyxFQUFFRixjQUFjLENBQUNHLFNBQVMsQ0FBQztNQUNqRTtNQUNBLElBQU1DLGlCQUFpQixHQUFHbkcsUUFBUSxDQUFDb0MsY0FBYyxDQUFDLHFCQUFxQixDQUFDO01BQ3hFK0QsaUJBQWlCLENBQUM1RSxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUV1RCxpQkFBaUIsQ0FBQztJQUMvRCxDQUFDLENBQUMsU0FDSSxDQUFDLFVBQVVzQixLQUFLLEVBQUU7TUFDdkJWLE9BQU8sQ0FBQ0MsR0FBRyxDQUFDUyxLQUFLLENBQUM7SUFDbkIsQ0FBQyxDQUFDO0VBQ0osQ0FBQztFQW5ERDtFQUNBLElBQU1ELGlCQUFpQixHQUFHbkcsUUFBUSxDQUFDb0MsY0FBYyxDQUFDLHFCQUFxQixDQUFDO0VBQ3hFK0QsaUJBQWlCLENBQUM1RSxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUV1RCxpQkFBaUIsQ0FBQztBQWtEL0Q7Ozs7Ozs7Ozs7Ozs7QUN4REE7QUFDQSxJQUFNMUIsU0FBUyxHQUFHcEQsUUFBUSxDQUFDcUQsSUFBSSxDQUFDakQsYUFBYSxDQUFDLE9BQU8sQ0FBQyxDQUFDa0QsU0FBUztBQUVoRSxJQUFJRixTQUFTLENBQUNHLFFBQVEsQ0FBQyxNQUFNLENBQUMsSUFBSUgsU0FBUyxDQUFDRyxRQUFRLENBQUMsS0FBSyxDQUFDLEVBQUU7RUFRNUQ7RUFBQSxJQUNTOEMsdUJBQXVCLEdBQWhDLFNBQVNBLHVCQUF1QkEsQ0FBQSxFQUFHO0lBQ2xDQyxjQUFjLEVBQUU7SUFDaEIsT0FBT0EsY0FBYztFQUN0QixDQUFDO0VBQUEsSUFDUUMsMEJBQTBCLEdBQW5DLFNBQVNBLDBCQUEwQkEsQ0FBQSxFQUFHO0lBQ3JDQyxpQkFBaUIsRUFBRTtJQUNuQixPQUFPQSxpQkFBaUI7RUFDekIsQ0FBQyxFQUNEO0VBaEJBO0VBQ0EsSUFBSUMsSUFBSSxHQUFHckQsU0FBUyxDQUFDRyxRQUFRLENBQUMsTUFBTSxDQUFDLEdBQUcsTUFBTSxHQUFHLEtBQUs7RUFDdEQ7RUFDQSxJQUFJbUQsYUFBYSxHQUFHMUcsUUFBUSxDQUFDb0MsY0FBYyxDQUFDLHVCQUF1QixDQUFDO0VBQ3BFO0VBQ0EsSUFBSWtFLGNBQWMsR0FBRyxDQUFDO0VBQ3RCLElBQUlFLGlCQUFpQixHQUFHLENBQUM7RUFXekJFLGFBQWEsQ0FBQ25GLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxVQUFVUSxDQUFDLEVBQUU7SUFDcERBLENBQUMsQ0FBQzRFLGNBQWMsRUFBRTtJQUNsQjtJQUNBLElBQUlDLFdBQVcsR0FBR1AsdUJBQXVCLEVBQUU7SUFDM0M7SUFDQSxJQUFJUSxPQUFPLEdBQUc3RyxRQUFRLENBQUNZLGFBQWEsQ0FBQyxLQUFLLENBQUM7SUFDM0NpRyxPQUFPLENBQUNDLFNBQVMsR0FBRywrQkFBK0I7SUFDbkQ7SUFDQSxJQUFJQyxRQUFRLEdBQUcvRyxRQUFRLENBQUNZLGFBQWEsQ0FBQyxPQUFPLENBQUM7SUFDOUNtRyxRQUFRLENBQUNDLElBQUksR0FBRyxNQUFNO0lBQ3RCRCxRQUFRLENBQUMvRixFQUFFLEdBQUd5RixJQUFJLEdBQUcsMkJBQTJCLEdBQUdHLFdBQVc7SUFDOURHLFFBQVEsQ0FBQ0UsSUFBSSxHQUFHUixJQUFJLEdBQUcsNEJBQTRCLEdBQUdHLFdBQVcsR0FBRyxHQUFHO0lBQ3ZFRyxRQUFRLENBQUNHLEtBQUssR0FBRyxFQUFFO0lBQ25CSCxRQUFRLENBQUNJLFdBQVcsR0FBRyw2Q0FBNkM7SUFDcEVKLFFBQVEsQ0FBQ0QsU0FBUyxHQUFHLG9CQUFvQjtJQUN6QztJQUNBLElBQUlNLGdCQUFnQixHQUFHcEgsUUFBUSxDQUFDWSxhQUFhLENBQUMsUUFBUSxDQUFDO0lBQ3ZEd0csZ0JBQWdCLENBQUNKLElBQUksR0FBRyxRQUFRO0lBQ2hDSSxnQkFBZ0IsQ0FBQ3BHLEVBQUUsR0FBRywyQkFBMkIsR0FBR3VGLDBCQUEwQixFQUFFO0lBQ2hGYSxnQkFBZ0IsQ0FBQ04sU0FBUyxHQUFHLDZCQUE2QjtJQUMxRE0sZ0JBQWdCLENBQUM5RCxTQUFTLEdBQUcsR0FBRztJQUNoQztJQUNBdUQsT0FBTyxDQUFDeEYsV0FBVyxDQUFDMEYsUUFBUSxDQUFDO0lBQzdCRixPQUFPLENBQUN4RixXQUFXLENBQUMrRixnQkFBZ0IsQ0FBQztJQUNyQyxJQUFJQyxhQUFhLEdBQUdySCxRQUFRLENBQUNvQyxjQUFjLENBQUMsaUJBQWlCLENBQUM7SUFDOURpRixhQUFhLENBQUNoRyxXQUFXLENBQUN3RixPQUFPLENBQUM7SUFDbEM7SUFDQSxJQUFJUyxpQkFBaUIsR0FBR3RILFFBQVEsQ0FBQ0Msc0JBQXNCLENBQUMsNkJBQTZCLENBQUM7SUFDdEYsS0FBSyxJQUFJeUUsQ0FBQyxHQUFHLENBQUMsRUFBRUEsQ0FBQyxHQUFHNEMsaUJBQWlCLENBQUNwSCxNQUFNLEVBQUV3RSxDQUFDLEVBQUUsRUFBRTtNQUNsRDRDLGlCQUFpQixDQUFDNUMsQ0FBQyxDQUFDLENBQUNuRCxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsVUFBVVEsQ0FBQyxFQUFFO1FBQzNEQSxDQUFDLENBQUM0RSxjQUFjLEVBQUU7UUFDbEIsSUFBSVksWUFBWSxHQUFHLElBQUksQ0FBQ0MsVUFBVTtRQUNsQ0QsWUFBWSxDQUFDbEYsTUFBTSxFQUFFO01BQ3RCLENBQUMsQ0FBQztJQUNIO0VBQ0QsQ0FBQyxDQUFDO0FBQ0g7Ozs7Ozs7Ozs7OztBQ3pEQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9hcHAuanMiLCJ3ZWJwYWNrOi8vLy4vdGVtcGxhdGVzL2NvbXBvbmVudHMvY2Fyb3VzZWwvY2Fyb3VzZWwuanMiLCJ3ZWJwYWNrOi8vLy4vdGVtcGxhdGVzL2NvbXBvbmVudHMvaGVhZGVyL2hlYWRlci5qcyIsIndlYnBhY2s6Ly8vLi90ZW1wbGF0ZXMvY29tcG9uZW50cy9tb2RhbHMvZGVsZXRlX3RyaWNrLmpzIiwid2VicGFjazovLy8uL3RlbXBsYXRlcy9ob21lL2Rpc3BsYXlfdHJpY2tzL2Rpc3BsYXlfdHJpY2tzLmpzIiwid2VicGFjazovLy8uL3RlbXBsYXRlcy90cmljay9lZGl0L2VkaXRfdHJpY2suanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuc2Nzcz84ZjU5Il0sInNvdXJjZXNDb250ZW50IjpbIi8qXHJcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcclxuICpcclxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxyXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxyXG4gKi9cclxuXHJcbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcclxuLy8gaW1wb3J0ICcuL3N0eWxlcy9hcHAuY3NzJztcclxuXHJcbi8vIGFueSBTQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXHJcbmltcG9ydCAnLi9zdHlsZXMvYXBwLnNjc3MnO1xyXG5cclxuLy8gc3RhcnQgdGhlIFN0aW11bHVzIGFwcGxpY2F0aW9uXHJcbi8vIGltcG9ydCAnLi9ib290c3RyYXAnO1xyXG5cclxuaW1wb3J0ICcuLi90ZW1wbGF0ZXMvY29tcG9uZW50cy9oZWFkZXIvaGVhZGVyLmpzJztcclxuaW1wb3J0ICcuLi90ZW1wbGF0ZXMvY29tcG9uZW50cy9tb2RhbHMvZGVsZXRlX3RyaWNrLmpzJztcclxuaW1wb3J0ICcuLi90ZW1wbGF0ZXMvaG9tZS9kaXNwbGF5X3RyaWNrcy9kaXNwbGF5X3RyaWNrcy5qcyc7XHJcbmltcG9ydCAnLi4vdGVtcGxhdGVzL2NvbXBvbmVudHMvY2Fyb3VzZWwvY2Fyb3VzZWwuanMnO1xyXG5pbXBvcnQgJy4uL3RlbXBsYXRlcy90cmljay9lZGl0L2VkaXRfdHJpY2suanMnO1xyXG4iLCIvLyBJZiB3ZSBoYXZlIGEgY2Fyb3VzZWwgb24gdGhlIHBhZ2VcclxubGV0IGNhcm91c2VsVGVzdCA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ2Nhcm91c2VsX19jb250YWluZXInKTtcclxuXHJcbmlmIChjYXJvdXNlbFRlc3QubGVuZ3RoID4gMCkge1xyXG5cdC8vIFdlIHNlbGVjdCB0aGUgZWxlbWVudHMgd2UgbmVlZFxyXG5cdGxldCBkaXNwbGF5ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignW2RhdGEtZGlzcGxheV0nKTtcclxuXHRsZXQgaW1ncyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ1tkYXRhLWltZ10nKTtcclxuXHRsZXQgbGVmdEJ0biA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWJ0bi1sZWZ0XScpO1xyXG5cdGxldCByaWdodEJ0biA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWJ0bi1yaWdodF0nKTtcclxuXHRsZXQgaW1nU2xpZGVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignW2RhdGEtaW1nLWNvbnRhaW5lciBdJyk7XHJcblxyXG5cdC8vIFdlIGNyZWF0ZSB0aGUgY29udGFpbmVyIGJhc2VkIG9uIHRoZSB0YWdOYW1lXHJcblx0bGV0IG5ld19pbWcgPSBpbWdzWzBdLnRhZ05hbWUgPT09ICdWSURFTycgPyBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdpZnJhbWUnKSA6IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2ltZycpO1xyXG5cdG5ld19pbWcuc3JjID0gaW1nc1swXS5zcmM7XHJcblxyXG5cdC8vIFdlIHN0eWxlIHRoZSBjb250YWluZXJcclxuXHRtZWRpYVN0eWxpbmdGdW5jdGlvbiA9IChtZWRpYSkgPT4ge1xyXG5cdFx0aWYgKG1lZGlhLnRhZ05hbWUgPT09ICdJRlJBTUUnKSB7XHJcblx0XHRcdG1lZGlhLmlkID0gJ2Rpc3BsYXllZF9tZWRpYSc7XHJcblx0XHRcdG1lZGlhLndpZHRoID0gNzUwO1xyXG5cdFx0XHRtZWRpYS5oZWlnaHQgPSA1MDA7XHJcblx0XHRcdG1lZGlhLmFsbG93ID0gJ2FjY2VsZXJvbWV0ZXI7IGNsaXBib2FyZC13cml0ZTsgZW5jcnlwdGVkLW1lZGlhOyBneXJvc2NvcGU7IHBpY3R1cmUtaW4tcGljdHVyZTsgZnVsbHNjcmVlbic7XHJcblx0XHRcdG1lZGlhLmF1dG9wbGF5ID0gMTtcclxuXHRcdH0gZWxzZSB7XHJcblx0XHRcdG1lZGlhLmlkID0gJ2Rpc3BsYXllZF9tZWRpYSc7XHJcblx0XHR9XHJcblx0fTtcclxuXHJcblx0bWVkaWFTdHlsaW5nRnVuY3Rpb24obmV3X2ltZyk7XHJcblxyXG5cdGRpc3BsYXkuYXBwZW5kQ2hpbGQobmV3X2ltZyk7XHJcblxyXG5cdGxldCBsZWZ0ID0gMDtcclxuXHJcblx0Ly8gV2UgYWRkIGV2ZW50IGxpc3RlbmVycyB0byB0aGUgYnV0dG9uc1xyXG5cdHJpZ2h0QnRuLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gbmV4dCgpIHtcclxuXHRcdGlmIChsZWZ0IDw9IGltZ3MubGVuZ3RoIC0gMikge1xyXG5cdFx0XHRsZWZ0Kys7XHJcblx0XHRcdGltZ1NsaWRlci5zdHlsZS50cmFuc2Zvcm0gPSBgdHJhbnNsYXRleChjYWxjKCggJHtsZWZ0fSAqICgtODBweCAtIDEuNnJlbSkpKWA7XHJcblx0XHR9IGVsc2Uge1xyXG5cdFx0XHRsZWZ0ID0gMDtcclxuXHRcdFx0aW1nU2xpZGVyLnN0eWxlLnRyYW5zZm9ybSA9IGB0cmFuc2xhdGV4KDApYDtcclxuXHRcdH1cclxuXHR9KTtcclxuXHJcblx0bGVmdEJ0bi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIGJlZm9yZSgpIHtcclxuXHRcdGlmIChsZWZ0ID4gMCkge1xyXG5cdFx0XHRsZWZ0LS07XHJcblx0XHRcdGltZ1NsaWRlci5zdHlsZS50cmFuc2Zvcm0gPSBgdHJhbnNsYXRleChjYWxjKCggLSR7bGVmdH0gKiAoODBweCArIDEuNnJlbSkpKWA7XHJcblx0XHR9XHJcblx0XHRpZiAobGVmdCA9PSAwKSB7XHJcblx0XHRcdGltZ1NsaWRlci5zdHlsZS50cmFuc2Zvcm0gPSBgdHJhbnNsYXRleCgwKWA7XHJcblx0XHR9XHJcblx0fSk7XHJcblxyXG5cdC8vIFdlIGFkZCBldmVudCBsaXN0ZW5lcnMgdG8gdGhlIGltYWdlcyBhbmQgYWRkIGxvZ2ljIHRvIGRpc3BsYXkgdGhlIHNlbGVjdGVkIGltYWdlXHJcblx0aW1ncy5mb3JFYWNoKChpbWcpID0+IHtcclxuXHRcdGltZy5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XHJcblx0XHRcdGxldCBuZXdfbWVkaWEgPSB0aGlzLnRhZ05hbWUgPT09ICdWSURFTycgPyBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdpZnJhbWUnKSA6IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2ltZycpO1xyXG5cdFx0XHRtZWRpYVN0eWxpbmdGdW5jdGlvbihuZXdfbWVkaWEpO1xyXG5cdFx0XHRpZiAobmV3X21lZGlhLnNyYyA9PSB1bmRlZmluZWQpIHtcclxuXHRcdFx0XHRuZXdfbWVkaWEuc3JjID0gaW1nc1swXS5zcmM7XHJcblx0XHRcdH1cclxuXHRcdFx0bmV3X21lZGlhLmlkID0gJ2Rpc3BsYXllZF9tZWRpYSc7XHJcblx0XHRcdG5ld19tZWRpYS5zcmMgPSB0aGlzLmdldEF0dHJpYnV0ZSgnc3JjJyk7XHJcblx0XHRcdGxldCBvbGRDaGlsZCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdkaXNwbGF5ZWRfbWVkaWEnKTtcclxuXHRcdFx0b2xkQ2hpbGQucmVtb3ZlKCk7XHJcblx0XHRcdGRpc3BsYXkuYXBwZW5kQ2hpbGQobmV3X21lZGlhKTtcclxuXHRcdH0pO1xyXG5cdH0pO1xyXG59XHJcbiIsIi8vIFdlIHNlbGVjdCB0aGUgZWxlbWVudHMgd2UgbmVlZC5cclxubGV0IGRyb3Bkb3ducyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5uYXZiYXIgLmRyb3Bkb3duLXRvZ2dsZXInKTtcclxubGV0IGRyb3Bkb3duSXNPcGVuID0gZmFsc2U7XHJcblxyXG4vLyBXZSBoYW5kbGUgZHJvcGRvd24gbWVudXNcclxuaWYgKGRyb3Bkb3ducy5sZW5ndGgpIHtcclxuXHRkcm9wZG93bnMuZm9yRWFjaCgoZHJvcGRvd24pID0+IHtcclxuXHRcdGRyb3Bkb3duLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGV2ZW50KSA9PiB7XHJcblx0XHRcdGxldCB0YXJnZXQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKGAjJHtldmVudC50YXJnZXQuZGF0YXNldC5kcm9wZG93bn1gKTtcclxuXHJcblx0XHRcdGlmICh0YXJnZXQpIHtcclxuXHRcdFx0XHRpZiAodGFyZ2V0LmNsYXNzTGlzdC5jb250YWlucygnc2hvdycpKSB7XHJcblx0XHRcdFx0XHR0YXJnZXQuY2xhc3NMaXN0LnJlbW92ZSgnc2hvdycpO1xyXG5cdFx0XHRcdFx0ZHJvcGRvd25Jc09wZW4gPSBmYWxzZTtcclxuXHRcdFx0XHR9IGVsc2Uge1xyXG5cdFx0XHRcdFx0dGFyZ2V0LmNsYXNzTGlzdC5hZGQoJ3Nob3cnKTtcclxuXHRcdFx0XHRcdGRyb3Bkb3duSXNPcGVuID0gdHJ1ZTtcclxuXHRcdFx0XHR9XHJcblx0XHRcdH1cclxuXHRcdH0pO1xyXG5cdH0pO1xyXG59XHJcblxyXG4vLyBXZSBhZGQgYW4gZXZlbnQgbGlzdGVuZXIgdG8gdGhlIHdpbmRvdyB0byBjbG9zZSB0aGUgZHJvcGRvd25zIHdoZW4gdGhlIHVzZXIgY2xpY2tzIG91dHNpZGUgb2YgdGhlbS5cclxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ21vdXNldXAnLCAoZXZlbnQpID0+IHtcclxuXHRpZiAoZHJvcGRvd25Jc09wZW4pIHtcclxuXHRcdGRyb3Bkb3ducy5mb3JFYWNoKChkcm9wZG93bkJ1dHRvbikgPT4ge1xyXG5cdFx0XHRsZXQgZHJvcGRvd24gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKGAjJHtkcm9wZG93bkJ1dHRvbi5kYXRhc2V0LmRyb3Bkb3dufWApO1xyXG5cdFx0XHRsZXQgdGFyZ2V0SXNEcm9wZG93biA9IGRyb3Bkb3duID09IGV2ZW50LnRhcmdldDtcclxuXHJcblx0XHRcdGlmIChkcm9wZG93bkJ1dHRvbiA9PSBldmVudC50YXJnZXQpIHtcclxuXHRcdFx0XHRyZXR1cm47XHJcblx0XHRcdH1cclxuXHJcblx0XHRcdGlmICghdGFyZ2V0SXNEcm9wZG93biAmJiAhZHJvcGRvd24uY29udGFpbnMoZXZlbnQudGFyZ2V0KSkge1xyXG5cdFx0XHRcdGRyb3Bkb3duLmNsYXNzTGlzdC5yZW1vdmUoJ3Nob3cnKTtcclxuXHRcdFx0fVxyXG5cdFx0fSk7XHJcblx0fVxyXG59KTtcclxuXHJcbi8vIFdlIGhhbmRsZSBzbWFsbCBzY3JlZW5zXHJcbmZ1bmN0aW9uIGhhbmRsZVNtYWxsU2NyZWVucygpIHtcclxuXHRkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcubmF2YmFyLXRvZ2dsZXInKS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHtcclxuXHRcdGxldCBuYXZiYXJNZW51ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLm5hdmJhci1tZW51Jyk7XHJcblxyXG5cdFx0aWYgKCFuYXZiYXJNZW51LmNsYXNzTGlzdC5jb250YWlucygnYWN0aXZlJykpIHtcclxuXHRcdFx0bmF2YmFyTWVudS5jbGFzc0xpc3QuYWRkKCdhY3RpdmUnKTtcclxuXHRcdH0gZWxzZSB7XHJcblx0XHRcdG5hdmJhck1lbnUuY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJyk7XHJcblx0XHR9XHJcblx0fSk7XHJcbn1cclxuXHJcbmhhbmRsZVNtYWxsU2NyZWVucygpO1xyXG4iLCIvLyBXZSBnZXQgdGhlIGh0bWwgaGVhZCB0aXRsZVxyXG5jb25zdCBoZWFkVGl0bGUgPSBkb2N1bWVudC5oZWFkLnF1ZXJ5U2VsZWN0b3IoJ3RpdGxlJykuaW5uZXJIVE1MO1xyXG5cclxuaWYgKGhlYWRUaXRsZS5pbmNsdWRlcygnSG9tZScpIHx8IGhlYWRUaXRsZS5pbmNsdWRlcygnQ2F0ZWdvcnknKSkge1xyXG5cdC8vIFdlIGdyYWIgdGhlIGRlbGV0ZV90cmlja19idXR0b25zLlxyXG5cdGNvbnN0IGRlbGV0ZVRyaWNrQnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgnZGVsZXRlX3RyaWNrX2J1dHRvbicpO1xyXG5cclxuXHQvLyBXZSBsb29wIHRocm91Z2ggdGhlIGRlbGV0ZV90cmlja19idXR0b25zIGFuZCBhZGQgYW4gZXZlbnQgbGlzdGVuZXIgb24gZWFjaCBvbmUuLlxyXG5cdGZvciAobGV0IGkgPSAwOyBpIDwgZGVsZXRlVHJpY2tCdXR0b24ubGVuZ3RoOyBpKyspIHtcclxuXHRcdGRlbGV0ZVRyaWNrQnV0dG9uW2ldLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZ2V0VHJpY2tJZCk7XHJcblx0XHRmdW5jdGlvbiBnZXRUcmlja0lkKCkge1xyXG5cdFx0XHQvLyBPbiBjbGljaywgd2UgZGlzcGxheSB0aGUgbW9kYWwuXHJcblx0XHRcdG1vZGFsTWFuYWdlbWVudCgpO1xyXG5cdFx0XHQvLyBUaGVuIHdlIGdldCB0aGUgdHJpY2suaWQgYW5kIHBhc3MgaXQgdG8gdGhlIGRlbGV0ZV9idXR0b25cclxuXHRcdFx0Y29uc3QgdHJpY2tJZCA9IGRlbGV0ZVRyaWNrQnV0dG9uW2ldLmdldEF0dHJpYnV0ZSgnaWQnKTtcclxuXHRcdFx0ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2RlbGV0ZV9idXR0b24nKS5zZXRBdHRyaWJ1dGUoJ2RhdGEtdHJpY2staWQnLCB0cmlja0lkKTtcclxuXHRcdH1cclxuXHR9XHJcblxyXG5cdGZ1bmN0aW9uIG1vZGFsTWFuYWdlbWVudCgpIHtcclxuXHRcdC8vIHdlIGdyYWIgdGhlIG1vZGFsIGFuZCBkaXNwbGF5IGl0IGFzIGEgYmxvY2suXHJcblx0XHRsZXQgbW9kYWwgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGVsZXRlX3RyaWNrX21vZGFsJyk7XHJcblx0XHRtb2RhbC5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJztcclxuXHJcblx0XHQvLyBXZSBncmFiIHRoZSBjbG9zZSBidXR0b24gYW5kIGNhbmNlbCBidXR0b24gYW5kIGFkZCBldmVudCBsaXN0ZW5lciB0byBhbGxvdyB0byBjbG9zZSB0aGUgbW9kYWwuXHJcblx0XHRsZXQgbW9kYWxDbG9zZUJ1dHRvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjbG9zZV9tb2RhbF9idXR0b24nKTtcclxuXHRcdG1vZGFsQ2xvc2VCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBjbG9zZU1vZGFsKTtcclxuXHRcdGxldCBtb2RhbENhbmNlbEJ1dHRvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjYW5jZWxfZGVsZXRlX2J1dHRvbicpO1xyXG5cdFx0bW9kYWxDYW5jZWxCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBjbG9zZU1vZGFsKTtcclxuXHJcblx0XHRkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZGVsZXRlX2J1dHRvbicpLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZGVsZXRlVHJpY2spO1xyXG5cclxuXHRcdC8vIFdlIGdyYWIgdGhlIHdpbmRvdyBhbmQgYWRkIGFuIGV2ZW50IGxpc3RlbmVyIHRvIGNsb3NlIHRoZSBtb2RhbCBpZiB0aGUgdXNlciBjbGlja3Mgb3V0c2lkZSBvZiBpdC5cclxuXHRcdHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChldmVudCkge1xyXG5cdFx0XHRpZiAoZXZlbnQudGFyZ2V0ID09IG1vZGFsKSB7XHJcblx0XHRcdFx0bW9kYWwuc3R5bGUuZGlzcGxheSA9ICdub25lJztcclxuXHRcdFx0fVxyXG5cdFx0fSk7XHJcblxyXG5cdFx0ZnVuY3Rpb24gY2xvc2VNb2RhbCgpIHtcclxuXHRcdFx0bW9kYWwuc3R5bGUuZGlzcGxheSA9ICdub25lJztcclxuXHRcdH1cclxuXHJcblx0XHRmdW5jdGlvbiBkZWxldGVUcmljaygpIHtcclxuXHRcdFx0Ly8gV2UgZ3JhYiB0aGUgdHJpY2suaWQgZnJvbSB0aGUgZGVsZXRlX2J1dHRvbiBhbmQgcGFzcyBpdCB0byB0aGUgdXJsLlxyXG5cdFx0XHRsZXQgdHJpY2tUb0RlbGV0ZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdkZWxldGVfYnV0dG9uJykuZ2V0QXR0cmlidXRlKCdkYXRhLXRyaWNrLWlkJyk7XHJcblx0XHRcdGxldCB1cmwgPSAnaHR0cHM6Ly9sb2NhbGhvc3Q6ODAwMC90cmljay8nICsgdHJpY2tUb0RlbGV0ZSArICcvZGVsZXRlJztcclxuXHRcdFx0Ly8gV2UgZmV0Y2ggdGhlIHVybCBhbmQgdXNlIHRoZSBTeW1mb255IGNvbnRyb2xsZXIgdG8gZGVsZXRlIHRoZSB0cmljay5cclxuXHRcdFx0Ly8gV2Ugd2FpdCBmb3IgdGhlIHJlc3BvbnNlIGFuZCBpZiBpdCdzIG9rLCB3ZSBjbG9zZSB0aGUgbW9kYWwuXHJcblx0XHRcdGZldGNoKHVybClcclxuXHRcdFx0XHQudGhlbigocmVzcG9uc2UpID0+IHtcclxuXHRcdFx0XHRcdGlmIChyZXNwb25zZS5vaykge1xyXG5cdFx0XHRcdFx0XHRtb2RhbC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xyXG5cdFx0XHRcdFx0fVxyXG5cdFx0XHRcdH0pXHJcblx0XHRcdFx0LnRoZW4oKGRhdGEpID0+IHtcclxuXHRcdFx0XHRcdGlmIChoZWFkVGl0bGUuaW5jbHVkZXMoJ0hvbWUnKSkge1xyXG5cdFx0XHRcdFx0XHQvLyBXZSByZWxvYWQgdGhlIHBhZ2UuXHJcblx0XHRcdFx0XHRcdHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKTtcclxuXHRcdFx0XHRcdH0gZWxzZSB7XHJcblx0XHRcdFx0XHRcdC8vIFdlIHJlZGlyZWN0IHRvIHRoZSBob21lIHBhZ2UuXHJcblx0XHRcdFx0XHRcdHdpbmRvdy5sb2NhdGlvbi5yZXBsYWNlKCdodHRwczovL2xvY2FsaG9zdDo4MDAwLycpO1xyXG5cdFx0XHRcdFx0fVxyXG5cdFx0XHRcdH0pO1xyXG5cdFx0fVxyXG5cdH1cclxufVxyXG4iLCIvLyBXZSBnZXQgdGhlIGh0bWwgaGVhZCB0aXRsZVxyXG5jb25zdCBoZWFkVGl0bGUgPSBkb2N1bWVudC5oZWFkLnF1ZXJ5U2VsZWN0b3IoJ3RpdGxlJykuaW5uZXJIVE1MO1xyXG5cclxuaWYgKGhlYWRUaXRsZS5pbmNsdWRlcygnSG9tZScpKSB7XHJcblx0Ly8gV2UgZ3JhYiB0aGUgZGlzcGxheS1tb3JlX2J1dHRvbiBhbmQgYWRkIGFuIGV2ZW50IGxpc3RlbmVyLlxyXG5cdGNvbnN0IGRpc3BsYXlNb3JlQnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Rpc3BsYXktbW9yZV9idXR0b24nKTtcclxuXHRkaXNwbGF5TW9yZUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGRpc3BsYXlNb3JlVHJpY2tzKTtcclxuXHJcblx0ZnVuY3Rpb24gZGlzcGxheU1vcmVUcmlja3MoKSB7XHJcblx0XHRnZXRNb3JlVHJpY2tzKGdldExhc3RUcmlja051bWJlcigpKTtcclxuXHR9XHJcblxyXG5cdC8vIFdlIGdldCB0aGUgbnVtYmVyIG9mIHRyaWNrcyBkaXNwbGF5ZWQgb24gc2NyZWVuXHJcblx0ZnVuY3Rpb24gZ2V0TGFzdFRyaWNrTnVtYmVyKCkge1xyXG5cdFx0bGV0IHRyaWNrc0FycmF5ID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgndHJpY2snKTtcclxuXHRcdGxldCBsYXN0VHJpY2tOdW1iZXIgPSBwYXJzZUludCh0cmlja3NBcnJheS5sZW5ndGgpIC0gMTtcclxuXHRcdHJldHVybiBsYXN0VHJpY2tOdW1iZXI7XHJcblx0fVxyXG5cclxuXHQvLyBXZSBnZXQgdGhlIHN1bSBvZiB0cmljayBhdmFpbGFibGUgaW4gdGhlIGRhdGFiYXNlXHJcblx0ZnVuY3Rpb24gZ2V0VHJpY2tzQ291bnQoKSB7XHJcblx0XHRsZXQgdHJpY2tzQ291bnQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndHJpY2tzJykuZmlyc3RFbGVtZW50Q2hpbGQuaWQucmVwbGFjZSgndHJpY2tzX2NvdW50XycsICcnKTtcclxuXHRcdGxldCBkaXNwbGF5ZWRUcmlja3NDb3VudCA9IHBhcnNlSW50KGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ3RyaWNrJykubGVuZ3RoKTtcclxuXHRcdGxldCB0cmlja3NNYXJrZXIgPSBwYXJzZUludCh0cmlja3NDb3VudCkgLSBkaXNwbGF5ZWRUcmlja3NDb3VudDtcclxuXHRcdHJldHVybiB0cmlja3NNYXJrZXI7XHJcblx0fVxyXG5cclxuXHQvLyBXZSBxdWVyeSBmb3IgbW9yZSB0cmlja3NcclxuXHRmdW5jdGlvbiBnZXRNb3JlVHJpY2tzKGxhc3RUcmlja0luZGV4KSB7XHJcblx0XHRsZXQgdXJsID0gJ2h0dHBzOi8vbG9jYWxob3N0OjgwMDAvbG9hZC1tb3JlLXRyaWNrcy8nICsgbGFzdFRyaWNrSW5kZXggKyAnLycgKyBnZXRUcmlja3NDb3VudCgpO1xyXG5cdFx0Y29uc29sZS5sb2codXJsKTtcclxuXHRcdGZldGNoKHVybClcclxuXHRcdFx0LnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XHJcblx0XHRcdFx0cmV0dXJuIHJlc3BvbnNlLnRleHQoKTtcclxuXHRcdFx0fSlcclxuXHRcdFx0LnRoZW4oZnVuY3Rpb24gKGh0bWwpIHtcclxuXHRcdFx0XHRsZXQgdHJpY2tzID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3RyaWNrc19saXN0Jyk7XHJcblx0XHRcdFx0bGV0IGxvYWRNb3JlQnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2xvYWRfbW9yZV9jYXJkJyk7XHJcblx0XHRcdFx0Ly8gV2UgcmVtb3ZlIHRoZSBsb2FkIG1vcmUgYnV0dG9uIGZyb20gdGhlIHRyaWNrcyBsaXN0XHJcblx0XHRcdFx0dHJpY2tzLnJlbW92ZUNoaWxkKGxvYWRNb3JlQnV0dG9uKTtcclxuXHRcdFx0XHQvLyBXZSBpbnNlcnQgdGhlIG5ldyB0cmlja3MgYmVmb3JlIHRoZSBsb2FkIG1vcmUgYnV0dG9uIGluIHRoZSB0cmlja3MgbGlzdFxyXG5cdFx0XHRcdHRyaWNrcy5pbnNlcnRBZGphY2VudEhUTUwoJ2JlZm9yZWVuZCcsIGh0bWwpO1xyXG5cdFx0XHRcdC8vIFdlIGNoZWNrIGlmIHRoZXJlIGFuIGlkICd0cmlja3NfY291bnRfJyArIGxhc3RUcmlja0luZGV4IGluIHRoZSB0cmlja3MgbGlzdFxyXG5cdFx0XHRcdC8vIElmIHRoZXJlIGlzIG5vIGlkICd0cmlja3NfY291bnRfJyArIGxhc3RUcmlja0luZGV4LCBpdCBtZWFucyB0aGF0IHRoZXJlIGlzIG1vcmUgdHJpY2tzIHRvIGRpc3BsYXlcclxuXHRcdFx0XHQvLyBTbyB3ZSBhZGQgdGhlIGxvYWQgbW9yZSBidXR0b25cclxuXHRcdFx0XHRpZiAoIWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0cmlja3NfY291bnRfJyArIHBhcnNlSW50KGdldExhc3RUcmlja051bWJlcigpICsgMSkpKSB7XHJcblx0XHRcdFx0XHQvLyBXZSBpbnNlcnQgdGhlIGxvYWQgbW9yZSBidXR0b24gYXQgdGhlIGVuZCBvZiB0aGUgdHJpY2tzIGxpc3RcclxuXHRcdFx0XHRcdHRyaWNrcy5pbnNlcnRBZGphY2VudEhUTUwoJ2JlZm9yZWVuZCcsIGxvYWRNb3JlQnV0dG9uLm91dGVySFRNTCk7XHJcblx0XHRcdFx0fVxyXG5cdFx0XHRcdGNvbnN0IGRpc3BsYXlNb3JlQnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Rpc3BsYXktbW9yZV9idXR0b24nKTtcclxuXHRcdFx0XHRkaXNwbGF5TW9yZUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGRpc3BsYXlNb3JlVHJpY2tzKTtcclxuXHRcdFx0fSlcclxuXHRcdFx0LmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xyXG5cdFx0XHRcdGNvbnNvbGUubG9nKGVycm9yKTtcclxuXHRcdFx0fSk7XHJcblx0fVxyXG59XHJcbiIsIi8vIFdlIGdldCB0aGUgaHRtbCBoZWFkIHRpdGxlXHJcbmNvbnN0IGhlYWRUaXRsZSA9IGRvY3VtZW50LmhlYWQucXVlcnlTZWxlY3RvcigndGl0bGUnKS5pbm5lckhUTUw7XHJcblxyXG5pZiAoaGVhZFRpdGxlLmluY2x1ZGVzKCdFZGl0JykgfHwgaGVhZFRpdGxlLmluY2x1ZGVzKCdOZXcnKSkge1xyXG5cdC8vIFdlIGRlZmluZSBhIHZhcmlhYmxlIGJhc2VkIG9uIHRoZSBwYWdlIHRpdGxlLlxyXG5cdGxldCBwYWdlID0gaGVhZFRpdGxlLmluY2x1ZGVzKCdFZGl0JykgPyAnZWRpdCcgOiAnYWRkJztcclxuXHQvLyBXZSBncmFiIHRoZSBidXR0b24gdG8gYWRkIGlucHV0IGZpZWxkc1xyXG5cdGxldCBhZGRMaW5rQnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2FkZC12aWRlby1saW5rLWJ1dHRvbicpO1xyXG5cdC8vIFdlIGRlZmluZSB0d28gY291bnRlcnMgZm9yIHRoZSBpbnB1dCBmaWVsZHMgYW5kIHRoZSByZW1vdmUgYnV0dG9uIGFzc29jaWF0ZSB3aXRoIGl0XHJcblx0bGV0IGFkZExpbmtDb3VudGVyID0gMDtcclxuXHRsZXQgcmVtb3ZlTGlua0NvdW50ZXIgPSAwO1xyXG5cdC8vIFdlIHdyaXRlIGZ1bmN0aW9ucyB0byBpbmNyZW1lbnQgdGhvc2UgY291bnRlclxyXG5cdGZ1bmN0aW9uIGluY3JlbWVudEFkZExpbmtDb3VudGVyKCkge1xyXG5cdFx0YWRkTGlua0NvdW50ZXIrKztcclxuXHRcdHJldHVybiBhZGRMaW5rQ291bnRlcjtcclxuXHR9XHJcblx0ZnVuY3Rpb24gaW5jcmVtZW50UmVtb3ZlTGlua0NvdW50ZXIoKSB7XHJcblx0XHRyZW1vdmVMaW5rQ291bnRlcisrO1xyXG5cdFx0cmV0dXJuIHJlbW92ZUxpbmtDb3VudGVyO1xyXG5cdH1cclxuXHQvLyBXZSBoYWQgRXZlbnRMaXN0ZW5lciB0aGUgYnV0dG9uIHRvIGFkZCBpbnB1dCBmaWVsZHNcclxuXHRhZGRMaW5rQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcclxuXHRcdGUucHJldmVudERlZmF1bHQoKTtcclxuXHRcdC8vIFdlIGluY3JlbWVudCB0aGUgbGluayBjb3VudGVyIG9mIDFcclxuXHRcdGxldCBsaW5rQ291bnRlciA9IGluY3JlbWVudEFkZExpbmtDb3VudGVyKCk7XHJcblx0XHQvLyBXZSBjcmVhdGUgdGhlIG5ldyBkaXYgZm9yIHRoZSBpbnB1dCBmaWVsZCBlbGVtZW50IGFuZCBpdHMgYnV0dG9uXHJcblx0XHRsZXQgbmV3TGluayA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2RpdicpO1xyXG5cdFx0bmV3TGluay5jbGFzc05hbWUgPSAndmlkZW9fX2xpbmtfX2FkZGVkX19jb250YWluZXInO1xyXG5cdFx0Ly8gV2UgY3JlYXRlIHRoZSBpbnB1dCBmaWVsZFxyXG5cdFx0bGV0IG5ld0lucHV0ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnaW5wdXQnKTtcclxuXHRcdG5ld0lucHV0LnR5cGUgPSAndGV4dCc7XHJcblx0XHRuZXdJbnB1dC5pZCA9IHBhZ2UgKyAnLXRyaWNrLWVtYmVkLXZpZGVvLWxpbmtzLScgKyBsaW5rQ291bnRlcjtcclxuXHRcdG5ld0lucHV0Lm5hbWUgPSBwYWdlICsgJ190cmlja1tlbWJlZF92aWRlb19saW5rc11bJyArIGxpbmtDb3VudGVyICsgJ10nO1xyXG5cdFx0bmV3SW5wdXQudmFsdWUgPSAnJztcclxuXHRcdG5ld0lucHV0LnBsYWNlaG9sZGVyID0gJ2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9eHh4eHh4eHh4eHgnO1xyXG5cdFx0bmV3SW5wdXQuY2xhc3NOYW1lID0gJ3ZpZGVvX19saW5rX19hZGRlZCc7XHJcblx0XHQvLyBXZSBjcmVhdGUgdGhlIHJlbW92ZSBidXR0b25cclxuXHRcdGxldCByZW1vdmVMaW5rQnV0dG9uID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnYnV0dG9uJyk7XHJcblx0XHRyZW1vdmVMaW5rQnV0dG9uLnR5cGUgPSAnYnV0dG9uJztcclxuXHRcdHJlbW92ZUxpbmtCdXR0b24uaWQgPSAncmVtb3ZlLXZpZGVvLWxpbmstYnV0dG9uLScgKyBpbmNyZW1lbnRSZW1vdmVMaW5rQ291bnRlcigpO1xyXG5cdFx0cmVtb3ZlTGlua0J1dHRvbi5jbGFzc05hbWUgPSAncmVtb3ZlX192aWRlb19fbGlua19fYnV0dG9uJztcclxuXHRcdHJlbW92ZUxpbmtCdXR0b24uaW5uZXJIVE1MID0gJ1gnO1xyXG5cdFx0Ly8gV2UgaGFkIGV2ZXJ5dGhpbmcgdG8gdGhlIERPTVxyXG5cdFx0bmV3TGluay5hcHBlbmRDaGlsZChuZXdJbnB1dCk7XHJcblx0XHRuZXdMaW5rLmFwcGVuZENoaWxkKHJlbW92ZUxpbmtCdXR0b24pO1xyXG5cdFx0bGV0IGxpbmtDb250YWluZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYWRkLXZpZGVvLWxpbmtzJyk7XHJcblx0XHRsaW5rQ29udGFpbmVyLmFwcGVuZENoaWxkKG5ld0xpbmspO1xyXG5cdFx0Ly8gV2UgYWRkIGV2ZW50IGxpc3RlbmVycyB0byB0aGUgYnV0dG9ucyBhbmQgYWRkIGxvZ2ljIHRvIHJlbW92ZSB0aGUgc2VsZWN0ZWQgbGlua1xyXG5cdFx0bGV0IHJlbW92ZUxpbmtCdXR0b25zID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgncmVtb3ZlX192aWRlb19fbGlua19fYnV0dG9uJyk7XHJcblx0XHRmb3IgKGxldCBpID0gMDsgaSA8IHJlbW92ZUxpbmtCdXR0b25zLmxlbmd0aDsgaSsrKSB7XHJcblx0XHRcdHJlbW92ZUxpbmtCdXR0b25zW2ldLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcclxuXHRcdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XHJcblx0XHRcdFx0bGV0IGxpbmtUb1JlbW92ZSA9IHRoaXMucGFyZW50Tm9kZTtcclxuXHRcdFx0XHRsaW5rVG9SZW1vdmUucmVtb3ZlKCk7XHJcblx0XHRcdH0pO1xyXG5cdFx0fVxyXG5cdH0pO1xyXG59XHJcbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJjYXJvdXNlbFRlc3QiLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJsZW5ndGgiLCJkaXNwbGF5IiwicXVlcnlTZWxlY3RvciIsImltZ3MiLCJxdWVyeVNlbGVjdG9yQWxsIiwibGVmdEJ0biIsInJpZ2h0QnRuIiwiaW1nU2xpZGVyIiwibmV3X2ltZyIsInRhZ05hbWUiLCJjcmVhdGVFbGVtZW50Iiwic3JjIiwibWVkaWFTdHlsaW5nRnVuY3Rpb24iLCJtZWRpYSIsImlkIiwid2lkdGgiLCJoZWlnaHQiLCJhbGxvdyIsImF1dG9wbGF5IiwiYXBwZW5kQ2hpbGQiLCJsZWZ0IiwiYWRkRXZlbnRMaXN0ZW5lciIsIm5leHQiLCJzdHlsZSIsInRyYW5zZm9ybSIsImNvbmNhdCIsImJlZm9yZSIsImZvckVhY2giLCJpbWciLCJlIiwibmV3X21lZGlhIiwidW5kZWZpbmVkIiwiZ2V0QXR0cmlidXRlIiwib2xkQ2hpbGQiLCJnZXRFbGVtZW50QnlJZCIsInJlbW92ZSIsImRyb3Bkb3ducyIsImRyb3Bkb3duSXNPcGVuIiwiZHJvcGRvd24iLCJldmVudCIsInRhcmdldCIsImRhdGFzZXQiLCJjbGFzc0xpc3QiLCJjb250YWlucyIsImFkZCIsIndpbmRvdyIsImRyb3Bkb3duQnV0dG9uIiwidGFyZ2V0SXNEcm9wZG93biIsImhhbmRsZVNtYWxsU2NyZWVucyIsIm5hdmJhck1lbnUiLCJoZWFkVGl0bGUiLCJoZWFkIiwiaW5uZXJIVE1MIiwiaW5jbHVkZXMiLCJtb2RhbE1hbmFnZW1lbnQiLCJtb2RhbCIsIm1vZGFsQ2xvc2VCdXR0b24iLCJjbG9zZU1vZGFsIiwibW9kYWxDYW5jZWxCdXR0b24iLCJkZWxldGVUcmljayIsInRyaWNrVG9EZWxldGUiLCJ1cmwiLCJmZXRjaCIsInRoZW4iLCJyZXNwb25zZSIsIm9rIiwiZGF0YSIsImxvY2F0aW9uIiwicmVsb2FkIiwicmVwbGFjZSIsImRlbGV0ZVRyaWNrQnV0dG9uIiwiX2xvb3AiLCJpIiwiZ2V0VHJpY2tJZCIsInRyaWNrSWQiLCJzZXRBdHRyaWJ1dGUiLCJkaXNwbGF5TW9yZVRyaWNrcyIsImdldE1vcmVUcmlja3MiLCJnZXRMYXN0VHJpY2tOdW1iZXIiLCJ0cmlja3NBcnJheSIsImxhc3RUcmlja051bWJlciIsInBhcnNlSW50IiwiZ2V0VHJpY2tzQ291bnQiLCJ0cmlja3NDb3VudCIsImZpcnN0RWxlbWVudENoaWxkIiwiZGlzcGxheWVkVHJpY2tzQ291bnQiLCJ0cmlja3NNYXJrZXIiLCJsYXN0VHJpY2tJbmRleCIsImNvbnNvbGUiLCJsb2ciLCJ0ZXh0IiwiaHRtbCIsInRyaWNrcyIsImxvYWRNb3JlQnV0dG9uIiwicmVtb3ZlQ2hpbGQiLCJpbnNlcnRBZGphY2VudEhUTUwiLCJvdXRlckhUTUwiLCJkaXNwbGF5TW9yZUJ1dHRvbiIsImVycm9yIiwiaW5jcmVtZW50QWRkTGlua0NvdW50ZXIiLCJhZGRMaW5rQ291bnRlciIsImluY3JlbWVudFJlbW92ZUxpbmtDb3VudGVyIiwicmVtb3ZlTGlua0NvdW50ZXIiLCJwYWdlIiwiYWRkTGlua0J1dHRvbiIsInByZXZlbnREZWZhdWx0IiwibGlua0NvdW50ZXIiLCJuZXdMaW5rIiwiY2xhc3NOYW1lIiwibmV3SW5wdXQiLCJ0eXBlIiwibmFtZSIsInZhbHVlIiwicGxhY2Vob2xkZXIiLCJyZW1vdmVMaW5rQnV0dG9uIiwibGlua0NvbnRhaW5lciIsInJlbW92ZUxpbmtCdXR0b25zIiwibGlua1RvUmVtb3ZlIiwicGFyZW50Tm9kZSJdLCJzb3VyY2VSb290IjoiIn0=