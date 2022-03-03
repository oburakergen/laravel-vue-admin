/*
 * Copyright (c) laraplay 2022.
 */

import dateHelpers from './dateHelper';
import util from './util';
import browsers from './browser';

class Laraplay {
    get utils() {
        return this._utils;
    }

    get browser() {
        return this._browser;
    }

    get dateHelper() {
        return this._dateHelper;
    }

    _dateHelper = () => {
        return dateHelpers;
    };

    _utils = () => {
        return util;
    };

    _browser = () => {
        return browsers;
    };
}

export default new Laraplay();
