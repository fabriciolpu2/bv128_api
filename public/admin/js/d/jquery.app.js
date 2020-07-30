/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 8);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/admin/js/dashboard/jquery.app.js":
/*!****************************************************!*\
  !*** ./resources/admin/js/dashboard/jquery.app.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 * Theme: Highdmin - Bootstrap 4 Web App kit
 * Author: Coderthemes
 * Module/App: Main Js
 */
(function ($) {
  'use strict';

  function initNavbar() {
    $('.navbar-toggle').on('click', function (event) {
      $(this).toggleClass('open');
      $('#navigation').slideToggle(400);
    });
    $('.navigation-menu>li').slice(-2).addClass('last-elements');
    $('.navigation-menu li.has-submenu a[href="#"]').on('click', function (e) {
      if ($(window).width() < 992) {
        e.preventDefault();
        $(this).parent('li').toggleClass('open').find('.submenu:first').toggleClass('open');
      }
    });
  }

  function initScrollbar() {
    $('.slimscroll').slimscroll({
      height: 'auto',
      position: 'right',
      size: "8px",
      color: '#9ea5ab'
    });
  } // === following js will activate the menu in left side bar based on url ====


  function initMenuItem() {
    $(".navigation-menu a").each(function () {
      var pageUrl = window.location.href.split(/[?#]/)[0];

      if (this.href == pageUrl) {
        $(this).parent().addClass("active"); // add active to li of the current link

        $(this).parent().parent().parent().addClass("active"); // add active class to an anchor

        $(this).parent().parent().parent().parent().parent().addClass("active"); // add active class to an anchor
      }
    });
  }

  function initMask() {
    $(".mobile").mask("(00) 00000-0000");
    $(".cpf").mask("000.000.000-00");
  }

  function initCep() {
    $(".cep").on('keyup', function () {
      var cep = $(this).val();

      if (cep.length == 8) {
        pesquisaCep(cep);
      }
    });
  }

  function limpaFormularioCep() {
    //Limpa valores do formulário de cep.
    document.getElementById("logradouro").value = "";
    document.getElementById("bairro").value = "";
    document.getElementById("cidade").value = "";
    document.getElementById("estado").value = "";
  }

  function meuCallback(conteudo) {
    if (!("erro" in conteudo)) {
      //Atualiza os campos com os valores.
      document.getElementById("logradouro").value = conteudo.logradouro;
      document.getElementById("bairro").value = conteudo.bairro;
      document.getElementById("cidade").value = conteudo.localidade;
      document.getElementById("estado").value = conteudo.uf;
      $('#numero').focus();
    } //end if.
    else {
        //CEP não Encontrado.
        limpaFormularioCep();
      }
  }

  function pesquisaCep(valor) {
    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, ""); //Verifica se campo cep possui valor informado.

    if (cep != "") {
      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/; //Valida o formato do CEP.

      if (validacep.test(cep)) {
        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById("logradouro").value = "...";
        document.getElementById("bairro").value = "...";
        document.getElementById("cidade").value = "...";
        document.getElementById("estado").value = "..."; //Cria um elemento javascript.

        var script = document.createElement("script");
        fetch("https://viacep.com.br/ws/" + cep + "/json").then(function (response) {
          return response.json();
        }).then(function (endereco) {
          meuCallback(endereco);
        });
      } //end if.
      else {
          //cep é inválido.
          limpaFormularioCep();
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpaFormularioCep();
      }
  }

  function init() {
    initCep();
    initMask();
    initNavbar();
    initScrollbar();
    initMenuItem();
  }

  init();
})(jQuery);

/***/ }),

/***/ 8:
/*!**********************************************************!*\
  !*** multi ./resources/admin/js/dashboard/jquery.app.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\Development\GitLab\canaime\resources\admin\js\dashboard\jquery.app.js */"./resources/admin/js/dashboard/jquery.app.js");


/***/ })

/******/ });