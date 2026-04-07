import './bootstrap';
import Alpine from 'alpinejs';
import * as Utils from './utils/index.js';

import $ from 'jquery';
import moment from 'moment';
import TextfieldFloatingLabel from './components/textfield-floating-label.js';
import CheckboxOutline from './components/checkbox-outline.js';
import CheckboxSwitch from './components/checkbox-switch.js';
import Radio from './components/radio.js';


window.Alpine = Alpine;
window.$ = window.jQuery = $;
window.moment = moment;
window.Utils = Utils;
window.TextfieldFloatingLabel = TextfieldFloatingLabel;
window.CheckboxOutline = CheckboxOutline;
window.CheckboxSwitch = CheckboxSwitch;
window.RadioInput = Radio;

Alpine.start();
