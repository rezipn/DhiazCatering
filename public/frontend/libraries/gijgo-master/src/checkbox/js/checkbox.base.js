﻿/* global window alert jQuery */
/** 
 * @widget Checkbox 
 * @plugin Base
 */
gj.checkbox = {
    plugins: {}
};

gj.checkbox.config = {
    base: {
        /** The name of the UI library that is going to be in use. Currently we support only Material Design and Bootstrap. 
         * @additionalinfo The css files for Bootstrap should be manually included to the page if you use bootstrap as uiLibrary.
         * @type string (materialdesign|bootstrap|bootstrap4)
         * @default 'materialdesign'
         * @example Material.Design <!-- checkbox  -->
         * <input type="checkbox" id="checkbox"/><br/><br/>
         * <button onclick="chkb.state('checked')" class="gj-button-md">Checked</button>
         * <button onclick="chkb.state('unchecked')" class="gj-button-md">Unchecked</button>
         * <button onclick="chkb.state('indeterminate')" class="gj-button-md">Indeterminate</button>
         * <button onclick="chkb.element.disabled = false" class="gj-button-md">Enable</button>
         * <button onclick="chkb.element.disabled = true" class="gj-button-md">Disable</button>
         * <script>
         *     var chkb = new GijgoCheckBox(document.getElementById('checkbox'), {
         *         uiLibrary: 'materialdesign'
         *     });
         * </script>
         * @example Bootstrap.3 <!-- bootstrap, checkbox -->
         * <div class="container-fluid" style="margin-top:10px">
         *     <input type="checkbox" id="checkbox"/><br/><br/>
         *     <button onclick="chkb.state('checked')" class="btn btn-default">Checked</button>
         *     <button onclick="chkb.state('unchecked')" class="btn btn-default">Unchecked</button>
         *     <button onclick="chkb.state('indeterminate')" class="btn btn-default">Indeterminate</button>
         *     <button onclick="chkb.element.disabled = false" class="btn btn-default">Enable</button>
         *     <button onclick="chkb.element.disabled = true" class="btn btn-default">Disable</button>
         * </div>
         * <script>
         *     var chkb = new GijgoCheckBox(document.getElementById('checkbox'), {
         *         uiLibrary: 'bootstrap'
         *     });
         * </script>
         * @example Bootstrap.4 <!-- bootstrap4, checkbox -->
         * <div class="container-fluid" style="margin-top:10px">
         *     <input type="checkbox" id="checkbox"/><br/><br/>
         *     <button onclick="chkb.state('checked')" class="btn btn-default">Checked</button>
         *     <button onclick="chkb.state('unchecked')" class="btn btn-default">Unchecked</button>
         *     <button onclick="chkb.state('indeterminate')" class="btn btn-default">Indeterminate</button>
         *     <button onclick="chkb.element.disabled = false" class="btn btn-default">Enable</button>
         *     <button onclick="chkb.element.disabled = true" class="btn btn-default">Disable</button>
         * </div>
         * <script>
         *     var chkb = new GijgoCheckBox(document.getElementById('checkbox'), {
         *         uiLibrary: 'bootstrap4'
         *     });
         * </script>
         * @example Bootstrap.5 <!-- bootstrap5, checkbox -->
         * <div class="container-fluid" style="margin-top:10px">
         *     <input type="checkbox" id="checkbox"/><br/><br/>
         *     <button onclick="chkb.state('checked')" class="btn btn-primary">Checked</button>
         *     <button onclick="chkb.state('unchecked')" class="btn btn-primary">Unchecked</button>
         *     <button onclick="chkb.state('indeterminate')" class="btn btn-primary">Indeterminate</button>
         *     <button onclick="chkb.element.disabled = false" class="btn btn-primary">Enable</button>
         *     <button onclick="chkb.element.disabled = true" class="btn btn-primary">Disable</button>
         * </div>
         * <script>
         *     var chkb = new GijgoCheckBox(document.getElementById('checkbox'), {
         *         uiLibrary: 'bootstrap5'
         *     });
         * </script>
         */
        uiLibrary: 'materialdesign',
        
        /** The name of the icons library that is going to be in use. Currently we support Material Icons, Font Awesome and Glyphicons.
         * @additionalinfo If you use Bootstrap 3 as uiLibrary, then the iconsLibrary is set to Glyphicons by default.<br/>
         * If you use Material Design as uiLibrary, then the iconsLibrary is set to Material Icons by default.<br/>
         * The css files for Material Icons, Font Awesome or Glyphicons should be manually included to the page where the grid is in use.
         * @type (materialicons|fontawesome|glyphicons)
         * @default 'materialicons'
         * @example Bootstrap.4.FontAwesome <!-- bootstrap4, checkbox, fontawesome -->
         * <div class="container-fluid" style="margin-top:10px">
         *     <input type="checkbox" id="checkbox"/><br/><br/>
         *     <button onclick="chkb.state('checked')" class="btn btn-default">Checked</button>
         *     <button onclick="chkb.state('unchecked')" class="btn btn-default">Unchecked</button>
         *     <button onclick="chkb.state('indeterminate')" class="btn btn-default">Indeterminate</button>
         *     <button onclick="chkb.element.disabled = false"" class="btn btn-default">Enable</button>
         *     <button onclick="chkb.element.disabled = true"" class="btn btn-default">Disable</button>
         * </div>
         * <script>
         *     var chkb = new GijgoCheckBox(document.getElementById('checkbox'), {
         *         uiLibrary: 'bootstrap4',
         *         iconsLibrary: 'fontawesome'
         *     });
         * </script>
         */
        iconsLibrary: 'materialicons',

        style: {
            wrapper: 'gj-checkbox-md',
            spanCssClass: undefined
        }
        
    },

    bootstrap: {
        style: {
            wrapper: 'gj-checkbox-bootstrap gj-checkbox-bootstrap-3'
        },
        iconsLibrary: 'glyphicons'
    },

    bootstrap4: {
        style: {
            wrapper: 'gj-checkbox-bootstrap gj-checkbox-bootstrap-4'
        },
        iconsLibrary: 'materialicons'
    },

    bootstrap5: {
        style: {
            wrapper: 'gj-checkbox-bootstrap gj-checkbox-bootstrap-4'
        },
        iconsLibrary: 'materialicons'
    },

    materialicons: {
        style: {
            iconsCssClass: 'gj-checkbox-material-icons',
            spanCssClass: 'gj-icon'
        }
    },

    glyphicons: {
        style: {
            iconsCssClass: 'gj-checkbox-glyphicons',
            spanCssClass: ''
        }
    },

    fontawesome: {
        style: {
            iconsCssClass: 'gj-checkbox-fontawesome',
            spanCssClass: 'fa'
        }
    }
};

