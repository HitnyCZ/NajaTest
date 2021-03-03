// import jQuery
import "jquery";

// import bootstrap
import "bootstrap";

// import naja
import naja from "naja";

import { LiveForm, Nette } from "live-form-validation";

LiveForm.setOptions({
    messageErrorPrefix: '',
    showMessageClassOnParent: true ,
    showValid: true,
    controlErrorClass: 'is-invalid',
    controlValidClass: 'is-valid',
    wait: 500
});

Nette.initOnLoad();
window.Nette = Nette;
window.LiveForm = LiveForm;

document.addEventListener("DOMContentLoaded", () => {

    // naja init
    naja.initialize({
        forceRedirect: true
    });
});

import './scss/vendor.scss';