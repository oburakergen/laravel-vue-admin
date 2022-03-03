/*
 * Copyright (c) laraplay 2022.
 */

class Function {
    /**
     * get whether text strip
     * @method stripTags
     * @return String
     */
    stripTags = (input = '') => {
        let inside = false;
        const array = [];

        for (let i = 0; i < input.length; i += 1) {
            const chars = input.charAt(i);

            if (chars === '<') {
                inside = true;
            } else if (chars === '>') {
                inside = false;
            } else if (!inside) {
                array.push(chars);
            }
        }

        return array.join('').trim();
    };

    /**
     * get whether int strip
     * @method parseForm
     * @return Integer
     */
    parseForm = (str = '', floats = false) => {
        let value = 0;

        value = str.replace(/[^0-9.,]/g, '');

        if (value.slice(-3).indexOf(',') !== -1) {
            value = parseFloat(str.replace(/[^0-9,]/g, '').replace(',', '.')) || 0;
        } else if (value.slice(-3).indexOf('.') !== -1) {
            value = parseFloat(str.replace(/[^0-9.]/g, '')) || 0;
        } else {
            value = parseFloat(str.replace(/[^0-9]/g, '')) || 0;
        }

        if (floats) {
            value = parseInt(value.toFixed(0), 10) || 0;
        }

        return value;
    };
}

export default new Function();