gj.checkbox.methods = {
    init: function (jsConfig) {
        gj.widget.prototype.init.call(this, jsConfig);
        this.element.setAttribute('data-gj-checkbox', 'true');
        gj.checkbox.methods.initialize(this, this.getConfig());
        return this;
    },

    initialize: function (chkb, data) {
        var wrapper, span;
        wrapper = chkb.wrap('label');
        gj.core.addClasses(wrapper, data.style.iconsCssClass);
        if (chkb.element.getAttribute('id')) {
            wrapper.setAttribute('for', chkb.element.getAttribute('id'));
        }

        span = document.createElement('span');
        if (data.style.spanCssClass) {
            gj.core.addClasses(span, data.style.spanCssClass);
        }
        wrapper.appendChild(span);
    },

    state: function (chkb, value) {
        if (value) {
            if ('checked' === value) {
                chkb.checked = true;
                chkb.indeterminate = false;
            } else if ('unchecked' === value) {
                chkb.checked = false;
                chkb.indeterminate = false;
            } else if ('indeterminate' === value) {
                chkb.checked = false;
                chkb.indeterminate = true;
            }
            return chkb;
        } else {
            if (chkb.indeterminate) {
                value = 'indeterminate';
            } else if (chkb.checked) {
                value = 'checked';
            } else {
                value = 'unchecked';
            }
            return value;
        }
    },

    toggle: function (chkb) {
        if (chkb.state() === 'checked') {
            chkb.state('unchecked');
        } else {
            chkb.state('checked');
        }
        return chkb;
    },

    destroy: function (chkb) {
        var type = chkb.element.getAttribute('data-gj-type');
            data = chkb.getConfig();
        if (data) {
            chkb.removeConfig();
            chkb.element.removeAttribute('data-gj-type');
            chkb.element.removeAttribute('data-gj-guid');
            chkb.element.removeAttribute('data-gj-checkbox');
            chkb.element.removeAttribute('class');
            chkb.element.parentNode.removeChild(chkb.element.parentNode.querySelector('span'));
            chkb.element.parentNode.outerHTML = chkb.element.parentNode.innerHTML;
        }
        return chkb;
    }
};

