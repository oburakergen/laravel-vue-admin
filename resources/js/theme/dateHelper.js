/*
 * Copyright (c) laraplay 2022.
 */

class Function {
    _ONE_SECOND_AS_MILLISECOND = 1000;

    _ONE_DAY_AS_SECONDS = 86400;

    _ONE_WEEK_AS_SECONDS = 7 * this._ONE_DAY_AS_SECONDS;

    /**
     * get date now
     * @method now
     * @return Number
     */

    now = () => {
        return Math.round(Date.now() / this._ONE_SECOND_AS_MILLISECOND);
    };

    /**
     * Check whether user is on main page of website
     * @method nowFormat
     * @return Object
     */
    nowFormat = (time) => {
        const date = time || this.now();

        return new Date(date * 1000);
    };

    /**
     * Check whether user is on main page of website
     * @method beginningOfToday
     * @return Number
     */
    beginningOfToday = () => {
        return new Date().setUTCHours(0, 0, 0, 0) / this._ONE_SECOND_AS_MILLISECOND;
    };

    /**
     * Check whether user is on main page of website
     * @method getTime
     * @return Number
     */
    getTime = (time) => {
        return time ? new Date(time).getTime() : new Date().getTime();
    };

    /**
     * Check whether user is on main page of website
     * @method getUTCDate
     * @return Number
     */
    getUTCDate = (time) => {
        const e = new Date();

        return e.setTime(this.getTime() + (time || 0)) || e;
    };

    /**
     * Check whether user is on main page of website
     * @method addDay
     * @return Object
     */
    addDay = (time) => {
        const add = parseInt(time, 10) || 1;

        return new Date(1000 * (this.now() + add * this._ONE_DAY_AS_SECONDS));
    };

    /**
     * Check whether user is on main page of website
     * @method isValidDate
     * @return Boolean
     */
    isValidDate = (time) => {
        return new Date(time).toString() !== 'Invalid Date';
    };

    getISODateWithoutUTC = (time) => {
        new Date(time || this.now()).toISOString();
    };

    getDateAndTime = (time) => {
        const t = this.getISODateWithoutUTC(time).match(
            /(\d{4}\-\d{2}\-\d{2})T(\d{2}:\d{2}:\d{2})/,
        );

        return `${t[1]} ${t[2]}`;
    };

    /**
     * Check whether user is on main page of website
     * @method remainingTimeUntil
     * @return Number
     */
    remainingTimeUntil = (time) => {
        const add = parseInt(time, 10) || 1;

        return this.getTime(add) - this.getTime();
    };
}

export default new Function();