gj.checkbox.events = {
    /**
     * Triggered when the state of the checkbox is changed
     *
     * @event change
     * @param {object} e - event data
     * @return {GijgoCheckBox} GijgoCheckBox
     * @example sample <!-- checkbox -->
     * <input type="checkbox" id="checkbox"/>
     * <script>
     *     var chkb = new GijgoCheckBox(document.getElementById('checkbox'), {
     *         change: function (e) {
     *             alert('Checked: ' + e.target.checked);
     *         }
     *     });
     * </script>
     */
    change: function (el) {
        //Event dispatched by native html input from type=checkbox
    }
};


GijgoCheckBox = function (element, jsConfig) {
    var self = this,
        methods = gj.checkbox.methods;

    self.type = 'checkbox';
    self.element = element;

    /** Toogle the state of the checkbox.
     * @method
     * @fires change
     * @return {GijgoCheckBox} GijgoCheckBox
     * @example sample <!-- checkbox -->
     * <button onclick="chkb.toggle()" class="gj-button-md">toggle</button>
     * <hr/>
     * <input type="checkbox" id="checkbox"/>
     * <script>
     *     var chkb = new GijgoCheckBox(document.getElementById('checkbox'));
     * </script>
     */
    self.toggle = function () {
        return methods.toggle(this);
    };

    /** Return state or set state if you pass parameter.
     * @method
     * @fires change
     * @param {string} value - State of the checkbox. Accept only checked, unchecked or indeterminate as values.
     * @return {string} checked|unchecked|indeterminate|checkbox
     * @example sample <!-- checkbox -->
     * <button onclick="chkb.state('checked')" class="gj-button-md">Set to checked</button>
     * <button onclick="chkb.state('unchecked')" class="gj-button-md">Set to unchecked</button>
     * <button onclick="chkb.state('indeterminate')" class="gj-button-md">Set to indeterminate</button>
     * <button onclick="alert(chkb.state())" class="gj-button-md">Get state</button>
     * <hr/>
     * <input type="checkbox" id="checkbox"/>
     * <script>
     *     var chkb = new GijgoCheckBox(document.getElementById('checkbox'));
     * </script>
     */
    self.state = function (value) {
        return methods.state(this.element, value);
    };

    /** Remove checkbox functionality from the element.
     * @method
     * @return {GijgoCheckBox} GijgoCheckBox
     * @example sample <!-- checkbox -->
     * <button onclick="chkb.destroy()" class="gj-button-md">Destroy</button>
     * <input type="checkbox" id="checkbox"/>
     * <script>
     *     var chkb = new GijgoCheckBox(document.getElementById('checkbox'));
     * </script>
     */
    self.destroy = function () {
        return methods.destroy(this);
    };

    if ('true' !== element.getAttribute('data-gj-checkbox')) {
        methods.init.call(self, jsConfig);
    }

    return self;
};

GijgoCheckBox.prototype = new gj.widget();
GijgoCheckBox.constructor = GijgoCheckBox;

if (typeof (jQuery) !== "undefined") {
    (function ($) {
        $.fn.checkbox = function (method) {
            var widget;
            if (this && this.length) {
                if (typeof method === 'object' || !method) {
                    return new GijgoCheckBox(this, method);
                } else {
                    widget = new GijgoCheckBox(this, null);
                    if (widget[method]) {
                        return widget[method].apply(this, Array.prototype.slice.call(arguments, 1));
                    } else {
                        throw 'Method ' + method + ' does not exist.';
                    }
                }
            }
        };
    })(jQuery);
}